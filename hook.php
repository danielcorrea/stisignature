<?php

function plugin_stisignature_install() {
    global $DB;

    // Instancia o orquestrador nativo do GLPI para gerenciar o banco
    $migration = new Migration(STISIGNATURE_VERSION);

    if (!$DB->tableExists("glpi_plugin_stisignature_configs")) {
        $query = "CREATE TABLE `glpi_plugin_stisignature_configs` (
            `id` INT NOT NULL AUTO_INCREMENT,
            `users_id` INT NOT NULL,
            `is_active` TINYINT NOT NULL DEFAULT 0,
            `custom_text` TEXT,
            PRIMARY KEY (`id`),
            UNIQUE KEY `users_id` (`users_id`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;";

        // Em vez de executar direto, colocamos na fila segura do GLPI
        $migration->addPostQuery($query);
    }

    // O orquestrador executa a fila e ignora o bloqueio de segurança
    $migration->executeMigration();

    return true;
}

function plugin_stisignature_uninstall() {
    global $DB;
    $migration = new Migration(STISIGNATURE_VERSION);

    if ($DB->tableExists("glpi_plugin_stisignature_configs")) {
        $migration->addPostQuery("DROP TABLE `glpi_plugin_stisignature_configs`");
    }

    $migration->executeMigration();
    return true;
}

function plugin_stisignature_append_text(CommonDBTM $item) {
    global $DB;

    // Se não for envio via interface ou não tiver conteúdo, ignora
    if (!isset($_SESSION['glpiID']) || !isset($item->input['content'])) {
        return;
    }

    $users_id = $_SESSION['glpiID'];

    $iterator = $DB->request([
        'FROM'   => 'glpi_plugin_stisignature_configs',
        'WHERE'  => ['users_id' => $users_id]
    ]);

    if (count($iterator) > 0) {
        $config = $iterator->current();

        if ($config['is_active'] == 1 && !empty($config['custom_text'])) {
            // Decodifica o HTML que veio do editor
            $assinatura = html_entity_decode($config['custom_text'], ENT_QUOTES, 'UTF-8');

            // Injeta a assinatura diretamente, respeitando as tags do TinyMCE
            $item->input['content'] .= "<br />" . $assinatura;

            // Log de sucesso
            Toolbox::logInFile('stisignature', "Assinatura injetada com sucesso no chamado para o tecnico ID: " . $users_id . "\n");
        }
    }
}
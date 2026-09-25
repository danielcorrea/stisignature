<?php
class PluginStisignatureConfig extends CommonDBTM {

// Permissões globais com a tipagem estrita exigida pelo PHP 8.4
    public static function canView(): bool { return true; }
    public static function canCreate(): bool { return true; }
    public static function canUpdate(): bool { return true; }

    // Permissões do item específico com a tipagem estrita exigida pelo PHP 8.4
    public function canCreateItem(): bool { return true; }
    public function canUpdateItem(): bool { return true; }

    static function getTypeName($nb = 0) {
        return 'Minha Assinatura (Chamados)';
    }

    function getTabNameForItem(CommonGLPI $item, $withtemplate = 0) {
        if ($item->getType() == 'Preference') {
            return self::getTypeName();
        }
        return '';
    }

    static function displayTabContentForItem(CommonGLPI $item, $tabnum = 1, $withtemplate = 0) {
        // ... (MANTENHA O RESTO DO SEU CÓDIGO AQUI IGUAL AO ANTERIOR) ...
        global $DB;
        $users_id = $_SESSION['glpiID'];
        // ...

        $config = new self();
        $id = 0;
        $is_active = 0;
        $custom_text = '';

        // Tenta carregar dados caso o usuário já tenha salvo antes
        $iterator = $DB->request(['FROM' => $config->getTable(), 'WHERE' => ['users_id' => $users_id]]);
        if (count($iterator) > 0) {
            $data = $iterator->current();
            $id = $data['id'];
            $is_active = $data['is_active'];
            $custom_text = $data['custom_text'];
        }

        // Desenha o formulário do GLPI
        echo "<div class='center'>";
        echo "<form action='" . Toolbox::getItemTypeFormURL(__CLASS__) . "' method='post'>";
        echo "<table class='tab_cadre_fixe'>";
        echo "<tr><th colspan='2'>Configuração da Assinatura Automática</th></tr>";

        // Adicionamos a classe 'tab_bg_1' para dar o fundo padrão, 'right' para alinhar ao centro, e limitamos a coluna a 25%
        echo "<tr class='tab_bg_1'>";
        echo "<td width='25%' class='right'>Ativar Assinatura nas Respostas:</td>";
        echo "<td width='75%'>";
        Dropdown::showYesNo("is_active", $is_active);
        echo "</td></tr>";

        echo "<tr class='tab_bg_1'>";
        echo "<td class='right'>Texto da sua Assinatura:</td>";
        echo "<td>";
        Html::textarea([
            'name'            => 'custom_text',
            'value'           => $custom_text,
            'enable_richtext' => true,
        ]);
        echo "</td></tr>";

        echo "<tr class='tab_bg_2'><td colspan='2' class='center'>";
        echo "<input type='hidden' name='users_id' value='$users_id'>";
        if ($id > 0) {
            echo "<input type='hidden' name='id' value='$id'>";
            echo "<input type='submit' name='update' class='btn btn-primary' value='Salvar Alterações'>";
        } else {
            echo "<input type='submit' name='add' class='btn btn-primary' value='Criar Assinatura'>";
        }
        Html::closeForm();
        echo "</td></tr>";
        echo "</table></div>";

        return true;
    }
}
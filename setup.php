<?php
define('STISIGNATURE_VERSION', '1.1.0');

function plugin_init_stisignature() {
    global $PLUGIN_HOOKS;

    $PLUGIN_HOOKS['csrf_compliant']['stisignature'] = true;

    // Registra a tela de configuração
    Plugin::registerClass('PluginStisignatureConfig', ['addtabon' => ['Preference']]);

    // O GATILHO COM O NOME CORRETO PARA O GLPI
    $PLUGIN_HOOKS['pre_item_add']['stisignature'] = [
        'ITILFollowup' => 'plugin_stisignature_append_text',
        'ITILSolution' => 'plugin_stisignature_append_text'
    ];
}

function plugin_version_stisignature() {
    return [
        'name'           => 'Assinatura Automática',
        'version'        => STISIGNATURE_VERSION,
        'author'         => 'Daniel Correa',
        'license'        => 'GPLv2+',
        'requirements'   => ['glpi' => ['min' => '11.0.0', 'max' => '11.1.0']]
    ];
}

function plugin_stisignature_check_prerequisites() { return true; }
function plugin_stisignature_check_config() { return true; }
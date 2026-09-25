<?php
include ("../../../inc/includes.php");

$config = new PluginStisignatureConfig();

// Recebe os dados do POST e salva no banco de dados
if (isset($_POST["add"])) {
    $config->add($_POST);
    Html::back();
} else if (isset($_POST["update"])) {
    $config->update($_POST);
    Html::back();
}
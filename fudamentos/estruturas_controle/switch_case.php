<?php
$comando = "!he4rt";

switch ($comando) {
    case "!site":
        echo "Link : https://heartdevs.com";
        echo "Esse é o site";
        break;
    case "!he4rt":
        echo "Entre no nosso discord: https://discord.com/he4rt";
        echo "Esse é o discord oficial";
        break;
    case "!comandos":
        echo "Segue a lista de comandos";
        echo "!he4rt !site";
        break;
    default:
        echo "nada acontece feijoada";
        break;
}

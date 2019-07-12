<?php
function meuAutoload($nomeClasse) {
    $realName = str_replace("\\","/",$nomeClasse).".php";
    require_once $realName;

}

spl_autoload_register("meuAutoload");
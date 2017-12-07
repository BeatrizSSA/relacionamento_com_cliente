<?php
/**
 * Conecta com o MySQL usando PDO
 */
function db_connect()
{
    $PDO = new PDO('mysql:host=' . localhost . ';dbname=' . id2969958_projeto . ';charset=utf8', id2969958_webmarket, rogerinho);

    return $PDO;
}
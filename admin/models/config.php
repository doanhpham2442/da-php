<?php
define("DB_HOST","localhost");
define("DB_NAME","tech-s");
define("DB_USER","root");
define("DB_PWD","");

function getPOST($key)
{
    if(isset($_POST[$key]))
    {
        return $_POST[$key];
    }
    return  "";
}
function getGET($key)
{
    if(isset($_GET[$key]))
    {
        return $_GET[$key];
    }
    return  "";
}
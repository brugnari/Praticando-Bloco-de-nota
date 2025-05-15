<?php
$base_url = "http://" . $_SERVER['HTTP_HOST'] . str_replace(
    $_SERVER['DOCUMENT_ROOT'],
    '',
    str_replace("\\", "/", realpath(dirname(__DIR__)))
);

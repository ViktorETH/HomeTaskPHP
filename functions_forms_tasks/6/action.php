<?php
require_once "index.php";

foreach ($_FILES["photo"]["error"] as $key => $error) {
    if ($error == UPLOAD_ERR_OK) {
        $tmp_name = $_FILES["photo"]["tmp_name"][$key];
        //var_dump($tmp_name);
        $name = basename($_FILES["photo"]["name"][$key]);
        //var_dump($name);
        move_uploaded_file($tmp_name, "img/$name");
    }
}

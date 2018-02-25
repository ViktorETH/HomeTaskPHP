<?php
require "index.php";

if(isset($_POST['submit'])){
    $arrayComments = [
        'user' => $_POST['user'],
        'comment' => $_POST['comment']
    ];
    $non = noneNormative($_POST['comment']);
    if ($non == false){
        echo "Ненормативная лексика, нас читают Леди ;)";
    } else {
        writeComment($arrayComments);
        getComment();
    }
}

function writeComment($arrayComments)
{
    $comment = serialize($arrayComments);
    return file_put_contents(__DIR__.'/'."comments.txt", "/$comment", FILE_APPEND);
}

function getComment()
{
    $serialComments = file_get_contents(__DIR__ . '/' . "comments.txt");
    $allComments = explode("/", $serialComments);
    foreach ($allComments as $item) {
        if(!empty($item)) $comments[] = unserialize($item);
    }
    foreach ($comments as $comment) {
    $str = "<b>Name :</b> "."{$comment['user']}"."<br><b>Коментарий: </b> "."{$comment['comment']}"."<hr>";
    echo $str;
    }
}

function noneNormative($comment) {
    $file = __DIR__.'/'."text.txt";
    $none = file_get_contents($file);
    $badWords = explode(" ", $none);
    $message = explode(" ",$comment);
    for ($i = 0; $i < count($message); $i++) {
        for ($j = 0; $j < count($badWords); $j++) {
            if (strstr($message[$i], $badWords[$j])) {
                return false;
                break;
            }
        }
    }
    return true;
}











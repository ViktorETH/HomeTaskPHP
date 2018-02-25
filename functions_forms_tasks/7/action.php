<?php
require "index.php";

if(isset($_POST['submit'])){
    $arrayComments = [
        'user' => $_POST['user'],
        'comment' => $_POST['comment']
    ];
}


function writeComment($arrayComments){
    $comment = serialize($arrayComments);
    return file_put_contents(__DIR__.'/'."comments.txt", "/$comment\n", FILE_APPEND);
}
writeComment($arrayComments);



function getComment()
{
    $serialComments = file_get_contents(__DIR__ . '/' . "comments.txt");
    $allComments = explode("/", $serialComments);
    foreach ($allComments as $item) {
        if(!empty($item)) {
            $comments[] = unserialize($item);
        }
    }
    foreach ($comments as $comment) {
        $str = "<b>Имя: </b>{$comment['user']}<br><b>Коментарий: </b>{$comment['comment']}<hr>";
        echo $str;
    }

}
getComment();








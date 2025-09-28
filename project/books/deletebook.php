<?php

require_once "../classes/librarys.php";
$bookObj = new Book();

if($_SERVER["REQUEST_METHOD"] == "GET"){

    if(isset($_GET["id"])){
        $bid= trim(htmlspecialchars($_GET["id"]));
        $book=$bookObj->fetchBook($bid);
        if(!$book){
            echo "<a href='viewbook.php'> View Book </a>";
            exit("No book found");
        }else{
            $bookObj->deletebook($bid);
            header("Location: viewbook.php");
        }


    }else{
        echo "<a href='viewbook.php'> View Book </a>";
            exit("No book found");
    }

}
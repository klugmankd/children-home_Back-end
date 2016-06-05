<?php
    include_once ("../includes/connection.php");
    $title = $_GET['title'];
    $article = $_GET['article'];
    $query_sting = "INSERT INTO `childrenHome`.`news` (`newsTitle`, `newsText`) VALUES ('".$title."', '".$article."');";
    if (isset($title) && !empty($title) && isset($article) && !empty($article)) {
        $query = mysqli_query($connection, $query_sting);
        if ($query) {
            header("location: ../index.php");
        } else echo "query wasn't complete";
    }
   
    if (isset($_GET['delete']) && !empty($_GET['delete'])) {
        $query_sting = "DELETE FROM `childrenHome`.`news` WHERE idNew = '".$_GET['delete']."';";
        $query = mysqli_query($connection, $query_sting);
        if ($query) {
            header("location: ../index.php");
        } else echo "query wasn't complete";
    }
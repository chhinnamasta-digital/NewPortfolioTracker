<?php 
    include("php-functions/functions.php");        
    $title = selectPageText($conn, $pageID, 'title'); 
    $description = selectPageText($conn, $pageID, 'description'); 
    $keywords = selectPageText($conn, $pageID, 'keywords') ; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    <link rel="icon" type="image/x-icon" href="<?=$url_?>assets/images/favicon.ico">
    <title><?= (isset($title[0]) &&  $title[0] != '') ? $title[0] : "$title"; ?></title>
    <meta name="description" content="<?= (isset($description[0]) && $description[0] != '') ? $description[0] : ""; ?>">
    <meta name="keywords" content="<?= (isset($keywords[0]) && $keywords[0] != '') ? $keywords[0] : ""; ?>">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   
    <link href="<?=$url_; ?>css/styles.css?<?=rand(00000, 999999); ?>" rel="stylesheet" >
<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die;
?>
<!doctype html>
<html lang="ru">

<head>
    <?php $APPLICATION->ShowHead();?>
    <title><?php $APPLICATION->ShowTitle();?></title>

    <?php
        require 'include/templ/assets.php';
    ?>

</head>

<body class="body">
    <div class="wrapper">
<?php require_once($_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH."/include/templ/header.php"); ?>
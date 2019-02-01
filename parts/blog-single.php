<?php
/*
Template Name: articlesSingle
Template Post Type: post,page
*/
?>
<?php $classMenu = "header";
$mainLogo = "main_logo_"; ?>
<?php $classMenu = "inner-header";
$mainLogo = "main_logo2"; ?>
<?php include(locate_template('header.php')); ?>
<?php get_template_part('parts/single'); ?>
<?php get_template_part('/footer'); ?>


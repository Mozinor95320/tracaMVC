<?php $title = "Fiche n°".$tracabilitySheet->identifier; ?>

<?php ob_start(); ?>

<?php $content = ob_get_clean(); ?>

<?php require('layout.php') ?>

<?php $title = "Le blog de l'AVBN"; ?>

<?php ob_start(); ?>
<h1>Le super blog de l'AVBN !</h1>
<p>Derniers billets du blog :</p>

<?php
foreach ($tracabilitySheets as $tracabilitySheet) {
?>
    <div class="news">
        <h3>
            <?= htmlspecialchars($tracabilitySheet->identifier); ?>
            <em>le <?= $tracabilitySheet->frenchCreationDate; ?></em>
        </h3>
            <em><a href="index.php?action=post&id=<?= urlencode($tracabilitySheet->identifier) ?>">Commentaires</a></em>
    </div>
<?php
}
?>
<?php $content = ob_get_clean(); ?>

<?php require('layout.php') ?>

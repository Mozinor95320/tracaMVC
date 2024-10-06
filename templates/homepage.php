<?php $title = "Liste des fiches de tracabilite"; ?>

<?php ob_start(); ?>
<div class="container mt-5">
    <form id="search-form" method="GET" action="" class="mb-4">
        <div class="input-group">
            <input type="text" id="search-input" name="search-sn" class="form-control" placeholder="Rechercher un SN" required>
            <button class="btn btn-primary" type="submit">Rechercher</button>
        </div>
    </form>
    <div id="result-container">
<?php
foreach ($tracabilitySheets as $tracabilitySheet) {
?>

    <div class="card mb-3">
        <div class="card-body d-flex justify-content-between align-items-center">
            <div>
                <h5 class="card-title fw-bold"><?= htmlspecialchars($tracabilitySheet->identifier); ?></h5>
                <em class="card-text text-muted">date de création de la fiche : <?= $tracabilitySheet->sheetCreationDate; ?></em>
            </div>
            <a class="btn btn-outline-primary" href="index.php?action=openTracabilitySheet&id=<?= urlencode($tracabilitySheet->identifier) ?>">
                <i class="bi bi-folder2-open" style="font-size: 24px;"></i> <!--Icône de dossier ouvert-->
            </a>
        </div>
    </div>     
<?php
}
?>
    </div>
</div>
<?php $content = ob_get_clean(); ?>

<?php require('layout.php') ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title><?= $title ?></title>
        <!-- Inclusion de Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Inclusion de Bootstrap Icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
        <link href="style.css" rel="stylesheet">

    </head>

    <body>
        <header class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-3">
                    <h1>Parker</h1>
                </div>
            </div>
            <div class="row align-items-center">
            </div>
        </header>
        <?= $content ?>
    </body>
</html>

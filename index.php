<?php

require_once('src/controllers/homepage.php');
require_once('src/controllers/updateTracabilitySheet.php');
require_once('src/controllers/SearchResult.php');

use Application\Controllers\Search\SearchResult;
use Application\Controllers\Homepage\Homepage;
use Application\Controllers\UpdateTracabilitySheet\UpdateTracabilitySheet;

try {
    if (isset($_GET['action']) && $_GET['action'] !== '') {
        if ($_GET['action'] === 'openTracabilitySheet') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                $identifier = $_GET['id'];

                (new UpdateTracabilitySheet())->execute($identifier);
            } else {
                throw new Exception('Aucun identifiant de fiche de tracabilité transnmis');
            }
        } elseif ($_GET['action'] === 'addComment') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                $identifier = $_GET['id'];

                //(new AddComment())->execute($identifier, $_POST);
            } else {
                throw new Exception('Aucun identifiant de billet envoyé');
            }
        } elseif ($_GET['action'] === 'search-sn') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                $searchSn = $_GET['id'];
                (new SearchResult())->execute($searchSn);
            } else {
                throw new Exception('Aucun identifiant de commentaire envoyé');
            }
        } else {
            throw new Exception("La page que vous recherchez n'existe pas.");
        }
    } else {
        (new Homepage())->execute();
    }
} catch (Exception $e) {
    $errorMessage = $e->getMessage();

    require('templates/error.php');
}

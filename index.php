<?php

require_once('src/controllers/homepage.php');

use Application\Controllers\Comment\Add\AddComment;
use Application\Controllers\Comment\Update\UpdateComment;
use Application\Controllers\Homepage\Homepage;
use Application\Controllers\TracabilitySheet\TracabilitySheet;

try {
    if (isset($_GET['action']) && $_GET['action'] !== '') {
    } else {
        (new Homepage())->execute();
    }
} catch (Exception $e) {
    $errorMessage = $e->getMessage();

    require('templates/error.php');
}

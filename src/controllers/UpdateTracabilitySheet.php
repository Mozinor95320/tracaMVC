<?php

namespace Application\Controllers\Post;

require_once('src/lib/database.php');
require_once('src/model/tracabilitySheet.php');

use Application\Lib\Database\DatabaseConnection;
use Application\Model\Comment\CommentRepository;
use Application\Model\Post\PostRepository;

class UpdateTracabilitySheet
{
    public function execute(string $identifier)
    {
        $tracabilitySheetRepository = new TracabilitySheetRepository();
        $tracabilitySheetRepository->connection = new DatabaseConnection();
        $tracabilitySheets = $tracabilitySheetRepository->getTracabilitySheet();

        require('templates/post.php');
    }
}

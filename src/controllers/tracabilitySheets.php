<?php

namespace Application\Controllers\TracabilitySheets;

require_once('src/lib/database.php');
require_once('src/model/comment.php');
require_once('src/model/TracabilitySheet.php');

use Application\Lib\Database\DatabaseConnection;
use Application\Model\Comment\CommentRepository;
use Application\Model\TracabilitySheet\TracabilitySheetRepository;

class TracabilitySheet
{
    public function execute(string $identifier)
    {
        $connection = new DatabaseConnection();

        $tracabilitySheetRepository = new TracabilitySheetRepository();
        $tracabilitySheetRepository->connection = $connection;
        $tracabilitySheet = $tracabilitySheetRepository->getTracabilitySheet($identifier);

        $commentRepository = new CommentRepository();
        $commentRepository->connection = $connection;
        $comments = $commentRepository->getComments($identifier);

        require('templates/post.php');
    }
}

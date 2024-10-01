<?php

namespace Application\Controllers\Post;

require_once('src/lib/database.php');
require_once('src/model/comment.php');
require_once('src/model/post.php');

use Application\Lib\Database\DatabaseConnection;
use Application\Model\Comment\CommentRepository;
use Application\Model\Post\PostRepository;

class UpdateTracabilitySheet
{
    public function execute(string $identifier)
    {
        $connection = new DatabaseConnection();
        
        $tracabilitySheetRepository = new TracabilitySheetRepository();
        $tracabilitySheetRepository->connection = new DatabaseConnection();
        $tracabilitySheets = $tracabilitySheetRepository->getTracabilitySheets();

        require('templates/post.php');
    }
}

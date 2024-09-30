<?php

namespace Application\Controllers\Homepage;

require_once('src/lib/database.php');

use Application\Lib\Database\DatabaseConnection;
use Application\Model\TracabilitySheet\TracabilitySheetRepository;

class Homepage
{
    public function execute()
    {
        $tracabilitySheetRepository = new TracabilitySheetRepository();
        $tracabilitySheetRepository->connection = new DatabaseConnection();
        $tracabilitySheets = $tracabilitySheetRepository->getTracabilitySheets();

        require('templates/homepage.php');
    }
}

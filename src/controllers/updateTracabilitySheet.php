<?php

namespace Application\Controllers\UpdateTracabilitySheet;

require_once('src/lib/database.php');
require_once('src/model/tracabilitySheet.php');

use Application\Lib\Database\DatabaseConnection;
use Application\Model\TracabilitySheet\TracabilitySheetRepository;

class UpdateTracabilitySheet
{
    public function execute(string $identifier)
    {
        $tracabilitySheetRepository = new TracabilitySheetRepository();
        $tracabilitySheetRepository->connection = new DatabaseConnection();
        $tracabilitySheet = $tracabilitySheetRepository->getTracabilitySheet($identifier);

        require('templates/updateTracabilitySheet.php');
    }
}

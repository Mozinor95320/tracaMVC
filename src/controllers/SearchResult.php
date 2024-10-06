<?php

namespace Application\Controllers\Search;

require_once('src/lib/database.php');
require_once('src/model/tracabilitySheet.php');

use Application\Lib\Database\DatabaseConnection;
use Application\Model\TracabilitySheet\TracabilitySheetRepository;

class SearchResult
{
    public function execute(string $searchSn)
    {
        $tracabilitySheetRepository = new TracabilitySheetRepository();
        $tracabilitySheetRepository->connection = new DatabaseConnection();
        $tracabilitySheets = $tracabilitySheetRepository->getTracabilitySheetsSearchResult($searchSn);

        require('templates/homepage.php');
    }
}

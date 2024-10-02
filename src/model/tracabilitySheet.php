<?php

namespace Application\Model\TracabilitySheet;

require_once('src/lib/database.php');

use Application\Lib\Database\DatabaseConnection;

class TracabilitySheet
{
    public string $identifier;
    public string $partNumber;
    public string $workOrder;
    public string $sheetCreationDate;
    public string $refPlan;
    public string $refMachine;
    public string $spoolBatch;
    public int $spoolNumber;
    public string $dateDimAfterCoating;
    public string $operatorNameDimAfterCoating;
    public float $lengthL;
    public float $diameterD;
    public int $massM;
    public int $aspectDimAfterCoating;
    public float $profileMassBeforeShrinkFit;
    public float $linearMassBeforeShrinkFit;
    public float $thickness1BeforeShrinkFit;
    public float $thickness2BeforeShrinkFit;
    public float $thickness3BeforeShrinkFit;
    public float $thickness4BeforeShrinkFit;
    public float $thickness5BeforeShrinkFit;
    public float $force1BeforeShrinkFit;
    public float $force2BeforeShrinkFit;
    public float $force3BeforeShrinkFit;
    public float $force4BeforeShrinkFit;
    public float $force5BeforeShrinkFit;
    public int $aspectFiber1BeforeShrinkFit;
    public int $aspectFiber2BeforeShrinkFit;
    public int $aspectFiber3BeforeShrinkFit;
    public int $aspectFiber4BeforeShrinkFit;
    public int $aspectFiber5BeforeShrinkFit;
    public float $averageBeforeShrinkFit;
    public float $sigmaBeforeShrinkFit;
    public float $profileMassAfterShrinkFit;
    public float $linearMassAfterShrinkFit;
    public float $thickness1AfterShrinkFit;
    public float $thickness2AfterShrinkFit;
    public float $thickness3AfterShrinkFit;
    public float $thickness4AfterShrinkFit;
    public float $thickness5AfterShrinkFit;
    public float $force1AfterShrinkFit;
    public float $force2AfterShrinkFit;
    public float $force3AfterShrinkFit;
    public float $force4AfterShrinkFit;
    public float $force5AfterShrinkFit;
    public int $aspectFiber1AfterShrinkFit;
    public int $aspectFiber2AfterShrinkFit;
    public int $aspectFiber3AfterShrinkFit;
    public int $aspectFiber4AfterShrinkFit;
    public int $aspectFiber5AfterShrinkFit;
    public float $averageAfterShrinkFit;
    public float $sigmaAfterShrinkFit;
    public int $bf;
    public int $vf;
    public int $mt;
    public int $mf;
    public float $df1;
    public float $df2;
    public float $df3;
    public int $operatorConformityDeclaration;
    public string $operatorRemarks;
    public string $dateOperatorConformityDeclaration;
    public string $operatorNameConformityDeclaration;
    public int $firstAccumulatorLot;
    public string $qualityConformityDeclaration;
    public string $qualityControlDate;
    public string $qualityInspectorName;
    public string $qualityInspectorRemarks;
}

class TracabilitySheetRepository
{
    public DatabaseConnection $connection;

    public function getTracabilitySheet(string $identifier): TracabilitySheet
    {
        $statement = $this->connection->getConnection()->prepare(
            "SELECT * FROM tracabilitySheets WHERE serialNumber = ?"
        );
        $statement->execute([$identifier]);

        $row = $statement->fetch();
        $tracabilitySheet = new TracabilitySheet();
        $tracabilitySheet->identifier = $row['serialNumber'];
        $tracabilitySheet->workOrder = $row['workOrder'];
        $tracabilitySheet->partNumber = $row['partNumber'];
        $tracabilitySheet->sheetCreationDate = $row['sheetCreationDate'];
        $tracabilitySheet->refPlan = $row['refPlan'];
        $tracabilitySheet->refMachine = $row['refMachine'];
        $tracabilitySheet->spoolBatch = $row['spoolBatch'];
        $tracabilitySheet->spoolNumber = (int) $row['spoolNumber'];
        $tracabilitySheet->dateDimAfterCoating = $row['dateDimAfterCoating'];
        $tracabilitySheet->operatorNameDimAfterCoating = $row['operatorNameDimAfterCoating'];
        $tracabilitySheet->lengthL= (float)$row['lengthL'];
        $tracabilitySheet->diameterD = (float)$row['diameterD'];
        $tracabilitySheet->massM = (int)$row['massM'];
        $tracabilitySheet->aspectDimAfterCoating = (int)$row['aspectDimAfterCoating'];
        $tracabilitySheet->profileMassBeforeShrinkFit = (float)$row['profileMassBeforeShrinkFit'];
        $tracabilitySheet->linearMassBeforeShrinkFit = (float)$row['linearMassBeforeShrinkFit'];
        $tracabilitySheet->thickness1BeforeShrinkFit = (float)$row['thickness1BeforeShrinkFit'];
        $tracabilitySheet->thickness2BeforeShrinkFit = (float)$row['thickness2BeforeShrinkFit'];
        $tracabilitySheet->thickness3BeforeShrinkFit = (float)$row['thickness3BeforeShrinkFit'];
        $tracabilitySheet->thickness4BeforeShrinkFit = (float)$row['thickness4BeforeShrinkFit'];
        $tracabilitySheet->thickness5BeforeShrinkFit = (float)$row['thickness5BeforeShrinkFit'];
        $tracabilitySheet->force1BeforeShrinkFit = (float)$row['force1BeforeShrinkFit'];
        $tracabilitySheet->force2BeforeShrinkFit = (float)$row['force2BeforeShrinkFit'];
        $tracabilitySheet->force3BeforeShrinkFit = (float)$row['force3BeforeShrinkFit'];
        $tracabilitySheet->force4BeforeShrinkFit = (float)$row['force4BeforeShrinkFit'];
        $tracabilitySheet->force5BeforeShrinkFit = (float)$row['force5BeforeShrinkFit'];
        $tracabilitySheet->aspectFiber1BeforeShrinkFit = (int)$row['aspectFiber1BeforeShrinkFit'];
        $tracabilitySheet->aspectFiber2BeforeShrinkFit = (int)$row['aspectFiber2BeforeShrinkFit'];
        $tracabilitySheet->aspectFiber3BeforeShrinkFit = (int)$row['aspectFiber3BeforeShrinkFit'];
        $tracabilitySheet->aspectFiber4BeforeShrinkFit = (int)$row['aspectFiber4BeforeShrinkFit'];
        $tracabilitySheet->aspectFiber5BeforeShrinkFit = (int)$row['aspectFiber5BeforeShrinkFit'];
        $tracabilitySheet->averageBeforeShrinkFit = (float)$row['averageBeforeShrinkFit'];
        $tracabilitySheet->sigmaBeforeShrinkFit = (float)$row['sigmaBeforeShrinkFit'];
        $tracabilitySheet->profileMassAfterShrinkFit = (float)$row['profileMassBeforeShrinkFit'];
        $tracabilitySheet->linearMassAfterShrinkFit = (float)$row['linearMassBeforeShrinkFit'];
        $tracabilitySheet->thickness1AfterShrinkFit = (float)$row['thickness1AfterShrinkFit'];
        $tracabilitySheet->thickness2AfterShrinkFit = (float)$row['thickness2AfterShrinkFit'];
        $tracabilitySheet->thickness3AfterShrinkFit = (float)$row['thickness3AfterShrinkFit'];
        $tracabilitySheet->thickness4AfterShrinkFit = (float)$row['thickness4AfterShrinkFit'];
        $tracabilitySheet->thickness5AfterShrinkFit = (float)$row['thickness5AfterShrinkFit'];
        $tracabilitySheet->force1AfterShrinkFit = (float)$row['force1AfterShrinkFit'];
        $tracabilitySheet->force2AfterShrinkFit = (float)$row['force2AfterShrinkFit'];
        $tracabilitySheet->force3AfterShrinkFit = (float)$row['force3AfterShrinkFit'];
        $tracabilitySheet->force4AfterShrinkFit = (float)$row['force4AfterShrinkFit'];
        $tracabilitySheet->force5AfterShrinkFit = (float)$row['force5AfterShrinkFit'];
        $tracabilitySheet->aspectFiber1AfterShrinkFit = (int)$row['aspectFiber1AfterShrinkFit'];
        $tracabilitySheet->aspectFiber2AfterShrinkFit = (int)$row['aspectFiber2AfterShrinkFit'];
        $tracabilitySheet->aspectFiber3AfterShrinkFit = (int)$row['aspectFiber3AfterShrinkFit'];
        $tracabilitySheet->aspectFiber4AfterShrinkFit = (int)$row['aspectFiber4AfterShrinkFit'];
        $tracabilitySheet->aspectFiber5AfterShrinkFit = (int)$row['aspectFiber5AfterShrinkFit'];
        $tracabilitySheet->averageAfterShrinkFit = (float)$row['averageAfterShrinkFit'];
        $tracabilitySheet->sigmaAfterShrinkFit = (float)$row['sigmaAfterShrinkFit'];
        $tracabilitySheet->bf = (int)$row['bf'];
        $tracabilitySheet->vf = (int)$row['vf'];
        $tracabilitySheet->mt = (int)$row['mt'];
        $tracabilitySheet->mf = (int)$row['mf'];
        $tracabilitySheet->df1 = (float)$row['df1'];
        $tracabilitySheet->df2 = (float)$row['df2'];
        $tracabilitySheet->df3 = (float)$row['df3'];
        $tracabilitySheet->operatorConformityDeclaration = (int)$row['operatorConformityDeclaration'];
        $tracabilitySheet->operatorRemarks = $row['operatorRemarks'];
        $tracabilitySheet->dateOperatorConformityDeclaration = $row['dateOperatorConformityDeclaration'];
        $tracabilitySheet->operatorNameConformityDeclaration = $row['operatorNameConformityDeclaration'];
        $tracabilitySheet->firstAccumulatorLot = (int)$row['firstAccumulatorLot'];
        $tracabilitySheet->qualityConformityDeclaration = $row['qualityConformityDeclaration'];
        $tracabilitySheet->qualityControlDate = $row['qualityControlDate'];
        $tracabilitySheet->qualityInspectorName = $row['qualityInspectorName'];
        $tracabilitySheet->qualityInspectorRemarks = $row['qualityInspectorRemarks'];

        return $tracabilitySheet;
    }

    public function getTracabilitySheets(): array
    {
        $statement = $this->connection->getConnection()->query(
            "SELECT serialNumber, workOrder, DATE_FORMAT(sheetCreationDate, '%d/%m/%Y à %Hh%imin%ss') AS french_creation_date FROM tracabilitySheets ORDER BY sheetCreationDate DESC LIMIT 0, 5"
        );
        $tracabilitySheets = [];
        while (($row = $statement->fetch())) {
            $tracabilitySheet = new TracabilitySheet();
            $tracabilitySheet->workOrder = $row['workOrder'];
            $tracabilitySheet->sheetCreationDate = $row['sheetCreationDate'];
            $tracabilitySheet->identifier = $row['serialNumber'];

            $tracabilitySheets[] = $tracabilitySheet;
        }

        return $tracabilitySheets;
    }
}

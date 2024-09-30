<?php

namespace Application\Model\Post;

require_once('src/lib/database.php');

use Application\Lib\Database\DatabaseConnection;

class TracabilitySheet
{
    public string $identifier;
    public string $workOrder;
    public string $frenchCreationDate;
    public string $spoolBatch;
    public int $spoolNumber;
    public string $dateDimAfterCoating`;
    public string $operatorNameDimAfterCoating;
    public float $lengthL;
    public float $diameterD;
    public int $massM;
    public int $aspectDimAfterCoating;
    public float $profileLengthBeforeShrinkFit;
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
    public float $profileLengthAfterTensileTest;
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
    public string $dateOperatorConformityDeclaratio;
    public string $operatorNameConformityDeclaration;
    public int $firstAccumulatorLot;
    public string $qualityConformityDeclaration;
    public string $qualityControlDate;
    public string $qualityInspectorName;
}

class TracabilitySheetRepository
{
    public DatabaseConnection $connection;

    public function getPost(string $identifier): TracabilitySheet
    {
        $statement = $this->connection->getConnection()->prepare(
            "SELECT id, title, content, DATE_FORMAT(creation_date, '%d/%m/%Y à %Hh%imin%ss') AS french_creation_date FROM posts WHERE id = ?"
        );
        $statement->execute([$identifier]);

        $row = $statement->fetch();
        $tracabilitySheet = new TracabilitySheet();
        $tracabilitySheet->identifier = $row['serialNumber'];
        $tracabilitySheet->workOrder = $row['workOrder'];
        $tracabilitySheet->frenchCreationDate = $row['french_creation_date'];
        $tracabilitySheet->spoolBatch = $row['spoolBatch'];
        $tracabilitySheet->spoolNumber = (int) $row['spoolNumber'];
        $tracabilitySheet->dateDimAfterCoating = $row['dateDimAfterCoating'];
        $tracabilitySheet->operatorNameDimAfterCoating = $row['dateDimAfterCoating'];
        $tracabilitySheet->lengthL= (float)$row['french_creation_date'];
        $tracabilitySheet->diameterD = (float)$row['french_creation_date'];
        p$tracabilitySheet->massM = (int)$row['french_creation_date'];
        $tracabilitySheet->aspectDimAfterCoating = (int)$row['french_creation_date'];
        $tracabilitySheet->profileLengthBeforeShrinkFit = (float)$row['french_creation_date'];
        $tracabilitySheet->thickness1BeforeShrinkFit = (float)$row['french_creation_date'];
        $tracabilitySheet->thickness2BeforeShrinkFit = (float)$row['french_creation_date'];
        $tracabilitySheet->thickness3BeforeShrinkFit = (float)$row['french_creation_date'];
        $tracabilitySheet->thickness4BeforeShrinkFit = (float)$row['french_creation_date'];
        $tracabilitySheet->thickness5BeforeShrinkFit = (float)$row['french_creation_date'];
        $tracabilitySheet->force1BeforeShrinkFit = (float)$row['french_creation_date'];
        $tracabilitySheet->force2BeforeShrinkFit = (float)$row['french_creation_date'];
        $tracabilitySheet->force3BeforeShrinkFit = (float)$row['french_creation_date'];
        $tracabilitySheet->force4BeforeShrinkFit = (float)$row['french_creation_date'];
        $tracabilitySheet->force5BeforeShrinkFit = (float)$row['french_creation_date'];
        $tracabilitySheet->aspectFiber1BeforeShrinkFit = (int)$row['french_creation_date'];
        $tracabilitySheet->aspectFiber2BeforeShrinkFit = (int)$row['french_creation_date'];
        $tracabilitySheet->aspectFiber3BeforeShrinkFit = (int)$row['french_creation_date'];
        $tracabilitySheet->aspectFiber4BeforeShrinkFit = (int)$row['french_creation_date'];
        $tracabilitySheet->aspectFiber5BeforeShrinkFit = (int)$row['french_creation_date'];
        $tracabilitySheet->averageBeforeShrinkFit = (float)$row['french_creation_date'];
        $tracabilitySheet->sigmaBeforeShrinkFit = (float)$row['french_creation_date'];
        $tracabilitySheet->profileLengthAfterTensileTest = (float)$row['french_creation_date'];
        $tracabilitySheet->thickness1AfterShrinkFit = (float)$row['french_creation_date'];
        $tracabilitySheet->thickness2AfterShrinkFit = (float)$row['french_creation_date'];
        $tracabilitySheet->thickness3AfterShrinkFit = (float)$row['french_creation_date'];
        $tracabilitySheet->thickness4AfterShrinkFit = (float)$row['french_creation_date'];
        $tracabilitySheet->thickness5AfterShrinkFit = (float)$row['french_creation_date'];
        $tracabilitySheet->force1AfterShrinkFit = (float)$row['french_creation_date'];
        $tracabilitySheet->force2AfterShrinkFit = (float)$row['french_creation_date'];
        $tracabilitySheet->force3AfterShrinkFit = (float)$row['french_creation_date'];
        $tracabilitySheet->force4AfterShrinkFit = (float)$row['french_creation_date'];
        $tracabilitySheet->force5AfterShrinkFit = (float)$row['french_creation_date'];
        $tracabilitySheet->aspectFiber1AfterShrinkFit = (int)$row['french_creation_date'];
        $tracabilitySheet->aspectFiber2AfterShrinkFit = (int)$row['french_creation_date'];
        $tracabilitySheet->aspectFiber3AfterShrinkFit = (int)$row['french_creation_date'];
        $tracabilitySheet->aspectFiber4AfterShrinkFit = (int)$row['french_creation_date'];
        $tracabilitySheet->aspectFiber5AfterShrinkFit = (int)$row['french_creation_date'];
        $tracabilitySheet->averageAfterShrinkFit = (float)$row['french_creation_date'];
        $tracabilitySheet->sigmaAfterShrinkFit = (float)$row['french_creation_date'];
        $tracabilitySheet->bf = (int)$row['french_creation_date'];
        $tracabilitySheet->vf = (int)$row['french_creation_date'];
        $tracabilitySheet->mt = (int)$row['french_creation_date'];
        $tracabilitySheet->mf = (int)$row['french_creation_date'];
        $tracabilitySheet->df1 = (float)$row['french_creation_date'];
        $tracabilitySheet->df2 = (float)$row['french_creation_date'];
        $tracabilitySheet->df3 = (float)$row['french_creation_date'];
        $tracabilitySheet->operatorConformityDeclaration = (int)$row['french_creation_date'];
        $tracabilitySheet->operatorRemarks = $row['french_creation_date'];
        $tracabilitySheet->dateOperatorConformityDeclaratio = $row['french_creation_date'];
        $tracabilitySheet->operatorNameConformityDeclaration = $row['french_creation_date'];
        $tracabilitySheet->firstAccumulatorLot = (int)$row['french_creation_date'];
        $tracabilitySheet->qualityConformityDeclaration = $row['french_creation_date'];
        $tracabilitySheet->qualityControlDate = $row['french_creation_date'];
        $tracabilitySheet->qualityInspectorName = $row['french_creation_date'];

        return $tracabilitySheet;
    }

    public function getPosts(): array
    {
        $statement = $this->connection->getConnection()->query(
            "SELECT serialNumber, workOrder, DATE_FORMAT(sheetCreationDate, '%d/%m/%Y à %Hh%imin%ss') AS french_creation_date FROM tracabilitySheets ORDER BY sheetCreationDate DESC LIMIT 0, 5"
        );
        $tracabilitySheets = [];
        while (($row = $statement->fetch())) {
            $tracabilitySheet = new TracabilitySheet();
            $tracabilitySheet->workOrder = $row['workOrder'];
            $tracabilitySheet->frenchCreationDate = $row['french_creation_date'];
            $tracabilitySheet->identifier = $row['serialNumber'];

            $tracabilitySheets[] = $tracabilitySheet;
        }

        return $tracabilitySheets;
    }
}

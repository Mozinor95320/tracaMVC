/*document.getElementById("serialNumber").value = <?php echo $tracabilitySheet->partNumber; ?>;
document.getElementById("partNumber").value =
  "<?= $tracabilitySheet->partNumber ?>";
document.getElementById("workOrder").value =
  "<?= $tracabilitySheet->workOrder ?>";
document.getElementById("sheetCreationDate").value =
  "<?= $tracabilitySheet->sheetCreationDate ?>";
document.getElementById("spoolBatch").value =
  "<?= $tracabilitySheet->spoolBatch ?>";
document.getElementById("spoolNumber").value =
  "<?= $tracabilitySheet->spoolNumber ?>";
document.getElementById("dateDimAfterCoating").value =
  "<?= $tracabilitySheet->dateDimAfterCoating ?>";
document.getElementById("operatorNameDimAfterCoating").value =
  "<?= $tracabilitySheet->operatorNameDimAfterCoating ?>";
document.getElementById("lengthL").value = "<?= $tracabilitySheet->lengthL ?>";
document.getElementById("diameterD").value =
  "<?= $tracabilitySheet->diameterD ?>";
document.getElementById("massM").value = "<?= $tracabilitySheet->massM ?>";
document.getElementById("aspectDimAfterCoating").value =
  "<?= $tracabilitySheet->aspectDimAfterCoating ?>";
document.getElementById("profileMassBeforeShrinkFit").value =
  "<?= $tracabilitySheet->profileMassBeforeShrinkFit ?>";
document.getElementById("linearMassBeforeShrinkFit").value =
  "<?= $tracabilitySheet->linearMassBeforeShrinkFit ?>";
document.getElementById("thickness1BeforeShrinkFit").value =
  "<?= $tracabilitySheet->thickness1BeforeShrinkFit ?>";
document.getElementById("thickness2BeforeShrinkFit").value =
  "<?= $tracabilitySheet->thickness2BeforeShrinkFit ?>";
document.getElementById("thickness3BeforeShrinkFit").value =
  "<?= $tracabilitySheet->thickness3BeforeShrinkFit ?>";
document.getElementById("thickness4BeforeShrinkFit").value =
  "<?= $tracabilitySheet->thickness4BeforeShrinkFit ?>";
document.getElementById("thickness5BeforeShrinkFit").value =
  "<?= $tracabilitySheet->thickness5BeforeShrinkFit ?>";
document.getElementById("force1BeforeShrinkFit").value =
  "<?= $tracabilitySheet->force1BeforeShrinkFit ?>";
document.getElementById("force2BeforeShrinkFit").value =
  "<?= $tracabilitySheet->force2BeforeShrinkFit ?>";
document.getElementById("force3BeforeShrinkFit").value =
  "<?= $tracabilitySheet->force3BeforeShrinkFit ?>";
document.getElementById("force4BeforeShrinkFit").value =
  "<?= $tracabilitySheet->force4BeforeShrinkFit ?>";
document.getElementById("force5BeforeShrinkFit").value =
  "<?= $tracabilitySheet->force5BeforeShrinkFit ?>";
document.getElementById("aspectFiber1BeforeShrinkFit").value =
  "<?= $tracabilitySheet->aspectFiber1BeforeShrinkFit ?>";
document.getElementById("aspectFiber2BeforeShrinkFit").value =
  "<?= $tracabilitySheet->aspectFiber2BeforeShrinkFit ?>";
document.getElementById("aspectFiber3BeforeShrinkFit").value =
  "<?= $tracabilitySheet->aspectFiber3BeforeShrinkFit ?>";
document.getElementById("aspectFiber4BeforeShrinkFit").value =
  "<?= $tracabilitySheet->aspectFiber4BeforeShrinkFit ?>";
document.getElementById("aspectFiber5BeforeShrinkFit").value =
  "<?= $tracabilitySheet->aspectFiber5BeforeShrinkFit ?>";
document.getElementById("averageBeforeShrinkFit").value =
  "<?= $tracabilitySheet->averageBeforeShrinkFit ?>";
document.getElementById("sigmaBeforeShrinkFit").value =
  "<?= $tracabilitySheet->sigmaBeforeShrinkFit ?>";
document.getElementById("profileMassAfterShrinkFit").value =
  "<?= $tracabilitySheet->profileMassAfterShrinkFit ?>";
document.getElementById("linearMassAfterShrinkFit").value =
  "<?= $tracabilitySheet->linearMassAfterShrinkFit ?>";
document.getElementById("thickness1AfterShrinkFit").value =
  "<?= $tracabilitySheet->thickness1AfterShrinkFit ?>";
document.getElementById("thickness2AfterShrinkFit").value =
  "<?= $tracabilitySheet->thickness2AfterShrinkFit ?>";
document.getElementById("thickness3AfterShrinkFit").value =
  "<?= $tracabilitySheet->thickness3AfterShrinkFit ?>";
document.getElementById("thickness4AfterShrinkFit").value =
  "<?= $tracabilitySheet->thickness4AfterShrinkFit ?>";
document.getElementById("thickness5AfterShrinkFit").value =
  "<?= $tracabilitySheet->thickness5AfterShrinkFit ?>";
document.getElementById("force1AfterShrinkFit").value =
  "<?= $tracabilitySheet->force1AfterShrinkFit ?>";
document.getElementById("force2AfterShrinkFit").value =
  "<?= $tracabilitySheet->force2AfterShrinkFit ?>";
document.getElementById("force3AfterShrinkFit").value =
  "<?= $tracabilitySheet->force3AfterShrinkFit ?>";
document.getElementById("force4AfterShrinkFit").value =
  "<?= $tracabilitySheet->force4AfterShrinkFit ?>";
document.getElementById("force5AfterShrinkFit").value =
  "<?= $tracabilitySheet->force5AfterShrinkFit ?>";
document.getElementById("aspectFiber1AfterShrinkFit").value =
  "<?= $tracabilitySheet->aspectFiber1AfterShrinkFit ?>";
document.getElementById("aspectFiber2AfterShrinkFit").value =
  "<?= $tracabilitySheet->aspectFiber2AfterShrinkFit ?>";
document.getElementById("aspectFiber3AfterShrinkFit").value =
  "<?= $tracabilitySheet->aspectFiber3AfterShrinkFit ?>";
document.getElementById("aspectFiber4AfterShrinkFit").value =
  "<?= $tracabilitySheet->aspectFiber4AfterShrinkFit ?>";
document.getElementById("aspectFiber5AfterShrinkFit").value =
  "<?= $tracabilitySheet->aspectFiber5AfterShrinkFit ?>";
document.getElementById("averageAfterShrinkFit").value =
  "<?= $tracabilitySheet->averageAfterShrinkFit ?>";
document.getElementById("sigmaAfterShrinkFit").value =
  "<?= $tracabilitySheet->sigmaAfterShrinkFit ?>";
document.getElementById("bf").value = "<?= $tracabilitySheet->bf ?>";
document.getElementById("vf").value = "<?= $tracabilitySheet->vf ?>";
document.getElementById("mt").value = "<?= $tracabilitySheet->mt ?>";
document.getElementById("mf").value = "<?= $tracabilitySheet->mf ?>";
document.getElementById("df1").value = "<?= $tracabilitySheet->df1 ?>";
document.getElementById("df2").value = "<?= $tracabilitySheet->df2 ?>";
document.getElementById("df3").value = "<?= $tracabilitySheet->df3 ?>";
document.getElementById("operatorConformityDeclaration").value =
  "<?= $tracabilitySheet->operatorConformityDeclaration ?>";
document.getElementById("operatorRemarks").value =
  "<?= $tracabilitySheet->operatorRemarks ?>";
document.getElementById("dateOperatorConformityDeclaration").value =
  "<?= $tracabilitySheet->dateOperatorConformityDeclaration ?>";
document.getElementById("operatorNameConformityDeclaration").value =
  "<?= $tracabilitySheet->operatorNameConformityDeclaration ?>";
document.getElementById("firstAccumulatorLot").value =
  "<?= $tracabilitySheet->firstAccumulatorLot ?>";
document.getElementById("qualityConformityDeclaration").value =
  "<?= $tracabilitySheet->qualityConformityDeclaration ?>";
document.getElementById("qualityControlDate").value =
  "<?= $tracabilitySheet->qualityControlDate ?>";
document.getElementById("qualityInspectorName").value =
  "<?= $tracabilitySheet->qualityInspectorName ?>";
document.getElementById("qualityInspectorRemarks").value =
  "<?= $tracabilitySheet->qualityInspectorRemarks ?>";

function verifyTolerance({
  inputId,

  toleranceId,

  tolMin = 0,

  tolMax = Infinity,
}) {
  const inputValue = parseFloat(document.getElementById(inputId).value);

  const toleranceElement = document.getElementById(toleranceId);

  // Check if no value is entered
  if (isNaN(inputValue)) {
    toleranceElement.classList.remove("bg-tolerance-ok", "bg-tolerance-wrong");

    toleranceElement.classList.add("bg-tolerance-default");
  }

  // Check if the entered value is within tolerance
  else if (inputValue >= tolMin && inputValue <= tolMax) {
    toleranceElement.classList.remove(
      "bg-tolerance-wrong",
      "bg-tolerance-default"
    );

    toleranceElement.classList.add("bg-tolerance-ok");
  } else {
    toleranceElement.classList.remove(
      "bg-tolerance-ok",
      "bg-tolerance-default"
    );

    toleranceElement.classList.add("bg-tolerance-wrong");
  }
}

document.getElementById(inputId).addEventListener("input", () => {
  verifyTolerance({
    inputId: "length",
    toleranceId: "toleranceLength",
    tolMin: 413.5 - 6,
    tolMax: 413.5,
  });
});

// Dynamic tolerance change - Diameter D
document.getElementById(inputId).addEventListener("input", () => {
  verifyTolerance({
    inputId: "diameter",
    toleranceId: "toleranceDiameter",
    tolMin: 163,
    tolMax: 163 + 0.9,
  });
});

// Dynamic tolerance change - Mass M
document.getElementById(inputId).addEventListener("input", () => {
  verifyTolerance({
    inputId: "massM",
    toleranceId: "toleranceMassM",
    tolMax: 7650,
  });
});

// Dynamic tolerance change - Thickness Sample 1 Before Shrink Test
document.getElementById(inputId).addEventListener("input", () => {
  verifyTolerance({
    inputId: "thicknessSample1Before",
    toleranceId: "toleranceThicknessSample1Before",
    tolMin: 0.23,
    tolMax: 0.3,
  });
});

// Dynamic tolerance change - Force Sample 1 Before Shrink Test
document.getElementById(inputId).addEventListener("input", () => {
  verifyTolerance({
    inputId: "forceSample1Before",
    toleranceId: "toleranceForceSample1Before",
    tolMin: 1820,
  });
});

// Dynamic tolerance change - Thickness Sample 2 Before Shrink Test
document.getElementById(inputId).addEventListener("input", () => {
  verifyTolerance({
    inputId: "thicknessSample2Before",
    toleranceId: "toleranceThicknessSample2Before",
    tolMin: 0.23,
    tolMax: 0.3,
  });
});

// Dynamic tolerance change - Force Sample 2 Before Shrink Test
document.getElementById(inputId).addEventListener("input", () => {
  verifyTolerance({
    inputId: "forceSample2Before",
    toleranceId: "toleranceForceSample2Before",
    tolMin: 1820,
  });
});

// Dynamic tolerance change - Thickness Sample 3 Before Shrink Test
document.getElementById(inputId).addEventListener("input", () => {
  verifyTolerance({
    inputId: "thicknessSample3Before",
    toleranceId: "toleranceThicknessSample3Before",
    tolMin: 0.23,
    tolMax: 0.3,
  });
});

// Dynamic tolerance change - Force Sample 3 Before Shrink Test
document.getElementById(inputId).addEventListener("input", () => {
  verifyTolerance({
    inputId: "forceSample3Before",
    toleranceId: "toleranceForceSample3Before",
    tolMin: 1820,
  });
});

// Dynamic tolerance change - Thickness Sample 4 Before Shrink Test
document.getElementById(inputId).addEventListener("input", () => {
  verifyTolerance({
    inputId: "thicknessSample4Before",
    toleranceId: "toleranceThicknessSample4Before",
    tolMin: 0.23,
    tolMax: 0.3,
  });
});

// Dynamic tolerance change - Force Sample 4 Before Shrink Test
document.getElementById(inputId).addEventListener("input", () => {
  verifyTolerance({
    inputId: "forceSample4Before",
    toleranceId: "toleranceForceSample4Before",
    tolMin: 1820,
  });
});

// Dynamic tolerance change - Thickness Sample 5 Before Shrink Test
document.getElementById(inputId).addEventListener("input", () => {
  verifyTolerance({
    inputId: "thicknessSample5Before",
    toleranceId: "toleranceThicknessSample5Before",
    tolMin: 0.23,
    tolMax: 0.3,
  });
});

// Dynamic tolerance change - Force Sample 5 Before Shrink Test
document.getElementById(inputId).addEventListener("input", () => {
  verifyTolerance({
    inputId: "forceSample5Before",
    toleranceId: "toleranceForceSample5Before",
    tolMin: 1820,
  });
});

// Dynamic tolerance change - Thickness Sample 1 After Shrink Test
document.getElementById(inputId).addEventListener("input", () => {
  verifyTolerance({
    inputId: "thicknessSample1After",
    toleranceId: "toleranceThicknessSample1After",
    tolMin: 0.23,
    tolMax: 0.3,
  });
});

// Dynamic tolerance change - Force Sample 1 After Shrink Test
document.getElementById(inputId).addEventListener("input", () => {
  verifyTolerance({
    inputId: "forceSample1After",
    toleranceId: "toleranceForceSample1After",
    tolMin: 1820,
  });
});

// Dynamic tolerance change - Thickness Sample 2 After Shrink Test
document.getElementById(inputId).addEventListener("input", () => {
  verifyTolerance({
    inputId: "thicknessSample2After",
    toleranceId: "toleranceThicknessSample2After",
    tolMin: 0.23,
    tolMax: 0.3,
  });
});

// Dynamic tolerance change - Force Sample 2 After Shrink Test
document.getElementById(inputId).addEventListener("input", () => {
  verifyTolerance({
    inputId: "forceSample2After",
    toleranceId: "toleranceForceSample2After",
    tolMin: 1820,
  });
});

// Dynamic tolerance change - Thickness Sample 3 After Shrink Test
document.getElementById(inputId).addEventListener("input", () => {
  verifyTolerance({
    inputId: "thicknessSample3After",
    toleranceId: "toleranceThicknessSample3After",
    tolMin: 0.23,
    tolMax: 0.3,
  });
});

// Dynamic tolerance change - Force Sample 3 After Shrink Test
document.getElementById(inputId).addEventListener("input", () => {
  verifyTolerance({
    inputId: "forceSample3After",
    toleranceId: "toleranceForceSample3After",
    tolMin: 1820,
  });
});
// Dynamic tolerance change - Thickness Sample 4 After Shrink Test
document.getElementById(inputId).addEventListener("input", () => {
  verifyTolerance({
    inputId: "thicknessSample4After",
    toleranceId: "toleranceThicknessSample4After",
    tolMin: 0.23,
    tolMax: 0.3,
  });
});

// Dynamic tolerance change - Force Sample 4 After Shrink Test
document.getElementById(inputId).addEventListener("input", () => {
  verifyTolerance({
    inputId: "forceSample4After",
    toleranceId: "toleranceForceSample4After",
    tolMin: 1820,
  });
});

// Dynamic tolerance change - Thickness Sample 5 After Shrink Test
document.getElementById(inputId).addEventListener("input", () => {
  verifyTolerance({
    inputId: "thicknessSample5After",
    toleranceId: "toleranceThicknessSample5After",
    tolMin: 0.23,
    tolMax: 0.3,
  });
});

// Dynamic tolerance change - Force Sample 5 After Shrink Test
document.getElementById(inputId).addEventListener("input", () => {
  verifyTolerance({
    inputId: "forceSample5After",
    toleranceId: "toleranceForceSample5After",
    tolMin: 1820,
  });
});

// Dynamic tolerance change - df1
document.getElementById(inputId).addEventListener("input", () => {
  verifyTolerance({
    inputId: "df1",
    toleranceId: "toleranceDF1",
    tolMin: 174,
    tolMax: 174 + 2,
  });
});

// Dynamic tolerance change - df2
document.getElementById(inputId).addEventListener("input", () => {
  verifyTolerance({
    inputId: "df2",
    toleranceId: "toleranceDF2",
    tolMin: 174,
    tolMax: 174 + 2,
  });
});

// Dynamic tolerance change - df3
document.getElementById(inputId).addEventListener("input", () => {
  verifyTolerance({
    inputId: "df3",
    toleranceId: "toleranceDF3",
    tolMin: 174,
    tolMax: 174 + 2,
  });
});

// Dynamic tolerance change - mt
document.getElementById(inputId).addEventListener("input", () => {
  verifyTolerance({
    inputId: "mt",
    toleranceId: "toleranceMT",
    tolMax: 8700,
  });
});

// Automatic update of the remaining character count for the field
document.addEventListener("DOMContentLoaded", function () {
  const comment = document.getElementById("operationComment");
  const charCount = document.getElementById("charCount");

  comment.addEventListener("input", function () {
    const currentLength = comment.value.length;
    charCount.textContent = `${currentLength}/255 characters`;
  });
});

// Automatic update of the remaining character count for the field
document.addEventListener("DOMContentLoaded", function () {
  const comment = document.getElementById("qualityComment");
  const charCount = document.getElementById("charCount2");

  comment.addEventListener("input", function () {
    const currentLength = comment.value.length;
    charCount.textContent = `${currentLength}/255 characters`;
  });
});*/

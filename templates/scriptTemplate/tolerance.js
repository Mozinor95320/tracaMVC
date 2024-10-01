function verifyTolerance({

    inputId,

    toleranceId,

    tolMin = 0,

    tolMax = Infinity

}) {

    document.getElementById(inputId).addEventListener("input", function () {

        const inputValue = parseFloat(this.value);

        const toleranceElement = document.getElementById(toleranceId);

        // Check if no value is entered
        if (isNaN(inputValue)) {

            toleranceElement.classList.remove(
                "bg-tolerance-ok",
                "bg-tolerance-wrong"
            );

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

    });

}

// Dynamic tolerance change - Length L
verifyTolerance({
    inputId: "length",
    toleranceId: "toleranceLength",
    tolMin: 413.5 - 6,
    tolMax: 413.5
});

// Dynamic tolerance change - Diameter D
verifyTolerance({
    inputId: "diameter",
    toleranceId: "toleranceDiameter",
    tolMin: 163,
    tolMax: 163 + 0.9
});

// Dynamic tolerance change - Mass M
verifyTolerance({
    inputId: "massM",
    toleranceId: "toleranceMassM",
    tolMax: 7650
});

// Dynamic tolerance change - Thickness Sample 1 Before Shrink Test
verifyTolerance({
    inputId: "thicknessSample1Before",
    toleranceId: "toleranceThicknessSample1Before",
    tolMin: 0.23,
    tolMax: 0.3
});

// Dynamic tolerance change - Force Sample 1 Before Shrink Test
verifyTolerance({
    inputId: "forceSample1Before",
    toleranceId: "toleranceForceSample1Before",
    tolMin: 1820
});

// Dynamic tolerance change - Thickness Sample 2 Before Shrink Test
verifyTolerance({
    inputId: "thicknessSample2Before",
    toleranceId: "toleranceThicknessSample2Before",
    tolMin: 0.23,
    tolMax: 0.3
});

// Dynamic tolerance change - Force Sample 2 Before Shrink Test
verifyTolerance({
    inputId: "forceSample2Before",
    toleranceId: "toleranceForceSample2Before",
    tolMin: 1820
});

// Dynamic tolerance change - Thickness Sample 3 Before Shrink Test
verifyTolerance({
    inputId: "thicknessSample3Before",
    toleranceId: "toleranceThicknessSample3Before",
    tolMin: 0.23,
    tolMax: 0.3
});

// Dynamic tolerance change - Force Sample 3 Before Shrink Test
verifyTolerance({
    inputId: "forceSample3Before",
    toleranceId: "toleranceForceSample3Before",
    tolMin: 1820
});

// Dynamic tolerance change - Thickness Sample 4 Before Shrink Test
verifyTolerance({
    inputId: "thicknessSample4Before",
    toleranceId: "toleranceThicknessSample4Before",
    tolMin: 0.23,
    tolMax: 0.3
});

// Dynamic tolerance change - Force Sample 4 Before Shrink Test
verifyTolerance({
    inputId: "forceSample4Before",
    toleranceId: "toleranceForceSample4Before",
    tolMin: 1820
});

// Dynamic tolerance change - Thickness Sample 5 Before Shrink Test
verifyTolerance({
    inputId: "thicknessSample5Before",
    toleranceId: "toleranceThicknessSample5Before",
    tolMin: 0.23,
    tolMax: 0.3
});

// Dynamic tolerance change - Force Sample 5 Before Shrink Test
verifyTolerance({
    inputId: "forceSample5Before",
    toleranceId: "toleranceForceSample5Before",
    tolMin: 1820
});

// Dynamic tolerance change - Thickness Sample 1 After Shrink Test
verifyTolerance({
    inputId: "thicknessSample1After",
    toleranceId: "toleranceThicknessSample1After",
    tolMin: 0.23,
    tolMax: 0.3
});

// Dynamic tolerance change - Force Sample 1 After Shrink Test
verifyTolerance({
    inputId: "forceSample1After",
    toleranceId: "toleranceForceSample1After",
    tolMin: 1820
});

// Dynamic tolerance change - Thickness Sample 2 After Shrink Test
verifyTolerance({
    inputId: "thicknessSample2After",
    toleranceId: "toleranceThicknessSample2After",
    tolMin: 0.23,
    tolMax: 0.3
});

// Dynamic tolerance change - Force Sample 2 After Shrink Test
verifyTolerance({
    inputId: "forceSample2After",
    toleranceId: "toleranceForceSample2After",
    tolMin: 1820
});

// Dynamic tolerance change - Thickness Sample 3 After Shrink Test
verifyTolerance({
    inputId: "thicknessSample3After",
    toleranceId: "toleranceThicknessSample3After",
    tolMin: 0.23,
    tolMax: 0.3
});

// Dynamic tolerance change - Force Sample 3 After Shrink Test
verifyTolerance({
    inputId: "forceSample3After",
    toleranceId: "toleranceForceSample3After",
    tolMin: 1820
});

// Dynamic tolerance change - Thickness Sample 4 After Shrink Test
verifyTolerance({
    inputId: "thicknessSample4After",
    toleranceId: "toleranceThicknessSample4After",
    tolMin: 0.23,
    tolMax: 0.3
});

// Dynamic tolerance change - Force Sample 4 After Shrink Test
verifyTolerance({
    inputId: "forceSample4After",
    toleranceId: "toleranceForceSample4After",
    tolMin: 1820
});

// Dynamic tolerance change - Thickness Sample 5 After Shrink Test
verifyTolerance({
    inputId: "thicknessSample5After",
    toleranceId: "toleranceThicknessSample5After",
    tolMin: 0.23,
    tolMax: 0.3
});

// Dynamic tolerance change - Force Sample 5 After Shrink Test
verifyTolerance({
    inputId: "forceSample5After",
    toleranceId: "toleranceForceSample5After",
    tolMin: 1820
});

// Dynamic tolerance change - df1
verifyTolerance({
    inputId: "df1",
    toleranceId: "toleranceDF1",
    tolMin: 174,
    tolMax: 174 + 2
});

// Dynamic tolerance change - df2
verifyTolerance({
    inputId: "df2",
    toleranceId: "toleranceDF2",
    tolMin: 174,
    tolMax: 174 + 2
});

// Dynamic tolerance change - df3
verifyTolerance({
    inputId: "df3",
    toleranceId: "toleranceDF3",
    tolMin: 174,
    tolMax: 174 + 2
});

// Dynamic tolerance change - mt
verifyTolerance({
    inputId: "mt",
    toleranceId: "toleranceMT",
    tolMax: 8700
});

document.getElementById("mt").addEventListener("input", function () {
    const inputValue = parseFloat(this.value);
    const diff = inputValue - parseFloat(document.getElementById(`massM`).value);

    document.getElementById(`mf`).value = diff.toFixed(2);

    // Dynamic tolerance change - mf
    updateTolerance({
        inputValue: diff,
        toleranceId: "toleranceMF",
        tolMax: 1050
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const comment = document.getElementById("operationComment");
    const charCount = document.getElementById("charCount");

    comment.addEventListener("input", function () {
        const currentLength = comment.value.length;
        charCount.textContent = `${currentLength}/255 characters`;
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const comment = document.getElementById("qualityComment");
    const charCount = document.getElementById("charCount2");

    comment.addEventListener("input", function () {
        const currentLength = comment.value.length;
        charCount.textContent = `${currentLength}/255 characters`;
    });
});

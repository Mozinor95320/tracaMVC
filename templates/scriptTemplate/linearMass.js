// Fonction générique pour calculer la moyenne et l'écart-type
function calculateMoyenneEcartType(prefix) {
    const meches = [];
    for (let i = 1; i <= 5; i++) {
      const value =
        parseFloat(document.getElementById(`FMeche${i}${prefix}`).value) || 0;
      meches.push(value);
    }
  
    const moyenne = meches.reduce((acc, val) => acc + val, 0) / meches.length;
    document.getElementById(`moy${prefix}`).value = moyenne.toFixed(2);
  
    const toleranceElementId = `toleranceMoy${prefix}`;
    const toleranceMin = 1820;
  
    // Utilisation de la fonction verifierTolerance pour la moyenne
    updateTolerance({
      inputValue: moyenne,
      toleranceId: toleranceElementId,
      tolMin: toleranceMin
    });
  
    // Utilisation de la fonction verifierTolerance pour la moyenne
  
    // Calcul de l'écart type
    const variance =
      meches.reduce((acc, val) => acc + Math.pow(val - moyenne, 2), 0) /
      meches.length;
    const ecartType = Math.sqrt(variance);
    document.getElementById(`ecartType${prefix}`).value = ecartType.toFixed(2);
  }
  
  // Fonction générique pour calculer la masse linéique
  function calculateMasseLineique(prefix) {
    const masseProfile =
      parseFloat(document.getElementById(`masseProfile${prefix}`).value) || 0;
    const masseLineique = masseProfile / 0.48;
    document.getElementById(
      `masseLineiqueProfile${prefix}`
    ).value = masseLineique.toFixed(2);
  
    const toleranceElementId = `toleranceMasseLineiqueProfile${prefix}`;
    const toleranceMin = 2.107;
    const toleranceMax = 2.407;
  
    // Utilisation de la fonction verifierTolerance pour la masse linéique
    updateTolerance({
      inputValue: masseLineique,
      toleranceId: toleranceElementId,
      tolMin: toleranceMin,
      tolMax: toleranceMax
    });
  }
  
  // Fonction de vérification de la tolérance pour la moyenne et la masse linéique
  function updateTolerance({
    inputValue,
    toleranceId,
    tolMin = 0,
    tolMax = Infinity
  }) {
    const toleranceElement = document.getElementById(toleranceId);
  
    // Vérifier si aucune valeur n'est entrée
    if (inputValue == 0) {
      toleranceElement.classList.remove("bg-tolerance-ok", "bg-tolerance-wrong");
      toleranceElement.classList.add("bg-tolerance-default");
    } else if (inputValue >= tolMin && inputValue <= tolMax) {
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

// Calls Before Shrink Test
function calculateMeanStandardDeviationBeforeShrinkTest() {
    calculateMeanStandardDeviation("Before Shrink Test");
}

function calculateLinearMassBeforeShrinkTest() {
    calculateLinearMass("Before Shrink Test");
}

// Calls for After Shrink Test
function calculateMeanStandardDeviationAfter() {
    calculateMeanStandardDeviation("After");
}

function calculateLinearMassAfter() {
    calculateLinearMass("After");
}

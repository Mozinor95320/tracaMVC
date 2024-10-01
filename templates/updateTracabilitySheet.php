<?php $title = "Fiche n°".$tracabilitySheet->identifier; ?>

<?php ob_start(); ?>
<div class="container mt-4">
  
  <!-- Generic Data-->
  <div class="card-body">
    <form>
      <div class="mb-3 ml-3">
        <h2>Informations générales</h2>
      </div>

      <div class="mb-3">
        <div class="row align-items-center">
          <!-- Work Order Field -->
          <div class="col-md-6">
            <label for="numeroOF" class="form-label">N°OF</label>
            <input type="text" class="form-control" id="workOrder" readonly>
          </div>
          <!-- Serial Number Field -->
          <div class="col-md-6">
            <label for="numeroOF" class="form-label">SN</label>
            <input type="text" class="form-control" id="serialNumber" readonly>
          </div>
        </div>
      </div>
      <div class="mb-3">
        <div class="row align-items-center">
          <!-- Part Number Field -->
          <div class="col-md-6">
            <label for="numeroOF" class="form-label">PN</label>
            <input type="text" class="form-control" id="PartNumber" readonly>
          </div>
          <!-- Sheet Creation Date -->
          <div class="col-md-6">
            <label for="date" class="form-label">Date de création de la fiche</label>
            <input type="date" class="form-control" id="sheetCreationDate" readonly>
          </div>
        </div>
      </div>
      <div class="mb-3">
        <div class="row align-items-center">
          <!-- Plan Reference Field -->
          <div class="col-md-6">
            <label for="referencePlan" class="form-label">Référence plan</label>
            <input type="text" class="form-control" id="refPlan" readonly>
          </div>
          <!-- Machine Reference Field -->
          <div class="col-md-6">
            <label for="machine" class="form-label">Machine</label>
            <input type="text" class="form-control" id="machine" readonly>
          </div>
        </div>
      </div>
    </form>
  </div>
  <div class="mb-3 ml-3">
    
    <!-- Nav Tabs -->
    <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item" role="presentation">
        <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Données de production</a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Frettage</a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Essais de traction</a>
      </li>
    </ul>
  </div>
  
  <!-- Tab Content -->
  <div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
      <div class="accordion" id="accordionExample">

        <!-- Section 2: Fiber Data -->
        
        <div class="accordion-item form-section">
          <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Données Matière
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <form>
                 <!-- Material Reference Field -->
                <div class="mb-3">
                  <label for="matiere" class="form-label">Matière</label>
                  <select class="form-select" id="matiere">
                    <option selected disabled>Sélectionner la matière</option>
                    <option value="1">TWARON 2200 / PA12-2159 0.24 x 8</option>
                    <option value="2">TWARON 2200 / PA12-2159 0.16 x 8</option>
                  </select>
                </div>
                <div class="mb-3">
                  <div class="row">
                    <!-- Sppol Batch Reference Field -->
                    <div class="col-md-6">
                      <label for="bobine" class="form-label">Bobine</label>
                      <input type="number" class="form-control" id="spoolBatch">
                    </div>
                    <!-- Spool Number Field -->
                    <div class="col-md-6">
                      <label for="lot" class="form-label">Lot</label>
                      <input type="number" class="form-control" id="spoolNumber">
                    </div>
                  </div>
                </div>
                <!-- Button - Modal - Help Spool Data -->
                <div class="d-flex justify-content-end">
                  <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#tuto1">
                    <i class="bi bi-question-circle"></i>
                  </button>
                </div>
                <!-- Content - Modal - Help Spool Data -->
                <div class="modal fade" id="tuto1" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="myModalLabel">Comment saisir des données de la bobine</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                      </div>
                      <div class="modal-body">
                        <img src="https://via.placeholder.com/600x300" alt="Description de l'image" class="img-fluid">
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>

        <!-- Section 3: Dimensions After Coating -->
        
        <div class="accordion-item form-section">
          <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              Dimensions après enduction
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <form>
                <!-- Date Dimension After Coating -->
                <div class="mb-3">
                  <label for="dateEnduction" class="form-label">Date</label>
                  <input type="date" class="form-control" id="dateDimAfterCoating">
                </div>

                <div class="row align-items-center">
                  
                 <!-- Dimensions length L -->
                  <div class="col-md-4">
                    <div class="mb-3">
                      <label for="longueur" class="form-label">Longueur L</label>
                      <div class="input-group">
                        <input type="number" class="form-control" id="lengthL" placeholder="Entrez la longueur">
                        
                        <!-- Tolerance with dynamic color -->
                        <span class="input-group-text" id="tolerancelengthL">413,5 (-6/+0)</span>
                        
                        <!-- Unit of measurement -->
                        <span class="input-group-text">mm</span>
                      </div>
                    </div>
                  </div>
                  
                  <!-- Dimension diameter D -->
                  <div class="col-md-4">
                    <div class="mb-3">
                      <label for="diametre" class="form-label">Diamètre D</label>
                      <div class="input-group">
                        <input type="number" class="form-control" id="diameterD" placeholder="Entrez le diamètre">
                        
                        <!-- Tolerance with dynamic color -->
                        <span class="input-group-text" id="tolerancediameterD">163(-0/+0,9)</span>
                        
                        <!-- Unit of measurement -->
                        <span class="input-group-text">mm</span>
                      </div>
                    </div>
                  </div>
                  
                  <!-- Mass M -->
                  <div class="col-md-4">
                    <div class="mb-3">
                      <label for="masseM" class="form-label">Masse M</label>
                      <div class="input-group">
                        <input type="number" class="form-control" id="massM" placeholder="Entrez la masse">
                        
                        <!-- Tolerance with dynamic color -->
                        <span class="input-group-text" id="tolerancemassM">Max 7650</span>
                        
                        <!-- Unit of measurement -->
                        <span class="input-group-text">mm</span>
                      </div>
                    </div>
                  </div>
                </div>
                
                 <!-- Aspect Dimension After Coating -->
                <div class="mb-3">
                  <label class="form-label d-block">Aspect</label>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="aspect" id="aspectDimAfterCoatingOk" value="ok">
                    <label class="form-check-label" for="aspectOk">OK</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="aspect" id="aspectDimAfterCoatingNok" value="nok">
                    <label class="form-check-label" for="aspectNok">NOK</label>
                  </div>
                </div>
                
                <!-- Button - Modal - Help Dimension After Coating -->
                <div class="d-flex justify-content-end">
                  <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#tuto2">
                    <i class="bi bi-question-circle"></i>
                  </button>
                </div>
                
                <!-- Content - Modal - Help Dimension After Coating -->
                <div class="modal fade" id="tuto2" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="myModalLabe2">Schéma du corps</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                      </div>
                      <div class="modal-body">
                        <img src="https://via.placeholder.com/900x900" alt="Description de l'image" class="img-fluid">
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>

        <!-- Section 4: Tensile Test before Shrink Fit -->
        <div class="accordion-item form-section">
          <h2 class="accordion-header" id="headingFour">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
              Essais traction avant frettage
            </button>
          </h2>
          <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <form>
                <div class="mb-3">
                  <div class="mb-3">
                    <div class="row align-items-center">
                      
                       <!--  <!-- Aspect Dimension After Coating --> -->
                      <div class="col-md-3">
                        <div class="d-flex justify-content-end">
                          <label for="masseM" class="form-label">Masse du profilé (48±0,5 cm)</label>
                        </div>
                      </div>
                      
                      <!-- Aspect Dimension After Coating -->
                      <div class="col-md-3">
                        <div class="input-group">
                          <input type="number" class="form-control" id="masseProfileAvant" placeholder="Entrez la masse du profilé" oninput="calculateMasseLineiqueAvant()">
                          
                          <!-- Unit of measurement -->
                          <span class="input-group-text">g</span>
                        </div>
                      </div>
                      
                      <!-- Aspect Dimension After Coating -->
                      <div class="col-md-3">
                        <div class="d-flex justify-content-end">
                          <label for="masseLineiqueProfil" class="form-label">Masse linéique du profilé</label>
                        </div>
                      </div>
                      
                      <!-- Aspect Dimension After Coating -->
                      <div class="col-md-3">
                        <div class="input-group">
                          <input type="number" class="form-control" id="masseLineiqueProfileAvant" placeholder="Calculée automatiquement" readonly>
                          
                          <!-- Tolerance with dynamic color -->
                          <span class="input-group-text" id="toleranceMasseLineiqueProfileAvant">2,107-2,407</span>
                          
                          <!-- Unit of measurement -->
                          <span class="input-group-text">g/m</span>
                        </div>
                      </div>
                    </div>
                  </div>

                  
                  <div class="mb-3">
                    <label for="meche1" class="form-label">Mèche 1</label>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="input-group">
                          <input type="number" class="form-control" id="epMeche1Avant" placeholder="Entrez l'épaisseur">
                          <!-- Tolerance with dynamic color -->
                          <span class="input-group-text" id="toleranceEpMeche1Avant">0,23-0,30</span>
                          <span class="input-group-text">mm</span> <!-- Unité ici -->

                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="input-group">
                          <input type="number" class="form-control" id="FMeche1Avant" placeholder="Entrez la force" oninput="calculateMoyenneEcartTypeAvant()">
                          <span class="input-group-text" id="toleranceFMeche1Avant">Min 1820</span>
                          <span class="input-group-text">N</span> <!-- Unité ici -->
                        </div>
                      </div>
                      <div class="col-md-4">
                        <select class="form-select" id="aspectRuptureAvantMeche1">
                          <option selected disabled>Selectionnez le cas de rupture </option>
                          <option value="1">Cas 1 - Trop sérré</option>
                          <option value="2">Cas 2 - Pas assez sérré</option>
                          <option value="2">Cas 3 - Rupture parfaite</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="mb-3">
                    <label for="meche2" class="form-label">Mèche 2</label>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="input-group">
                          <input type="number" class="form-control" id="epMeche2Avant" placeholder="Entrez l'épaisseur">
                          <span class="input-group-text" id="toleranceEpMeche2Avant">0,23-0,30</span>
                          <span class="input-group-text">mm</span> <!-- Unité ici -->
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="input-group">
                          <input type="number" class="form-control" id="FMeche2Avant" placeholder="Entrez la force" oninput="calculateMoyenneEcartTypeAvant()">
                          <span class="input-group-text" id="toleranceFMeche2Avant">Min 1820</span>
                          <span class="input-group-text">N</span> <!-- Unité ici -->
                        </div>
                      </div>
                      <div class="col-md-4">
                        <select class="form-select" id="aspectRuptureAvantMeche2">
                          <option selected disabled>Selectionnez le cas de rupture </option>
                          <option value="1">Cas 1 - Trop sérré</option>
                          <option value="2">Cas 2 - Pas assez sérré</option>
                          <option value="2">Cas 3 - Rupture parfaite</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="mb-3">
                    <label for="meche3" class="form-label">Mèche 3</label>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="input-group">
                          <input type="number" class="form-control" id="epMeche3Avant" placeholder="Entrez l'épaisseur">
                          <span class="input-group-text" id="toleranceEpMeche3Avant">0,23-0,30</span>
                          <span class="input-group-text">mm</span> <!-- Unité ici -->
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="input-group">
                          <input type="number" class="form-control" id="FMeche3Avant" placeholder="Entrez la force" oninput="calculateMoyenneEcartTypeAvant()">
                          <span class="input-group-text" id="toleranceFMeche3Avant">Min 1820</span>
                          <span class="input-group-text">N</span> <!-- Unité ici -->
                        </div>
                      </div>
                      <div class="col-md-4">
                        <select class="form-select" id="aspectRuptureAvantMeche3">
                          <option selected disabled>Selectionnez le cas de rupture </option>
                          <option value="1">Cas 1 - Trop sérré</option>
                          <option value="2">Cas 2 - Pas assez sérré</option>
                          <option value="2">Cas 3 - Rupture parfaite</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="mb-3">
                    <label for="meche4" class="form-label">Mèche 4</label>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="input-group">
                          <input type="number" class="form-control" id="epMeche4Avant" placeholder="Entrez l'épaisseur">
                          <span class="input-group-text" id="toleranceEpMeche4Avant">0,23-0,30</span>
                          <span class="input-group-text">mm</span> <!-- Unité ici -->
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="input-group">
                          <input type="number" class="form-control" id="FMeche4Avant" placeholder="Entrez la force" oninput="calculateMoyenneEcartTypeAvant()">
                          <span class="input-group-text" id="toleranceFMeche4Avant">Min 1820</span>
                          <span class="input-group-text">N</span> <!-- Unité ici -->
                        </div>
                      </div>
                      <div class="col-md-4">
                        <select class="form-select" id="aspectRuptureAvantMeche4">
                          <option selected disabled>Selectionnez le cas de rupture </option>
                          <option value="1">Cas 1 - Trop sérré</option>
                          <option value="2">Cas 2 - Pas assez sérré</option>
                          <option value="2">Cas 3 - Rupture parfaite</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="mb-3">
                    <label for="meche5" class="form-label">Mèche 5</label>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="input-group">
                          <input type="number" class="form-control" id="epMeche5Avant" placeholder="Entrez l'épaisseur">
                          <span class="input-group-text" id="toleranceEpMeche5Avant">0,23-0,30</span>
                          <span class="input-group-text">mm</span> <!-- Unité ici -->
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="input-group">
                          <input type="number" class="form-control" id="FMeche5Avant" placeholder="Entrez la force" oninput="calculateMoyenneEcartTypeAvant()">
                          <span class="input-group-text" id="toleranceFMeche5Avant">Min 1820</span>
                          <span class="input-group-text">N</span> <!-- Unité ici -->
                        </div>
                      </div>
                      <div class="col-md-4">
                        <select class="form-select" id="aspectRuptureAvantMeche5">
                          <option selected disabled>Selectionnez le cas de rupture </option>
                          <option value="1">Cas 1 - Trop sérré</option>
                          <option value="2">Cas 2 - Pas assez sérré</option>
                          <option value="2">Cas 3 - Rupture parfaite</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="mb-3">
                    <div class="row">
                      <div class="col-md-6 d-flex justify-content-end">
                        <label for="moyenne" class="form-label">Moyenne</label>
                      </div>
                      <div class="col-md-6">

                        <div class="input-group">
                          <input type="number" class="form-control" id="moyAvant" placeholder="Calculée automatiquement" readonly>
                          <span class="input-group-text" id="toleranceMoyAvant">Min 1820</span>
                          <span class="input-group-text">N</span> <!-- Unité ici -->
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="mb-3">
                    <div class="row">
                      <div class="col-md-6 d-flex justify-content-end">
                        <label for="ecartType" class="form-label">Écart type</label>
                      </div>
                      <div class="col-md-6">
                        <div class="input-group">
                          <input type="number" class="form-control" id="ecartTypeAvant" placeholder="Calculée automatiquement" readonly>
                          <span class="input-group-text">N</span> <!-- Unité ici -->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- Section 5: Essais traction après frettage -->
        <div class="accordion-item form-section">
          <h2 class="accordion-header" id="headingFive">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
              Essais traction après frettage
            </button>
          </h2>
          <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">

            <div class="accordion-body">
              <form>
                <div class="mb-3">
                  <div class="mb-3">

                    <label for="masseM" class="form-label">Masse du profilé</label>

                    <div class="row align-items-center">
                      <div class="col-md-4">
                        <div class="input-group">
                          <input type="number" class="form-control" id="masseProfileApres" placeholder="Entrez la masse du profilé" oninput="calculateMasseLineiqueApres()">
                          <!-- Unit of measurement -->
                          <span class="input-group-text">g</span>
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="d-flex justify-content-end">
                          <label for="masseLineiqueProfil" class="form-label">Masse linéique du profilé</label>
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="input-group">
                          <input type="number" class="form-control" id="masseLineiqueProfileApres" placeholder="Calculée automatiquement" readonly>
                          <!-- Tolerance with dynamic color -->
                          <span class="input-group-text" id="toleranceMasseLineiqueProfileApres">2,107-2,407</span>
                          <!-- Unit of measurement -->
                          <span class="input-group-text">g/m</span>
                        </div>
                      </div>

                    </div>
                  </div>
                  <div class="mb-3">
                    <label for="meche1" class="form-label">Mèche 1</label>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="input-group">
                          <input type="number" class="form-control" id="epMeche1Apres" placeholder="Entrez l'épaisseur">
                          <!-- Tolerance with dynamic color -->
                          <span class="input-group-text" id="toleranceEpMeche1Apres">0,23-0,30</span>
                          <span class="input-group-text">mm</span> <!-- Unité ici -->

                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="input-group">
                          <input type="number" class="form-control" id="FMeche1Apres" placeholder="Entrez la force" oninput="calculateMoyenneEcartTypeApres()">
                          <span class="input-group-text" id="toleranceFMeche1Apres">Min 1820</span>
                          <span class="input-group-text">N</span> <!-- Unité ici -->
                        </div>
                      </div>
                      <div class="col-md-4">
                        <select class="form-select" id="aspectRuptureApresMeche1">
                          <option selected disabled>Selectionnez le cas de rupture </option>
                          <option value="1">Cas 1 - Trop sérré</option>
                          <option value="2">Cas 2 - Pas assez sérré</option>
                          <option value="2">Cas 3 - Rupture parfaite</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="mb-3">
                    <label for="meche2" class="form-label">Mèche 2</label>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="input-group">
                          <input type="number" class="form-control" id="epMeche2Apres" placeholder="Entrez l'épaisseur">
                          <span class="input-group-text" id="toleranceEpMeche2Apres">0,23-0,30</span>
                          <span class="input-group-text">mm</span> <!-- Unité ici -->
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="input-group">
                          <input type="number" class="form-control" id="FMeche2Apres" placeholder="Entrez la force" oninput="calculateMoyenneEcartTypeApres()">
                          <span class="input-group-text" id="toleranceFMeche2Apres">Min 1820</span>
                          <span class="input-group-text">N</span> <!-- Unité ici -->
                        </div>
                      </div>
                      <div class="col-md-4">
                        <select class="form-select" id="aspectRuptureApresMeche2">
                          <option selected disabled>Selectionnez le cas de rupture </option>
                          <option value="1">Cas 1 - Trop sérré</option>
                          <option value="2">Cas 2 - Pas assez sérré</option>
                          <option value="2">Cas 3 - Rupture parfaite</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="mb-3">
                    <label for="meche3" class="form-label">Mèche 3</label>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="input-group">
                          <input type="number" class="form-control" id="epMeche3Apres" placeholder="Entrez l'épaisseur">
                          <span class="input-group-text" id="toleranceEpMeche3Apres">0,23-0,30</span>
                          <span class="input-group-text">mm</span> <!-- Unité ici -->
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="input-group">
                          <input type="number" class="form-control" id="FMeche3Apres" placeholder="Entrez la force" oninput="calculateMoyenneEcartTypeApres()">
                          <span class="input-group-text" id="toleranceFMeche3Apres">Min 1820</span>
                          <span class="input-group-text">N</span> <!-- Unité ici -->
                        </div>
                      </div>
                      <div class="col-md-4">
                        <select class="form-select" id="aspectRuptureApresMeche3">
                          <option selected disabled>Selectionnez le cas de rupture </option>
                          <option value="1">Cas 1 - Trop sérré</option>
                          <option value="2">Cas 2 - Pas assez sérré</option>
                          <option value="2">Cas 3 - Rupture parfaite</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="mb-3">
                    <label for="meche4" class="form-label">Mèche 4</label>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="input-group">
                          <input type="number" class="form-control" id="epMeche4Apres" placeholder="Entrez l'épaisseur">
                          <span class="input-group-text" id="toleranceEpMeche4Apres">0,23-0,30</span>
                          <span class="input-group-text">mm</span> <!-- Unité ici -->
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="input-group">
                          <input type="number" class="form-control" id="FMeche4Apres" placeholder="Entrez la force" oninput="calculateMoyenneEcartTypeApres()">
                          <span class="input-group-text" id="toleranceFMeche4Apres">Min 1820</span>
                          <span class="input-group-text">N</span> <!-- Unité ici -->
                        </div>
                      </div>
                      <div class="col-md-4">
                        <select class="form-select" id="aspectRuptureApresMeche4">
                          <option selected disabled>Selectionnez le cas de rupture </option>
                          <option value="1">Cas 1 - Trop sérré</option>
                          <option value="2">Cas 2 - Pas assez sérré</option>
                          <option value="2">Cas 3 - Rupture parfaite</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="mb-3">
                    <label for="meche5" class="form-label">Mèche 5</label>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="input-group">
                          <input type="number" class="form-control" id="epMeche5Apres" placeholder="Entrez l'épaisseur">
                          <span class="input-group-text" id="toleranceEpMeche5Apres">0,23-0,30</span>
                          <span class="input-group-text">mm</span> <!-- Unité ici -->
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="input-group">
                          <input type="number" class="form-control" id="FMeche5Apres" placeholder="Entrez la force" oninput="calculateMoyenneEcartTypeApres()">
                          <span class="input-group-text" id="toleranceFMeche5Apres">Min 1820</span>
                          <span class="input-group-text">N</span> <!-- Unité ici -->
                        </div>
                      </div>
                      <div class="col-md-4">
                        <select class="form-select" id="aspectRuptureApresMeche5">
                          <option selected disabled>Selectionnez le cas de rupture </option>
                          <option value="1">Cas 1 - Trop sérré</option>
                          <option value="2">Cas 2 - Pas assez sérré</option>
                          <option value="2">Cas 3 - Rupture parfaite</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="mb-3">
                    <div class="row">
                      <div class="col-md-6 d-flex justify-content-end">
                        <label for="moyenne" class="form-label">Moyenne</label>
                      </div>
                      <div class="col-md-6">

                        <div class="input-group">
                          <input type="number" class="form-control" id="moyApres" placeholder="Calculée automatiquement" readonly>
                          <span class="input-group-text" id="toleranceMoyApres">Min 1820</span>
                          <span class="input-group-text">N</span> <!-- Unité ici -->
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="mb-3">
                    <div class="row">
                      <div class="col-md-6 d-flex justify-content-end">
                        <label for="ecartType" class="form-label">Écart type</label>
                      </div>
                      <div class="col-md-6">
                        <div class="input-group">
                          <input type="number" class="form-control" id="ecartTypeApres" placeholder="Calculée automatiquement" readonly>
                          <span class="input-group-text">N</span> <!-- Unité ici -->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>

          </div>
        </div>

        <!-- Section 6: Dimensions après frettage -->
        <div class="accordion-item form-section">
          <h2 class="accordion-header" id="headingSix">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
              Dimensions après frettage
            </button>
          </h2>
          <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <form>
                <div class="mb-3">
                  <div class="row">
                    <div class="col-md-4">
                      <label for="df1" class="form-label">DF1</label>
                      <div class="input-group">
                        <input type="text" class="form-control" id="df1">
                        <!-- Tolerance with dynamic color -->
                        <span class="input-group-text" id="toleranceDF1">174 +0/+2</span>
                        <!-- Unit of measurement -->
                        <span class="input-group-text">mm</span>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <label for="df2" class="form-label">DF2</label>
                      <div class="input-group">
                        <input type="text" class="form-control" id="df2">
                        <!-- Tolerance with dynamic color -->
                        <span class="input-group-text" id="toleranceDF2">174 +0/+2</span>
                        <!-- Unit of measurement -->
                        <span class="input-group-text">mm</span>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <label for="df3" class="form-label">DF3</label>
                      <div class="input-group">
                        <input type="text" class="form-control" id="df3">
                        <!-- Tolerance with dynamic color -->
                        <span class="input-group-text" id="toleranceDF3">174 +0/+2</span>
                        <!-- Unit of measurement -->
                        <span class="input-group-text">mm</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="mb-3">
                  <div class="row">
                    <div class="col-md-6">
                      <label for="mt" class="form-label">MT</label>
                      <div class="input-group">
                        <input type="text" class="form-control" id="mt">
                        <!-- Tolerance with dynamic color -->
                        <span class="input-group-text" id="toleranceMT">Max 8700</span>
                        <!-- Unit of measurement -->
                        <span class="input-group-text">g</span>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <label for="mf" class="form-label">MF</label>
                      <div class="input-group">
                        <input type="text" class="form-control" id="mf" readonly>
                        <!-- Tolerance with dynamic color -->
                        <span class="input-group-text" id="toleranceMF">Max 1050</span>
                        <!-- Unit of measurement -->
                        <span class="input-group-text">g</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="mb-3">
                  <div class="row">
                    <div class="col-md-6">
                      <label class="form-label d-block">BF</label>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="BF" id="BFOk" value="ok">
                        <label class="form-check-label" for="aspectOk">OK</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="BF" id="BFNok" value="nok">
                        <label class="form-check-label" for="aspectNok">NOK</label>
                      </div>
                    </div>
                    <div class="col-md-6">

                      <label class="form-label d-block">VF</label>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="VF" id="VFOk" value="ok">
                        <label class="form-check-label" for="aspectOk">OK</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="VF" id="VFNok" value="nok">
                        <label class="form-check-label" for="aspectNok">NOK</label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="d-flex justify-content-end">
                  <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#tuto3">
                    <i class="bi bi-question-circle"></i>
                  </button>
                </div>
                <!-- La pop-up (modal) -->
                <div class="modal fade" id="tuto3" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="myModalLabe3">Schéma du corps 2</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                      </div>
                      <div class="modal-body">
                        <img src="https://via.placeholder.com/1000x900" alt="Description de l'image" class="img-fluid">
                      </div>
                    </div>
                  </div>
                </div>

              </form>
            </div>
          </div>
        </div>

        <!-- Section 7: Validation -->
        <div class="accordion-item form-section">
          <h2 class="accordion-header" id="headingSeven">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
              Validation par l'opérateur
            </button>
          </h2>
          <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <form>
                <div class="mb-3">
                  <label for="dateValidation" class="form-label">Date validation par l'opérateur</label>
                  <input type="date" class="form-control" id="dateValidationOp">
                </div>

                <div class="mb-3">
                  <div class="row">
                    <div class="col-md-4">
                      <label for="operateurValidation" class="form-label">Opérateur</label>
                      <input type="text" class="form-control" id="ValidationOp">
                    </div>
                    <div class="col-md-4">
                      <label for="conformiteValidation" class="form-label">Conformité</label>
                      <div class="col-md-6">
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="Conformite" id="ConformeOuiOp" value="ok">
                          <label class="form-check-label" for="aspectOk">Oui</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="Conformite" id="ConformeNonOp" value="nok">
                          <label class="form-check-label" for="aspectNok">Non</label>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <label for="premierAccumulateur" class="form-label">Premier du Lot</label>
                      <div class="col-md-6">
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="PremierDuLot" id="PremierDuLotOui" value="ok">
                          <label class="form-check-label" for="aspectOk">Oui</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="PremierDuLot" id="PremierDuLotNon" value="nok">
                          <label class="form-check-label" for="aspectNok">Non</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="mb-3">
                  <label for="remarqueValidation" class="form-label">Remarque</label>
                  <textarea class="form-control" id="commentaireOp" rows="4" placeholder="Entrez votre commentaire..." maxlength="255"></textarea>
                  <div id="charCount" class="form-text">0/255 caractères</div>

                </div>
              </form>
            </div>
          </div>
        </div>

        <!-- Section 8: Contrôle -->
        <div class="accordion-item form-section">
          <h2 class="accordion-header" id="headingEight">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
              Validation par le contrôle
            </button>
          </h2>
          <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <form>
                <div class="mb-3">
                  <label for="dateValidation" class="form-label">Date de validation par le contrôle</label>
                  <input type="date" class="form-control" id="dateValidationQuali">
                </div>
                <div class="mb-3">
                  <div class="row">
                    <div class="col-md-6">
                      <label for="operateurValidation" class="form-label">Contrôleur</label>
                      <input type="text" class="form-control" id="ValidationQuali">
                    </div>
                    <div class="col-md-6">
                      <label for="conformiteValidation" class="form-label">Conformité</label>
                      <div class="col-md-6">
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="Conformite" id="ConformeOuiQuali" value="ok">
                          <label class="form-check-label" for="aspectOk">Oui</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="Conformite" id="ConformeNonQuali" value="nok">
                          <label class="form-check-label" for="aspectNok">Non</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="mb-3">
                  <label for="remarqueValidation" class="form-label">Remarque</label>
                  <textarea class="form-control" id="commentaireQuali" rows="4" placeholder="Entrez votre commentaire..." maxlength="255"></textarea>
                  <div id="charCount2" class="form-text">0/255 caractères</div>

                </div>
              </form>
            </div>
          </div>
        </div>

      </div>
    </div>
    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
      <p>Contenu de l'onglet 2.</p>
    </div>
    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
      <p>Contenu de l'onglet 3.</p>
    </div>
  </div>

</div>

<?php $content = ob_get_clean(); ?>

<?php require('layout.php') ?>

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
  
  function verifierTolerance({
    inputId,
    toleranceId,
    tolMin = 0,
    tolMax = Infinity
  }) {
    document.getElementById(inputId).addEventListener("input", function () {
      const inputValue = parseFloat(this.value);
      const toleranceElement = document.getElementById(toleranceId);
  
      // Vérifier si aucune valeur n'est entrée
      if (isNaN(inputValue)) {
        toleranceElement.classList.remove(
          "bg-tolerance-ok",
          "bg-tolerance-wrong"
        );
        toleranceElement.classList.add("bg-tolerance-default");
      }
      // Vérifier si la valeur entrée est dans la tolérance
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
  
  // Appels pour "Avant"
  function calculateMoyenneEcartTypeAvant() {
    calculateMoyenneEcartType("Avant");
  }
  function calculateMasseLineiqueAvant() {
    calculateMasseLineique("Avant");
  }
  
  // Appels pour "Après"
  function calculateMoyenneEcartTypeApres() {
    calculateMoyenneEcartType("Apres");
  }
  function calculateMasseLineiqueApres() {
    calculateMasseLineique("Apres");
  }
  
  // Changement dynamique de la tolérance - Longueur L
  verifierTolerance({
    inputId: "longueur",
    toleranceId: "toleranceLongueur",
    tolMin: 413.5 - 6,
    tolMax: 413.5
  });
  
  // Changement dynamique de la tolérance - Diamètre D
  verifierTolerance({
    inputId: "diametre",
    toleranceId: "toleranceDiametre",
    tolMin: 163,
    tolMax: 163 + 0.9
  });
  
  // Changement dynamique de la tolérance - Masse M
  verifierTolerance({
    inputId: "masseM",
    toleranceId: "toleranceMasseM",
    tolMax: 7650
  });
  
  // Changement dynamique de la tolérance - Epaisseur Meche 1 Avant Frettage
  verifierTolerance({
    inputId: "epMeche1Avant",
    toleranceId: "toleranceEpMeche1Avant",
    tolMin: 0.23,
    tolMax: 0.3
  });
  
  // Changement dynamique de la tolérance - Force Meche 1 Avant Frettage
  verifierTolerance({
    inputId: "FMeche1Avant",
    toleranceId: "toleranceFMeche1Avant",
    tolMin: 1820
  });
  
  // Changement dynamique de la tolérance - Epaisseur Meche 2 Avant Frettage
  verifierTolerance({
    inputId: "epMeche2Avant",
    toleranceId: "toleranceEpMeche2Avant",
    tolMin: 0.23,
    tolMax: 0.3
  });
  
  // Changement dynamique de la tolérance - Force Meche 2 Avant Frettage
  verifierTolerance({
    inputId: "FMeche2Avant",
    toleranceId: "toleranceFMeche2Avant",
    tolMin: 1820
  });
  
  // Changement dynamique de la tolérance - Epaisseur Meche 3 Avant Frettage
  verifierTolerance({
    inputId: "epMeche3Avant",
    toleranceId: "toleranceEpMeche3Avant",
    tolMin: 0.23,
    tolMax: 0.3
  });
  
  // Changement dynamique de la tolérance - Force Meche 3 Avant Frettage
  verifierTolerance({
    inputId: "FMeche3Avant",
    toleranceId: "toleranceFMeche3Avant",
    tolMin: 1820
  });
  
  // Changement dynamique de la tolérance - Epaisseur Meche 4 Avant Frettage
  verifierTolerance({
    inputId: "epMeche4Avant",
    toleranceId: "toleranceEpMeche4Avant",
    tolMin: 0.23,
    tolMax: 0.3
  });
  
  // Changement dynamique de la tolérance - Force Meche 4 Avant Frettage
  verifierTolerance({
    inputId: "FMeche4Avant",
    toleranceId: "toleranceFMeche4Avant",
    tolMin: 1820
  });
  
  // Changement dynamique de la tolérance - Epaisseur Meche 5 Avant Frettage
  verifierTolerance({
    inputId: "epMeche5Avant",
    toleranceId: "toleranceEpMeche5Avant",
    tolMin: 0.23,
    tolMax: 0.3
  });
  
  // Changement dynamique de la tolérance - Force Meche 5 Avant Frettage
  verifierTolerance({
    inputId: "FMeche5Avant",
    toleranceId: "toleranceFMeche5Avant",
    tolMin: 1820
  });
  
  // Changement dynamique de la tolérance - Epaisseur Meche 1 Apres Frettage
  verifierTolerance({
    inputId: "epMeche1Apres",
    toleranceId: "toleranceEpMeche1Apres",
    tolMin: 0.23,
    tolMax: 0.3
  });
  
  // Changement dynamique de la tolérance - Force Meche 1 Apres Frettage
  verifierTolerance({
    inputId: "FMeche1Apres",
    toleranceId: "toleranceFMeche1Apres",
    tolMin: 1820
  });
  
  // Changement dynamique de la tolérance - Epaisseur Meche 2 Apres Frettage
  verifierTolerance({
    inputId: "epMeche2Apres",
    toleranceId: "toleranceEpMeche2Apres",
    tolMin: 0.23,
    tolMax: 0.3
  });
  
  // Changement dynamique de la tolérance - Force Meche 2 Apres Frettage
  verifierTolerance({
    inputId: "FMeche2Apres",
    toleranceId: "toleranceFMeche2Apres",
    tolMin: 1820
  });
  
  // Changement dynamique de la tolérance - Epaisseur Meche 3 Apres Frettage
  verifierTolerance({
    inputId: "epMeche3Apres",
    toleranceId: "toleranceEpMeche3Apres",
    tolMin: 0.23,
    tolMax: 0.3
  });
  
  // Changement dynamique de la tolérance - Force Meche 3 Apres Frettage
  verifierTolerance({
    inputId: "FMeche3Apres",
    toleranceId: "toleranceFMeche3Apres",
    tolMin: 1820
  });
  
  // Changement dynamique de la tolérance - Epaisseur Meche 4 Apres Frettage
  verifierTolerance({
    inputId: "epMeche4Apres",
    toleranceId: "toleranceEpMeche4Apres",
    tolMin: 0.23,
    tolMax: 0.3
  });
  
  // Changement dynamique de la tolérance - Force Meche 4 Apres Frettage
  verifierTolerance({
    inputId: "FMeche4Apres",
    toleranceId: "toleranceFMeche4Apres",
    tolMin: 1820
  });
  
  // Changement dynamique de la tolérance - Epaisseur Meche 5 Apres Frettage
  verifierTolerance({
    inputId: "epMeche5Apres",
    toleranceId: "toleranceEpMeche5Apres",
    tolMin: 0.23,
    tolMax: 0.3
  });
  
  // Changement dynamique de la tolérance - Force Meche 5 Apres Frettage
  verifierTolerance({
    inputId: "FMeche5Apres",
    toleranceId: "toleranceFMeche5Apres",
    tolMin: 1820
  });
  
  // Changement dynamique de la tolérance - df1
  verifierTolerance({
    inputId: "df1",
    toleranceId: "toleranceDF1",
    tolMin: 174,
    tolMax: 174 + 2
  });
  
  // Changement dynamique de la tolérance - df2
  verifierTolerance({
    inputId: "df2",
    toleranceId: "toleranceDF2",
    tolMin: 174,
    tolMax: 174 + 2
  });
  
  // Changement dynamique de la tolérance - df3
  verifierTolerance({
    inputId: "df3",
    toleranceId: "toleranceDF3",
    tolMin: 174,
    tolMax: 174 + 2
  });
  
  // Changement dynamique de la tolérance - mt
  verifierTolerance({
    inputId: "mt",
    toleranceId: "toleranceMT",
    tolMax: 8700
  });
  
  document.getElementById("mt").addEventListener("input", function () {
    const inputValue = parseFloat(this.value);
    const diff = inputValue - parseFloat(document.getElementById(`masseM`).value);
  
    document.getElementById(`mf`).value = diff.toFixed(2);
  
    // Changement dynamique de la tolérance - mf
    updateTolerance({
      inputValue: diff,
      toleranceId: "toleranceMF",
      tolMax: 1050
    });
  });
  
  document.addEventListener("DOMContentLoaded", function () {
    const commentaire = document.getElementById("commentaireOp");
    const charCount = document.getElementById("charCount");
  
    commentaire.addEventListener("input", function () {
      const currentLength = commentaire.value.length;
      charCount.textContent = `${currentLength}/255 caractères`;
    });
  });
  
  document.addEventListener("DOMContentLoaded", function () {
    const commentaire = document.getElementById("commentaireQuali");
    const charCount = document.getElementById("charCount2");
  
    commentaire.addEventListener("input", function () {
      const currentLength = commentaire.value.length;
      charCount.textContent = `${currentLength}/255 caractères`;
    });
  });
  

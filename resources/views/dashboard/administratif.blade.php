@extends('dashboard.layouts.app')

@section('content')

    <div class="section-title-dashboard mb-3 bg-light py-3">
        <h2>Données administratives</h2>
        <p>Nom Projet (n°34555)</p>
    </div>
    <form action="{{ route('projet.create')}}" method="post">
      @csrf
      <div class="row mb-3">
        <div class="col-sm mb-2">
            <div class="card">
                <h5 class="card-header text-center">Adresse actuelle du maître d'ouvrage</h5>
                <div class="card-body">
                  <div class="row" novalidate>
                      <div class="col-sm mb-3">
                        <input type="text" name="lastname" class="form-control" placeholder="Nom" required>
                      </div>
                      <div class="col-sm mb-3">
                        <input type="text" name="firstname" class="form-control" placeholder="Prénom" required>
                      </div>
                  </div>
                  <div class="col-sm mb-3">
                      <input type="text" name="adresse" class="form-control" placeholder="Adresse">
                  </div>
                  <div class="row">
                      <div class="col-sm-3 mb-3">
                        <input type="text" name="cp" class="form-control" placeholder="Code Postal">
                      </div>
                      <div class="col-sm-9 mb-3">
                        <input type="text" name="town" class="form-control" placeholder="Ville">
                      </div>
                  </div>
                  <div class="col-sm mb-3">
                    <label for="phone">Personne à contacter en cas de manque d'information:</label>
                    <div class="row">
                      <div class="col-sm-6 mb-3">
                        <input type="text" name="nom_contact" class="form-control" placeholder="Nom">
                      </div>
                      <div class="col-sm-6 mb-3">
                          <input type="text" name="phone_contact" class="form-control" placeholder="Téléphone">
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
        <div class="col-sm mb-2">
            <div class="card">
              <h5 class="card-header text-center">Adresse de la construction</h5>
              <div class="card-body">
                  <div class="col-sm mb-3">
                      <input type="text" name="adresse_co" class="form-control" placeholder="Adresse">
                  </div>
                  <div class="row">
                      <div class="col-sm-3 mb-3">
                      <input type="text" name="cp_co" class="form-control" placeholder="Code Postal">
                      </div>
                      <div class="col-sm-9 mb-3">
                      <input type="text" name="town_co" class="form-control" placeholder="Ville">
                      </div>
                  </div>
                  <div class="col-sm mb-3">
                      <input type="text" name="references_cadastrales" class="form-control" placeholder="Références Cadastrales">
                  </div>
              </div>
            </div>
        </div>
      </div>

      <div class="row">
        <div class="col-sm mb-2">
            <div class="card">
                <h5 class="card-header text-center">Adresse du maître d'oeuvre</h5>
                <div class="card-body">
                    <div class="form-check mb-2 mr-sm-2">
                        <input type="checkbox" class="form-check-input" name="different_mo" id="check_different_identity" value="0" />
                        <label class="form-check-label mb-3" for="inlineFormCheck">
                            Identitié du maître d'ouvrage différente
                        </label>
                    </div>
                    <div class="row" id="different_identity" style="display:none">
                        <div class="col-sm mb-3">
                            <input type="text" name="lastname_mo" class="form-control" placeholder="Nom">
                        </div>
                        <div class="col-sm mb-3">
                            <input type="text" name="firstname_mo" class="form-control" placeholder="Prénom">
                        </div>
                    </div>
                    <div class="col-sm mb-3">
                        <input type="text" name="adresse_co" class="form-control" placeholder="Adresse">
                    </div>
                    <div class="row">
                        <div class="col-sm-3 mb-3">
                        <input type="text" name="cp_co" class="form-control" placeholder="Code Postal">
                        </div>
                        <div class="col-sm-9 mb-3">
                        <input type="text" name="town_co" class="form-control" placeholder="Ville">
                        </div>
                    </div>
                    <div class="col-sm mb-3">
                      <label for="type_mo">Type</label>
                      <select class="form-select" >
                        <option value="Constructeur">Constructeur</option>
                        <option value="Maitre d'oeuvre">Maitre d'oeuvre</option>
                        <option value="Architecte">Architecte</option>
                        <option value="Auto-constructeur">Auto Constructeur</option>
                      </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm mb-2">
          <div class="card">
              <h5 class="card-header text-center">Le Projet</h5>
              <div class="card-body">
                <div class="col-sm mb-3">
                  <label for="date_pc">Date du permis de construire (au mois près)</label>
                  <input type="date" name="date_pc" class="form-control">
                </div>
                <div class="col-sm mb-3">
                  <label for="emplacement">Emplacement du projet</label>
                  <select name="emplacement" class="form-select" >
                    <option value="Rase campagne">Rase campagne</option>
                    <option value="Village">Village</option>
                    <option value="Zone Pavillonnaire">Zone pavillonnaire</option>
                    <option value="Centre ville">Centre ville</option>
                  </select>
                </div>
                {{-- <div class="col-sm mb-3">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="type_projet" id="type_projet1" value="Extension">
                    <label class="form-check-label" for="type_projet1">
                      Extension
                    </label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="type_projet" id="type_projet2" value="Construction" checked>
                    <label class="form-check-label" for="type_projet2">
                      Construction
                    </label>
                  </div>
                </div> --}}

              </div>
          </div>
      </div>
    </div>
    <div class="text-center my-3">
        <button class="btn btn-success" type="submit">Suivant</button>
    </div>
    </form>


    <script>
        $('#check_different_identity').change(function() {
            $('#different_identity').toggle();
        });
    </script>





@endsection



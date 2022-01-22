@extends('dashboard.layouts.app')

@section('content')

    <div class="section-title-dashboard mb-3 bg-light py-3">
        <h2>Données administratives</h2>
        <p>{{$projet->name}} (Projet: {{ $projet->number }})</p>
    </div>
    <form action="{{ route('administratif.create')}}" method="POST">
      @csrf
      <input type="hidden" name="projet_id" value={{ $projet->id }}>
      <div class="row mb-3">
        <div class="col-sm mb-2">
            <div class="card">
                <h5 class="card-header text-center">Adresse actuelle du maître d'ouvrage</h5>
                <div class="card-body">
                  <div class="row" novalidate>
                      <div class="col-sm mb-3">
                        <input type="text" name="lastname_ouvrage" class="form-control @error('lastname_ouvrage') is-invalid @enderror" value="{{ old('lastname_ouvrage') ?? $projet->maitre_ouvrage->lastname }}" placeholder="Nom">
                        @error('lastname_ouvrage')
                          <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="col-sm mb-3">
                        <input type="text" name="firstname_ouvrage" class="form-control @error('firstname_ouvrage') is-invalid @enderror" value="{{ old('firstname_ouvrage') ?? $projet->maitre_ouvrage->firstname }}" placeholder="Prénom">
                        @error('firstname_ouvrage')
                          <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>
                  </div>
                  <div class="col-sm mb-3">
                      <input type="text" name="adresse_ouvrage" class="form-control @error('adresse_ouvrage') is-invalid @enderror" value="{{ old('adresse_ouvrage') ?? $projet->maitre_ouvrage->adresse }}" placeholder="Adresse">
                      @error('adresse_ouvrage')
                        <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                    </div>
                  <div class="row">
                      <div class="col-sm-3 mb-3">
                        <input type="text" name="cp_ouvrage" class="form-control @error('cp_ouvrage') is-invalid @enderror" value="{{ old('cp_ouvrage') ?? $projet->maitre_ouvrage->cp }}" placeholder="Code Postal">
                        @error('cp_ouvrage')
                          <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="col-sm-9 mb-3">
                        <input type="text" name="town_ouvrage" class="form-control @error('town_ouvrage') is-invalid @enderror" value="{{ old('town_ouvrage') ?? $projet->maitre_ouvrage->ville }}" placeholder="Ville">
                        @error('town_ouvrage')
                          <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>
                  </div>
                  <div class="col-sm mb-3">
                    <label for="phone">Personne à contacter en cas de manque d'information:</label>
                    <div class="row">
                      <div class="col-sm-6 mb-3">
                        <input type="text" name="contact_name" class="form-control" value="{{ old('contact_name') ?? $projet->maitre_ouvrage->contact_name }}" placeholder="Nom">
                      </div>
                      <div class="col-sm-6 mb-3">
                          <input type="text" name="contact_phone" class="form-control" value="{{ old('contact_phone') ?? $projet->maitre_ouvrage->contact_phone}}" placeholder="Téléphone">
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
                    <input type="text" name="adresse_construction" class="form-control @error('adresse_construction') is-invalid @enderror" value="{{ old('adresse_construction') }}" placeholder="Adresse">
                    @error('adresse_construction')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="row">
                    <div class="col-sm-3 mb-3">
                      <input type="text" name="cp_construction" class="form-control @error('cp_construction') is-invalid @enderror" value="{{ old('cp_construction') }}" placeholder="Code Postal">
                      @error('cp_construction')
                        <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                    </div>
                    <div class="col-sm-9 mb-3">
                      <input type="text" name="town_construction" class="form-control @error('town_construction') is-invalid @enderror" value="{{ old('town_construction') }}" placeholder="Ville">
                      @error('town_construction')
                        <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                    </div>
                  </div>
                  <div class="col-sm mb-3">
                    <input type="text" name="ref_cadastrales" class="form-control @error('ref_cadastrales') is-invalid @enderror" value="{{ old('ref_cadastrales') }}" placeholder="Références Cadastrales">
                    @error('ref_cadastrales')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
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
                        <input type="checkbox" class="form-check-input" name="different_ouvrage"  {{ old('different_ouvrage') == 1 ? 'checked' : '' }} id="check_different_identity" value="1" />
                        <label class="form-check-label mb-3" for="inlineFormCheck">
                            Identitié du maître d'ouvrage différente
                        </label>
                    </div>
                    <div class="row" id="different_identity" style="display:none">
                        <div class="col-sm mb-3">
                            <input type="text" name="lastname_oeuvre" class="form-control" value="{{ old('lastname_oeuvre') }}"  placeholder="Nom">
                        </div>
                        <div class="col-sm mb-3">
                            <input type="text" name="firstname_oeuvre" class="form-control" value="{{ old('firstname_oeuvre') }}" placeholder="Prénom">
                        </div>
                    </div>
                    <div class="col-sm mb-3">
                        <input type="text" name="adresse_oeuvre" value="{{ old('adresse_oeuvre') }}" class="form-control" placeholder="Adresse">
                    </div>
                    <div class="row">
                        <div class="col-sm-3 mb-3">
                        <input type="text" name="cp_oeuvre" class="form-control" value="{{ old('cp_oeuvre') }}" placeholder="Code Postal">
                        </div>
                        <div class="col-sm-9 mb-3">
                        <input type="text" name="town_oeuvre" class="form-control" value="{{ old('town_oeuvre') }}" placeholder="Ville">
                        </div>
                    </div>
                    <div class="col-sm mb-3">
                      <label for="type_oeuvre">Type</label>
                      <select class="form-select" name="type_oeuvre">
                        <option value="Constructeur" {{ old('type_oeuvre') == "Constructeur" ? 'selected' : '' }}>Constructeur</option>
                        <option value="Maitre d'oeuvre" {{ old('type_oeuvre') == "Maitre d'oeuvre" ? 'selected' : '' }}>Maitre d'oeuvre</option>
                        <option value="Architecte" {{ old('type_oeuvre') == "Architecte" ? 'selected' : '' }}>Architecte</option>
                        <option value="Auto-constructeur" {{ old('type_oeuvre') == "Auto-constructeur" ? 'selected' : '' }}>Auto Constructeur</option>
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
                  <input type="date" name="date_pc" class="form-control @error('date_pc') is-invalid @enderror" value="{{ old('date_pc') }}">
                  @error('date_pc')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
                <div class="col-sm mb-3">
                  <label for="emplacement">Emplacement du projet</label>
                  <select name="emplacement" class="form-select" >
                    <option value="Rase campagne" {{ old('emplacement') == "Rase campagne" ? 'selected' : '' }}>Rase campagne</option>
                    <option value="Village" {{ old('emplacement') == "Village" ? 'selected' : '' }}>Village</option>
                    <option value="Zone pavillonnaire" {{ old('emplacement') == "Zone pavillonnaire" ? 'selected' : '' }}>Zone pavillonnaire</option>
                    <option value="Centre ville" {{ old('emplacement') == "Centre ville" ? 'selected' : '' }}>Centre ville</option>
                  </select>
                </div>
              </div>
          </div>
        </div>
      </div>
    <div class="text-center my-3">
        <button class="btn btn-success" type="submit">Suivant <i class="fas fa-arrow-right"></i></button>
    </div>
    </form>


    <script>
        $('#check_different_identity').change(function() {
            $('#different_identity').toggle();
        });

        $(function() {
          if ($('#check_different_identity').is(":checked")) {
              $('#different_identity').show();
            } else {
              $('#different_identity').hide();
            }
          });
    </script>





@endsection



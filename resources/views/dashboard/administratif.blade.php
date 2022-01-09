@extends('dashboard.layouts.app')

@section('content')

    <div class="section-title-dashboard mb-3 bg-light py-3">
        <h2>Données administratives</h2>
    </div>
    <div class="row">
        <div class="col-sm mb-2">
            <div class="card">
                <h5 class="card-header text-center">Adresse actuelle du maître d'ouvrage</h5>
                <div class="card-body">
                    <form>
                        <div class="row">
                            <div class="col-sm mb-3">
                            <input type="text" name="lastname" class="form-control" placeholder="Nom">
                            </div>
                            <div class="col-sm mb-3">
                            <input type="text" name="firstname" class="form-control" placeholder="Prénom">
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
                    </form>
                </div>
            </div>
        </div> 
        <div class="col-sm mb-2">
            <div class="card">
                <h5 class="card-header">Adresse de la construction</h5>
                <div class="card-body">
                    <div class="form-check mb-2 mr-sm-2">
                        <input type="checkbox" class="form-check-input" name="mycheckbox" id="check_different_identity" value="0" />
                        <label class="form-check-label mb-3" for="inlineFormCheck">
                            Identitié du maître d'ouvrage différente
                        </label>
                    </div>
                    <div class="row" id="different_identity" style="display:none">
                        <div class="col-sm mb-3">
                            <input type="text" name="lastname" class="form-control" placeholder="Nom">
                        </div>
                        <div class="col-sm mb-3">
                            <input type="text" name="firstname" class="form-control" placeholder="Prénom">
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
                        <input type="text" name="references_cadastrales" class="form-control" placeholder="Références Cadastrales">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="text-center my-3">
            <button class="btn btn-secondary">Précédent</button>
            <button class="btn btn-success">Suivant</button>
        </div>
    </div>

    <script>
        $('#check_different_identity').change(function() {
            $('#different_identity').toggle();
        });
    </script>



@endsection
            


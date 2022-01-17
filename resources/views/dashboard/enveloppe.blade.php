@extends('dashboard.layouts.app')

@section('content')

    <div class="section-title-dashboard mb-3 bg-light py-3">
        <h2>Enveloppe</h2>
    </div>
    {{-- **********  SURFACES  ********** --}}
    <div class="card mb-3">
      <div class="card-body">
        <div class="d-flex justify-content-between">
          <h3 class="green"><i class="fas fa-check"></i> Surfaces</h3>
          <a class="btn btn-primary" data-bs-toggle="collapse" href="#surfaces" role="button" aria-expanded="false" aria-controls="collapseExample">
            Modifier
          </a>
        </div>
        <div class="collapse mt-3" id="surfaces">
            <div class="row mt-2">
              <label for="type_projet" class="form-label">Type de projet: </label>
              <div class="form-group" id="type_projet">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="type_projet" id="extension" value="Extension">
                  <label class="form-check-label" for="extension">
                    Extension
                  </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="type_projet" id="construction" value="Construction">
                  <label class="form-check-label" for="construction">
                    Construction
                  </label>
                </div>
              </div>
            </div>
            <div id="extensionDiv" class="mt-3">
              <form>
                <div class="mb-3">
                  <label for="surface_srt" class="form-label">Surface S.RT (m<sup>2</sup>)</label>
                  <input type="text" class="form-control" id="surface_srt">
                </div>
                <div class="mb-3">
                  <label for="surface_hab" class="form-label">Surface habitable (m<sup>2</sup>)</label>
                  <input type="text" class="form-control" id="surface_hab">
                </div>
                <div class="mb-3">
                  <label for="surface_exist" class="form-label">Surface S.RT existant (m<sup>2</sup>)</label>
                  <input type="text" class="form-control" id="surface_exist">
                </div>
                <button type="submit" class="btn btn-primary">Valider cet onglet</button>
              </form>
            </div>
            <div id="constructionDiv" class="mt-3">
              <form>
                <div class="mb-3">
                  <label for="surface_srt" class="form-label">Surface S.RT (m<sup>2</sup>)</label>
                  <input type="text" class="form-control" id="surface_srt">
                </div>
                <div class="mb-3">
                  <label for="surface_hab" class="form-label">Surface habitable (m<sup>2</sup>)</label>
                  <input type="text" class="form-control" id="surface_hab">
                </div>
                <button type="submit" class="btn btn-primary">Valider cet onglet</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    {{-- **********  ENVELOPPE  ********** --}}
    <div class="card mb-3">
      <div class="card-body">
        <div class="d-flex justify-content-between">
          <h3>Enveloppe</h3>
          <a class="btn btn-primary" data-bs-toggle="collapse" href="#enveloppe" role="button" aria-expanded="false" aria-controls="collapseExample">
            Saisir
          </a>
        </div>
        <div class="collapse mt-3" id="enveloppe">
          <div>
            Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
          </div>
        </div>
      </div>
    </div>
    {{-- **********  VENTILATION  ********** --}}
    <div class="card mb-3">
      <div class="card-body">
        <div class="d-flex justify-content-between">
          <h3>Ventilation</h3>
          <a class="btn btn-primary" data-bs-toggle="collapse" href="#ventilation" role="button" aria-expanded="false" aria-controls="collapseExample">
            Saisir
          </a>
        </div>
        <div class="collapse mt-3" id="ventilation">
          <div>
            Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
          </div>
        </div>
      </div>
    </div>

<script type="text/javascript">
  $(function() {
    $("input[name='type_projet']").click(function() {
      if ($("#extension").is(":checked")) {
        $("#extensionDiv").show();
      } else {
        $("#extensionDiv").hide();
      }
    });
  });

  $(function() {
    $("input[name='type_projet']").click(function() {
      if ($("#construction").is(":checked")) {
        $("#constructionDiv").show();
      } else {
        $("#constructionDiv").hide();
      }
    });

  });
</script>


@endsection

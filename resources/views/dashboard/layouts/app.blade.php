<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>eNno Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/assets/img/favicon.png" rel="icon">
  <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Fontawesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

  <!-- Bootstrap -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


  <!-- Vendor CSS Files -->
  <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/assets/css/style.css" rel="stylesheet">

</head>

<body>
    @include('dashboard.layouts.header')

    <div id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper" class="bg-dark">
            <ul class="sidebar-nav">
              <div class="text-center mt-2 mb-5">
                <a href="http://" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Ajouter un projet</a>
              </div>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('dashboard') ? 'active' : ''}}" href="{{ route('dashboard') }}"><i class="fas fa-home"></i> Accueil</a>
                </li>
              <div class="card-menu">
                <div>
                    <p class="mb-0"><u>Votre projet:</u></p>
                    <p>{{ $projet->name }}
                        <span>
                            <small>
                                <a href="#ModalChangeNameProjet" data-toggle="modal" data-target="#ModalChangeNameProjet"><i class="fas fa-edit"></i></a>
                            </small>
                        </span>
                    </p>
                </div>
                <div>
                    <p class="mb-0"><u>Votre pack:</u></p>
                    <p>{{ $projet->pack->name }} <span><small><a href="{{ route('projet.choice_pack', $projet->id) }}"><i class="fas fa-edit"></i></a></small></span></p>
                </div>
            </div>
                <li class="nav-item">
                  <a class="nav-link {{ request()->is('administratif') ? 'active' : ''}}" href="{{ route('administratif') }}"><i class="far fa-id-card"></i> Données administratives</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link {{ request()->is('enveloppe') ? 'active' : ''}}" href="{{ route('enveloppe') }}"><i class="fas fa-cube"></i> Données techniques</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->
          <a href="#menu-toggle" class="btn mb-3 bg-dark mt-2" id="menu-toggle"><i class="fas fa-arrow-left text-white"></i></a>
          <!-- Page Content -->
        <div class="container-fluid">

          @yield('content')

        </div>

</div>

<!-- Modal -->
<div class="modal fade ModalChangeNameProjet" tabindex="-1" role="dialog" aria-labelledby="ModalChangeNameProjet" aria-hidden="true" id="ModalChangeNameProjet">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modifier le nom du projet</h5>
      </div>
      <form action="{{ route('projet.rename')}}" method="post">
          <input type="hidden" name="projet_id" value="{{ $projet->id }}">
          @csrf
          <div class="modal-body">
            <div class="input-group mb-3">
              <span class="input-group-text" id="inputGroup-sizing-default">Nom du projet:</span>
              <input type="text" class="form-control" name="projet_name" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline-secondary btn-sm" data-dismiss="modal">Ignorer</button>
            <button type="submit" class="btn btn-primary">Modifier</button>
          </div>
        </form>
    </div>
  </div>
</div>

<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
        if($( "#wrapper" ).hasClass( "toggled" )){
            $("#menu-toggle").html('<i class="fas fa-arrow-right text-white"></i>')
        }else{
            $("#menu-toggle").html('<i class="fas fa-arrow-left text-white"></i>')
        }
    });

    </script>
    <!-- /#wrapper -->
    @include('flashy::message')
</body>

</html>

@extends('layouts.app')

@section('content')
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><h1><span class="green">M-</span>Green</h1></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<div id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper" class="bg-dark">
            <ul class="sidebar-nav">
              <div class="text-center mt-2 mb-5">
                <a href="http://" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Ajouter un projet</a>
              </div>

                <li>
                    <a href="#">Dashboard</a>
                </li>
                <li>
                    <a href="#" class="nav-active"><i class="far fa-id-card"></i> Informations</a>
                </li>
                <li>
                    <a href="#">Overview</a>
                </li>
                <li>
                    <a href="#">Events</a>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#">Services</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->
          <a href="#menu-toggle" class="btn mb-3 bg-dark mt-2" id="menu-toggle"><i class="fas fa-arrow-left text-white"></i></a>
        <!-- Page Content -->
          <div id="generic_price_table">
              <div class="section-title-dashboard mb-3 bg-light py-3">
                <h2>CHOISIR UN PACK RE2020</h2>
              </div>
                    <div class="container">
                        <!--BLOCK ROW START-->
                        <div class="row">
                            <div class="col-md-4">
                              <!--PRICE CONTENT START-->
                                <div class="generic_content clearfix">
                                    <!--HEAD PRICE DETAIL START-->
                                    <div class="generic_head_price clearfix">
                                        <!--HEAD CONTENT START-->
                                        <div class="generic_head_content clearfix">
                                          <!--HEAD START-->
                                            <div class="head_bg">
                                            </div>
                                            <div class="head">
                                                <span>PACK PERMIS</span>
                                            </div>
                                            <!--//HEAD END-->
                                        </div>
                                        <!--//HEAD CONTENT END-->

                                        <!--PRICE START-->
                                        <div class="generic_price_tag clearfix">
                                            <span class="price">
                                                <span class="currency">119</span>
                                                <span class="sign">€</span>
                                                <span class="cent"> </span>
                                                <span class="month">TTC</span>
                                            </span>
                                        </div>
                                        <!--//PRICE END-->

                                    </div>
                                    <!--//HEAD PRICE DETAIL END-->

                                    <!--FEATURE LIST START-->
                                    <div class="generic_feature_list">
                                      <ul>
                                          <li><span>✔ Etude thermique RE 2020</span>
                                              <br>Calcul du Bbio et du DH
                                              <br>Délai de 3 jours ouvrés
                                              <br>Quelle que soit la surface
                                          </li>
                                          <li><span>✔  Attestation du permis de construire</span>
                                            <br>Générée par vos soins avec nos explications
                                        </li>
                                        </li>
                                        <li><span>✔ Assurance décennale</span>
                                      </li>
                                      <li><span>✔ Modifications de votre étude</span>
                                        <br>2 variantes - Conseils du thermicien
                                    </li>
                                        </ul>
                                    </div>
                                    <!--//FEATURE LIST END-->

                                    <!--BUTTON START-->
                                    <div class="generic_price_btn clearfix">
                                      <a class="" href="">Choisir ce pack</a>
                                    </div>
                                    <!--//BUTTON END-->

                                </div>
                                <!--//PRICE CONTENT END-->

                            </div>

                            <div class="col-md-4">

                              <!--PRICE CONTENT START-->
                                <div class="generic_content active clearfix">

                                    <!--HEAD PRICE DETAIL START-->
                                    <div class="generic_head_price clearfix">

                                        <!--HEAD CONTENT START-->
                                        <div class="generic_head_content clearfix">

                                          <!--HEAD START-->
                                            <div class="head_bg"></div>
                                            <div class="head">
                                                <span>Pack Permis +</span>
                                            </div>
                                            <!--//HEAD END-->

                                        </div>
                                        <!--//HEAD CONTENT END-->

                                        <!--PRICE START-->
                                        <div class="generic_price_tag clearfix">
                                          <span class="price">
                                              <span class="currency">159</span>
                                              <span class="sign">€</span>
                                              <span class="cent"> </span>
                                              <span class="month">TTC</span>
                                          </span>
                                      </div>
                                        <!--//PRICE END-->

                                    </div>
                                    <!--//HEAD PRICE DETAIL END-->

                                    <!--FEATURE LIST START-->
                                    <div class="generic_feature_list">
                                      <ul>
                                          <li><span>2GB</span> Bandwidth</li>
                                            <li><span>150GB</span> Storage</li>
                                            <li><span>12</span> Accounts</li>
                                            <li><span>7</span> Host Domain</li>
                                            <li><span>24/7</span> Support</li>
                                        </ul>
                                    </div>
                                    <!--//FEATURE LIST END-->

                                    <!--BUTTON START-->
                                    <div class="generic_price_btn clearfix">
                                      <a class="" href="">Choisir ce pack</a>
                                    </div>
                                    <!--//BUTTON END-->

                                </div>
                                <!--//PRICE CONTENT END-->

                            </div>
                            <div class="col-md-4">

                              <!--PRICE CONTENT START-->
                                <div class="generic_content clearfix">

                                    <!--HEAD PRICE DETAIL START-->
                                    <div class="generic_head_price clearfix">

                                        <!--HEAD CONTENT START-->
                                        <div class="generic_head_content clearfix">

                                          <!--HEAD START-->
                                            <div class="head_bg"></div>
                                            <div class="head">
                                                <span>Unlimited</span>
                                            </div>
                                            <!--//HEAD END-->

                                        </div>
                                        <!--//HEAD CONTENT END-->

                                        <!--PRICE START-->
                                        <div class="generic_price_tag clearfix">
                                            <span class="price">
                                                <span class="sign">$</span>
                                                <span class="currency">299</span>
                                                <span class="cent">.99</span>
                                                <span class="month">/MON</span>
                                            </span>
                                        </div>
                                        <!--//PRICE END-->

                                    </div>
                                    <!--//HEAD PRICE DETAIL END-->

                                    <!--FEATURE LIST START-->
                                    <div class="generic_feature_list">
                                      <ul>
                                          <li><span>2GB</span> Bandwidth</li>
                                            <li><span>150GB</span> Storage</li>
                                            <li><span>12</span> Accounts</li>
                                            <li><span>7</span> Host Domain</li>
                                            <li><span>24/7</span> Support</li>
                                        </ul>
                                    </div>
                                    <!--//FEATURE LIST END-->

                                    <!--BUTTON START-->
                                    <div class="generic_price_btn clearfix">
                                      <a class="" href="">Choisir ce pack</a>
                                    </div>
                                    <!--//BUTTON END-->

                                </div>
                                <!--//PRICE CONTENT END-->

                            </div>
                        </div>
                        <!--//BLOCK ROW END-->
                        <div class="text-center mt-3">
                          <p class="text-secondary"><i>Le calcul de l’analyse du cycle de vie (ACV) du projet (coefficients Ic) sera prochainement proposée en option. Ce calcul est facultatif au permis de construire.</i></p>
                        </div>
                    </div>
            </div>

    </div>
    <!-- /#wrapper -->
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
@endsection

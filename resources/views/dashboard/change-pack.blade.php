@extends('dashboard.layouts.app')

@section('content')

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
                                            <span>Pack {{ $pack1->name }}</span>
                                        </div>
                                        <!--//HEAD END-->
                                    </div>
                                    <!--//HEAD CONTENT END-->

                                    <!--PRICE START-->
                                    <div class="generic_price_tag clearfix">
                                        <span class="price">
                                            <span class="currency">{{ $pack1->price }}</span>
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
                                    <form action="{{ route('projet.change_pack')}}" method="POST">
                                        @csrf
                                        <input type="hidden" name="projet_id" value="{{ $projet->id }}">
                                        <input type="hidden" name="pack_id" value="{{ $pack1->id }}">

                                        <button class="btn btn-success" type="submit">Choisir ce pack</button>
                                    </form>

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
                                        <div class="head_bg">
                                        </div>
                                        <div class="head">
                                            <span>Pack {{ $pack2->name }}</span>
                                        </div>
                                        <!--//HEAD END-->
                                    </div>
                                    <!--//HEAD CONTENT END-->

                                    <!--PRICE START-->
                                    <div class="generic_price_tag clearfix">
                                        <span class="price">
                                            <span class="currency">{{ $pack2->price }}</span>
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
                                    <form action="{{ route('projet.change_pack')}}" method="POST">
                                        @csrf
                                        <input type="hidden" name="projet_id" value="{{ $projet->id }}">
                                        <input type="hidden" name="pack_id" value="{{ $pack2->id }}">

                                        <button class="btn btn-success" type="submit">Choisir ce pack</button>
                                    </form>

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
                                        <div class="head_bg">
                                        </div>
                                        <div class="head">
                                            <span>Pack {{ $pack3->name }}</span>
                                        </div>
                                        <!--//HEAD END-->
                                    </div>
                                    <!--//HEAD CONTENT END-->

                                    <!--PRICE START-->
                                    <div class="generic_price_tag clearfix">
                                        <span class="price">
                                            <span class="currency">{{ $pack3->price }}</span>
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
                                    <form action="{{ route('projet.change_pack')}}" method="POST">
                                        @csrf
                                        <input type="hidden" name="projet_id" value="{{ $projet->id }}">
                                        <input type="hidden" name="pack_id" value="{{ $pack3->id }}">

                                        <button class="btn btn-success" type="submit">Choisir ce pack</button>
                                    </form>

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

@endsection

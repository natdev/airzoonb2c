<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
<title>Document</title>
</head>
<body>
    <header id="offer">
       <div class="container">
         <div class="row">
           <div class="menu-top">
             <span class="logo">
               <a href=""><img src="<?php echo get_template_directory_uri()."/images/logo-airzoon.png" ?>" alt=""></a>
             </span>
             <nav class="social-menu">
                <ul>
                   <li class="social-front">
                     <a href=""><i class="fas fa-phone fa-sm phone-menu-front"></i> 0596 00 00 00</a>
                   </li>
                   <li class="social-front">
                     <a href="https://www.facebook.com/airzoon"><i class="fab fa-facebook"></i></a>
                   </li>
                   <li class="social-front">
                     <a href="https://twitter.com/airzoonwifi"><i class="fab fa-twitter"></i></a>
                   </li>
                   <li class="social-front">
                     <a href="https://www.instagram.com/airzoon/"><i class="fab fa-instagram"></i></a>
                   </li>
                   <li class="social-front">
                     <a href="">l</a>
                   </li>
                 </ul>
             </nav>
           </div>
           <div class="container">
           <div id="promoM" class="row">
             <div class="perfect-desc col-lg-5 col-md-12">
               <h1>Perfect Spot.</h1>
               <p class="font-weight-bold">
                 Bénéficier d'un code premium et surfez sans intéruption
                 et 4x plus vite.
               </p>
               <p>
                 Surfez en toute sécurité dans les portails airZoon chez l'ensemble de nos partenaires
                 en Guadeloupe, en Guyane et en Martinique.
               </p>
               <a href="#"class="btn btn-success">
                 ESSAI GRATUIT
               </a>
             </div>
             <div id="offre" class="col-lg-7 col-md-12 mt-md-3 mt-2">
              <div class="container">
                <div class="row">
                  <div class="card-offre enable-offre col-lg-6 col-md-6 col-sm-6 col-12 text-center">
                    <h4 class="title">
                      <span class="d-block">airZoon No Limit</span>
                      ONE SHOT
                    </h4>
                    <p class="price">9,99€</p>
                    <p class="description">
                      Coupon premium d'une durée de 3 semaine de surf illimité et sans intéruption
                    </p>
                    <a class="btn btn-danger" href="https://secure.payplug.com/p/jFOl5">
                      Souscrire
                    </a>
                  </div>
                  <div class="card-offre desable-offre col-lg-6 col-md-6 col-sm-6 col-12 text-center">
                    <h4 class="title">
                      <span class="d-block">airZoon No Limit</span>
                      Air
                    </h4>
                    <p class="price">9,99€</p>
                    <p class="description">
                      Abonnement mensuel pour surfer sans contrainte
                    </p>
                    <a class="btn btn-danger">
                      Souscrire
                    </a>
                  </div>
                </div>
              </div>
             </div>
           </div>
         </div>
         </div>
       </div>
    </header>

<!--airzoon content-->
<main>
  <section class="arguments">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="map">
            <div class="map_wrap">
              <div class="mapIN">
                <div id="map_canvas"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-7">
          <div class="arg-list">
            <h2 class="section-title">Pourquoi utiliser airZoon ?</h2>
             <ul>
               <li><span>Un code premium pour se connecter 4x plus rapidement</span></li>
               <li><span>Un surf illimité sans aucune intérruption</span></li>
               <li><span>Valable dans tous les hotspots airZoon WIFI en Guadeloupe, Martinique et Guyane</span></li>
               <li><span>Une appli mobile gratuite pour vous permettre de trouver tous les hotspots WIFI disponible où que vous soyez</span></li>
             </ul>
          <span class="link-green"><a href="#">TOUTES LES FONCTIONNALITES AIRZOON</a></span>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="newsletter">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h3>Rejoins notre communauté :</h3>
          <p>
            Tu souhaites recevoir les actualités WIFI, nos nouvelles offres airZoon,
            les propostions de nos partenaires ou les nouveaux hotspots WIFI gratuits autour de toi ?
            Alors inscris toi à notre newsletter...c'est gratuit !
          </p>
        </div>
        <?php if ( is_active_sidebar( 'airzoon_newsletter' ) ) : ?>

          <?php dynamic_sidebar( 'airzoon_newsletter' ); ?>

        <?php endif; ?>
        <!--<div class="col-lg-6">
          <form class="newsletter-form" action="index.html" method="post">
            <input class="newsletter-field" type="text" name="" value="">
            <input class="newsletter-btn" type="button" name="" value="S'inscrire">
          </form>
        </div>-->
      </div>
    </div>
  </section>
  <section class="testimonials">
    <div class="container">
        <h2 class="section-title text-center">Ils nous font confiance</h2>
        <div id="testimonialsControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <p>"Wow! C'est kiffant de réviser ses épreuves d'examen connectée à la plage"</p>
    </div>
    <div class="carousel-item">
      <p>"Wow! C'est kiffant de réviser ses épreuves d'examen connectée à la plage"</p>
    </div>
    <div class="carousel-item">
      <p>"Wow! C'est kiffant de réviser ses épreuves d'examen connectée à la plage"</p>
    </div>
  </div>
  <a class="carousel-control-prev" href="#testimonialsControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#testimonialsControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
      </div>
    </div>
  </section>
  <section class="partenaires">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-12">
          <h2 class="section-title text-center">Rejoins un hotspots partenaire</h2>
          <div class="responsive" data-slick='{"slidesToShow": 6, "slidesToScroll": 1, "arrows":true, "dots":true, "infinite":true, "autoplay":true}'>
        <div><a href="#"><img src="https://image.freepik.com/free-vector/luxury-letter-e-logo-design_1017-8903.jpg"></a></div>
        <div><a href="#"><img src="https://image.freepik.com/free-vector/3d-box-logo_1103-876.jpg"></a></div>
        <div><a href="#"><img src="https://image.freepik.com/free-vector/blue-tech-logo_1103-822.jpg"></a></div>
        <div><a href="#"><img src="https://image.freepik.com/free-vector/colors-curl-logo-template_23-2147536125.jpg"></a></div>
        <div><a href="#"><img src="https://image.freepik.com/free-vector/abstract-cross-logo_23-2147536124.jpg"></a></div>
        <div><a href="#"><img src="https://image.freepik.com/free-vector/football-logo-background_1195-244.jpg"></a></div>
        <div><a href="#"><img src="https://image.freepik.com/free-vector/background-of-spots-halftone_1035-3847.jpg"></a></div>
        <div><a href="#"><img src="https://image.freepik.com/free-vector/retro-label-on-rustic-background_82147503374.jpg"></a></div>
     </div>
     <div class="btn btn-success">
       <a href="http://airzoon.com/nos-partenaires/?lang=nos-partenaires">TOUS NOS PARTENAIRES</a>
     </div>
 </div>
 </div>
    </div>
  </section>
  <section class="pub">
    <div class="container">
      <div class="row">
        <div class="pubDesc">
          <p>
            Tu souhaites diffuse de la publicité à un tarif attractif auprès de
            tous les utilisateurs dans les hotspots airZoon en Guadeloupe, en Guyane et en Martinique ?
          </p>
          <span class="btn btn-danger">
            <a href="http://informations.airzoon.com">RECEVOIR PLUS D'INFORMATIONS</a>
          </span>
        </div>
      </div>
    </div>
  </section>
  <section class="slogan">
    <div class="container">
      <div class="row">
        <div class=" sloganIN col-lg-12 col-md-12 col-sm-12 col-12"><p>airZoon est amoureusement conçu en Martinique</p></div>
        <div class="anchor-wrap col-lg-12 col-md-12 col-sm-12 col-12"><a class="anchor" href="#offer">Back to the top</a></div>
      </div>
    </div>
  </section>

  <footer>
    <div class="container">
      <hr>
      <div class="row">
        <div class="menu-footer">
          <span class="logo-footer">
            <a href=""><img src="<?php echo get_template_directory_uri()."/images/logo-airzoon.png" ?>" alt=""></a>
          </span>
          <nav class="menu-footerIN">
             <ul>
                <li class="item-footer">
                  <a href="">CGV</a>
                </li>
                <li class="item-footer">
                  <a href="">Souscription</a>
                </li>
                <li class="item-footer">
                  <a href="">Kit média</a>
                </li>
                <li class="item-footer">
                  <a href="">CGU hotspots services</a>
                </li>
                <li class="item-footer">
                  <a href="">Mentions légales</a>
                </li>
                <li class="item-footer">
                  <span>
                    <a href="https://www.facebook.com/airzoon"><i class="fab fa-facebook face-color"></i></a>
                    <a href="https://twitter.com/airzoonwifi"><i class="fab fa-twitter twit-color"></i></a>
                  </span>
                </li>
              </ul>
          </nav>
        </div>
      </div>
    </div>
  </footer>
</main>
    <?php wp_footer(); ?>
    <script type="text/javascript">
      $(document).ready(function() {

          /*###################################*/
          var mapCenter = new google.maps.LatLng(14.701403, -61.001142); //Google map Coordinates
          var map;
          var spotInfo = [];
          map_initialize(); // initialize google map

          //############### Google Map Initialize ##############
          function map_initialize() {
              var googleMapOptions = {
                  // center: mapCenter, // map center
                  center: {lat: 15.45, lng: -61.15},
                  zoom: 8, //zoom level, 0 = earth view to higher value

                  mapTypeId: google.maps.MapTypeId.ROADMAP // google map type
              };

              map = new google.maps.Map(document.getElementById("map_canvas"), googleMapOptions);

              //Load Markers from the XML File, Check (map_process.php)
              // $.get( "http://app.airzoon.com/wp-content/themes/airzoon-app/map/json.php", function( data ) {
              $.get( "//airzoonapp.com/json.php", function( data ) {
                  var jsondata = jQuery.parseJSON(data);
                  $.each(jsondata, function(idx, obj) {
                      //alert(obj.zip);
                      var name = obj.name;
                      var address_data = obj.address + ',' + obj.address2 + ',' + obj.zip + ',' + obj.city + ',' + obj.country;
                      address_data = address_data.replace(/,undefined/g, "");
                      //address_data=address_data.replace(/undefined/g,"");
                      //alert(address_data);
                      var address = '<p>' + address_data + '<br/>Speed:' + obj.speed + 'Mbps</p>';
                      var type = obj.type;
                      var point = new google.maps.LatLng(parseFloat(obj.lat), parseFloat(obj.lng));
                      // if(type == 'airzone')
                      var icon;
                      /* if(type == 'paid')
                  {
                   icon = "http://airzoonapp.com/iconsmap/paidmarkerfinal.png";
                  }*/
                      //if(type == 'airzone')
                      //{
                      icon = "http://app.airzoon.com/wp-content/themes/airzoon-app/img/marker.png";
                      //}
                      /*if(type == 'free')
                        {
                         icon = "http://airzoonapp.com/iconsmap/freemarkerfinal.png";
                      }*/

                      create_marker(point, name, address, false, false, false, icon);
                  });
              });

              //Right Click to Drop a New Marker
              google.maps.event.addListener(map, 'rightclick', function(event) {
                  //Edit form to be displayed with new marker

                  //Drop a new Marker with our Edit Form
                  //create_marker(event.latLng, 'New Marker', EditForm, true, true, true, "http://localhost/google_map_new/iconsmap/pin_green.png");
              });

          }

          //############### Create Marker Function ##############
          function create_marker(MapPos, MapTitle, MapDesc, InfoOpenDefault, DragAble, Removable, iconPath) {

              //new marker
              var marker = new google.maps.Marker({
                  position: MapPos,
                  map: map,
                  draggable: DragAble,
                  animation: google.maps.Animation.DROP,
                  //title:"Hello World!",
                  icon: iconPath,
                  name: MapTitle,
                  descp: MapDesc
              });

              //Content structure of info Window for the Markers
              var contentString = $('<div><span class="info-content">' +
                  '<h1 class="marker-heading">' + MapTitle + '</h1>' +
                  MapDesc +
                  '</span></div>');


              //Create an infoWindow
              var infowindow = new google.maps.InfoWindow();
              //set the content of infoWindow
              infowindow.setContent(contentString[0]);


              //add click listner to save marker button
              google.maps.event.addListener(marker, 'click', function() {
                  //infowindow.open(map,marker); // click on marker opens info window
                  console.log(marker.name)
                  document.getElementById('spotName').innerHTML = (marker.name);
                  document.getElementById('spotAddress').innerHTML = (marker.descp);
              });

              if (InfoOpenDefault) //whether info window should be open by default
              {
                  infowindow.open(map, marker);
              }
          }

          //############### Remove Marker Function ##############
          function remove_marker(Marker) {

              /* determine whether marker is draggable
              new markers are draggable and saved markers are fixed */
              if (Marker.getDraggable()) {
                  Marker.setMap(null); //just remove new marker
              } else {
                  //Remove saved marker from DB and map using jQuery Ajax
                  var mLatLang = Marker.getPosition().toUrlValue(); //get marker position
                  var myData = {
                      del: 'true',
                      latlang: mLatLang
                  }; //post variables
                  $.ajax({
                      type: "POST",
                      url: "map_process.php",
                      data: myData,
                      success: function(data) {
                          Marker.setMap(null);
                          alert(data);
                      },
                      error: function(xhr, ajaxOptions, thrownError) {
                          alert(thrownError); //throw any errors
                      }
                  });
              }

          }

          //############### Save Marker Function ##############
          function save_marker(Marker, mName, mAddress, mType, replaceWin) {
              //Save new marker using jQuery Ajax
              var mLatLang = Marker.getPosition().toUrlValue(); //get marker position
              var myData = {
                  name: mName,
                  address: mAddress,
                  latlang: mLatLang,
                  type: mType
              }; //post variables
              console.log(replaceWin);
              $.ajax({
                  type: "POST",
                  url: "map_process.php",
                  data: myData,
                  success: function(data) {
                      replaceWin.html(data); //replace info window with new html
                      Marker.setDraggable(false); //set marker to fixed
                      Marker.setIcon('http://----PATH-TO-YOUR-WEBSITE-ICON-------/icons/pin_blue.png'); //replace icon
                  },
                  error: function(xhr, ajaxOptions, thrownError) {
                      alert(thrownError); //throw any errors
                  }
              });
          }

      });
    </script>


</body>
</html>

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
                     <a href=""><i class="fab fa-facebook"></i></a>
                   </li>
                   <li class="social-front">
                     <a href=""><i class="fab fa-twitter-square"></i></a>
                   </li>
                   <li class="social-front">
                     <a href=""><i class="fab fa-instagram"></i></a>
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
                  <div class="card-offre enable-offre col-lg-6 col-md-6 text-center">
                    <h4 class="title">
                      <span class="d-block">airZoon No Limit</span>
                      ONE SHOT
                    </h4>
                    <p class="price">9,99€</p>
                    <p class="description">
                      Coupon premium d'une durée de 3 semaine de surf illimité et sans intéruption
                    </p>
                    <a class="btn btn-danger">
                      Souscrire
                    </a>
                  </div>
                  <div class="card-offre desable-offre col-lg-6 col-md-6 text-center">
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
          <span class="link-green"><a href="#">TOUTES LES FONCIONNALITES AIRZOON</a></span>
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
        <div class="col-lg-6">
          <form class="newsletter-form" action="index.html" method="post">
            <input class="newsletter-field" type="text" name="" value="">
            <input class="newsletter-btn" type="button" name="" value="S'inscrire">
          </form>
        </div>
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
       <a href="#">TOUS NOS PARTENAIRES</a>
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
            RECEVOIR PLUS D'INFORMATIONS
          </span>
        </div>
      </div>
    </div>
  </section>
  <section class="slogan">
    <div class="container">
      <div class="row">
        <div class=" sloganIN col-lg-12 col-md-12 col-sm-12 col-12"><p>airZoon est amoureusement conçu en Martinique</p></div>
        <div class="anchor col-lg-12 col-md-12 col-sm-12 col-12"><a href="#">Back to the top</a></div>
      </div>
    </div>
  </section>

  <footer>
    <div class="container">
      <div class="row">
        <hr>
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
                <li class="item-footer social-footer">
                  <a href=""><i class="fab fa-facebook"></i></a>
                </li>
                <li class="item-footer social-footer">
                  <a href=""><i class="fab fa-twitter-square"></i></a>
                </li>
              </ul>
          </nav>
        </div>
      </div>
    </div>
  </footer>
</main>

    <?php wp_footer(); ?>
</body>
</html>

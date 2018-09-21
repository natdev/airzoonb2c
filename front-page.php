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
             <div class="btn btn-success">
               ESSAI GRATUIT
             </div>
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
                  <div class="btn btn-danger">
                    Souscrire
                  </div>
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
                  <div class="btn btn-danger">
                    Souscrire
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
            <h2>Pourquoi utiliser airZoon ?</h2>
             <ul>
               <li><span>Un code premium pour se connecter 4x plus rapidement</span></li>
               <li><span>Un surf illimité sans aucune intérruption</span></li>
               <li><span>Valable dans tous les hotspots airZoon WIFI en Guadeloupe, Martinique et Guyane</span></li>
               <li><span>Une appli mobile gratuite pour vous permettre de trouver tous les hotspots WIFI disponible où que vous soyez</span></li>
             </ul>
          <span class="link-blue"><a href="#">TOUTES LES FONCIONNALITES AIRZOON</a></span>
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
</main>

    <?php wp_footer(); ?>
</body>
</html>

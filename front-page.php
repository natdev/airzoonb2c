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
         <nav>
           <ul>
             <span>
               <a href=""><img src="<?php echo get_template_directory_uri()."/images/logo-airzoon.png" ?>" alt=""></a>
             </span>
             <li>
               <a href="">f</a>
             </li>
             <li>
               <a href="">t</a>
             </li>
             <li>
               <a href="">i</a>
             </li>
             <li>
               <a href="">l</a>
             </li>
           </ul>
         </nav>
         <div id="promoM" class="row">
           <div class="perfect-desc col-lg-5">
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
           <div id="offre" class="col-lg-7">
            <div class="container">
              <div class="row">
                <div class="card-offre enable-offre col-lg-6 text-center">
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
                <div class="card-offre desable-offre col-lg-6 text-center">
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
    <?php wp_footer(); ?>
</body>
</html>

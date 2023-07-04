<?php
include "components\php\head.php";

include "components\php\header.php";

?>

<!---------------------------- sec 2 starts here----------------------------------> 
<main> 

<!------------------------  corousels start here-------------------------------------->
<div id="carouselExampleCaptions" class="carousel slide w-100  h-100 ">
  <div class="carousel-indicators">
  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
  <div class="carousel-item active">
  <img src="components\img\colors.jpg" class="d-block w-100" alt="...">
  <div class="carousel-caption  d-flex flex-column align-items-center justify-content-center">
  <h5 class="glassy-background">Singa ya famille</h5>
  <p class="glassy-background">Bienvenue dans l'Association d'Activité d'Art Thérapie pour les orphelins et les enfants vulnérables du Congo!</p>
  <a style="margin-top: 5px;"  href="https://singa-ya-famille.s2.yapla.com/fr/campaign-5901/donate/dessine-moi-un-sourire/5901" target="_blank" class="donate-button">Faire un don</a>
  </div>
  </div>
  <div class="carousel-item">
            <img src="components\img\children.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="components\img\homepage1.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div> 

<!---------------------------  corousels end here--------------------------------->

  <div class="row sec_2">
    <div class="col-md-4 img-champs">
      <img src="components\img\asso.jpg" style="width: 100%; height: 100%;" alt="Association Image">
    </div>
    <div class="col-md-4 text-champs pt-5">
      <h2 >Qui sommes-nous ?</h2>
      <p >Nous sommes une association dédiée à offrir un espace sûr, créatif et thérapeutique aux enfants qui ont connu des situations difficiles. Notre mission est de redonner le sourire, l'espoir et la guérison à ces enfants en utilisant l'art comme un outil puissant. Notre approche est fondée sur le respect, l'empathie et l'encouragement. Nous travaillons en étroite collaboration avec les communautés locales, les établissements de soins et les organismes partenaires pour offrir des programmes d'Art Thérapie qui répondent aux besoins uniques des enfants que nous servons.</p>
    </div>
    <div class="col-md-4 img-champs1">
      <img src="components\img\para_pic.jpg" style="width: 100%; height: 100%;" alt="Image">
    </div>
  </div>
  
<!-------------------------------  sec 2 ends here ---------------------------------> 
      
<!-------------------------------  sec 3 starts here -------------------------------> 
      <div class="videos_heading text-center">
        <h2 class="text-videos" style="color: #008080; font-size: 2rem;">Regard sur l'Espoir</h2>
        <p class="text-videos" style="color:  #000033; font-size: 1.5rem;">Vidéos Impactantes de Travaux de Bienfaisance</p>
      </div>
      
      <div class="videos">
        <div class="slider">
          <div class="slide">
            <video src="components\img\VID2.mp4" class="object-fit-contain"></video>
            <a style="margin: auto 40% "  href="https://singa-ya-famille-1.s2.yapla.com/fr/accueil/adhesion/" target="_blank" class="donate-button">Faire un don</a>
          </div>
          <div class="slide">
            <div class="videos_heading text-center">
              <h2 style="color: #8B008B; font-size: 2rem; margin-top: 30px;text-align:center">Actions Humanitaires en Action
              </h2>
               <p style="color:#6A0069; font-size:medium;text-align:center ;
               "> Vivez la puissance de la compassion et de l'espoir à travers nos vidéos impactantes sur les travaux de bienfaisance. Plongez dans un monde où les vies sont transformées, où les actes de générosité font la différence et où l'amour ne connaît pas de limites. Rejoignez-nous dans cette aventure de compassion, où chaque vidéo est le témoignage d'un changement remarquable qui peut être accompli lorsque nous nous rassemblons en tant que communauté</p>
            </div>
            <div class="videos_heading text-center">
              <h2 style="color:  #000080; font-size: 2rem; text-align:center">Engageons-nous ensemble pour un avenir meilleur</h2>
              <p style="color: #000033; font-size: medium;  text-align:center ;
              ">Découvrez notre vidéo inspirante sur notre travail caritatif. Rejoignez-nous alors que nous apportons un changement positif dans la vie des personnes vulnérables. Ensemble, nous pouvons faire une différence en offrant de l'espoir, de l'éducation et des opportunités à ceux qui en ont le plus besoin. Regardez la vidéo pour en savoir plus sur nos projets, nos bénévoles dévoués et l'impact réel que nous créons dans notre communauté.</p>
            </div>
            <div class="videos_heading text-center">
              <h2 style="color: #333333; font-size: 2rem; text-align:center">Actions qui Comptent</h2>
              <p style="color: Darker Black; font-size: medium;  text-align:center ;
              ">Nos vidéos mettent en avant les efforts incroyables et les initiatives dédiées à l'amélioration du quotidien de ceux dans le besoin. Découvrez des histoires inspirantes de résilience, de générosité et d'unité qui toucheront votre cœur et vous inspireront à participer à quelque chose de plus grand. Ensemble, créons un avenir meilleur et apportons un impact durable dans la vie des plus démunis.</p>
            </div> 
            <video src="img/VID1.mp4" class="object-fit-cover"></video>

          </div>   
          <!--- Add more videos as needed --->
       </div>
        <div class="controls">
          <button class="prev-btn">&#10094;</button>
          <button class="play-btn">&#9658;</button>
          <button class="next-btn">&#10095;</button>
        </div>
      </div>
    </main>   
<!------------------------------  sec 3 ends here -------------------------------> 
<!------------------------------  Footer starts here -------------------------------> 
<?php
include "components\php/footer.php";
?>

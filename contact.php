<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Contact</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-cKXr5p7i7evTG5olSqkwwYBYMR9XeT4AR5mDagVQsCM5jCZJXKzv7tkoAwtKDwZ6z6ASeK3FAFl6pFC4BhYH+Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="components\css\form.css">
    <link rel="stylesheet" href="components\css\contact.css">
</head>
<?php
include "components\php\header.php";
?>
<body>
    
<main>
<div class="container">
<!--Heading-->
    <div class="row pt-2 pb-3">
        <div class="col-md-4"></div>
        <div class="col-md-4"><h2 class="curved-underline w-100">Contactez-nous</h2></div>
        <div class="col-md-4"></div>
        </div>
<!--Description-->
<div class="row pt-3">
    <div class="col-md-1"></div>
    <div class="col-md-10"><p class="pb-3">Si vous avez des questions, des commentaires ou des suggestions, n'hésitez pas à nous contacter.Remplissez le formulaire ci-dessous ou utilisez les coordonnées fournies pour nous joindre. Nous vous répondrons dans les plus brefs délais.Votre avis compte pour nous !</p></div>
    <div class="col-md-1"></div>
</div>
<!--Map describing location of the organisation--> 
<div style="width: 100%;">
    <iframe width="100%" height="450" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.openstreetmap.org/export/embed.html?bbox=2.3009034991264348%2C48.86940977553675%2C2.3029580712318425%2C48.87037130799159&amp;layer=mapnik&amp;marker=48.869900%2C2.301930" style="border: 1px solid black"></iframe>
  </div>   

<!--Icons and contact form-->
<div class="row pb-3 ">
<!--Icons-->
<div class="icons col-md-6 ">
        <h3 class=" pt-3">ADRESSE</h3> 
        <div class="icon-text-wrapper">
        <i class="bi bi-geo-alt-fill"></i>
        <h4>60 Rue François 1ere 75008 Paris</h4>
        </div>
        <h3 class="pt-3">E-MAIL</h3>
        <div class="icon-text-wrapper">
        <i class="bi bi-envelope-fill"></i>
        <h4>singayafamille@gmail.com</h4>
        </div>
    <h3 class="pt-3">Nous suivre</h3>
    <div class="social">
    <a href="http://instagram.com/singa.ya.famille?igshid=MzNlNGNkZWQ4Mg==" target="_blank"><i class="bi bi-instagram"></i></a>
    <a href="http://m.facebook.com/Ilela.Mireille" target="_blank"><i class="bi bi-facebook"></i></a>
    <a href="https://www.tiktok.com/@singayafamille?_t=8dYvg4CL4Du&_r=1"><i class="fab fa-tiktok"></i></a>
</div>
</div>
<!--Contact Form-->
<div class="col-md-6">
    <?php
include "components/php/form.php";

    ?>
</div>
</div>

</div>
</main>
</body>
</html>

<?php
include "components\php/footer.php";
?>
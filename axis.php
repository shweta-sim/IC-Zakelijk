<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=2, user-scalable=yes"/>
<meta name="description" content="">
<meta name="author" content="">
<title>IrisCall Zakelijk | Axis</title>

<!-- Favicon -->
<link rel="icon" href="imgs/favicon.png" type="image/gif" sizes="16x16">

<!-- Bootstrap CSS -->
<link href="plugins/bootstrap/bootstrap.min.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="css/style.css" rel="stylesheet" type="text/css">

<!-- Animate CSS -->
<link rel="stylesheet" href="plugins/animate/animate.min.css">

<!-- Fancybox CSS -->
<link rel="stylesheet" type="text/css" href="plugins/fancybox/jquery.fancybox.min.css">
</head>

<body>
<!-- ########## Header start ########## -->
<?php include("header.php"); ?>
<!-- ########## Header end ########## --> 

<!-- ########## Banner start ########## -->
<section class="banner-inner banner-axis">
  <div class="banner-inner-text">
    <h2 class="page-title wow fadeInUp" data-wow-delay="100ms">Axis</h2>
    <ul class="breadcrumb wow fadeInUp" data-wow-delay="200ms">
      <li><a href="index.php">Home</a></li>
      <li>Cloud telefonie</li>
      <li class="active">Axis</li>
    </ul>
  </div>
</section>
<!-- ########## Banner end ########## --> 

<!-- Section start -->
<section>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="mb-2"><img src="imgs/logo-axis2.png"></div>
        <h4 class="font-semibold mb-2">Mis nooit meer een oproep dankzij Axis, onze stabiele vast-mobiel integratie</h4>
        <p class="mb-2">Dankzij de vast-mobiel integratie Axis neem je je telefooncentrale overal mee naartoe. Het stelt je in staat om de functionaliteiten die je op kantoor hebt overal te gebruiken.<br>
          <br>
          Je mobiel nummer wordt mee in de telefooncentrale geplaatst en gekoppeld aan een intern nummer. Dit zorgt ervoor dat je op verschillende manieren bereikbaar bent.</p>
        <ul class="list mb-2">
          <li>Via je vast nummer voor de klant die nog een extra vraag heeft.</li>
          <li>Op je mobiel nummer voor je familie om te vragen hoe laat je thuis bent. </li>
          <li>Of op je intern nummer om steeds in contact te blijven met de medewerkers op kantoor.</li>
        </ul>
        <p>Op deze manier zal je nooit een belangrijk telefoontje missen.<br>
          <br>
          Het werkt ook omgekeerd. Je kiest, dankzij onze app, met welk nummer je uitbelt naar je klant, familie of kantoor.</p>
      </div>
    </div>
  </div>
</section>
<!-- Section end --> 
<!-- Section start -->
<section class="bg-light">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <h3 class="font-semibold text-center mb-2 wow fadeInUp" data-wow-delay="100ms">Meer weten over de mogelijkheden van Axis?</h3>
        <div class="wow fadeInUp" data-wow-delay="100ms"><a href="mailto:info@iriscall.be" class="btn btn-yellow">Mail ons</a></div>
      </div>
    </div>
  </div>
</section>
<!-- Section end --> 

<!-- ########## Footer start ########## -->
<?php include("footer.php"); ?>
<!-- ########## Footer end ########## --> 

<!-- Bootstrap JavaScript --> 
<script src="plugins/jquery/jquery.min.js"></script> 
<script src="plugins/bootstrap/bootstrap.min.js"></script> 

<!-- Animate JavaScript --> 
<script type="text/javascript" src="plugins/animate/animate.min.js"></script> 
<script type="text/javascript">
  new WOW().init();
</script> 

<!-- Nav JavaScript --> 
<script type="text/javascript">
$(window).scroll(function(){
  $('.navbar').toggleClass('scrolled', $(this).scrollTop() > 50);
});

function openNav() {
  document.getElementById("navbar").style.height = "100%";
}
function closeNav() {
  document.getElementById("navbar").style.height = "0%";
}

</script> 

<!-- Scroll Down/Up JavaScript --> 
<script type="text/javascript">
// Scroll down
$(function() {
  $('.arrows a[href*=#]').on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top}, 500, 'linear');
 });
  
 //Scroll Up
$(document).ready(function () {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.arrow-up').fadeIn();
        } else {
            $('.arrow-up').fadeOut();
        }
    });
    $('.arrow-up').click(function () {
        $("html, body").animate({
            scrollTop: 0
        }, 600);
        return false;
    });

}); 
  
});
</script> 
</body>
</html>

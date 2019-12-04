<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=2, user-scalable=yes"/>
<meta name="description" content="">
<meta name="author" content="">
<title>IrisCall Zakelijk | Waarom Cloud?</title>

<!-- Favicon -->
<link rel="icon" href="imgs/favicon.png" type="image/gif" sizes="16x16">

<!-- Bootstrap CSS -->
<link href="plugins/bootstrap/bootstrap.min.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="css/style.css" rel="stylesheet" type="text/css">

<!-- Animate CSS -->
<link rel="stylesheet" href="plugins/animate/animate.min.css">
</head>

<body>
<!-- ########## Header start ########## -->
<?php include("header.php"); ?>
<!-- ########## Header end ########## --> 

<!-- ########## Banner start ########## -->
<section class="banner-inner banner-inner2 banner-waarom-cloud">
  <div class="banner-inner-text">
    <h2 class="page-title wow fadeInUp" data-wow-delay="100ms">Waarom Cloud?</h2>
    <ul class="breadcrumb wow fadeInUp" data-wow-delay="200ms">
      <li><a href="index.php">Home</a></li>
      <li class="active">Waarom Cloud?</li>
    </ul>
  </div>
</section>
<!-- ########## Banner end ########## --> 

<!-- Section start -->
<section class="bg-light intro-bl">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="intro-bl-inner content-block bg-dark wow fadeInUp" data-wow-delay="100ms">
          <h4 class="text-white text-center">Oldschool telecommunicatie met telefoonkabels is iets uit het verleden. De opkomst van internet heeft het mogelijk gemaakt om te telefoneren via datzelfde internet. Deze techniek heet ‘Voice over IP’ ofwel ‘VoIP’. Hierbij worden de traditioneel gescheiden netwerken van spraak en data tot één netwerk samengevoegd. Messaging apps en VoIP applicaties nemen intussen de communicatiemarkt over.</h4>
        </div>
      </div>
    </div>
    <div class="row features">
      <div class="col-lg-4 mb-3 feature-bl bg-white wow fadeInUp" data-wow-delay="100ms">
        <div class="content-block text-center">
          <div class="mb-6 mb-sm-3"><img src="imgs/icon-waarom-feature1.svg"></div>
          <h4 class="text-blue font-semibold text-center mb-3">De productiviteit van je bedrijf verhoogt</h4>
          <p>Werken in de cloud betekent werken op eigen tempo en op plaatsen en tijdstippen naar keuze.<br>
            <br>
            Voor onze businessklanten betekent dit een heuse verhoging van de mobiliteit en productiviteit van hun werknemers. </p>
        </div>
      </div>
      <div class="col-lg-4 mb-3 feature-bl bg-white wow fadeInUp" data-wow-delay="200ms">
        <div class="content-block text-center">
          <div class="mb-6 mb-sm-3"><img src="imgs/icon-waarom-feature2.svg"></div>
          <h4 class="text-blue font-semibold text-center mb-3">Je werknemers halen er voordeel uit</h4>
          <p>De vrijheid om voor iedereen een werk/vrijetijdsbalans op maat te kunnen voorzien, is hét grote voordeel van business in de cloud.<br>
            <br>
            Niet iedereen hoeft altijd fysiek aanwezig te zijn op kantoor om efficiënt te kunnen werken. </p>
        </div>
      </div>
      <div class="col-lg-4 mb-3 feature-bl bg-white wow fadeInUp" data-wow-delay="300ms">
        <div class="content-block text-center">
          <div class="mb-6 mb-sm-3"><img src="imgs/icon-waarom-feature3.svg"></div>
          <h4 class="text-blue font-semibold text-center mb-3">Focus op wat jij belangrijk vindt</h4>
          <p>Het integreren van je businessactiviteiten in de cloud is eenvoudig en voordelig.<br>
            <br>
            Upgraden of downsizen gaat snel, updates gebeuren automatisch… kortom: de focus van je business ligt volledig op je kerntaken. </p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section end --> 

<!-- Possibilities start -->
<section class="possibilities">
  <div class="container">
    <div class="row">
      <div class="col-xs-10 col-sm-5 col-md-4">
        <div class="mb-6 mb-xs-3 wow fadeInUp" data-wow-delay="100ms">IrisCall - met al haar mogelijkheden - is de stap vooruit om cloud communicatie volledig te integreren in je business.<br>
          <br>
          Wij geloven dat cloud geen optie zou mogen zijn. Nee, het is de enige weg. Eenmaal je het gebruikt, zal je niet begrijpen waarom je het niet eerder hebt gedaan.<br>
          <br>
          Wil je ontdekken wat jouw mogelijkheden zijn?</div>
        <div class="wow fadeInUp" data-wow-delay="100ms"><a href="#" class="btn btn-yellow">Maak een afspraak</a></div>
      </div>
    </div>
  </div>
</section>
<!-- Possibilities end --> 

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

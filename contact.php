<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=2, user-scalable=yes"/>
<meta name="description" content="">
<meta name="author" content="">
<title>IrisCall Zakelijk | Contact</title>

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
<section class="banner-inner banner-contact">
  <div class="banner-inner-text">
    <h2 class="page-title wow fadeInUp" data-wow-delay="100ms">Contact</h2>
    <ul class="breadcrumb wow fadeInUp" data-wow-delay="200ms">
      <li><a href="index.php">Home</a></li>
      <li class="active">Contact</li>
    </ul>
  </div>
</section>
<!-- ########## Banner end ########## --> 

<!-- Section start -->
<section>
  <div class="container">
    <div class="row">
      <div class="col-sm-7 col-lg-7 mb-sm-6">
        <h3 class="font-semibold mb-3 wow fadeInUp" data-wow-delay="100ms">Zeg hallo</h3>
        <form action="" name="contact-form" id="contact-form" class="contact-form wow fadeInUp" data-wow-delay="100ms">
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <input type="text" name="voornaam" id="voornaam" class="form-control" placeholder="Voornaam">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <input type="text" name="email" id="email" class="form-control" placeholder="E-mailadres">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <input type="text" name="naam" id="naam" class="form-control" placeholder="Naam">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <input type="text" name="onderwerp" id="onderwerp" class="form-control" placeholder="Onderwerp">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <textarea name="bericht" id="Bericht" class="form-control" placeholder="Bericht"></textarea>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <div class="g-recaptcha" data-sitekey="6Ld0dHkUAAAAAJ1BNnMIRkQ21QW3XHaCVcihuev3"></div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <button type="button" name="verstuur" id="verstuur" class="btn btn-yellow" data-toggle="modal" data-target="#modal-thanks">Verstuur</button>
            </div>
          </div>
        </form>
        
        <!-- Thanks Modal start -->
        <div class="modal fade" id="modal-thanks" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                <div class="mb-3 text-center"><img src="imgs/icon-success.svg" width="60" height="60"></div>
                <h4 class="text-center font-semibold">Bedankt voor jouw aanvraag,
                  we nemen zo snel mogelijk contact op.</h4>
              </div>
            </div>
          </div>
        </div>
        <!-- Thanks Modal end --> 
        
      </div>
      <div class="col-lg-1"></div>
      <div class="col-sm-5 col-lg-4">
        <h3 class="font-semibold mb-3 wow fadeInUp" data-wow-delay="100ms">Neem contact op</h3>
        <ul class="contact-info wow fadeInUp" data-wow-delay="100ms">
          <li><i class="fa fa-map-marker"></i>Kleinhoefstraat 5/19<br>
            2440 Geel<br>
            BELGIË</li>
          <li><i class="fa fa-envelope"></i><a href="mailto:info@iriscall.be">info@iriscall.be</a></li>
          <li><i class="fa fa-phone"></i>+32 14 24 85 11</li>
          <li><i class="fa fa-facebook"></i><a href="https://www.facebook.com/IrisCallBE" target="_blank">facebook.com/iriscall</a></li>
          <li><i class="fa fa-twitter"></i><a href="https://twitter.com/iriscallBE" target="_blank">twitter.com/iriscall</a></li>
          <li><i class="fa fa-linkedin"></i><a href="https://www.linkedin.com/company/iriscall/" target="_blank">linkedin.com/company/iriscall</a></li>
        </ul>
      </div>
    </div>
  </div>
</section>
<!-- Section end --> 

<!-- Map start -->
<section class="map">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d18892.965959746925!2d4.957489703635706!3d51.162866875920294!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c14c00ebc75199%3A0x5ac6ecf7a123d249!2sKleinhoefstraat+5%2C+2440+Geel%2C+Belgium!5e0!3m2!1sen!2sin!4v1541676397508"  frameborder="0" allowfullscreen></iframe>
</section>
<!-- Map end -->

</section>
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

<!-- Map JavaScript --> 
<script type="text/javascript">
  $('.map')
  .click(function(){
      $(this).find('iframe').addClass('clicked')})
  .mouseleave(function(){
      $(this).find('iframe').removeClass('clicked')});
</script> 
<script src='https://www.google.com/recaptcha/api.js'></script>
</body>
</html>

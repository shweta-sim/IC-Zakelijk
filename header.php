<?php
 function selected($filename){
  if (stristr($_SERVER["PHP_SELF"] ,$filename)){ 
    echo 'class="active"';
  } 
 }
?>
<header class="hidden-print"> 
  <!-- ########## Nav start ########## -->
  <nav class="navbar navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">        
        <a class="navbar-brand" href="index.php"><img src="imgs/logo.svg" ></a> 
        <div class="nav-toggle" onclick="openNav()"><i class="fa fa-bars"></i></div>
      </div>
      <div id="navbar" class="nav-collapse">
        <div class="nav-collapse-inner">
          <div class="btn-close"><a href="javascript:void();" onclick="closeNav()"><i class="fa fa-close"></i></a></div>
          <ul class="nav navbar-nav">
            <li><a href="../mobiel/index.php">Privé</a></li>
            <li><a href="index.php" class="active">Zakelijk</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a <?php selected('index.php'); ?> href="index.php">Home</a></li>
            <li class="dropdown"> <a <?php selected('axis.php'); selected('telefooncentrale.php'); selected('toestellen.php'); ?> class="dropdown-toggle" data-toggle="dropdown">Cloud telefonie <span class="fa fa-angle-down"></span></a>
              <div class="dropdown-menu">
                <ul>
                  <li><a href="axis.php">Axis</a></li>
                  <li><a href="telefooncentrale.php">Telefooncentrale</a></li>
                  <li><a href="toestellen.php">Toestellen</a></li>
                </ul>
              </div>
            </li>
            <!-- <li class="dropdown"> <a <?php // selected('mobiel-vienna.php'); selected('mobiel-london.php'); selected('mobiel-newyork.php'); selected('mobiel-havana.php'); selected('mobiel-tokyo.php'); ?> class="dropdown-toggle" data-toggle="dropdown">Mobiel <span class="fa fa-angle-down"></span></a>
              <div class="dropdown-menu dropdown-menu-sm">
                <ul>
                  <li><a href="mobiel-vienna.php">Vienna</a></li>
                  <li><a href="mobiel-london.php">London</a></li>
                  <li><a href="mobiel-newyork.php">New York</a></li>
                  <li><a href="mobiel-havana.php">Havana</a></li>
                  <li><a href="mobiel-tokyo.php">Tokyo</a></li>
                </ul>
              </div>
            </li> -->
            <li><a <?php selected('waarom-cloud.php'); ?> href="waarom-cloud.php">Waarom Cloud?</a></li>
            <li class="nav-btn"><div class="btn btn-yellow"><a href="contact.php">Contact</a></div></li>
            <li>
              <ul class="right-icons">
                <li><a href="https://www.facebook.com/IrisCallBE" target="_blank"><i class="fa fa-facebook"></i></a></li>
                <li><a href="https://twitter.com/iriscallBE" target="_blank"><i class="fa fa-twitter"></i></a></li>
                <li><a href="https://www.linkedin.com/company/iriscall/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
      <!--/.nav-collapse --> 
    </div>    
  </nav>
  <!-- ########## Nav end ########## --> 
</header>

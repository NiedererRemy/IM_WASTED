<!-- CONTROLLER -->
<?php
session_start();
require_once('config.php');
require_once('data.php');

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WASTED – education for clean oceans</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="styles.css">
  </head>



  <body>



          <header>

                  <!-- <div class="header">

                    <div class="topnav">
                      <a class="active" href="#home">WASTED</a>
                      <a href="#contact">Donate</a>
                      <a href="#about">About</a>
                    </div>

                  </div> -->

                  <nav>
                      <ul>
                          <li><a href="#index.html" class="logo"></a></li>
                          <li><a href="#">info</a></li>
                          <li><a href="#">donate</a></li>
                      </ul>
                  </nav>

          </header>


<div class="bg">
    <img src="img/bg_edited.png" alt="" />


    <!-- OVERFISHING -->
              <div id="overfishing2" class="overfishing">
                  <div class="overfishing-content">
                  </div>
              </div>




              <!-- OPEN/CLOSE BUTTON JS -->
                            <script>

                            function showDiv1() {
                              document.getElementById('overfishing_animation').style.display = "block";
                              document.getElementById('overfishing1').style.display = "none";
                            }

                            function hideDiv1() {
                              document.getElementById('overfishing_animation').style.display = "none";
                              document.getElementById('overfishing1').style.display = "initial";
                            }

                            </script>

                            <a  href="/subsite.php">
              <button id="php_trial2" type="button" class="button3"><h1>PHP-Versuch3</h1></button>
            </a>
                            <div id="php_trial" class="button2">
                                <button class="button" onclick="showDiv1()" "vertical-align:middle"><span>PHP-Versuch</span></button>
                            </div>


                      <div id="overfishing1" class="button2">
                          <button class="button" onclick="showDiv1()" "vertical-align:middle"><span>Overfishing</span></button>
                      </div>




                      <div id="overfishing_animation" class="overfishing_animation">
                        <div id="box">
                          <span class="close" onclick="hideDiv1()">&times;</span>
                          <lottie-player src="https://assets6.lottiefiles.com/private_files/lf30_tsdn4lfi.json" background="transparent" speed="1" loop autoplay></lottie-player>
                        </div>
                      </div>


    <!-- OIL, PIPE SECTION // OIL SPILLING-->
              <div id="pipe1" class="pipe">
                <div class="pipe-content">
                </div>
              </div>

              <!-- OPEN/CLOSE BUTTON JS -->
                            <script>

                            function showDiv2() {
                              document.getElementById('oil_animation').style.display = "block";
                              document.getElementById('oilspilling').style.display = "none";
                            }

                            function hideDiv2() {
                              document.getElementById('oil_animation').style.display = "none";
                              document.getElementById('oilspilling').style.display = "initial";
                            }
                            //  $(document).ready(function(){
                            //    $("button").click(function(){
                            //     $("#oil_animation").fadeToggle();
                            //   });
                            // });
                            //
                            // $(document).ready(function(){
                            //   $("close").click(function(){
                            //     $("#oil_animation").fadeOut();
                            //   });
                            // });
                                              // var box = document.getElementsByClassName("box");
                                              // // Get the <span> element that closes the modal
                                              // var span = document.getElementsByClassName("close")[0];
                                              // // When the user clicks on <span> (x), close the modal
                                              // span.onclick = function() {
                                              //   box.style.display = "none";
                                              // }
                                              // // When the user clicks anywhere outside of the modal, close it
                                              // window.onclick = function(event) {
                                              //   if (event.target == box) {
                                              //     box.style.display = "none";
                                              //   }
                                              // }
                            </script>


                      <div id="oilspilling" class="button1">
                        <button class="button" onclick="showDiv2()" "vertical-align:middle"><span>Oil Spilling</span></button>
                      </div>

                      <div id="oil_animation" class="oil_animation">
                        <div id="box">
                          <span class="close" onclick="hideDiv2()">&times;</span>
                          <lottie-player src="https://assets6.lottiefiles.com/private_files/lf30_tsdn4lfi.json" background="transparent" speed="1" loop autoplay></lottie-player>
                        </div>
                      </div>



      <!-- BOAT SECTION -->
              <div id="boat1" class="boat">
                <div class="">
                  <lottie-player src="https://assets10.lottiefiles.com/private_files/lf30_brfghici.json" background="transparent" speed="1" loop autoplay></lottie-player>
                </div>
              </div>


      <!-- ANIMATED TURTLE -->
              <div id="turtle1" class="turtle">
                <div class="">
                <lottie-player src="https://assets8.lottiefiles.com/private_files/lf30_yue2mwkc.json" background="transparent" speed="1" loop autoplay></lottie-player>
                </div>
              </div>

              <!-- ANIMATED SHARK -->
                      <div id="shark1" class="shark">
                        <div class="">
                          <lottie-player src="https://assets1.lottiefiles.com/private_files/lf30_u7wqz0iy.json" background="transparent" speed="1" loop autoplay></lottie-player>

                        </div>
                      </div>



  </div>





  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
  </body>
</html>

<!-- CONTROLLER -->

<?php
session_start();
require_once('config.php');
require_once('data.php');
$fisch = fisch();
shuffle($fisch);


?>


<!-- VIEW -->
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>PHP-Versuch3</title>

  <!-- Bootstrap & CSS Verlinkung -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="../styles.css" rel="stylesheet" type="text/css">
</head>
<body>

<p> Hier kommen die verschiedenen Meeresverschmutzungsarten aus der Datenbank. </3>

  <a href="https://698387-20.web1.fh-htwchur.ch/">
  <button type="button" ><h2>Zurück</h2></button>
</a>

      <a id="next"><img src="/images/image.png" width="100%" height="100%"/></a>








<script>
var fisch =<?php echo json_encode($fisch );?>;
var specificproblem = fisch['0'];
console.log(specificproblem);
var karte = specificproblem['specificproblem'];
document.getElementById("specificproblem").innerHTML = karte;
var counter = 0;
document.querySelector("#next").addEventListener("click", function(){
  counter = counter+1;
  if (counter>=fisch.length){
    document.getElementById("specificproblem").innerHTML = "Ende.";
  }

  else {
    var specificproblem = fisch[counter];
    console.log(specificproblem);
    var karte = specificproblem['specificproblem'];
    document.getElementById("specificproblem").innerHTML = karte;
}

});
</script>


</body>


</html>

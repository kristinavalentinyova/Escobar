<?php
	// Set session variables
	$_SESSION["datumDnes"] = date("l, d.m.Y");

	//$conn->query("SET CHARACTER SET utf8");
	//alebo v xampp/mysql/bin/my.ini   doplnit:
	//[mysqld]
	//character-set-server=utf8
	//collation-server=utf8_slovak_ci

	$sql = "SELECT * FROM jedalnylistok";
	$result = $conn->query($sql);
?>

<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-6">
        <ul class="nav nav-pills nav-fill">
        <li class="nav-item">
        <li class="nav-item">
       <a class="nav-link" href="../index.php?link=home.php">Domov</a>
        </li>
        <a class="nav-link" href="../index.php?link=dennemenu.php">Denné menu</a>
        </li>
        <li class="nav-item">
        <a class="nav-link active" href="../index.php?link=jedalnylistok.php">Jedálny lístok</a>
       </li>
       <li class="nav-item">
       <a class="nav-link" href="../index.php?link=napojovylistok.php">Napojový lístok</a>
      </li>
      </ul>
        </div>
        <div class="col-md-2"></div>
    </div>

    <div class="container">
    <div class="row"> 
    <div class="col-md-12">
         <div class="card bg-dark text-dark">
         <img src="Images/white1.jpg" class="card-img" alt="..." height="1050">
         <div class="card-img-overlay">
         <h1 class="card-title">*HAMBURGERY*</h1>
         <h3><p class="card-text"></p></h3>
    <?php 
    while($row = $result->fetch_assoc())
		{ 

	?>
       
        
         <h4><p class="card-text"><?php echo $row["NazovB"]; ?> <a>..........................</a><?php echo $row["CenaB"]; ?></p></h4>
         <h5><p class="card-text"><?php echo $row["PopisB"]; ?> </p></h5>
  

  <?php } ?>
  <br>
  <h1 class="card-title">*DIPY*</h1>
  <h4><p class="card-text"><a>CESNAKOVÝ, BYLINKOVÁ MAJONÉZA, ..........................1,00€ </a></p></h4>
  <h4><p class="card-text"><a>DIJÓNSKA MAJONÉZA, CHILLINÉZA</a></p></h4>
  <h4><p class="card-text"><a>BBQ OMÁČKA, TATARSKÁ OMÁČKA, KEČUP</a></p></h4>
  <h4><p class="card-text"><a>SWEET CHILLI, KYSLÁ SMOTANA (50g)</a></p></h4>
  <br>
  <h1 class="card-title">*PRÍLOHY*</h1>
  <h4><p class="card-text"><a>COLESLAW malý šalát(100g)...............1,50€ </a></p></h4>
  <h4><p class="card-text"><a>HRANOLKY(150g)..........................1,70€ </a></p></h4>
  <h4><p class="card-text"><a>BATÁTY(150g)............................2,20€ </a></p></h4>
  <h4><p class="card-text"><a>HRANOLKY "BURGER"(150g).................2,20€ </a></p></h4>
  <h4><p class="card-text"><a>CIBUĽOVÉ KRÚŽKY(150g)...................2,20€ </a></p></h4>
  


</div>
        </div>
        </div>
        <div class="col-md-12">
        </div>
    </div>
</div>

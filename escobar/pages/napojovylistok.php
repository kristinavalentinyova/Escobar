

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


 <?php
	// Set session variables
	$_SESSION["datumDnes"] = date("l, d.m.Y");

	//$conn->query("SET CHARACTER SET utf8");
	//alebo v xampp/mysql/bin/my.ini   doplnit:
	//[mysqld]
	//character-set-server=utf8
	//collation-server=utf8_slovak_ci

	$sql = "SELECT * FROM kava";
	$result = $conn->query($sql);
?> 
<div class="container">
    <div class="row"> 
    <div class="col-md-12">
         <div class="card bg-dark text-dark">
         <img src="Images/white1.jpg" class="card-img" alt="..." height="700">
         <div class="card-img-overlay">
         <h1 class="card-title">*KÁVA*</h1>
         <h3><p class="card-text"></p></h3>
    <?php 
    while($row = $result->fetch_assoc())
		{ 

	?>
       
        
         <h4><p class="card-text"> <?php echo $row["NazovK"]; ?> <a>..........................</a><?php echo $row["CenaK"]; ?></p></h4>
         <p class="card-text"><?php echo $row["PopisK"]; ?> </p>
  

  <?php } ?> 
  </div>
        </div>
        </div>
        </div>
        </div>
    
<?php
	// Set session variables
	$_SESSION["datumDnes"] = date("l, d.m.Y");

	//$conn->query("SET CHARACTER SET utf8");
	//alebo v xampp/mysql/bin/my.ini   doplnit:
	//[mysqld]
	//character-set-server=utf8
	//collation-server=utf8_slovak_ci

	$sql = "SELECT * FROM nealkonapoje";
	$result = $conn->query($sql);
?>
    <div class="container">
    <div class="row"> 
    <div class="col-md-12">
         <div class="card bg-dark text-dark">
         <img src="Images/white1.jpg" class="card-img" alt="..." height="400">
         <div class="card-img-overlay">
         <h1 class="card-title">*NEALKO NÁPOJE*</h1>
         <h3><p class="card-text"></p></h3>
    <?php 
    while($row = $result->fetch_assoc())
		{ 

	?>
       
        
         <h4><p class="card-text"><?php echo $row["MnozstvoNN"]; ?> <?php echo $row["NazovNN"]; ?> <a>..........................</a><?php echo $row["CenaNN"]; ?></p></h4>
         
  

  <?php } ?>
  </div>
  </div>
  </div>
  </div>
  </div>
  <?php
	// Set session variables
	$_SESSION["datumDnes"] = date("l, d.m.Y");

	//$conn->query("SET CHARACTER SET utf8");
	//alebo v xampp/mysql/bin/my.ini   doplnit:
	//[mysqld]
	//character-set-server=utf8
	//collation-server=utf8_slovak_ci

	$sql = "SELECT * FROM pivo";
	$result = $conn->query($sql);
?>
    <div class="container">
    <div class="row"> 
    <div class="col-md-12">
         <div class="card bg-dark text-dark">
         <img src="Images/white1.jpg" class="card-img" alt="..." height="300">
         <div class="card-img-overlay">
         <h1 class="card-title">*PIVO*</h1>
         <h3><p class="card-text"></p></h3>
    <?php 
    while($row = $result->fetch_assoc())
		{ 

	?>
       
        
         <h4><p class="card-text"><?php echo $row["MnozstvoP"]; ?> <?php echo $row["NazovP"]; ?> <a>..........................</a><?php echo $row["CenaP"]; ?></p></h4>
         
  

  <?php } ?>
  </div>
  </div>
  </div>
  </div>
  </div>

   <?php
	// Set session variables
	$_SESSION["datumDnes"] = date("l, d.m.Y");

	//$conn->query("SET CHARACTER SET utf8");
	//alebo v xampp/mysql/bin/my.ini   doplnit:
	//[mysqld]
	//character-set-server=utf8
	//collation-server=utf8_slovak_ci

	$sql = "SELECT * FROM alkonapoje";
	$result = $conn->query($sql);
?>
    <div class="container">
    <div class="row"> 
    <div class="col-md-12">
         <div class="card bg-dark text-dark">
         <img src="Images/white1.jpg" class="card-img" alt="..." height="650">
         <div class="card-img-overlay">
         <h1 class="card-title">*ALKO NÁPOJE*</h1>
         <h3><p class="card-text"></p></h3>
    <?php 
    while($row = $result->fetch_assoc())
		{ 

	?>
       
        
         <h4><p class="card-text"><?php echo $row["MnozstvoAN"]; ?> <?php echo $row["NazovAN"] ?> <a>..........................</a><?php echo $row["CenaAN"]; ?></p></h4>
         
  

  <?php } ?>
  </div>
  </div>
        <div class="col-md-12">
        </div>
    </div>
</div>
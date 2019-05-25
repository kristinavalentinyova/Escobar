<?php
	// Set session variables
	$_SESSION["datumDnes"] = date("l, d.m.Y");

	//$conn->query("SET CHARACTER SET utf8");
	//alebo v xampp/mysql/bin/my.ini   doplnit:
	//[mysqld]
	//character-set-server=utf8
	//collation-server=utf8_slovak_ci

	$sql = "SELECT * FROM recenzia";
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
        <a class="nav-link" href="../index.php?link=jedalnylistok.php">Jedálny lístok</a>
       </li>
       <li class="nav-item">
       <a class="nav-link" href="../index.php?link=napojovylistok.php">Napojový lístok</a>
      </li>
      </ul>
        </div>
        <div class="col-md-2"></div>
    </div>

     <?php 
    while($row = $result->fetch_assoc())
		{ 

	?>
    <div class="container">
    <div class="row">
    <div class="col-md-2"></div>

    <div class="col-md-8">
    <div class="card border-dark mb-3" style="width: 50rem;">
  <div class="card-header"><?php echo $row["Meno"]; ?></div>
    <h5 class="card-title"></h5>
    <p class="card-text"><?php echo $row["Recenzia"]; ?></p>
    <p class="card-text">Hodnotenie: <?php echo $row["Hodnotenie"]; ?>/5</p>
  
</div>
</div>

<div class="col-md-2"></div>
</div>
</div>
 <?php } ?>

<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
         <div class="input-group mb-3">
         <div class="input-group-prepend">
         <span class="input-group-text" id="basic-addon1">Meno</span>
         </div>
         <input type="text" class="form-control" placeholder="Meno" aria-label="Meno" aria-describedby="basic-addon1">
         </div>
          <div class="input-group">
          <div class="input-group-prepend">
          <span class="input-group-text">Recenzia</span>
          </div>
          <textarea class="form-control" aria-label="With textarea"></textarea>
          </div>
          <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Hodnotenie (1-5)" aria-label="Hodnotenie (1-5)" aria-describedby="basic-addon2">
          <div class="input-group-append">
         <span class="input-group-text" id="basic-addon2">/5</span>
         </div>
         </div>
          <div class="col-md-2"></div>
        </div>
        <div class="container">
         <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-8">
          <button type="button" class="btn btn-outline-dark">Odoslať recenziu</button>
          </div>
          <div class="col-md-2"></div>
        </div>
        </div>
    
</div>
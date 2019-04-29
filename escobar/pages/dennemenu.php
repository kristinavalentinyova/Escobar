<?php
	// Set session variables
	$_SESSION["datumDnes"] = date("l, d.m.Y");

	//$conn->query("SET CHARACTER SET utf8");
	//alebo v xampp/mysql/bin/my.ini   doplnit:
	//[mysqld]
	//character-set-server=utf8
	//collation-server=utf8_slovak_ci

	$sql = "SELECT * FROM dennemenu";
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
        <a class="nav-link active" href="../index.php?link=dennemenu.php">Denné menu</a>
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

<div class="container">
    <div class="row"> 
    <div class="col-md-12">
         <div class="card bg-dark text-dark">
         <img src="Images/white1.jpg" class="card-img" alt="..." height="1150">
         <div class="card-img-overlay">
         <h1 class="card-title">*Denné menu*</h1>
         <h3><p class="card-text">Cena menu (vrátane polievky) je 4,50€ s DPH</p></h3>
    <?php 
    while($row = $result->fetch_assoc())
		{ 

	?>
       
        
         <h4><p class="card-text"><?php echo $row["Den"]; ?></p></h4>
         <p class="card-text"><?php echo $row["Polievka"]; ?></p>
         <p class="card-text"><?php echo $row["Menu1"]; ?></p>
         <p class="card-text"><?php echo $row["Menu2"]; ?></p>
         <p class="card-text"><?php echo $row["Menu3"]; ?></p>

  

  <?php } ?>
</div>
        </div>
        </div>
        <div class="col-md-12">
        </div>
    </div>
</div>

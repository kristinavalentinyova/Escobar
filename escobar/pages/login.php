<?php
if (isset($_POST['login'])) {
    $myusername = $_POST['username'];
    $mypassword = $_POST['password'];
    $sql = "SELECT id FROM user WHERE meno = '$myusername' and heslo = '$mypassword'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $active = $row['active'];
    $count = mysqli_num_rows($result);
    if($count == 1) {
        $_SESSION['username'] = $myusername;
        $_SESSION['ID'] = $row['id'];
        header("location: index.php?link=home.php");
        $smsg = "NICE!";
    }else {
        $fmsg = "Vaöe prihlasovacie meno alebo heslo nies˙ spr·vne";
    }
}
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
        <a class="nav-link" href="../index.php?link=dennemenu.php">Denn√© menu</a>
        </li>
        <li class="nav-item">
        <a class="nav-link active" href="../index.php?link=jedalnylistok.php">Jed√°lny l√≠stok</a>
       </li>
       <li class="nav-item">
       <a class="nav-link" href="../index.php?link=napojovylistok.php">Napojov√Ω l√≠stok</a>
      </li>
      </ul>
        </div>
        <div class="col-md-2"></div>
    </div>

<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="login-panel panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Admin prihlasenie</h3>
                </div>
                <div class="panel-body">
                    <form role="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                        <fieldset>
                            <div class="form-group"  >
                                <input class="form-control" placeholder="Meno" name="username" type="text" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Heslo" name="password" type="password" value="">
                            </div>
                                <input class="btn btn-lg btn-success btn-block" type="submit" value="login" name="login" >
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
<?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
<body>
</body>

</html>
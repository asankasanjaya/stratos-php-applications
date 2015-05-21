<!DOCTYPE html>

<html>
<head>
  <title>Apache Straots PHP Demo</title>
  <link href="style.css" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
</head>
<body>
  <div class="center" id="main">
  <img src="images/stratos-logo.png" style="width: 150px" />
  <h1>Apache Stratos PHP Demo</h1>
  <?php echo "<h2>Container IP: ".$_SERVER['SERVER_ADDR']."</h2>"; ?>

  <?php include("footer.php"); ?>
  </div>
</body>
</html> 

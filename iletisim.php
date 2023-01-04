<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<html>
	<head>
		<title>hakimizda</title>
		<link rel="stylesheet" href="iletisim.css">
	</head>
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

	<?php include 'includes/navbar.php'; ?>
	 
	  <div class="content-wrapper">
	    <div class="container">

	      <!-- Main content -->
	      <section class="content">
	        <div class="about">
                <p>
                <h1>iletisim</h1>
                <?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecomm";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT telephone,email FROM contacts";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "  <p class='telephone'>Telephone:" . $row["telephone"]. "<p> ";
    echo "  <p class='email'> Email:" . $row["email"]. "<p> ";
  }
} else {
  echo "0 results";
}
$conn->close();
?>

                </p>
                 
            </div>
	      </section>
	     
	    </div>
	  </div>
  
  	<?php include 'includes/footer.php'; ?>
</div>


</body>
</html>
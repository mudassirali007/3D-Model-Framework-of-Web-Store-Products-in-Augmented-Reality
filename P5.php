<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
<!--  <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
<meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>AR</title>
  <!--Copied From Practice/P1.php -->
	<link rel="shortcut icon" href="./../images/favicon.ico"/>
	<style>
	
		body {
			margin: 0;
			background-color: #4CAF50;
		}

		canvas {
			width: 100%;
			height: 100%
		}
		/* Dropdown Button */
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
 
}
.dropbtnb {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
 
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
  /* added only for AR/p5.php*/
   margin-top: 180px;
 
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd;}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {display: block;}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {background-color: #3e8e41;}

@media screen and (max-width: 768px) {
 button.dropbtn {
display: none;
}
}
	</style>
	<!--yahaa tak -->

<script src="aframe.min.js"></script>
<script src="aframe-ar.min.js"></script>
<script src="aframe-extras.loaders.min.js"></script>
</head>
<body style='margin : 100px; overflow: hidden;'>
    
    <!-- Copied From Practice/P1.php -->
    <?php
$servername = "localhost";
$username = "id8818588_mudassirali007";
$password = "googledell1994";
$dbname = "id8818588_webstore";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

    $sql = "SELECT * FROM `p-detail` where id='".$_GET['id']."' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "";
      
?>
<div class="dropdown" >
       <a href="../product-detail.php?id=<?php echo $row["id"] ?>"> <button class="dropbtnb">Back</button></a>
        </div>
        <div class="dropdown" >
  <button class="dropbtn" >Controls
  <div class="dropdown-content">
    <a style="color:red;">Show HIRO Paper </a>
    <a style="color:green;">It will display Your Model</a>
    </div>
</div>
</button>
<!-- yahaa tak -->
    
    
    <!-- we add detectionMode and matrixCodeType to tell AR.js to recognize barcode markers -->
    <a-scene embedded arjs='sourceType: webcam; debugUIEnabled: false; detectionMode: mono_and_matrix; matrixCodeType: 3x3;'>

    <a-assets>
        <a-asset-item id="animated-asset" src="./../AR/model/<?php 
            echo $row["id"]
            ?>.gltf"></a-asset-item>
            
            <!--src="1.gltf"-->
    </a-assets>


    <a-marker id="animated-marker" type='hiro'>
        <a-entity
            gltf-model="#animated-asset"
            scale="2">
        </a-entity>
    </a-marker>

    <!-- use this <a-entity camera> to support multiple-markers, otherwise use <a-marker-camera> instead of </a-marker> -->
    <a-entity camera></a-entity>
    </a-scene>
    
    <!-- Copied from Practice/P1.php -->
    <?php
        }
}
    else {
    echo "0 results";
}
   
$conn->close();
    ?>
    <!-- yahaa tak-->
</body>
</html>
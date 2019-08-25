<!DOCTYPE html>
<html lang="en">
  <head>
    <title>3D Model</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="./../images/favicon.ico"/>

    <link rel="stylesheet" href="demo-style.css">
    
    <!-- The following libraries and polyfills are recommended to maximize browser support -->
    <!-- NOTE: you must adjust the paths as appropriate for your project -->
    
    <!-- 🚨 REQUIRED: Web Components polyfill to support Edge and Firefox < 63 -->
    <script src="https://unpkg.com/@webcomponents/webcomponentsjs@2.1.3/webcomponents-loader.js"></script>

    <!-- 💁 OPTIONAL: Intersection Observer polyfill for better performance in Safari and IE11 -->
    <script src="https://unpkg.com/intersection-observer@0.5.1/intersection-observer.js"></script>

    <!-- 💁 OPTIONAL: Resize Observer polyfill improves resize behavior in non-Chrome browsers -->
    <script src="https://unpkg.com/resize-observer-polyfill@1.5.0/dist/ResizeObserver.js"></script>
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
  </head> 
<body>
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
    <a style="color:red;">Right Click => Change Camera Position</a>
    <a style="color:green;">Left Click => Change Object Rotation</a>
    <a style="color:blue;">Scroll to Resize Model</a>
  </div>
</div>
</button>


    
  <div id="card">
    <!-- All you need to put beautiful, interactive 3D content on your site: -->
    <model-viewer src="./../MV/model/<?php 
            echo $row["id"]
            ?>.gltf"
                  alt="A 3D model of your product"
                  background-color="#70BCD1"
                  shadow-intensity="1"
                  camera-controls
                  auto-rotate>
    </model-viewer> 
  </div>
  
  <!-- 💁 Include both scripts below to support all browsers! -->

  <!-- Loads <model-viewer> for modern browsers: -->
  <script type="module"
      src="https://unpkg.com/@google/model-viewer@v0.3.1/dist/model-viewer.js">
  </script>

  <!-- Loads <model-viewer> for old browsers like IE11: -->
  <script nomodule
      src="https://unpkg.com/@google/model-viewer@v0.3.1/dist/model-viewer-legacy.js">
  </script>
  
  <?php
        }
}
    else {
    echo "0 results";
}
   
$conn->close();
    ?>
</body>
</html>

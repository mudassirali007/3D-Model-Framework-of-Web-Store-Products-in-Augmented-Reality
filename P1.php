<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>3D Model Viewer</title>
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

	<script src="three.js"></script>
	<script src="OrbitControls.js"></script>
	<script src="GLTFLoader.js"></script>
	<script>
		var scene = new THREE.Scene();
		scene.background = new THREE.Color( 0xffffff );
		var camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);

		var renderer = new THREE.WebGLRenderer();
		renderer.setSize(window.innerWidth, window.innerHeight);
		document.body.appendChild(renderer.domElement);

		window.addEventListener( 'resize' ,function()
		{
			var width = window.innerWidth;
			var height = window.innerHeight;

			renderer.setSize(width,height);
			camera.aspect = width/height;
			camera.updateProjectionMatrix();

		});

		controls = new THREE.OrbitControls(camera,renderer.domElement);

		var loader = new THREE.GLTFLoader();
		loader.load(
	// resource URL
	'./../MV/model/<?php 
            echo $row["id"]
            ?>.glb',
	// called when the resource is loaded
	function ( gltf ) {

		scene.add( gltf.scene );

		gltf.animations; // Array<THREE.AnimationClip>
		gltf.scene; // THREE.Scene
		gltf.scenes; // Array<THREE.Scene>
		gltf.cameras; // Array<THREE.Camera>
		gltf.asset; // Object

	},
	// called while loading is progressing
	function ( xhr ) {

		console.log( ( xhr.loaded / xhr.total * 100 ) + '% loaded' );

	},
	// called when loading has errors
	function ( error ) {

		console.log( 'An error happened' );

	}
);

		camera.position.z=3;

		var ambientLight = new THREE.AmbientLight(0xffffff,1.5);

		 scene.add(ambientLight);

		var update = function () 
		{
		//	cube.rotation.x +=0.01;
		//	cube.rotation.y +=0.005;

		};

		var render = function () {
			renderer.render(scene, camera);

		};

		var GameLoop = function () {
			requestAnimationFrame(GameLoop);
			update();
			render();
		}

		GameLoop();

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
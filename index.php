<!DOCTYPE html>
<html lang = "en">
	<head>
		<title>Student Files</title>
		<meta charset = "utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel = "stylesheet" type="text/css" href="admin/css/bootstrap.css" />
		<link rel = "stylesheet" type="text/css" href="admin/css/style.css" />
    <style>
        /* Split the screen in half */
.split {
  height: 100%;
  width: 50%;
  position: fixed;
  z-index: 1;
  top: 0;
  overflow-x: hidden;
  padding-top: 20px;
}

/* Control the left side */
.left {
  left: 0;
  background-color: #111;
}

/* Control the right side */
.right {
  right: 0;
  background-color: red;
}

/* If you want the content centered horizontally and vertically */
.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}

/* Style the image inside the centered container, if needed */
.centered img {
  width: 150px;
  border-radius: 50%;
}
.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
}
.split:hover .image {
  opacity: 0.3;
}
.split:hover .middle {
  opacity: 1;
}
.text {
  background-color: #04AA6D;
  color: white;
  font-size: 16px;
  padding: 16px 32px;
}
    </style>    
	</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top" style="background-color:orange;">
		<div class="container-fluid">
			<label class="navbar-brand" id="title">MGM Students Information System</label>
		</div>
	</nav>
	
    <div class="split left">
  <div class="centered">
  <img src="img_avatar2.png" alt="Avatar" style="width:100%">
  <div class="middle">
  <a href="admin/index.php"><div class="text">Admin Login</div></a>
  </div>
  </div>
</div>

<div class="split right">
  <div class="centered">
  <img src="img_avatar.png" alt="Avatar" style="width:100%">
  <div class="middle">
  <a href="index1.php"><div class="text">Students Login</div></a>
  </div>
  </div>
</div>

</body>
</html>

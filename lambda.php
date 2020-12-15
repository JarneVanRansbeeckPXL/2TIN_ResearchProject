<!DOCTYPE html>
<html>
    <head>
     <title>Awsome PXL DevOps App!</title>
     <link rel="stylesheet" href="assets/css/bootstrap.min.css">
     <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">PXL DevOps App Test</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="index.php">Home</a>
                    <a class="nav-item nav-link" href="add.php">Add employee</a>
					<a class="nav-item nav-link" href="lambda.php">lambda aws</a>
                </div>
            </div>
        </nav>
		
<form action="" method="post">
  Width x Height (100x100): <input name="example" type="text" /> </br>
  </br>
  Image(fjords.jpg,nature.jpg,lights.jpg): <input name="example2" type="text" />
  <input name="submit" type="submit" />
</form>

		<?php
  if (isset($_POST['submit'])) {
    $example = $_POST['example'];
    $example2 = $_POST['example2'];
	echo "<a href='http://s3resizer-cloud-cloudperesizebucket.s3-website-us-east-1.amazonaws.com/$example/$example2' target=_blank>" . $example . $example2 . "</a>";
  };
?>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js" ></script>
    </body>
</html>

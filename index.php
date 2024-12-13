<?php
 $number3 = null;

 if (isset($_POST['submit'])) {
	
    $number1 = $_POST['n1'];
    $number2 = $_POST['n2'];

    $number3 = $number1  + $number2;

 }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP</title>
    <!-- css link -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media.css">
  </head>
  <body>    
    <div class="container">
    	<div class="row">
    		<div class="col-lg-10">
    			<!-- form -->
    			 <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    			   <div class="mb-3 mt-3">
    			     <label for="n1" class="form-label">1st Number</label>
    			     <input type="number" class="form-control n1" id="n1" name="n1" placeholder="Place your first number here" required>
    			   </div>

    			   <div class="mb-3">
    			     <label for="n2" class="form-label">2nd Number</label>
    			     <input type="number" class="form-control n2" id="n2" name="n2" placeholder="Place your last number here" required>
    			   </div>

    			   <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    			 </form>
    			<!-- form -->
    		</div>
    	</div>
    </div>
    
    <div class="container">
    	<h1 class="mt-2">
    	<?php

        echo $number3;

    	?>
    	</h1>
    </div>
    <!-- js file link-->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
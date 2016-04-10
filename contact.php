<?php

//variable declarations.
$nameErr = $emailErr = "";
$name = $email = $comment = "" ;
$myFile = "page_comments.txt";
$date = date("D M j G:i:s T Y");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Name  validation
  if(empty($_POST["name"])) {
    $nameErr = "Name is Required";
  }else {
    $name = validate($_POST["name"]);
  }
  
  //Email validation
  if(empty($_POST["email"])) {
    $emailErr = "Email is Required";
  } else {
    $email = validate($_POST["email"]);
	//Email format:
	if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
	  $emailErr = "Invalid fromat";
	} 
  }
  
  //save the comment to variable if not empty
  if(empty($_POST["comment"])){
    $comment = "";
  } else{
    $comment = validate($_POST["comment"]);
  }
  

	
} //end if 

// Remove white spaces 
function validate($userData) {
  $userData = trim($userData);
  return $userData;
}

if(!empty($name) && !empty($email) && !empty(comment))
{
	  
  // open $myfile for appending comments
  $file = fopen($myFile, 'a') or die("Unable to open the file");
  
  // Write the data to file
  $data = "<strong>Comment Update by : $name ($email) on $date </strong>" . PHP_EOL;
  fwrite($file, $data);
  $data1 = "$comment" . PHP_EOL;
  fwrite($file, $data1);
  fclose($file);
	
}

?>

<html>
<!--
Created by : Your projects team names 

-->
	<head>
	
	</head>

	<body>
	
	<?php include("header.php"); ?>
	<div class="contentTitle"><h1>Leave your feedback  </h1></div>
	
	<div class="contentText">
	<br />
	<form class="feedbackForm" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	  <p>
	  <input type="text" name="name" placeholder="Your Name" />
	  <label>Name</label> <span style="color:red"> <?php echo $nameErr; ?></span>
	  </p> 
	  <br/>
	  <p>
	  <input type="text" name="email" placeholder="mail@ucmo.edu" />
	  <label>Email</label> <span style="color:red"> <?php echo $emailErr; ?></span>
	  </p>
	  <br/>
	  <textarea name="comment" placeholder="Comments" /></textarea>	<br />
	  <input id="fdbk-btn" type="submit" value="Submit" />
	</form>
	<br/><br/>
	<?php 
	if(!empty($name) && empty($emailErr)){
	  echo "Thank you <strong>$name</strong> for your feedback!"	;
	  echo "<br/>";
	}
		
	?>
	<br />
	
	<?php
	$myFile = "page_comments.txt";
	if(file_exists($myFile)) {
	  echo "<h3> Previous Comments :</h3>";
	  //echo file_get_contents($myFile);
	  $f = fopen($myFile, "r");
	  while(!feof($f)){
		echo fgets($f)."<br />";
	  }
	 fclose($f);
	}
	
	
	?>
				
	</div>
		
</div>
	<?php include("footer.php"); ?> 
	</body>

</html>

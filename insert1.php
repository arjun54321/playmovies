<?php
include("connection.php");
?>
<!doctype html>
<html>
<head><title>insert</title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
	
	<style>
	body{
			background-image:url("project/img/12.jpg");
	}
	 .button{
          text-align:center;
              }
</style>
	</head>
	<body ><br>
		<div class="container">
		<center><form action="" method="POST" id="demo" class="text-muted">
			name/url:<input type="text"  name="name" value="" >
			thumbnail:<input type="text" name="image" value="">
			title:<input type="text" name="title" value="">
			
			checkbox:<input type="checkbox" name="checkbox" value="">

			<input type="submit" name="submit" value="submit" >
			<h3><p class="text-danger">select checkbox to insert the url.</p></h3>
		
		<textarea rows="4" cols="50" name="description" placeholder="Enter description here..."></textarea></form>
</center>
	
	</div>

	
<?php
		       if($_POST['submit'])
		       {    
		       		if(isset($_POST['checkbox']))
		       		{
		       			echo"hello";
		       				$nm=$_POST['name'];
		                	$im=$_POST['image'];
		                	$ti=$_POST['title'];
		                	$ds=$_POST['description'];
		       		        if($nm!=""&&$im!=""&&$ti!=""&&$ds!="")
		       		{	
		       			$query="INSERT INTO YOUTUBE (name,image,title,description) VALUES('$nm','$im','$ti','$ds')";
		       			echo($query);
		       			$data=mysqli_query($con,$query);
		       			if($data)
		       			{
		       				echo"url inserted successfully";
		       			}
		       			else
		       			{
		       				echo"not inserted";
		       			}

		       		}
		       		else
		       		{
		       			echo "there must be an empty data field","<br>";
		       		}
		       	}
		       		else
		       		{
		       			echo"hello";
		                    $nm=$_POST['name'];
		                	$im=$_POST['image'];
		                	$ti=$_POST['title'];
		                	$ds=$_POST['description'];
		       		        if($nm!=""&&$im!=""&&$ti!=""&&$ds!="")
		       		{	
		       			$query="INSERT INTO MOVIE (name,image,title,description) VALUES('$nm','$im','$ti','$ds')";
		       			//echo($query);
		       			$data=mysqli_query($con,$query);
		       			if($data)
		       			{
		       				echo"data inserted successfully";
		       			}
		       			else
		       			{
		       				echo"not inserted";
		       			}

		       		}
		       		else
		       		{
		       			echo "there must be an empty data field","<br>";
		       		}
		       	}
		       
		       }
		       ?>
</body>
</html>
</table>
<html>
<head>
</head>
<body>
	<div class="row">
	<div class="col-md-8 col-md-offset-1" ><a href="display.php"><h1>display</h1></a></div>
	<div class="col-md-3"><a href="display1.php"><h1>display url</h1></a></div>
</div>
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
	</body>
	</html>

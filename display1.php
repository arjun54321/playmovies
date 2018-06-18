<?php
include('connection.php');
error_reporting(1);
$query="SELECT * FROM YOUTUBE";
$data=mysqli_query($con,$query);
$total=mysqli_num_rows($data);
if($total!=0)
{
	?>
	<center><table> 
	
		<tr>
			<th>movie url</th>
			<th>thumbnail</th>
			<th>title</th>
			<th>description</th>
		</tr><br>
		<?php
				while($result=mysqli_fetch_assoc($data))
		{
			echo"<tr>
					 <td><input type='text' name='name[]' value='".$result['name']."'></td>
				     <td><input type='text' name='image[]' value='".$result['image']."'></td>
				      <td><input type='text' name='title[]' value='".$result['title']."'></td>
				      <td><input type='text' name='description[]' value='".$result['description']."'></td>
		  		  </tr>"."<br>";
		}
}
else
{
	echo "<br>"."table is empty";
}
?> 
</table></center>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
	<style>
	body{
			background-image:url("project/img/12.jpg");
	}
</style>
</head>
<body>
	<div class="row">
		<div class="col-md-6 col-md-offset-6">
			<a href="insert1.php"><h1>data</h1></a>
		</div>
	</div>
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</body>
	</html>


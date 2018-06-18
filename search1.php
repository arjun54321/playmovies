<!doctype html>
<html>
<head>
	<title>search</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
	<style>
	 body{
      /*background-color:#93B874;*/
     /* background-image:url("project/img/12.jpg");*/
     margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  }
  .topnav {
  overflow: hidden;
  background-color: #333;
}
.topnav div {
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 30px;
}
  hr { 
    display: block;
    margin-top: 0.5em;
    margin-bottom: 0.5em;
    margin-left: auto;
    margin-right: auto;
    border-style: inset;
    border-width: 2px;
       }
       .button{
          text-align:center;
              }
              .movie{
                 color:red;
                 text-align:center;
                   }
                    .tv-series{
                 color:red;
                 text-align:center;
                   }
                   .names{
                      text-align:center;
                      color:black;
                   }
</style>
</head>
<body>
  <div class="topnav" id="myTopnav">
 <div>WELCOME TO MY WORLD</div><hr>
 <marquee><h4 class="text-primary">what u looking 4 is here</h4></marquee>
</div>
  <div class="row">
  <div class="button">
    <button type="button" class="btn btn-primary" onClick="location.href='movies2.php'">HOME</button>
    <button type="button" class="btn btn-primary">MOVIES</button>
    <button type="button" class="btn btn-primary">TV-SERIES</button>
    <button type="button" class="btn btn-primary">GENRE</button>
  <div class=" col-md-12" >       
   <form method="POST" action="search1.php">
        <div class="input-group">
          <span class="input-group-addon">
            <button style="height: 20px;"><span class="glyphicon glyphicon-search"></span></button> 
          </span>
          <input type="text" name="searchname" class="form-control" placeholder="Search...">  
        </div>
   </form>
  </div>
  </div>   
  </div>

  <div class="row">
    <div class="col-md-12">
     <!--  <img class="mySlides" src="project/img/3.jpg" style="width:100%;height:300px" alt="please wait">
    </div> -->
   <!--  <div class="animation" style="max-width:100% ; height:4000px";> -->
    <img class="mySlides" src="project/img/1.jpg" style="width:100%;height:400px" alt="please wait">
    <img class="mySlides" src="project/img/2.jpg" style="width:100%;height:400px" alt="plase wait">
    <img class="mySlides" src="project/img/3.jpg" style="width:100%;height:400px" alt="please wait">
  </div>
</div>

  <!-- <div class="row">
  <div class="button">
    <button type="button" class="btn btn-primary" onClick="location.href='movies2.php'">HOME</button>
    <button type="button" class="btn btn-primary">MOVIES</button>
    <button type="button" class="btn btn-primary">TV-SERIES</button>
    <button type="button" class="btn btn-primary">GENRE</button>
  </div>
  </div><br> -->

  <div class="row">
  <div class="movie">
    <h3>MOVIES</h3><hr>
  </div>
</div><br>
<?php
include('connection.php');
error_reporting(1);
$set=$_POST['searchname'];
if($set)
{
  // $show="SELECT * FROM movie WHERE title='$set'
  //       UNION
  //       SELECT * FROM youtube WHERE title='$set'";
    $show="SELECT * FROM `movie` WHERE `title` LIKE '%".$set."%'
           UNION
           SELECT * FROM `youtube` WHERE `title` LIKE '%".$set."%';";

$data=mysqli_query($con,$show);
$total=mysqli_num_rows($data);
if($total) {


while($rows=mysqli_fetch_array($data))
{
  $i= $rows['name'];
  $j= $rows['image'];
  $k= $rows['title'];
  $m=$rows['movie'];
   if($m=="movie")
   {
   echo"<div class='col-md-1 col-md-offset-1'><img onmouseover='bigImg(this)' onmouseout='normalImg(this)' border='0' src='project/img/".$j.".jpg' data-poster='project/img/".$j.".jpg' data-title='".$k."' data-url='project/movies/".$i.".mp4' width='150' height='150' class='moviePoster'><p class='names'>".$rows['title']."</div>";
}
else
{
	echo"<div class='col-md-1 col-md-offset-1'><img onmouseover='bigImg(this)' onmouseout='normalImg(this)' border='0' src='project/img/".$j.".jpg' data-poster='project/img/".$j.".jpg' data-title='".$k."' data-url='".$i."' width='150' height='150' class='youtubrMoviePoster'><p class='names'>".$rows['title']."</div>";
}
}
}
else
{
  echo"SORRY! nothing found";
}
}
else
{
  echo "SORRY! nothing found";
}
?>
<div class="container">

  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">hello</h4>
        </div>
        <div class="modal-body">
          <!-- <p><video poster="img/7.jpg" src="movies/1.mp4" controls="controls" width="200" height="200"></p> -->
        </div>
        <div class="modal-footer">
          <button type="button" class="close" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

</div>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script>
    $(document).ready(function(){
      $('.moviePoster').click(function(){
        var title = $(this).data('title');
        var url = $(this).data('url');
        var poster = $(this).data('poster');
        var video = '<video poster="'+poster+'" src="'+url+'" controls="controls" width="100%" height="auto">';

        $('.modal-title').html(title);
        $('.modal-body').html(video);
        $('#myModal').modal('toggle');
      });
    });
    
   </script>
   <script>
    $(document).ready(function(){
      $('.youtubrMoviePoster').click(function(){
        var title = $(this).data('title');
        var url = $(this).data('url');
        var poster = $(this).data('poster');
  
        var youtube ='<iframe  controls="controls" poster="'+poster+'" width="560" height="315" src="'+url+'" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>';

        $('.modal-title').html(title);
        $('.modal-body').html(youtube);
        $('#myModal').modal('toggle');
      });
    });
    
  </script>
   <script>
$(function(){
    $('.close').click(function(){      
      $("iframe").each(function() { 
        var src= $(this).attr('src');
        $(this).attr('src',src);  
      });
    });
});
</script>
 <script>
$(function(){
    $('.close').click(function(){      
      $("video").each(function() { 
        var src= $(this).attr('src');
        $(this).attr('src',src);  
      });
    });
});
</script>
 <script>
       var myIndex = 0;
       carousel();
       function carousel() 
       {
       var i;
       var x = document.getElementsByClassName("mySlides");
       for (i = 0; i < x.length; i++) 
       {
          x[i].style.display = "none";  
       }
        myIndex++;
        if (myIndex > x.length) {myIndex = 1}    
        x[myIndex-1].style.display = "block";  
        setTimeout(carousel, 3000); // Change image every 3 seconds
       }
    </script>
    <script>
function bigImg(x) {
    x.style.height = "150px";
    x.style.width = "200px";
}

function normalImg(x) {
    x.style.height = "150px";
    x.style.width = "150px";
}
</script>
</body>
</html>
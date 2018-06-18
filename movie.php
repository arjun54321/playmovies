<?php
include('connection.php');
error_reporting(1);
$query="SELECT * FROM MOVIE";
$data=mysqli_query($con,$query);
$query1="SELECT * FROM YOUTUBE";
$data1=mysqli_query($con,$query1);
	?>

		<!DOCTYPE html>
<html lang="en">
<head>
  <title>myworld.com</title>
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
<body >
	<div class="topnav" id="myTopnav">
 <div>WELCOME TO MY WORLD</div><hr>
 <marquee><h4 class="text-primary">what u looking 4 is here</h4></marquee>
</div>

  <div class="row">
  <div class="button">
    <button type="button" class="btn btn-primary" onClick="location.href='movies2.php'">HOME</button>
    <button type="button" class="btn btn-primary" onClick="location.href='movie.php'">MOVIES</button>
    <button type="button" class="btn btn-primary">TV-SERIES</button>
    <button type="button" class="btn btn-primary" id="submit">GENRE</button>
    <div id="show_data"></div>
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

 <!--  <div class="row">
    <div class="col-md-12"> -->
     <!--  <img class="mySlides" src="project/img/3.jpg" style="width:100%;height:300px" alt="please wait">
    </div> -->
   <!--  <div class="animation" style="max-width:100% ; height:4000px";> -->
	 <!--  <img class="mySlides" src="project/img/1.jpg" style="width:100%;height:400px" alt="please wait">
	  <img class="mySlides" src="project/img/2.jpg" style="width:100%;height:400px" alt="plase wait">
	  <img class="mySlides" src="project/img/3.jpg" style="width:100%;height:400px" alt="please wait">
  </div>
</div> -->

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
    //echo"<div class='row'>";
				while($result=mysqli_fetch_assoc($data))
		{
      $i=$result['name'];
      $j=$result['image'];
      $k=$result['title'];

              echo"<div class='col-md-2'><img  onmouseover='bigImg(this)' onmouseout='normalImg(this)' border='0' src='project/img/".$j.".jpg' data-poster='project/img/".$j.".jpg' data-title='".$k."' data-url='project/movies/".$i.".mp4' width='150' height='150' class='moviePoster'><p class='names'>".$result['title']."</div>";
		}
   

      while($result=mysqli_fetch_assoc($data1))
    {
      $i=$result['name'];
      $j=$result['image'];
       $k=$result['title'];

              echo"<div class='col-md-2 '><img  onmouseover='bigImg(this)' onmouseout='normalImg(this)' border='0' src='project/img/".$j.".jpg' data-poster='project/img/".$j.".jpg' data-title='".$k."' data-url='".$i."' width='150' height='150' class='youtubrMoviePoster'><p class='names'>".$result['title']."</div>";
    }
    // echo"</div>";	
?>

  <div class="col-md-12"><hr></div> 

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
        <!--   <button type="button" class="btn btn-default" data-dismiss="modal" class="close">Close</button> -->
        <button type="button" data-dismiss="modal" class="close">Close</button>
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
        // var youtube ='<iframe width="560" height="315" src="https://www.youtube.com/embed/l25AL0BdD6w" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>';


        $('.modal-title').html(title);
        $('.modal-body').html(video);
        // $('.modal-body').html(youtube);
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
        // var video = '<video poster="'+poster+'" src="'+url+'" controls="controls" width="100%" height="auto">';
        var youtube ='<iframe  controls="controls" poster="'+poster+'" width="560" height="315" src="'+url+'" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>';
        //alert(youtube);


        $('.modal-title').html(title);
        // $('.modal-body').html(video);
        $('.modal-body').html(youtube);
        $('#myModal').modal('toggle');
      });
    });
    
  </script>
 <!--  <script>
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
    </script> -->
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
    $(document).ready(function (){
        $('#submit').click(function(){
      //alert('".<html><button>hello</button></html>."');
      $.ajax({
          url:"genre.php",
          method:"POST",
          data:"",
          dataType:"text",
          success:function (genre)
          {
            $('#show_data').text(genre)
          }
        })
      })
    });
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
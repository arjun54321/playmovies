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

.popup {
    position: relative;
    display: inline-block;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    text-align:center;
}

/* The actual popup */
.popup .popuptext {
    visibility: hidden;
    width:auto;
    height:auto;
    background-color: #555;
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 8px 0;
    position: absolute;
    z-index: 1;
    bottom: 125%;
   /* left:50%;
    margin-right: -80px;*/
}

/* Popup arrow */
.popup .popuptext::after {
    content: "";
    position: absolute;
    top: 100%;
    left: 50%;
    margin-left: -5px;
    border-width: 5px;
    border-style: solid;
    border-color: #555 transparent transparent transparent;
}

/* Toggle this class - hide and show the popup */
.popup .show {
    visibility: visible;
    -webkit-animation: fadeIn 1s;
    animation: fadeIn 1s;
}

/* Add animation (fade in the popup) */
@-webkit-keyframes fadeIn {
    from {opacity: 0;} 
    to {opacity: 1;}
}

@keyframes fadeIn {
    from {opacity: 0;}
    to {opacity:1 ;}
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
     <button type="button" class="btn btn-primary" onClick="location.href='video.php'">VIDEOS</button>
    <button type="button" class="btn btn-primary tv">TV-SERIES</button>
    <button type="button" class="btn btn-primary btnGenre" id="submit">GENRE</button>
    <div id='show_data'></div>
    <div id='data' style="width:100px;height:100px"></div>
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
<div class="container">


<!-- <iframe src="https://mcloud.to/embed/4jv35o?a.url=https%3A%2F%2Fwww6.fmovies.se%2Fassets%2Facode%2Faplayer.html%3Frandom%3D1529307551.2757&amp;a.close=1&amp;ui=pQh1%406%2F89O0MmImDdrkAh8hY3a4%3D" allow="autoplay; fullscreen" frameborder="no" scrolling="no" allowfullscreen="yes" style="width: 100%; height: 500px;" __idm_id__="151290881"></iframe>
 -->


		<?php $qwerty=0;
    //echo"<div class='row'>";
				while($result=mysqli_fetch_assoc($data))
		{
      $i=$result['name'];
      $j=$result['image'];
      $k=$result['title'];
      $l=$result['description'];

              // echo"<div class='col-md-2' ><img  title='".$l."' onmouseover='bigImg(this)' onmouseout='normalImg(this)' border='0' src='project/img/".$j.".jpg' data-poster='project/img/".$j.".jpg' data-title='".$k."' data-url='project/movies/".$i.".mp4' width='150' height='150' class='moviePoster'>
              //     <div class='popup' onclick='myFunction(".$qwerty.")'>".$result['title']."</div> <span class='popuptext' id='myPopup".$qwerty."'>A Simple Popup!</span> </div>";

                    echo"<div class='col-md-2' ><img  title='".$l."' onmouseover='bigImg(this)' onmouseout='normalImg(this)' border='0' src='project/img/".$j.".jpg' data-poster='project/img/".$j.".jpg' data-title='".$k."' data-url='project/movies/".$i.".mp4' width='150' height='150' class='moviePoster'>
                      <div class='popup' onclick='myFunction(".$qwerty.")'>".$result['title']."
                       <span class='popuptext' id='myPopup".$qwerty."'>".$l."'</span></div>
                       </div>";

                  // echo" <h2>Popup</h2>
                  //      <div class='popup' onclick='myFunction(".$qwerty.")'>".$result['title']."
                  //      <span class='popuptext' id='myPopup".$qwerty."'>A Simple Popup!</span>
                  //      </div>";
 	                   $qwerty++;	
           }
		
   
      while($result=mysqli_fetch_assoc($data1))
    {
      $i=$result['name'];
      $j=$result['image'];
       $k=$result['title'];
         $l=$result['description'];

              echo"<div class='col-md-2 '><img title='".$l."' onmouseover='bigImg(this)' onmouseout='normalImg(this)' border='0' src='project/img/".$j.".jpg' data-poster='project/img/".$j.".jpg' data-title='".$k."' data-url='".$i."' width='150' height='150' class='youtubrMoviePoster'>
                 <a class='names'>".$result['title']."</a></div>";
    }
    // echo"</div>";	
?>
</div>




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

 <div class="col-md-12"><hr></div><br>
<div class="row">
  <div class="movie">
    <h3>VIDEOS</h3>
  </div>
</div><br>



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
function bigImg(x) {
    x.style.height = "150px";
    x.style.width = "180px";
}

function normalImg(x) {
    x.style.height = "150px";
    x.style.width = "150px";
}
</script>
<!-- <script>
function showText(text){
    document.getElementById("text").innerHTML=text;
}
function hide(){
    document.getElementById("text").innerHTML="";
}
</script> -->
<!-- <img src="image.jpg" id="image" onMouseOver="showText('Some Text')" onMouseOut="hide();" onmouseover='bigImg(this)'>
<div id="text"></div> -->

<script>
    $(document).ready(function (){
        /*$('#submit').click(function(){
      //alert("hello");
      $.ajax({
          url:"genre.php",
          method:"POST",
          data:"",
          dataType:"text",
          success:function (genre)
          {
            $('#show_data').text(genre)
            // if(genre == 'hello')
            // 	alert("<button>hello</button>");
          }
        })
      });*/

      $('.btnGenre').click(function(){

      	var btn = "<button class='btn btn-primary btnAppear'>ACTION</button> <button class='btn btn-primary btnAppear1'>ADVENTEURE</button> <button class='btn btn-primary btnAppear'>SCIENCE FICTION</button> <button class='btn btn-primary btnAppear'>HORROR</button> <a href='test.php'>TEST</a>";
      	// $('#show_data').html(btn);
      	$('.modal-title').html('Select Genre');
      	$('.modal-body').html(btn);
      	$('#myModal').modal('toggle');

      	// $('.btnAppear').click(function(){
       //       var result =genre.php;
       //       document.getElementById("show_data").innerHTML = result; 
      	// 	//document.write("genre.php");
      	// })

      	$('.btnAppear1').click(function(){

      			  window.location.assign("action.php")
      		})
      	$('.btnAppear2').click(function(){

      			  window.location.assign("adventure.php")
      		})
      	$('.btnAppear3').click(function(){

      			  window.location.assign("fiction.php")
      		})
      	$('.btnAppear4').click(function(){

      			  window.location.assign("horror.php")
      		})

      });
    });
</script>

<script>
// When the user clicks on div, open the popup
function myFunction(id) {
    var popup = document.getElementById("myPopup"+id);
    popup.classList.toggle("show");
}
</script>

<script>
    $(document).ready(function (){

    	$('.tv').click(function(){
    		//$('#data').load('http://www.mywebsite.com/portfolio.php #portfolio-sports');
    		// $('#data').load('https://www.youtube.com/embed/89aTDByJTz4');
    		$('#data').load("https://www.youtube.com/watch?v=4rp2aLQl7vg #player-container");
    		// var result = "$('#data').load('http://www.mywebsite.com/portfolio.php #portfolio-sports')";
    		// document.getElementById("data").innerHTML = result;
    		//console.log("hello");
    	})
    	});
    </script>

</body>
</html>
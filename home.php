
<?php
include("include/dbs.php");
session_start();
if (!isset($_SESSION['id'])) 
{
	
header("location:index.php");
}


?>







<!doctype html>
<html lang="en">

 
<head>
<!--
    Programming by Ildar Sagdejev ( http://twitter.com/tknomad )
  -->
<meta charset="UTF-8">
<title>Cloud 9 Carousel jQuery Plugin Demo</title>
<link rel="stylesheet" href="css/main.css">
<link href="sld/jquerysctipttop.css" rel="stylesheet" type="text/css">

<link href="BScss\bootstrap.css" rel="stylesheet" type="text/css">
 <link rel="stylesheet" href="mnu/style.css" type="text/css" media="screen"/>

<link rel="stylesheet" type="text/css" href="style1.css" media="all"/>


<link href="rot/jquerysctipttop.css" rel="stylesheet" type="text/css">
<script src="rot/jquery.min.js"></script>
<script src="rot/jquery.rotate.js"></script>
<script>
$(function() {
	var img = $('#spin');
	function rotate() {
		img.animate({rotate: '360'}, 4000, 'linear', function() {
			rotate();
		});
	}
	rotate();
});


 


    </script>

	
	
 
	
	



        <meta name="viewport" content="width=device-width, initial-scale=1">



</head>
<STYLE>
body{
 background-image: url('bg/4.jpg');
    background-size: cover;
}
 #tab{
	 color: white;
 }
 #spin{
 width:44px;
 
 }
 #profile{

	 width: 80%;
	height: 50%;
	margin:auto;
 }
 
 #righty{
	 width: 40%;
	float:left;
    height:100%;
 }
 #lefty{
	 width:60%;
	float:right;
    height:100%;
 }
</STYLE>




<body>

<BR>
 <div class="container-fluid">
  <div class="row"  >  
      <div class = "col-sm-3">
 <div class="row"  >  
<div ID = "do"class = "col-sm-2"><img   src="LOGO/G.png"/></DIV>
<div ID = "doo" class = "col-sm-2"><img   src="LOGO/L.png"/></DIV>
<div class = "col-sm-2">  <img  id = "spin" src="LOGO/O.png"/></DIV>
 <div class = "col-sm-2"><img   src="LOGO/C.png"/></DIV>
<div class = "col-sm-2"><img   src="LOGO/A.png"/></DIV>
<div class = "col-sm-2"><img   src="LOGO/L.png"/> </DIV>
 
 
 </DIV>
 
 </DIV>
 
  <div class = "col-sm-6"> </DIV>
   <div id="log" class = "col-sm-3"><center> <img height= "40%" width="80%" src="log.png"/></center> </DIV>
 </DIV>
 
 
 
 
 
  <div class="row"  >  
      <div class = "col-sm-3">
 <div class="row"  >   
 
 
 <div class = "col-sm-2"> </DIV>
<div class = "col-sm-2"> </DIV>
<div class = "col-sm-2"> <img   src="LOGO/N.png"/></DIV>
 <div class = "col-sm-2"> </DIV>
<div class = "col-sm-2"></DIV>
<div class = "col-sm-2"> </DIV>
 
 
 
 </DIV>
 
 </DIV>
 
  <div class = "col-sm-9"> </DIV>
 </DIV>
 
 
 
 
 
 
  <div class="row"  >  
      <div class = "col-sm-3">
 <div class="row"  >   
 
 
 <div class = "col-sm-2"> </DIV>
<div class = "col-sm-2"> </DIV>
<div class = "col-sm-2">  <img  src="LOGO/L.png"/></DIV>
 <div class = "col-sm-2"> </DIV>
<div class = "col-sm-2"></DIV>
<div class = "col-sm-2"> </DIV>
 
 
 
 </DIV>
 
 </DIV>
 
  <div class = "col-sm-9">
<div class="row"  >
<div class = "col-sm-8">
 
 <div class="menu">
            <div class="item">
                <a class="link icon_mail"></a>
                <div class="item_content">
                    <h2>Contact us & About Us</h2>
                    <p>
                        <a href="feedback.php">Help</a>
                        <a href="viewfdbk.php">user Queries</a>
                        <a href="mist.php">About M.I.S.T</a>
                    </p>
                </div>
            </div>
		 
            <div class="item">
                <a class="link icon_help"></a>
                <div class="item_content">
                    <h2>All Members</h2>
                    <p>
                        <a href="members.php">Search All Members</a>
                        
                    </p>
                </div>
            </div>
            <div class="item">
                <a class="link icon_find"></a>
                <div class="item_content">
                    <h2>Notices</h2>
                     <p>
                        <a href="uploadnotices.php">Upload Notices</a>
                        <a href="viewnotices.php">View Notices</a>
                        
                    </p>
                </div>
            </div>
            <div class="item">
                <a class="link icon_photos"></a>
                <div class="item_content">
                    <h2>Notes</h2>
                    <p>
                        <a href="viewFACULTYnotes.php">Official</a>
                        <a href="viewSTUDENTnotes.php">Unofficial</a>
                        <a href="uploadnotes.php">Upload</a>
                    </p>
                </div>
            </div>
            <div class="item">
                <a class="link icon_home"></a>
                <div class="item_content">
                    <h2>Start from here</h2>
                    <p>
                        <a href="index.php">All Departments</a>
                        <a href="home.php">Home</a>
                         
                    </p>
                </div>
            </div>
        </div> </div> 
		<div  class =  "col-sm-4">  </div>
		</div>
		









  </DIV>
 </DIV>
 
 
 
 
 
  <div class="row"  >  
      <div class = "col-sm-3">
 <div class="row"  >   
 
 
 <div class = "col-sm-2"> </DIV>
<div class = "col-sm-2"> </DIV>
<div class = "col-sm-2">  <img  src="LOGO/I.png"/></DIV>
 <div class = "col-sm-2"> </DIV>
<div class = "col-sm-2"></DIV>
<div class = "col-sm-2"> </DIV>
 
 
 
 </DIV>
 
 </DIV>
 
<div class = "col-sm-9"> </DIV>
 
 </DIV>
 
 
 
 
 
 
 
<div class="row"  >  
<div class = "col-sm-3">
<div class="row"  >   
 
 
<div class = "col-sm-2"> </DIV>
<div class = "col-sm-2"> </DIV>
<div  id ="do" class = "col-sm-2">   <img    src="LOGO/N.png"/>  </DIV>
<div class = "col-sm-2"> </DIV>
<div class = "col-sm-2"></DIV>
<div class = "col-sm-2"> </DIV>
 
 
 
 </DIV>
 
 </DIV>
 
 <div class = "col-sm-9"> </DIV>
 </DIV>
 
 
 
 
 
 
 
 
 <div class="row"  >  
      <div class = "col-sm-3">
 <div class="row"  >   
 
 
<div class = "col-sm-2"> </DIV>
<div class = "col-sm-2"> </DIV>
<div class = "col-sm-2">  <img   src="LOGO/E.png"/></DIV>
<div class = "col-sm-2"> </DIV>
<div class = "col-sm-2"></DIV>
<div class = "col-sm-2"> </DIV>
 
 
 
 </DIV>
 
 </DIV>
 
 <div class = "col-sm-9"> </DIV>
 </DIV>
 
 
 
 
 
 
 
 
 
 
 
 
 

 
<script src="sld/jquery.reflection.js"></script> 
<script src="sld/jquery.cloud9carousel.js"></script> 
<script>
    $(function() {
      var showcase = $("#showcase")

      showcase.Cloud9Carousel( {
        yPos: 42,
        yRadius: 48,
        mirrorOptions: {
          gap: 12,
          height: 0.2
        },
        buttonLeft: $(".nav > .left"),
        buttonRight: $(".nav > .right"),
        autoPlay: true,
        bringToFront: true,
        onRendered: showcaseUpdated,
        onLoaded: function() {
          showcase.css( 'visibility', 'visible' )
          showcase.css( 'display', 'none' )
          showcase.fadeIn( 1500 )
        }
      } )

      function showcaseUpdated( showcase ) {
        var title = $('#item-title').html(
          $(showcase.nearestItem()).attr( 'alt' )
        )

        var c = Math.cos((showcase.floatIndex() % 1) * 2 * Math.PI)
        title.css('opacity', 0.5 + (0.5 * c))
      }

      // Simulate physical button click effect
      $('.nav > button').click( function( e ) {
        var b = $(e.target).addClass( 'down' )
        setTimeout( function() { b.removeClass( 'down' ) }, 80 )
      } )

      $(document).keydown( function( e ) {
        //
        // More codes: http://www.javascripter.net/faq/keycodes.htm
        //
        switch( e.keyCode ) {
          /* left arrow */
          case 37:
            $('.nav > .left').click()
            break

          /* right arrow */
          case 39:
            $('.nav > .right').click()
        }
      } )
    })
  </script> 
  
    
  <script>
            $('.item').hover(
                function(){
                    var $this = $(this);
                    expand($this);
                },
                function(){
                    var $this = $(this);
                    collapse($this);
                }
            );
            function expand($elem){
                var angle = 0;
                var t = setInterval(function () {
                    if(angle == 1440){
                        clearInterval(t);
                        return;
                    }
                    angle += 40;
                    $('.link',$elem).stop().animate({rotate: '+=-40deg'}, 0);
                },10);
                $elem.stop().animate({width:'268px'}, 1000)
                .find('.item_content').fadeIn(400,function(){
                    $(this).find('p').stop(true,true).fadeIn(600);
                });
            }
            function collapse($elem){
                var angle = 1440;
                var t = setInterval(function () {
                    if(angle == 0){
                        clearInterval(t);
                        return;
                    }
                    angle -= 40;
                    $('.link',$elem).stop().animate({rotate: '+=40deg'}, 0);
                },10);
                $elem.stop().animate({width:'52px'}, 1000)
                .find('.item_content').stop(true,true).fadeOut().find('p').stop(true,true).fadeOut();
            }
        </script>
 

 
</DIV>

 <?php
 
  
 $id = $_SESSION['id'];
 $get = "SELECT * FROM user WHERE u_id = '$id'";
 $run = mysqli_query($con,$get);
 $row = mysqli_fetch_array($run);
 
 $name=$row['username'];
 $desig=$row['designation'];
 $email=$row['email'];
 $dept =$row['dept'];
 $course=$row['course'];
 $pic = $row['profilepic'];
?>
 
<div id='profile'> 

<div id="lefty">

<?php
echo "<center style='color:black' ><h2 >$name</h2>
       <h5>($desig)</h5><br>
       <h4>$email</h4><br>
	   <h4>$dept</h4><br>
	   <h3>$course</h3><br><center>"; 
?>

<center>
<a href="uploadnotes.php"><button type="button" class="btn btn-primary">Upload Notes</button></a>
<a href="updateDP.php"><button type="button" class="btn btn-primary">Update D.P</button></a>
<a href="viewFACULTYnotes.php"><button type="button" class="btn btn-primary">Official Notes</button></a>
<a href="viewSTUDENTnotes.php"><button type="button" class="btn btn-primary">Unofficial Notes</button></a>
 <a href="viewnotices.php"><button type="button" class="btn btn-primary">All Notices</button></a> <br><br>
  
  
  <?php 
 if ($desig == "Faculty")
 { echo '<a href="uploadnotices.php"><button type="button" class="btn btn-danger">Upload Notices</button></a>'; }
	else {   }
 ?>
  
  
  
  
  
  
<a href="logout.php"><button type="button" class="btn btn-danger">Log Out</button></a>

</center>

</div>
<div id="righty"> <?php  
echo "<img  src='udp/$pic' width='100%' height='100%' />"; ?>
</div>
</div>





 
  
  
 
 
 
 
</body>
</html>



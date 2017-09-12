<?php
include("include/dbs.php");
session_start();
if (!isset($_SESSION['id'])) 
{
	header("location:index.php");
}
  $de = $_SESSION['dept'];
	 if ($de == "School of Computer Science")
	 {
		  $table = "computer_science" ;
	 }
	 
	else if ($de == "School of Education")
	 {
		  $table = "education" ;
	 }
	 
	 else if ($de == "School of Law")
	 {
		  $table = "law" ;
	 }
	 
	else if ($de == "School of Life Science")
	 {
		  $table = "life_science" ;
	 }
	 
	else if ($de == "School of Management")
	 {
		  $table = "management" ;
	 }
	 
	else if ($de == "School of Mass Communication")
	 {
		  $table = "mass_communication" ;
	 }
	 
	else if ($de == "Glocal Medical College")
	 {
		  $table = "medical" ;
	 }
	 
	else if ($de == "School of Pharmacy")
	 {
		  $table = "pharmacy" ;
	 }
	 
	else if ($de == "School of Polytechnic")
	 {
		  $table = "polytechnic" ;
	 }
	 
	else if ($de == "Senior Secondary School")
	 {
		  $table = "ss_school" ;
	 }
	 
	else if ($de == "School of Technology")
	 {
		  $table = "technology" ;
	 }
	 
	else {echo "<h1>error occured...!!! </h1>";}
	
	
	if(!isset($_POST['bydate']) && !isset($_POST['byname']) )
	{
		$get = "SELECT * FROM $table";
		 $run = mysqli_query($con,$get);
		 $vella = "";
  
	}
		
		 
	
	  if(isset($_POST['bydate']))
	{	
	 $yr = $_POST['yrr'];
 $dt 	= $_POST['dte'];
 $mn = $_POST['mth'];
	   $res = $dt."-".$mn."-".$yr;
	
	$get = "SELECT * FROM $table WHERE date = 'res'";
	  $run = mysqli_query($con,$get);
	  $a = mysqli_num_rows($run) ;
	$vella =  $a."\t result  by the \t".$res." \t query" ;
		 
 
	
	
	}
	
  if(isset($_POST['byname']))
	{	
	 $res = $_POST['topic_name'];
   
	
	$get =  ("SELECT * FROM $table  WHERE keywords LIKE '%$res%' OR  topic LIKE '%$res%' OR  descp LIKE '%$res%'");
	 
	 
	  
		 $run = mysqli_query($con,$get);
 $a = mysqli_num_rows($run) ;
 $vella =  $a."\t result  by the \t".$res." \t query" ;
	}
	 
   
		?>
		
		
<!DOCTYPE HTML>
<html>
<head>
<title>online glocal</title>
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

	
	
 
	
	



<link rel="stylesheet" type="text/css" href="BScss\bootstrap.css" media="all"/>


<meta name="viewport" content="width=device-width, initial-scale=1">
 




</head>
<STYLE>
 
  
  
 #spin{
 width:180%;
 
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
                    <h2>Contact us</h2>
                    <p>
                        <a href="mailto:info@tympanus.net">eMail</a>
                        <a href="http://www.twitter.com/codrops/">Twitter</a>
                        <a href="http://www.facebook.com/pages/Codrops/159107397912">Facebook</a>
                    </p>
                </div>
            </div>
		 
            <div class="item">
                <a class="link icon_help"></a>
                <div class="item_content">
                    <h2>Help</h2>
                    <p>
                        <a href="#">FAQ</a>
                        <a href="#">Live Support</a>
                        <a href="#">Tickets</a>
                    </p>
                </div>
            </div>
            <div class="item">
                <a class="link icon_find"></a>
                <div class="item_content">
                    <h2>Search</h2>
                    <p>
                        <input type="text"></input>
                        <a href="">Go</a>
                    </p>
                </div>
            </div>
            <div class="item">
                <a class="link icon_photos"></a>
                <div class="item_content">
                    <h2>Image Gallery</h2>
                    <p>
                        <a href="#">Categories</a>
                        <a href="#">Archives</a>
                        <a href="#">Featured</a>
                    </p>
                </div>
            </div>
            <div class="item">
                <a class="link icon_home"></a>
                <div class="item_content">
                    <h2>Start from here</h2>
                    <p>
                        <a href="http://www.tympanus.net/">Services</a>
                        <a href="http://www.tympanus.net/">Portfolio</a>
                        <a href="http://www.tympanus.net/">Pricing</a>
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









<form method="POST" class="form-inline" role="form"  >
    
      
      <label>Select day</label>
       <select class="form-control" id="sel1" name ="dte">
   
    
       <?php
    for ($x = 1; $x <= 31; $x++)
		echo "<option >".$x."</option>";
     ?>
    
  </select>
  
  
  
   <label>Select month</label>
       <select class="form-control" id="sel1" name ="mth">
   
    <option >Jan</option>
	<option >Feb</option>
	<option >Mar</option>
	<option >Apr</option>
	<option >May</option>
	<option >Jun</option>
	<option >Jul</option>
	<option >Aug</option>
	<option >Sep</option>
    <option >Oct</option>   
    <option >Nov</option>
	<option >Dec</option>
  </select>
       <label>select year</label>
       
	   <select class="form-control"   name = "yrr">
   
    <option >2017</option>
	<option >2018</option>
	<option >2019</option>
	<option >2020</option>
	<option >2021</option>
	 
  </select>
   
	    
	   <button type= "submit" name = "bydate" class="btn btn-primary">Search notes </button> </form>
	   <form method="POST" class="form-inline" role="form"  >
	   
	 <label>or search by keywords</label>   <input type="text" class="form-control" size="50" name="topic_name" required  /> 
      <button type= "submit" name = "byname" class="btn btn-primary">Search notes</button>
 </form>

 
 <?php
 
 
  while ( $row = mysqli_fetch_array($run))
  
  {
	    $id=$row['name'];
		$sub	= $row['sub'];
	 	$topic	=  $row['topic'];
		$file	= $row['file'];
		$descp =	$row['descp'];
		$date	= $row['date'];
		$time =	$row['time'];
	    $u_id =	$row['u_id'];
		 
		}
		 
echo $vella ;
 ?>
 


</body>

	 

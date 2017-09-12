 <?php
include("include/dbs.php");
session_start();
if (!isset($_SESSION['id'])) 
{
	header("location:index.php");
}

 $table = 'notice' ;
	
	
	if(!isset($_POST['bydate']) && !isset($_POST['byname']) )
	{
		$get = "SELECT * FROM $table order by id desc LIMIT 60";
		 $run = mysqli_query($con,$get);
		 $vella = "";
  $a = mysqli_num_rows($run) ;
	}
		
		 
		 
		 	
  if(isset($_POST['byname']))
	{	
	 $res = $_POST['topic_name'];
    
	
	$get =  "SELECT * FROM $table  WHERE notice_title LIKE '%$res%'   OR  notice_descp LIKE '%$res%' order by id desc LIMIT 60 ";
	 
	 
	  
		 $run = mysqli_query($con,$get);
 $a = mysqli_num_rows($run) ;
 $vella =  $a."\t result  by the \t".$res." \t query" ;
	}
		 
		 
		 
		 
		 
	
	  if(isset($_POST['bydate']))
	{	
	 $yr = $_POST['yrr'];
 $dt 	= $_POST['dte'];
 $mn = $_POST['mth'];
	   $res = $dt."-".$mn."-".$yr;
	
	$get = "SELECT * FROM $table WHERE date = '$res' order by id desc LIMIT 60";
	  $run = mysqli_query($con,$get);
	  $a = mysqli_num_rows($run) ;
	$vella =  $a."\t result  by the \t".$res." \t query" ;
		 
  
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
		img.animate({rotate: '360'}, 4000 , 'linear', function() {
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
	background-image: url('bg/7.jpg');
    background-size: cover;
}
table{
	  background-image: url('bg/6.jpg');
    background-size: fill;
  }
  
 #spin{
 width:44px;
 
 }
 #q  tr:hover{width:auto;background:cyan; color:#123456; height:10px;}
#q {table-layout:fixed ; width:100%;word-wrap:break-word; }
  #t table {background:#000000;color:white;  }
   #a{width:18%;  }
  #b{width:17%; }
  #c{width:16%; }
  #d{width:8%; }
  #e{width:27%; }
  #f{width:14%;}
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
 
  <div class = "col-sm-9">  <h1>&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp &nbsp  &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp <b>NOTICE BOARD </b></h1> </DIV>
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
 
  
 

 
		 

 

 

 <div class="row">            <div class="col-sm-3" >  
 <center>    <form method="POST" class="form-inline" role="form"  >
    
      
       
        <select class="form-control" id="sel1" name ="dte">
   
    
       <?php
    for ($x = 1; $x <= 31; $x++)
		echo "<option >".$x."</option>";
     ?>
    
  </select>
  
   
  
   
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
    
       
	   <select class="form-control"   name = "yrr">
   
    <option >2017</option>
	<option >2018</option>
	<option >2019</option>
	<option >2020</option>
	<option >2021</option>
	 
  </select>
   
	    
 	   <button type= "submit" name = "bydate" class="btn btn-default">Go...!!!</button> </form>




 <form method="POST" class="form-inline" role="form"  >
	   
	<br> <label style="color:white">or search by keywords...!!!</label>   <input type="text" class="form-control" size="28" name="topic_name" required  /> 
    <button type= "submit" name = "byname" class="btn btn-default" >Go...!!!</button>
 </form> </center>








 </div> 
  
  
  
     <div class="col-sm-8">   
 
   
 <center><h2><?php echo $vella; ?> </h2> </center>
 <div class="table-responsive" id="t">
      <table class="table">
         <tr>
             <th id = "a">Uploader</th>
             <th id="b">Department</th>
             <th id="c">Notice Title</th>
			  <th id="d">File</th>
             <th id="e">Description</th>
			  <th id="f">Date</th>
              
         </tr>
         </table></div>       
  
     
   
    <?php 
	while ( $row = mysqli_fetch_array($run))
  
  {
	    $nam=$row['f_name'];
		$sub	= $row['dept'];
	 	$topic	=  $row['notice_title'];
		$file	= $row['file'];
		$descp =	$row['notice_descp'];
		$date	= $row['date'];
		$time =	$row['time'];
	     $u_id =	$row['fac_id'];
		 $typ = $row['type'];
		
	
	 if ($typ === "jpeg" || $typ === "jpg" || $typ === "png" || $typ === "gif")

	 {  $ft = "<a href = 'FAC_NOtices/$file'><img src ='FILE_TYPE/image.jpg'</a>" ;}
else if ($typ === "zip") 

{$ft = "<a href = 'FAC_NOtices/$file'><img src ='FILE_TYPE/zip.png'</a>" ; }	
	 else if  ($typ === "mp4" || $typ === "mp3" || $typ === "mkv" )
		 
		 { $ft = "<a href = 'FAC_NOtices/$file'><img src ='FILE_TYPE/clp.jpg'</a>" ;}
		 else 
		 {$ft = "<a href = 'FAC_NOtices/$file'><img src ='FILE_TYPE/doc.jpg'</a>" ; }
	
	
	
	
	 
	
	
	
	
	if ($a == 0)
	{  }
else 
    
	{?>                            <table class="table" id="q"  >  <tr>
                        <td id ="a">  <a href = 'profile.php?ID=<?=$u_id?>'><?=$nam?></a></td><td id ="b" ><?=$sub?> </td>     
    <td id ="c"> <?=$topic?></td>
    <td id ="d">
          <?=$ft?></td>
    <td id ="e">
                            <?=$descp?>
                            </td>
							<td id ="f">
                            <?=$date?>
                            </td>
							</tr>   </table>        
  <?php } }?>
							 
 		</div>		<div class="col-sm-1"> </div>   	 </div>	  	  
 </body>
 </html>
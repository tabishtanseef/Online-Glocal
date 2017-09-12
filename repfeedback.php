<?php
ob_start();
session_start();
include("include/dbs.php");

if (!isset($_SESSION['name'])) 
{
header("location:index.php");
} 


 
$i = $_GET['ID'];
 

  $table = "feedback";
	
	
	 
	 
		$get = "SELECT * FROM $table WHERE msg_id ='$i'";
		 $run = mysqli_query($con,$get);
		 $vella = "";
  $a = mysqli_num_rows($run) ;
	 
		
		 
	
	  

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
 body {background:#123456;color:white}
#chnd img {width:9%}
b {color:lightgrey}
#c img {width:9%}
  .table {width:70%}
  #spin{
 width:44px;
 
 }
 #q  tr:hover{width:auto;background:cyan; color:#123456; height:10px;}
  #q {table-layout:fixed ; width:100%;word-wrap:break-word; }
  #t table {background:#000000;color:white;  }
   
</STYLE>
<body onload="window.scrollTo(0,100000000);">

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
        </div></div> 
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
 
  <div class = "col-sm-9">   <h1>Admin Replies </h1>	 </DIV>
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
 <center>     








 </div> 
  
  
  
     <div class="col-sm-8">   
 
   
 <center><h2><?php echo $vella; ?> </h2> </center>
       
  
     
   
    <?php 
	  $row = mysqli_fetch_array($run);
  
  
	    $nam=$row['u_name'];
		$sub	= $row['msg'];
	 	$topic	=  $row['msg_id'];
		$file	= $row['u_pic'];
	 
		$date	= $row['date'];
		$time =	$row['time'];
	     $u_id =	$row['u_id'];
		 
		
	
	 
	
	
	
	 
	
	
	
	
	if ($a == 0)
	{   }
else 
    
	{?>                            
             <h4>      
			 <a href = 'profile.php?ID=<?=$u_id?>'><?=$nam?></a> </h4> <br>                        
						<a id="c" href = 'profile.php?ID=<?=$u_id?>'><img src="compressed_udp/<?=$file?>"></a>    
					 <table class="table">  <tr> <td> 	<h4> <?=$sub?> </h4><br> <b>  <?=$date?>&nbsp &nbsp
							<?=$time?></b> </td></tr>  
    
   
       </table>  
	   
	   
	<?php }
	   $g = "SELECT * FROM feedbackhandling WHERE ref_id = '$i'  ";
		 $r = mysqli_query($con,$g);
		 
//  $a = mysqli_num_rows($r) ;
	   
	   
	   while ( $rr = mysqli_fetch_array($r))
  
  {
	    $nam=$rr['u_name'];
		$sub	= $rr['rep'];
	 	$topic	=  $rr['ref_id'];
		$file	= $rr['u_pic'];
	 
		$date	= $rr['da'];
		$time =	$rr['ti'];
	     $u_id =	$rr['u_id'];
		 
		
	
	 
	
	
	
	 
	
	
	
	
	if ($a == 0)
	{   }
else 
    
	{?>                            
             <h4>       <a href = 'profile.php?ID=<?=$u_id?>'><?=$nam?></a> </h4> <br>                        
						<a id="chnd" href = 'profile.php?ID=<?=$u_id?>'><img src="compressed_udp/<?=$file?>"></a>    
					 <table class="table">  <tr> <td> <h4>  <?=$sub?> </h4>   <br> <b>  <?=$date?>&nbsp &nbsp
							<?=$time?></b> </td></tr>  
     
   
       </table> <br>
                                     
  <?php } }
	   
	   
	   
	   
	   
	   if ($_SESSION['email'] =='maazsofttech@gmail.com')

	   { ?>
		   
		    <form action="" role="form" method="post" enctype="multipart/form-data"> 
         <input type ="text" class="form-control" style="height:60px;width:50%;font-size: 20pt ;margin-top:12%;" name ="comment" placeholder="reply...!"    >
           
            <br>  <input type ="submit" value ="reply...!" class="btn btn-default" name ="postbutton"  />
            
               </form> 
		   
	   <?php     } else {} 
	   if(isset($_POST['postbutton']))
				 {
					 
					 $msg = $_POST['comment'];
					 if(strlen($msg)<1)
					 {echo "<h3>your message must not be blank</h3>";}
              else {		
 
 
 $p = $_SESSION['pic'];
  
			  
					$name = $_SESSION['name'];
					 $id = $_SESSION['id'];
					 
					 
					  date_default_timezone_set("Asia/Kolkata");
    $da =  date('j-M-Y');
    $ti  = date('h:i:s A');
		 		 
 	$sm = "INSERT INTO feedbackhandling (u_id,u_name,u_pic,rep,da,ti,ref_id) VALUES ('$id','$name','$p','$msg','$da','$ti','$i')";
	 
	 $run = mysqli_query($con, $sm); 
	 
			   
					 
			  }			
	header("location:repfeedback.php?ID=$i");		}
	  
	  
	  
	  
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   ?>
	   
	   
	   
	   
	   
	   
	   
	   
                                     
  <?php 
  if ($a == 0)
	{ echo "<h3><center><br> </center></h2>" ; }
?>
							 
 		</div>		<div class="col-sm-1"> </div>   	 </div>	  	  
 </body>
 </html>
<?php ob_flush(); ?>

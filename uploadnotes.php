<?php
include("include/dbs.php");
session_start();
if (!isset($_SESSION['id'])) 
{
	header("location:index.php");
}
 
if(isset($_POST['upload']))
{
	 $u_id =  $_SESSION['id'] ;
 $uname = $_SESSION['name'];
 $sub = $_POST['subject'];
 $topic = $_POST['topic_name'];
 $desc = $_POST['notes_desc'];
 $keyword = $_POST['keywords'];
 $post = $_SESSION['desig'];
 $depart = $_SESSION['dept'];
 date_default_timezone_set("Asia/Kolkata");
     $da = date('j-M-Y');
    $ti  = date('h:i:s A'); 
  $file = rand(1000,100000)."-".$_FILES['notes']['name'] ;
  $files = preg_replace('/\s+/', '_', $file);
	$temp_file = $_FILES['notes']['tmp_name'] ;
	$file_size = $_FILES['notes']['size'];
    $file_type = $_FILES['notes']['type'];
	$folder="user_notes/";
	$target_file = $folder.basename($_FILES["notes"]["name"]);
    $FileType = pathinfo($target_file,PATHINFO_EXTENSION);
	
	if($FileType != "jpg"  && $FileType != "png" && $FileType != "mkv" && $FileType != "jpeg"
&& $FileType != "gif" && $FileType != "pdf" && $FileType != "tex" &&$FileType != "xlsx" && $FileType != "doc" &&$FileType != "ppt" && $FileType != "pps" && $FileType != "zip"
         &&$FileType != "mp4"    &&$FileType != "docx"	&& $FileType != "3gp"  && $FileType != "pptx" && $FileType != "ppt"   &&$FileType !="txt")
    {
     echo "<script>alert('it seems your files format is not supported by our system kindly zip your file & then upload it ...we are sorry for trouble!!!');</script>"; 
    }
 else
  {  
     move_uploaded_file($temp_file,$folder.$files);  
  
  
  if($depart=='School of Computer Science')
  {
  $insert_notes = "INSERT INTO computer_science(name,designation,sub,topic,file,descp,keywords,date,time,u_id,type) VALUES('$uname','$post','$sub','$topic','$files','$desc','$keyword','$da','$ti','$u_id','$FileType')";
  $run_notes = mysqli_query($con, $insert_notes);
		
		if($run_notes)
 {
       echo "<script>alert('Thanks For Uploading Your Notes');</script>";
	    echo "<script> alert('redirecting'); window.location.assign('home.php'); </script>";
 }
 else
 {
     echo "<script>alert('error while uploading...');</script>";
 }
  }
  
 else if($depart=='School of Technology')
  {
  $insert_notes = "INSERT INTO technology(name,designation,sub,topic,file,descp,keywords,date,time,u_id,type) VALUES('$uname','$post','$sub','$topic','$files','$desc','$keyword','$da','$ti','$u_id','$FileType')";
  $run_notes = mysqli_query($con, $insert_notes);
		
		if($run_notes)
 {
       echo "<script>alert('Thanks For Uploading Your Notes');</script>"; 
	    echo "<script> alert('redirecting'); window.location.assign('home.php'); </script>";
 }
 else
 {
     echo "<script>alert('error while uploading...');</script>";
 } 
}

else if($depart=='School of Education')
  {
  $insert_notes = "INSERT INTO education(name,designation,sub,topic,file,descp,keywords,date,time,u_id,type) VALUES('$uname','$post','$sub','$topic','$files','$desc','$keyword','$da','$ti','$u_id','$FileType')";
  $run_notes = mysqli_query($con, $insert_notes);
		
		if($run_notes)
 {
       echo "<script>alert('Thanks For Uploading Your Notes');</script>"; 
	    echo "<script> alert('redirecting'); window.location.assign('home.php'); </script>";
 }
 else
 {
     echo "<script>alert('error while uploading...');</script>";
 } 
}

else if($depart=='School of Pharmacy')
  {
  $insert_notes = "INSERT INTO pharmacy(name,designation,sub,topic,file,descp,keywords,date,time,u_id,type) VALUES('$uname','$post','$sub','$topic','$files','$desc','$keyword','$da','$ti','$u_id','$FileType')";
  $run_notes = mysqli_query($con, $insert_notes);
		
		if($run_notes)
 {
       echo "<script>alert('Thanks For Uploading Your Notes');</script>"; 
	    echo "<script> alert('redirecting'); window.location.assign('home.php'); </script>";
 }
 else
 {
     echo "<script>alert('error while uploading...');</script>";
 } 
}




else if($depart=='Senior Secondary School')
  {
  $insert_notes = "INSERT INTO ss_school(name,designation,sub,topic,file,descp,keywords,date,time,u_id,type) VALUES('$uname','$post','$sub','$topic','$files','$desc','$keyword','$da','$ti','$u_id','$FileType')";
  $run_notes = mysqli_query($con, $insert_notes);
		
		if($run_notes)
 {
       echo "<script>alert('Thanks For Uploading Your Notes');</script>"; 
	    echo "<script> alert('redirecting'); window.location.assign('home.php'); </script>";
 }
 else
 {
     echo "<script>alert('error while uploading...');</script>";
 } 
}

else if($depart=='School of Law')
  {
  $insert_notes = "INSERT INTO law(name,designation,sub,topic,file,descp,keywords,date,time,u_id,type) VALUES('$uname','$post','$sub','$topic','$files','$desc','$keyword','$da','$ti','$u_id','$FileType')";
  $run_notes = mysqli_query($con, $insert_notes);
		
		if($run_notes)
 {
       echo "<script>alert('Thanks For Uploading Your Notes');</script>";
 echo "<script> alert('redirecting'); window.location.assign('home.php'); </script>";	   
 }
 else
 {
     echo "<script>alert('error while uploading...');</script>";
 } 
}

else if($depart=='School of Life Science')
  {
  $insert_notes = "INSERT INTO life_science(name,designation,sub,topic,file,descp,keywords,date,time,u_id,type) VALUES('$uname','$post','$sub','$topic','$files','$desc','$keyword','$da','$ti','$u_id','$FileType')";
  $run_notes = mysqli_query($con, $insert_notes);
		
		if($run_notes)
 {
       echo "<script>alert('Thanks For Uploading Your Notes');</script>";
 echo "<script> alert('redirecting'); window.location.assign('home.php'); </script>";	   
 }
 else
 {
     echo "<script>alert('error while uploading...');</script>";
 } 
}



else if($depart=='School of Management')
  {
  $insert_notes = "INSERT INTO management(name,designation,sub,topic,file,descp,keywords,date,time,u_id,type) VALUES('$uname','$post','$sub','$topic','$files','$desc','$keyword','$da','$ti','$u_id','$FileType')";
  $run_notes = mysqli_query($con, $insert_notes);
		
		if($run_notes)
 {
       echo "<script>alert('Thanks For Uploading Your Notes');</script>"; 
	    echo "<script> alert('redirecting'); window.location.assign('home.php'); </script>";
 }
 else
 {
     echo "<script>alert('error while uploading...');</script>";
 } 
}

else if($depart=='School of Mass Communication')
  {
  $insert_notes = "INSERT INTO mass_comminication(name,designation,sub,topic,file,descp,keywords,date,time,u_id,type) VALUES('$uname','$post','$sub','$topic','$files','$desc','$keyword','$da','$ti','$u_id','$FileType')";
  $run_notes = mysqli_query($con, $insert_notes);
		
		if($run_notes)
 {
       echo "<script>alert('Thanks For Uploading Your Notes');</script>"; 
	    echo "<script> alert('redirecting'); window.location.assign('home.php'); </script>";
 }
 else
 {
     echo "<script>alert('error while uploading...');</script>";
 } 
}


else if($depart=='Glocal Medical College')
  {
  $insert_notes = "INSERT INTO medical(name,designation,sub,topic,file,descp,keywords,date,time,u_id,type) VALUES('$uname','$post','$sub','$topic','$files','$desc','$keyword','$da','$ti','$u_id','$FileType')";
  $run_notes = mysqli_query($con, $insert_notes);
		
		if($run_notes)
 {
       echo "<script>alert('Thanks For Uploading Your Notes');</script>"; 
	    echo "<script> alert('redirecting'); window.location.assign('home.php'); </script>";
 }
 else
 {
     echo "<script>alert('error while uploading...');</script>";
 } 
}

else if($depart=='School of Polytechnic')
  {
  $insert_notes = "INSERT INTO polytechnic(name,designation,sub,topic,file,descp,keywords,date,time,u_id,type) VALUES('$uname','$post','$sub','$topic','$files','$desc','$keyword','$da','$ti','$u_id','$FileType')";
  $run_notes = mysqli_query($con, $insert_notes);
		
		if($run_notes)
 {
       echo "<script>alert('Thanks For Uploading Your Notes');</script>";
 echo "<script> alert('redirecting'); window.location.assign('home.php'); </script>";	   
 }
 else
 {
     echo "<script>alert('error while uploading...');</script>";
 } 
}

  }
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
 background-image: url('bg/7.jpg');
    background-size: fill;
}
table{
 background-image: url('bg/7.jpg');
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
	margin: auto;
 }
 
 #lefty{
	 width: 60%;
	float:left;
    height:100%;
 }
 #righty{
	 width:40%;
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
<center>
<form class="form-horizontal"  method="POST"  action="uploadnotes.php" enctype="multipart/form-data">
<div class="form-group">

 <div class="table-responsive">

<table width="50%" height="80%"  align="center" border="1px" >

<tr align= "center">
<td colspan="2" height="80px"><h1>Upload Notes</h1></td>
</tr>
 


<tr>
<td align="center"><b>Subject</b></td>



<td ><input type="text" class="form-control" name="subject" size="50"/></td>

</tr>

<tr>
<td align="center"><b>Topic Name</b></td>
<td><input type="text" class="form-control"  name="topic_name" size="30"/></td>
</tr>

<tr>
<td align="center"><b>File</b></td>
<td><input type="file"  name="notes"/></td>
</tr>


<tr>
<td align="center"><b>Notes Description</b></td>
<td><textarea name="notes_desc" cols="70" rows="10"></textarea></td>
</tr>

<tr>
<td align="center"><b>Notes Keywords</b></td>
<td><input type="text" name="keywords" size="50" class="form-control"  placeholder="write words which help others searching your notes"/></td>
</tr>

<tr align="center">
<td colspan="2"><input type="submit" class="btn btn-warning btn-block" name="upload" value="Upload Now"/></td>
</tr>

</table>
</div>

</div>
</form> </center>


</body>
</html>
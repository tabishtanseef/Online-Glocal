

<?php
include("include/dbs.php");

session_start();

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
	background-image: url('bg/5.jpg');
    background-size: fill;
}
 
  table {background:black;color:#123456;}
  
 #tab{
	 color: white;
 }
  #spin{
 width:44px;
 
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
 
<form  method="post" action="signup.php" enctype="multipart/form-data">
<table align="center" width="3%" border="0">
<tr><td id="tab"><h2><center><b>Sign Up Here</b></center></h2></td></tr>
<tr>
<td><input type="text" name="uname" placeholder="Name" required /></td>
</tr>
<tr>
<td><input type="email" name="email" placeholder="Email" required /></td>
</tr>
<tr>
<td><input type="password" name="pass" placeholder="Password" required /></td>
</tr>


<tr> <td id="tab"><h3><center><b>Upload Your Profile Picture</b></center></h3></td></tr>

<tr>

<td><input type="file"  name="pic"/></td>
</tr>
<tr><center><td id="tab">
<h4 align="center">Designation</h4>
  <label><input  type="radio" name="desig" value="Faculty">FACULTY</label>


  <label><input type="radio" name="desig" value="Student">STUDENT</label>
</td><center></tr>
<tr>
<div class="form-group">
<td id="tab"><h4 align="center">Select Your Department</h4>
<select class="form-control" name="department"/>
<option disabled="disabled">Select your Department</option>
<?php
			   
			   $get_dept = "select * from department";
			   $run_dept = mysqli_query($con, $get_dept);
			   while($row_dept = mysqli_fetch_array($run_dept))
			   {   
			   $d_id= $row_dept['d_id']; 
			   $d_name=$row_dept['d_name'];
			   echo "<option value='$d_name'>$d_name</option>";
			   
			   }
			   
			   ?>


</select></td>




</div>
</tr>

<tr>

<div class="form-group">
<td id="tab"><h4 align="center">Select Your Course</h4>
<select class="form-control" name="course"/>
<option disabled="disabled">Select your Course</option>
<option>None</option>
<option>M.Tech</option>
<option>MCA</option>
<option>B.tech</option>
<option>BCA</option>
<option>M.Com</option>
<option>MBA</option>
<option>M.Sc</option>
<option>B.Com</option>
<option>BBA</option>
<option>B.Sc</option>
<option>BA</option>
<option>B.Ed</option>
<option>BTC</option>
<option>MBBS</option>
<option>BUMS</option>
<option>BAMS</option>
<option>B.Pharma</option>
<option>D.Pharma</option>
<option>Polytechnic</option>
<option>BA LLb</option>
<option>BBA LLB</option>
<option>PHD</option>
</select></td>




</div>
</tr>





<tr>
<td><button type="submit" name="signup">Sign Me Up</button></td>
</tr>
<tr>
<td><a href="index.php">Sign In Here</a></td>
</tr>
</table>
</form>
 
</center>
 
  
 
 
 
 
</body>
</html>


<?php




if(isset($_POST['signup']))
{ 	
 $uname = $_POST['uname'];
 $email = $_POST['email'];
 $g = "SELECT email  FROM user WHERE  email ='$email'";
  $r = mysqli_query($con,$g);
   $ch = mysqli_fetch_array($r);
   if (strlen($ch['email']) != 0)
   {echo "<script>alert('This email id is already registered...!!!');</script>"; }
else {
 $upass = $_POST['pass'];
 if(isset($_POST['desig'])){
 $desig = $_POST['desig'];
 }
 $dept = $_POST['department'];
 $course = $_POST['course'];

$url = "compressed_udp/" ; //for compression

function compress_image($source_url, $destination_url, $quality) {

		$info = getimagesize($source_url);

    		if ($info['mime'] == 'image/jpeg')
        			$image = imagecreatefromjpeg($source_url);

    		elseif ($info['mime'] == 'image/gif')
        			$image = imagecreatefromgif($source_url);

   		elseif ($info['mime'] == 'image/png')
        			$image = imagecreatefrompng($source_url);

    		imagejpeg($image, $destination_url, $quality);
		return $destination_url;
	}
//function ends here :) 







 
  $file = rand(1000,100000)."-".$_FILES['pic']['name'] ;
 $files = preg_replace('/\s+/', '_', $file);
	$temp_file = $_FILES['pic']['tmp_name'] ;
	$file_size = $_FILES['pic']['size'];
    $file_type = $_FILES['pic']['type'];
	$folder="udp/";
	$target_file = $folder.basename($_FILES["pic"]["name"]);
    $FileType = pathinfo($target_file,PATHINFO_EXTENSION);

	if($FileType != "jpg" && $FileType != "JPG" && $FileType != "png" && $FileType != "jpeg" && $FileType != "gif" )  
    {
     echo "<script>alert('it seems your image format is not supported by our system, we are sorry for trouble!!!');</script>"; 
}
 else
 {  $filename = compress_image($temp_file, $url.$files, 10); //for compression 
compress_image($temp_file, $folder.$files, 40); //for compression 
//move_uploaded_file($temp_file,$folder.$files);  
  
	
 $insert_user = "INSERT INTO user(username,email,password,profilepic,dept,course,designation) VALUES('$uname','$email','$upass','$files','$dept','$course','$desig')";
 $run_user = mysqli_query($con, $insert_user);
		
		if($run_user)
 {

       echo "<script>alert('successfully registered ');</script>";
	  echo "<script> alert('redirecting'); window.location.assign('home.php'); </script>";
	 
 }
 else
 {

       echo "<script>alert('error while registering you...');</script>";
      
 }
}
}
}


?>
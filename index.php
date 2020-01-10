<?php
include ("includes/db.php");
?>
  



<!DOCTYPE html>
<html lang="en">
<head>

    <title>Nishant Jangid</title>
    
    <meta charset="utf-8">
    <meta  name="viewport" content="width=device-width, initial-scale=1.0" >
    <meta name="keywords" content="webdevloper,web designer,best webdeveloper">
    
    <link href="css/bootstrap-337.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="style/style.css" rel="stylesheet">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    
    
<script>

function validation()
    {
        
        var un = document.getElementById("username").value;
        
        var ps = document.getElementById("useremail").value;
        
        var ms = document.getElementById("usermessage").value;
        
        if(un == ""){
            
            document.getElementById("name").innerHTML="**please fill your name**";
            return false;
        }
        if(ps == ""){
            
            document.getElementById("email").innerHTML="**please fill your email**";
            return false;
        }
        if(ms == ""){
            
            document.getElementById("message").innerHTML="**please fill your message**";
            return false;
        }
        else
            {
                alert("Thank you to contact us");
            }
    }
    
</script>

</head>
<body>

    
<div class="section01"><!--section start -->
<div class="navbar navbar-inverse"><!--navbar navbar-inverse fixed-top start-->
  <div class="container-fluid"><!--container-fluid start -->
    <div class="navbar-header"><!--navbar-header start -->
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"><!--navbar-toggle start -->
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button><!--navbar-toggle end -->
      <a class="navbar-brand" href="index.php">My Portfolio</a>
    </div><!-- navbar-header end -->
    <div class="collapse navbar-collapse" id="myNavbar"><!--collapse navbar-collapse start -->
      <ul class="nav navbar-nav"><!--nav navbar-nav start -->
        <li class="active"><a href="index.html">Home</a></li>
       
        <li><a href="#about">ABOUT</a></li>
        <li><a href="#blog">BLOG</a></li>
        <li><a href="#contact">CONTACT</a></li>
        
      </ul><!--nav navbar-nav end -->
    </div><!--collapse navbar-collapse end -->
  </div><!--container-fluid end -->
</div><!--navbar navbar-inverse fixed-top end-->
</div><!--section01 end-->
    

 
 <div class="col-md-12 "> <!--col-md-12 start-->   
    
<div class="outer "><!--outer start -->

 <div class="inner"><!--inner starr -->
  
    <img src="images/1%20ee9Ji2ToUxeYfj3YUQ1xsA.jpeg" class="img-responsive" alt="backimg"/>
    <div class="centered"><!--centered -->
        <h3> Hello, I am <strong>Nishant</strong></h3>
        <h3>I'm a full stack web developer.</h3>
    <div class="button">
      <a href="#about">
        <button type="button" class="btn btn-default">
            
            view About  <i class="fa fa-arrow-right"></i> 
            
        </button>
      </a>
    </div>
        
    </div><!--centered -->
    
        
 </div><!--inner end -->
    
</div><!--outer end -->
    
</div><!--col-md-12 end-->

<div class="col-md-12" id="about"><!--col-md-12 start -->
 <div class="container"><!--container start -->

  <div class="heading"><!-- heading start -->
            
     <h1><!--h3 starr -->
        
        <a href="#" >ABOUT US</a>
      
     </h1><!--h3 end -->
     
  </div><!-- heading end -->
    
    <div class="sep">
    
     <hr class="sepration">
        
    </div>
     
 <div class="col-md-4"><!--col-md-4 start -->
  <div class="outer-border"><!--outer-border start -->
    <div class="inner-border"> 
      <i class="fa fa-tag"></i>
        <h3 class="text-muted">Fast</h3>
      
        <p>
         Fast load times and lag free interaction, my highest priority.
        </p>
    </div> 
  </div><!--outer-border end -->
     
 </div><!--col-md-4 end-->
     
     
 <div class="col-md-4"><!--col-md-4 start -->
  <div class="outer-border"><!--outer-border start -->
     
    <i class="fa fa-tv"></i>
     <h3 class="text-muted">Responsive</h3>
     
     <p>
      My layouts will work on any device, big or small.My first priority is responsiveness.
     </p>
      
  </div><!--outer-border end -->
 </div><!--col-md-4 end-->
     
     
 <div class="col-md-4"><!--col-md-4 start -->
  <div class="outer-border"><!--outer-border start -->
     
    <i class="fa fa-rocket"></i>
    <h3 class="text-muted">Dynamic</h3>
     
    <p>
      Websites don't have to be static, I love making pages come to life.
     </p>
      
  </div><!--outer-border end -->
 </div><!--col-md-4 end-->

 </div><!-- container end -->
</div><!--col-md-12 end -->

    
<div class="col-md-12"><!--col-md-12 start -->
    
  <div class="container"><!--container start -->
  
    <div class="col-md-6"><!--col-md-6 start-->
      <div class="myimage"><!-- myimage start  -->
        
        <img src="images/image1.jpg" class="img-responsive img-circle " alt="myimage">
        
      </div><!-- myimage end  -->
        
       <div class="detail"><!--detail start -->
           
        <h3 class="text-muted"> Hello Nishant is here. </h3>
          
           <hr class="hrline">
      <p ><!--p start -->
        
        <strong>I'm a web designer</strong>.I build beautiful,hand-crafted websites. I'd love to do it for you.
        
      </p><!-- p end -->
      
      </div><!--detail end -->
           
    </div><!--col-md-6 end-->
    
    <div class="col-md-6"><!--col-md-6 start-->
     
        
     <div class="progresssec"><!-- progresssec start -->
         
      <div class="progress"><!--progress start -->
          
       <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:90%">
           <b class="txt"> &nbsp;  HTML</b>
          
       </div>
        
        <span>&nbsp;90%</span>
          
      </div><!--progress end -->
        
      <div class="progress"><!--progress start -->
        
       <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:80%">
          
        <b> &nbsp;  CSS</b>
          
       </div>
          
        <span>&nbsp;80%</span>
      
      </div><!--progress end -->
        
      <div class="progress"><!--progress start -->

       <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:60%">
    
         <b> &nbsp;   JAVASCRIPT</b>
      
       </div>
          
        <span>&nbsp;60%</span>
          
      </div><!--progress end -->
        
      <div class="progress"><!--progress start -->
        
          
        <div class="progress-bar progress-bar-striped  progress-bar-animated" style="width:40%">
          
        <b> &nbsp;   ANGULER.JS</b>
            
        </div>
        
        <span>&nbsp;40%</span> 
     
      </div><!--progress end -->
        
      <div class="progress"><!--progress start -->
        
          
       <div class="progress-bar progress-bar-striped  progress-bar-animated" style="width:50%">
          
        <b> &nbsp;   PHOTOSHOP</b>
          
       </div>
          
        <span>&nbsp;50%</span>
          
      </div><!--progress end -->
        
       <div class="progress"><!--progress start -->
        
          
       <div class="progress-bar progress-bar-striped  progress-bar-animated" style="width:80%">
          
        <b> &nbsp;   BOOSTRAP</b>
          
       </div>
           
        <span>&nbsp;80%</span>
          
      </div><!--progress end -->
      
     </div> <!-- progresssec end -->  
      
      
    </div><!--col-md-6 end-->
      
 </div><!--container start --> 
        
</div><!--col-md-12 start -->
    
<div class="col-md-12 col-sm-12" id="blog"><!--cold-md-12 start-->
  <div class="container"><!--container start -->
  
    <div class="heading"><!--heading start -->
      
        <h1>
        
          <a href="#">BLOG</a>
        
        </h1>
      
    </div><!--heading start -->
    
    <div class="sep"><!--sep start -->
    
     <hr class="sepration">
        
    </div><!--sep start -->
      
 
<?php
    
$blog_select = "select * from  nishantjangid order by 1 DESC LIMIT 0,4";
$run_blog = mysqli_query($con,$blog_select);

while($row_blog = mysqli_fetch_array($run_blog)){
    
     $blog_id = $row_blog['blog_id'];
    
     $blog_img1 = $row_blog['blog_img'];

     $blog_head = $row_blog['blog_head'];
 
     $blog_desc = $row_blog['blog_desc'];
    

    echo "
    
            
      
             <div class='col-md-3'>
      
             <div class='image-detail'>    
        
             <div class='outer-image-border'>
        
             <a href='https://nishantdigi.blogspot.com/2019/09/top-10-programming-languages-in-2019-if.html'>  
                 <img src='images/$blog_img1' class='img-responsive image2' alt='blogimg2'> 
        
             </a> 
        
       
        
             <h3 class='text-muted'>
             $blog_head
             </h3>
              
              <p>
              $blog_desc
              
              </p>
    
              </div>
    
             </div> 
                  
          </div>
    
    ";
    
}

?>

      
  </div><!--container start -->  
    
</div><!--cold-md-12 start-->
    
   
    
<div class="col-md-12" id="contact"><!--col-md-12 start-->
 <div class="container">
     
     <div class="heading"><!--heading start -->
      
        <h1>
        
          <a href="#">GET IN TOUCH</a>
        
        </h1>
      
     </div><!--heading start -->
    
     <div class="sep"><!--sep start -->
    
     <hr class="sepration">
        
    </div><!--sep start -->
    
  <div class="col-md-4">
    
    <div class="contactdetail">
        
      <i class="fa fa-map"></i> 
      
      <h3> Address </h3>
        
      <p> New Geeta Colony,ramnagar,ajmer,rajasthan,india.</p>
        
    </div>
        
  </div>
    
  
    
  <div class="col-md-4">
    
    <div class="contactdetail">
      
     <i class="fa fa-book"></i>
      
      <h3> Contact info </h3>
    
      <p>Phone no: 7690846594 <br>
        Office no: 9660080438
        
      </p>
        
      </div>
        
  </div>
    
  <div class="col-md-4">
      
    <div class="contactdetail">
    
     <i class="fa fa-envelope"></i> 
      
      <h3> E-mail </h3>
        
      <p> <a href="mailto:nishantsharma39262@gmail.com">nishantsharma39262@gmail.com</a> </p>
      
    </div>
        
  </div>
 
 </div>    
        
</div   ><!--col-md-12 end -->
    
    <!-- footer area -->
    
<div class="col-md-12"><!--col-md-12 start-->

    <div class="footer-image"><!--footer-image start -->
    
        <img src="images/footer.jpg" alt="footer-image" class="img-responsive footerimg">
    
    </div><!--footer-image end -->
    
</div><!--col-md-12 end-->
    

<div class="col-md-12"><!--col-md-12 start -->

 <div class="col-md-3"></div>
 
 <div class="col-md-6">
     
 <div class="container"><!--container start -->

  <div class="form-cover"><!--form-cover start-->

    <form class="form-align"  method="post"  action="" onsubmit="return validation()"><!-- form start -->
        
        <div class="form-group"><!--form-group start -->
        
            <input type="text" class="form-control" name="name" id="username" placeholder="Name" ><span id="name"></span>
        </div><!--form-group end -->

    
        <div class="form-group"><!--form-group start -->
            
            <input type="text" class="form-control" name="email" id="useremail" placeholder="E-mail address" ><span id="email"></span>
        
        </div><!--form-group end -->
        
        
        <div class="form-group"><!--form-group start -->
            
            <textarea class="form-control" name="message" id="usermessage" placeholder="Write your massage here" ></textarea><span id="message"></span>
        
        </div><!--form-group end -->
        
        <div class="form-group"><!--form-group start -->
  
            <input type="submit" name="submit" value="Send message" class="btn btn-primary" onclick="customAlert()" >
            
        </div><!--form-group end -->
            
    </form><!--form end -->
    
  </div><!--form-cover end-->
    
 </div><!--container start -->
     
</div><!--col-md-6 end-->
     
<div class="col-md-3"></div>
    
     
</div><!--col-md-12 end -->
    
<div class="col-md-12"><!--col-md-12 start -->
    
 <div class="container"><!--container start -->
  
   <div class="social-icon"><!--social-icon start -->
   
    <a href="https://www.facebook.com/profile.php?id=100006507133165" class="fa fa-facebook"> </a>
       
    <a href="https://www.instagram.com/_mr._nish/" class="fa fa-instagram"> </a>
       
    <a href="mailto:nishantsharma39262@gmail.com" class="fa fa-envelope"> </a>
       
    <a href="#" class="fa fa-twitter"> </a>
    
     
   </div><!--social-icon end -->
    
 </div><!--container end -->
    
</div><!--col-md-12 end -->

<div class="col-md-12">

 <div class="footer-border">
 
  <div class="container">
     
    <p> Nishant Jangid &copy; 2019 </p>
    
  </div>
    
 </div>
    
</div>
    
<script src="js/jquery-331.min.js"></script>
<script src="js/bootstrap.min.js"></script>
    
<script>
    $('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });
    
</script>
</body>

</html>
<?php

 if(isset($_POST['submit'])){
     
     $visitor_name = $_POST['name'];
     
     $visitor_email = $_POST['email'];
     
     $visitor_message = $_POST['message'];
     
     $query = "insert into visitors (visitor_name,visitor_email,visitor_message) values ('$visitor_name','$visitor_email','$visitor_message')";
     
     $run_query = mysqli_query($con,$query);
     
     if($run_query){
         
         echo "<script> alert('your message is submitted') </script>";
         
         echo "<script> window.open('index.php','_self') </script>";
     }
 }

?>

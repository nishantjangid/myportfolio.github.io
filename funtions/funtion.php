<?php

$db = mysqli_connect('localhost','root','','portfolio');

function blog(){
    
global $db;

$blog_select = "select * from nishantjangid order by 1 DESC LIMIT 0,4";

$run_blog = mysqli_query($db,$blog_select);

while($row_blog = mysqli_fetch_array($run_blog)){
    
     $blog_id = $row_blog['blog_id'];
    
     $blog_img1 = $row_blog['blog_img'];

     $blog_head = $row_blog['blog_head'];
 
     $blog_desc = $row_blog['blog_desc'];
    

    echo "
    
            </div>
      
             <div class='col-md-3'>
      
             <div class='image-detail'>    
        
             <div class='outer-image-border'>
        
             <a href='#'>  
                 <img src='images/$blog_img1' class='img-responsive image2' alt='blogimg2'> 
        
             </a> 
        
       
        
             <h3 class='text-muted'>$blog_head</h3>
              
              <p>
              $blog_desc
              
              </p>
    
              </div>
    
             </div> 
                  
          </div>
    
    ";
    
  }
    
}

?>

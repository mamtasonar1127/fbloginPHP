<?php
  include("headeradmin.php");
?>
        <div id="page-wrapper" >
            <div id="page-inner">
                            
                  <hr />
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class="alert alert-info">
                             <strong>Welcome <?php echo $_SESSION['user']->first_name; ?>! </strong>
                        </div>
                       
                    </div>
                    </div>
                  <!-- /. ROW  --> 



   <div class="row text-center pad-top">

    <form method="post" enctype="multipart/form-data">


        
<section>
    
    <table align="center" style="border-spacing: 10px; border-collapse: separate;">
        <tr>
        <td>Title of Book:</td>
        <td><input type="text" name="booktitle" required></td>
        </tr>
        
        <tr>
        <td>Book Genre:</td>
        <td><input type="text" name="bookgenre" required></td>
        </tr>
        
        <tr>
        <td>Book Review:</td>
        <td><textarea name="bookreview" required></textarea></td>
        </tr>
        
        <tr>
        <td>Enter your Name:</td>
        <td><input type="text" name="personname" value="<?php echo $_SESSION['user']->first_name;?>" readonly></td>
        </tr>
        
        <tr>
        <td>Enter your Email:</td>
        <td><input type="email" name="personemail" value="<?php echo $_SESSION['user']->email_id;?>" readonly ></td>
        </tr>
        
        <tr>
        <td>Link of Store:</td>
        <td><input type="url" name="linkofstore" required></td>
        </tr>
        
        <tr>
        <td>Attach Image:</td>
        <td><input type="file" name="picname" required></td>
        </tr>
    
    <tr>
        
        <td><input class="sub" type="submit" value="SUBMIT" name="submit"></td>
        </tr>
    
    </table>
    
  
    
</section>
    
    </form>     
                 
         <!-- /. PAGE WRAPPER  -->
    </div>


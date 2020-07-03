<?php 
 include("header.php");

if(isset($_REQUEST['edit_id']))
{
	$edit_id=$_REQUEST['edit_id'];
	$sqledit="SELECT * FROM `tbl_bookdetails` WHERE `book_IDnumber`='$edit_id'";
	$exedit=$conn->query($sqledit);
	
}




if(isset($_POST['update']))
{
    $booktitle=$_POST['booktitle'];  
    $bookgenre=$_POST['bookgenre'];
    $bookreview=$_POST['bookreview'];
    $personname=$_POST['personname'];
    $personemail=$_POST['personemail'];
    $linkofstore=$_POST['linkofstore'];
    
    
    $picnew=$_FILES['picname']['name'];
    $picty=$_FILES['picname']['type'];
    $picsz=$_FILES['picname']['size'];
    $picold=$_FILES['picname']['tmp_name'];
    $newpath="bookimages/".$picnew;
    
    move_uploaded_file($picold,$newpath);
	
	$bookid=$_POST['bookid'];
    
    $sqlupdate="UPDATE `tbl_bookdetails` SET `book_title`='$booktitle',`book_genre`='$bookgenre',`book_review`='$bookreview',`name`='$personname',`email`='$personemail',`store_link`='$linkofstore',`book_image`='$newpath' WHERE book_IDnumber='$bookid'"; 
    
    $exupdate=$conn->query($sqlupdate);
    
    if($exupdate)
    {
        echo"<script>
           alert('Updated Successfully');
           window.location.href='viewreg.php';
           </script>";
    }
    else
    {
        echo"<script>
           alert('Updated Successfully');
           window.location.href='editbooks.php';
           </script>";
    }
    
}    





    
?>


    
<form method="post" enctype="multipart/form-data">


        
<section>
    <h1 style="margin-left: 312px; margin-top: 33px; font-size: 20px;">Book Details</h1>


    <?php 
    while($resedit=$exedit->fetch_object())
    {
    ?>
    <table align="center">
		<tr hidden="">
        <td>ID:</td>
        <td><input  type="text" name="bookid" value="<?php echo $resedit->book_IDnumber;?>"></td>
        </tr>
        <tr>
        <td>Title of Book:</td>
        <td><input required type="text" name="booktitle" value="<?php echo $resedit->book_title;?>"></td>
        </tr>
        
        <tr>
        <td>Book Genre:</td>
        <td><input required type="text" name="bookgenre" value="<?php echo $resedit->book_genre;?>"></td>
        </tr>
        
        <tr>
        <td>Book Review:</td>
        <td><textarea required name="bookreview"><?php echo $resedit->book_review;?></textarea></td>
        </tr>
        
        <tr>
        <td>Enter your Name:</td>
        <td><input required type="text" name="personname" value="<?php echo $resedit->name;?>"></td>
        </tr>
        
        <tr>
        <td>Enter your Email:</td>
        <td><input required type="email" name="personemail" value="<?php echo $resedit->email;?>"></td>
        </tr>
        
        <tr>
        <td>Link of Store:</td>
        <td><input required type="url" name="linkofstore" value="<?php echo $resedit->store_link;?>"></td>
        </tr>
        
        <tr>
        <td>Attach Image:</td>
        <td><input required type="file" name="picname" value="<?php echo $resedit->book_image;?>"></td>
        </tr>
		<tr>
			<td colspan="2"><center><input class="sub" type="submit" value="Update" name="update"></centre></td>
		
		</tr>
		
    
    </table><br>
    <?php
    }
    ?>
    
    
    
</section>
    
    </form>     
    
    <?php include("footer.php"); ?>
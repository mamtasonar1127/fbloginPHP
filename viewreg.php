<?php
  include("headeradmin.php");

$a=$_SESSION['user']->email_id;
//echo $a;
$sql1="SELECT * FROM `tbl_bookdetails` WHERE email='$a'";
$ex1=$conn->query($sql1);
$res1=$ex1->fetch_object();

$_SESSION['a']=$res1;

if(isset($_REQUEST['del_id']))
{
  $del_id=$_REQUEST['del_id'];
  $sqldelete="delete from `tbl_bookdetails` where `book_IDnumber`='$del_id'";
  $exdelete=$conn->query($sqldelete);

   if($exdelete)
    {
        echo"<script>
           alert('Deleted Successfully');
           window.location.href='viewreg.php';
           </script>";
    }
    else
    {
        echo"<script>
           alert('Error.Please try again');
           window.location.href='viewreg.php';
           </script>";
    }

}




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
         <div class="col-lg-6 col-md-6">
                        
                        <div class="table-responsive">
                            <table class="table" align="center">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Book Title</th>
                                        <th>Book Genre</th>
                                        <th>Book Review</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Store Link</th>
                                        <th>Book Image</th>
                                        <th colspan="2">Action</th>
                                        


                                    </tr>
                                </thead>
                                <tbody>
                                   <tr>
                                    
          
          <td><?php echo $_SESSION['a']->book_IDnumber; ?></td>
          <td><?php echo $_SESSION['a']->book_title; ?></td>
          <td><?php echo $_SESSION['a']->book_genre; ?></td>
          <td><?php echo $_SESSION['a']->book_review; ?></td>
          <td><?php echo $_SESSION['a']->name; ?></td>
          <td><?php echo $_SESSION['a']->email; ?></td>
          <td><a href="<?php echo $_SESSION['a']->store_link; ?>"><?php echo $_SESSION['a']->book_title; ?></a></td>
          <td><img src="<?php echo $_SESSION['a']->book_image; ?>" width="50" height="50"></td>
          <td><a href="editbooks.php?edit_id=<?php echo $_SESSION['a']->book_IDnumber;?>">Edit</a></td>
          <td><a href="viewreg.php?del_id=<?php echo $_SESSION['a']->book_IDnumber;?>">Delete</a></td>






        </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
    </div>


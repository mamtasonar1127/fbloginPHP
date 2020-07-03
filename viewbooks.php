<?php include("header.php");

$sql="select * from tbl_bookdetails"; 
$ex=$conn->query($sql);


?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                            
                  <hr />
                
                  <!-- /. ROW  --> 




   <div class="row text-center pad-top">

<form method="post">
      
      <table align="center" border="1">
        <tr>
          <th hidden="">Book ID</th>
          <th>Book Title</th>
          <th>Book Genre</th>
          <th>Book Review</th>
          <th>Name</th>
          <th>Email</th>
          <th>Store Link</th>
          <th>Book Image</th>

        </tr>

        <?php while($res=$ex->fetch_object())

          {
        ?>
        <tr>
          
          <td hidden=""><?php echo $res->book_IDnumber; ?></td>
          <td><?php echo $res->book_title; ?></td>
          <td><?php echo $res->book_genre; ?></td>
          <td><?php echo $res->book_review; ?></td>
          <td><?php echo $res->name; ?></td>
          <td><?php echo $res->email; ?></td>
          <td><a href="<?php echo $res->store_link; ?>">Click to view</td>
          <td><img src="<?php echo $res->book_image; ?>" width="50" height="50"></td>





        </tr>
        <?php
        }
        ?>





      </table>
                 



                 
         <!-- /. PAGE WRAPPER  -->
    </div>



<br><br>

  
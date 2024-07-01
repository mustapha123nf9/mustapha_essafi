<?php include('header.php'); ?>
<?php  include('dbcon.php'); ?>
    <table class="table table-hover table-bordered table-striped">
        <div class="box1">
        <h2>ALL STUDENTS</h2>
        <button type="button" class=" btn btn-primary"data-bs-toggle="modal" data-bs-target="#exampleModal">ADD STUDENTS</button>
        </div>
        <thead >
            <tr>
                <th>id</th>
                <th>name</th>
                <th>email</th>
                <th>mobile</th>
                <th>password</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query="SELECT * FROM `students`";
            $result=mysqli_query($connection,$query);
            if(!$result){
                die("query Failed".mysqli_error());
            }else{
                while($row=mysqli_fetch_assoc($result)){
                    ?>
                        <tr>
                    <td><?php  echo $row['id'];?></td>
                    <td><?php echo $row['nome'];?></td>
                    <td><?php  echo $row['email'];?></td>
                    <td><?php   echo $row['mobile'];?></td>
                    <td><?php echo $row['password']; ?></td>
                    <td><a href="update.php?id=<?php echo $row['id'];?>" class="btn btn-success">Update</a></td>
                    <td><a href="delete.php?id=<?php echo $row['id'];?>" class="btn btn-danger">Delete</a></td>


            </tr>
                    <?php
                }
            }
            ?>
        </tbody>
    </table>
<?php

if(isset($_GET['message'])){
    echo"<h6>".$_GET['message']."</h6>";
}
?>
<?php
if(isset($_GET['insert_msg'])){
    echo"<h6>".$_GET['insert_msg']."</h6>";
}
?>
<?php
if(isset($_GET['updated_meg'])){
    echo"<h6>".$_GET['updated_meg']."</h6>";
}
?>
<?php
if(isset($_GET['delete_msg'])){
    echo"<h6>".$_GET['delete_msg']."</h6>";
}
?>
<!-- Modal -->
<form action="insert_data.php" method="post">
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">ADD STUDENTS</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            <div class="form-group">
                <label >name</label>
                <input type="text" class="form-control" name="name"  >
                <label >email</label>
                <input type="email" class="form-control" name="email" required>
                <label >mobile</label>
                <input type="number" class="form-control" name="mobile" required>
                <label >password</label>
                <input type="password" class="form-control" name="password" required>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-success" name="add_students" value="ADD">
      </div>
    </div>
  </div>
</div>
</form>



<?php include('footer.php');?>


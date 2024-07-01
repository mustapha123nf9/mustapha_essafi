<?php include('header.php'); ?>
<?php  include('dbcon.php'); ?>


                <?php
                if(isset($_GET['id'])){
                    $id=$_GET['id'];
                  
                

                $query="SELECT * FROM `students` where `id`='$id'";
                $result=mysqli_query($connection,$query);
                if(!$result){
                    die("query Failed".mysqli_error());
                }
                else{
                    $row=mysqli_fetch_assoc($result);
                    

                }
            }   
                        



                ?>

                <?php
                    if(isset($_POST['update_students'])){

                        if(isset($_GET['id_new'])){
                            $idnew=$_GET['id_new'];
                        }

                        $name=$_POST['name'];
                        $email=$_POST['email'];
                        $mobile=$_POST['mobile'];
                        $password=$_POST['password'];
                        
                        $query="update `students` set `nome`='$name',`email`='$email',`mobile`='$mobile',`password`='$password'  where `id`='$idnew'";

                     $result=mysqli_query($connection,$query);
                    if(!$result){
                        die("query Failed".mysqli_error());
                    }else{
                        header('location:index.php?updated_meg=Updated Successfully');


                    }
                    }


                ?>

                <form action="update.php?id_new=<?php echo $id;?>" method="post">

                <div class="form-group">
                <label >name</label>
                <input type="text" class="form-control" name="name" value="<?php echo $row['nome'] ?>" >
                <label >email</label>
                <input type="email" class="form-control" name="email" value="<?php echo $row['email'] ?>">
                <label >mobile</label>
                <input type="number" class="form-control" name="mobile" value="<?php echo $row['mobile'] ?>">
                <label >password</label>
                <input type="text" class="form-control" name="password" value="<?php echo $row['password'] ?>">
                </div>
                <input type="submit" class="btn btn-success m-1" name="update_students" value="Update">
                </form>  












<?php include('footer.php');?>
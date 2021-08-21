<?php
                       
                       include_once('dbconnect.php');
                       if(isset($_POST['fetch_btn'])) 
                       {
                           $id= $_POST['get_id'];
                           $query= "SELECT * FROM student WHERE Student_Id='$id' ";
                           $query_run= mysqli_query($conn, $query);
                           while($row = mysqli_fetch_array($query_run))
                           {
                               ?>
                            <div class="form-group">
                            <label>Student ID</label>
                            <input type="text" name="get_id" class="form-control" value="<?php echo $row['Student_Id'];?>" required><br>
                            </div>
                            <div class="form-group">
                            <label>Name</label>
                             <input type="text" name="get_id" class="form-control" value="<?php echo $row['Name'];?>" required><br>
                            </div>
                            <div class="form-group">
                             <label>Year</label>
                            <input type="text" name="get_id" class="form-control" value="<?php echo $row['Year'];?>" required><br>
                            </div>
                            <div class="form-group">
                             <label>Contact Number</label>
                            <input type="text" name="get_id" class="form-control" value="<?php echo $row['Contact_No'];?>" required><br>
                            </div>
                            <div class="form-group">
                             <label>Email ID</label>
                            <input type="text" name="get_id" class="form-control" value="<?php echo $row['Email'];?>" required><br>
                            </div>
                            <div class="form-group">
                            <label>Course</label>
                            <input type="text" name="get_id" class="form-control" value="<?php echo $row['Course'];?>" required><br>
                            </div>
                            <div class="form-group">
                            <label>Specialization</label>
                            <input type="text" name="get_id" class="form-control" value="<?php echo $row['Specialization'];?>" required><br>
                            </div> 
                            <div class="form-group">
                            <label>Course_id</label>
                            <input type="text" name="get_id" class="form-control" value="<?php echo $row['Course_Id'];?>" required><br>
                            </div>
                               <?php
                           }
                       }  


                    ?> 
                    
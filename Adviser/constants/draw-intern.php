

<form class="post-form-wrapper" action="app/add_intern.php" method="POST" autocomplete="off">
								 
                     
                        <div class="modal-body body-modal-color text-center">



                        <div class ="row">
                            

                            <div class ="col-xl-6">
                                <label>First name:</label>
 
                                <input type="text" name ="fname" id="form1Example13" class="form-control form-control-lg">


                            </div>
                            <div class ="col-xl-6">
                                <label>Last name:</label>

                                <input type="text" name ="lname" id="form1Example13" class="form-control form-control-lg">


                            </div>

                        </div>

                        <div class ="row">
                            <div class ="col-xl-6">

                                <label>Email:</label>

                                <input name ="email" type="email" id="form1Example13" class="form-control form-control-lg">

                            </div>


                            <div class ="col-xl-6">

                                <label>Student Number:</label>

                                <input type="text" name ="stud_no" id="form1Example13" class="form-control form-control-lg">

                            </div>

                        </div>

                        <div class ="row">
                            <div class ="col-xl-6">

                                <label>Password:</label>

                                <input type="password" name ="password"id="form1Example13" class="form-control form-control-lg">

                            </div>

                            <div class ="col-xl-6">
                                <label>Confirm Password:</label>

                                <input type="password" name ="confirmPassword" id="form1Example13" class="form-control form-control-lg">


                            </div>

                            <input type="hidden" name="adv_id" value="<?php echo $myid; ?>">
                            


                        </div>
                        </div>



                        <div class="custom-modal-footer"> 
                                                <center>
                                                     
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                    <button onclick="return val();" type="submit" name="reg_mode" class="btn btn-success">Submit</button>
                                                </center>
                                            </div>



</form>

 
<form class="post-form-wrapper" action="./app/add_adviser.php" method="POST" autocomplete="off">
								 
                                <div class ="row">
                                            <div class ="col-xl-6">

                                                <label>First name:</label>

                                                <input name ="fname" type="text" id="form1Example13" class="form-control form-control-lg">

                                            </div>

                                            <div class ="col-xl-6">
                                                
                                                <label>Last name:</label>

                                                <input name ="lname" type="text" id="form1Example13" class="form-control form-control-lg">


                                            </div>
                                        </div>

                                        <div class ="row">
                                            <div class ="col-xl-6">

                                                <label>Email:</label>

                                                <input type="email" name="email" id="form1Example13" class="form-control form-control-lg">


                                            </div>

                                            <div class ="col-xl-6">

                                                <label>Assign as:</label>

                                                <input class="form-control" id="disabledInput" type="text" placeholder="Adviser" disabled>

                                                </div>
                                        </div>

                                        <div class ="row">
                                            <div class ="col-xl-6">

                                                <label>Password:</label>

                                                <input type="password" id="form1Example13" name="password" class="form-control form-control-lg" required type="password">


                                            </div>

                                            <div class ="col-xl-6">
                                                
                                                <label>Confirm Password:</label>

                                                <input type="password" id="form1Example13" name="confirmpassword" class="form-control form-control-lg" required type="password">


                                            </div>


                                            <input type="hidden" name="acctype" value="103">

                                        </div> 

                                        <div class="modal-footer">
                        
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        <button onclick="return val();" type="submit" name="reg_mode" class="btn btn-success">Submit</button>
                                        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                                        </div>


                    </form>


<form class="post-form-wrapper" action="app/add_class.php" method="POST" autocomplete="off">
								 
                    
                                          
<div class ="row">
        <div class="col">
                                                           <label>Class Code:</label>

                                                           <input required type="text" name="code" class="form-control form-control" placeholder ="Class Name/Course Code">
                                                    </div>

                                                   <div class="col">
                                                                
                                                           <label>Section:</label>
                                                           <input  required type="text" name="section" class="form-control form-control" placeholder ="Section">
                                                        </div>
                                                        
                                                        <div class="col">
                                                                
                                                                <label>Day:</label>
                                                   <select name="day" required class="selectpicker show-tick form-control" data-live-search="true">
                                                        <option disabled value="" >Select Day</option>
                                                            <option>Monday</option>
                                                            <option>Tuesday</option>
                                                            <option>Wednesday</option>
                                                            <option>Thursday</option>
                                                            <option>Friday</option>
                                                            <option>Saturday</option>
                                                            <option>Sunday</option>
                                                   </select>
                                                   
                                                   
                                                        </div>

                                                   
                                        </div>
                                        
                                        
                                        <br>
                                        <div class ="row">

                                                         <div class="col">
                                                                <label>Subject:</label>
                                                                <input  required type="text" name="subj" class="form-control form-control" placeholder ="Subject/Course Title">
                                                        </div>
                                                        
                                                        <div class="col">
                                                                
                                                                <label>From:</label>
                                                                <input  required type="time" name="from" class="form-control form-control" placeholder ="Start Time (ex. 0:00PM)">
                                                        </div>
                                                        <div class="col">
                                                                <label>To:</label>
                                                                <input  required type="time" name="to" class="form-control form-control" placeholder ="End Time (ex. 0:00PM)">
                                                        </div>
                                        </div>    



                                                  


                                                   <input type="hidden" name="adv_id" value="<?php echo "$myid"; ?>">
                                                   <div class="custom-modal-footer">
                                                    <center>
                                                    
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                    </center>
                                            </div>



</form>
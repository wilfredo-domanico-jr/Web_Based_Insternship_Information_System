
<div class="login-box-wrapper">
							
<div class="modal-header">
<h4 class="modal-title text-center"><center>

Create your account for free

</center>

</h4>


</div>

<div class="modal-body" style="background:#fff;border-radius:20px;">
<?php include 'constants/check_reply.php'?>
<form name="frm" action="app/create-account.php" method="POST"
 enctype="multipart/form-data" autocomplete="off">													
<div class="row gap-20">
											

												

												
<div class="col-sm-12 col-md-12">

<div class="form-group"> 
<label>Company Name</label>
<input class="form-control" placeholder="Enter your company name" 
name="company" required type="text"> 
</div>
												
</div>

<div class="col-sm-12 col-md-6">

<div class="form-group"> 
<label>Company Type</label>
<input class="form-control" 
placeholder="Eg: Booking/Travel, Computer Software etc" 
name="type" required type="text"> 
</div>
												
</div>

<input type="hidden" name="acctype" value="102">
												
<div class="col-sm-12 col-md-6">

<div class="form-group"> 
<label>Email Address</label>
<input class="form-control" placeholder="Enter your email address" 
name="email" required type="text"> 
</div>
												
</div>


            
                                                            
            <div class="col-sm-12 col-md-6">
                                                            
                    <div class="form-group"> 
                    <label>Password</label>
                    <input class="form-control" 
                    placeholder="Min 8 and Max 20 characters" 
                    name="password" required type="password"> 
                    </div>
                                                            
            </div>
												
            <div class="col-sm-12 col-md-6">
                                                            
                    <div class="form-group"> 
                    <label>Password Confirmation</label>
                    <input class="form-control" 
                    placeholder="Re-type password again" 
                    name="confirmpassword" required type="password"> 
                    </div>
                                                            
            </div>


            <div class="col-sm-12 col-md-6">
                                                            
            <label class="dtls" for="formFile" 
            class="form-label">Business Permit</label>
            <input style="border:12px 5px solid #2b7a78; padding:10px;" 
            class="form-control" accept="application/pdf" type="file" 
            name="permit" required id="formFile">
                                                                                                                                        
                                                            
            </div>


            <div class="col-sm-12 col-md-6">
                                                             
            <label class="dtls" for="formFile" class="form-label">
                    Memorandum Of Agreement
                </label>
            <input style="border:12px 5px solid #2b7a78; padding:10px;" 
            class="form-control" accept="application/pdf" type="file" 
            name="moa" required id="formFile">
                                                                                                                                   
                                                                                                                                        
                                                            
            </div>


            
                                                            
            <input type="hidden" name="acctype" value="102">
												
												
</div>

</div>

<div class="modal-footer text-center"></div>
<center>


<center>

            <input class="form-check-input" type="checkbox" 
            value="" id="flexCheckDefault" required>

            <span>I agree with <a href ="termsAndCondition.php">
                    Terms and Condition</a>
                </span>

        </center>

        <br>


<div class ="row">
    <div class ="col">
    
    
    
    <a href ="index.php"style="width:100%;" class="btn btn-danger">
    Back</a>
    
    </div>


    <div class ="col">
       <button style="width:100%;" onclick="return val();" 
       type="submit" class="btn btn-success">
        Register</button>

    </div>


</div>
    







</center>

										
</div>
</form>
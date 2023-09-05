<form class="post-form-wrapper" action="app/post_internship.php" method="POST" autocomplete="off">
								
								<div class="row gap-20">
									<div class="col-sm-12 col-md-6">
									
										<div class="form-group">
											<label>Job Title</label>
											<input name="title" required type="text" class="form-control" placeholder="Enter job title">
										</div>
										
									</div>

									 
									
									<div class="clear"></div>
									
									<div class="col-sm-4 col-md-6">
									
										<div class="form-group">
											<label>City</label>
											<input name="city" required type="text" class="form-control" placeholder="Enter city">
										</div>
										
									</div>

									<div class="col-sm-4 col-md-4">
									
										<div class="form-group">
											<label>Closing Date</label>
											<input name="deadline" required type="text" class="form-control" placeholder="Eg: 30/12/2018">
										</div>
										
									</div>

									<div class="col-sm-4 col-md-3">
												
													<div class="form-group">
														<label>Vacancy</label>
														<input name="vacant" required type="text" class="form-control" placeholder="Enter Vacancy">
													</div>
													
									</div>

									<div class="col-sm-4 col-md-4">
									
										<div class="form-group">
											<label>Job Type</label>
											<input class="form-control" type="text" placeholder="Internship" readonly>
											

										</div>

										<input type="hidden" name="comp_id" value="<?php echo "$myid"; ?>">
										
									</div>

									

									<div class="clear"></div>
									
									<div class="col-sm-12 col-md-12">
									
										<div class="form-group bootstrap3-wysihtml5-wrapper">
											<label>Job Description</label>
											<textarea class="form-control bootstrap3-wysihtml5" name="description" required placeholder="Enter description ..." style="height: 200px;"></textarea>
										</div>
										
									</div>
									
									<div class="clear"></div>
									
									<div class="col-sm-12 col-md-12">
									
										<div class="form-group bootstrap3-wysihtml5-wrapper">
											<label>Job Responsibilies</label>
											<textarea name="responsiblities" required class="form-control bootstrap3-wysihtml5" placeholder="Enter responsiblities..." style="height: 200px;"></textarea>
										</div>
										
									</div>
									
									<div class="clear"></div>
									
									<div class="col-sm-12 col-md-12">
									
										<div class="form-group bootstrap3-wysihtml5-wrapper">
											<label>Requirements</label>
											<textarea name="requirements" required class="form-control bootstrap3-wysihtml5" placeholder="Enter requirements..." style="height: 200px;"></textarea>
										</div>
										
									</div>
									
									<div class="clear"></div>
									

									
									<div class="clear"></div>
									

									
									<div class="clear mb-10"></div>

									
									<div class="clear mb-15"></div>

									
									<div class="clear"></div>
									<br>


									
									<div class="col-sm-12 mt-30">

											<div class="custom-modal-footer">
													<center>
														
														<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
														<button type="submit"  onclick = "validate(this)" class="btn btn-primary">Post Your Job</button>
									
													</center>
											</div>
										</div>

								</div>
								
							</form>
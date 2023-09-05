					
					
					
					
					<form class="post-form-wrapper" action="app/post_internship.php" method="POST" autocomplete="off">
								<!--<h4><center>Contact Info</center></h4>	-->
								<hr>
								<div class ="row">

								

									<div class="col-sm-12 col-md-4">

										<div class="form-group">
											<label>Contact Person:</label>
											<input name="name" required type="text" class="form-control" placeholder="Enter Full Name">
										</div>

									</div>

									<div class="col-sm-12 col-md-4">

										<div class="form-group">
											<label>Position:</label>
											<input name="position" required type="text" class="form-control" placeholder="Enter Position">
										</div>

									</div>

									<div class="col-sm-12 col-md-4">

										
											<label>Contact Number:</label>
											

										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text" id="basic-addon1">+63</span>
											</div>
												<input type="text" required minlength="10" maxlength="10" name="contact" class="form-control" placeholder="0000000000" aria-label="Username" aria-describedby="basic-addon1">
											</div>

										</div>


								</div>

								<hr>


											<div class="row gap-20">
												<div class="col-sm-12 col-md-6">
												
													<div class="form-group">
														<label>Job Title</label>
														<input name="title" required type="text" class="form-control" placeholder="Enter job title">
													</div>
													
												</div>

												<div class="col-sm-4 col-md-3">
												
													<div class="form-group">
														<label>City</label>
														<input name="city" required type="text" class="form-control" placeholder="Enter city">
													</div>
													
												</div>

												

												<div class="col-sm-4 col-md-3">
												
													<div class="form-group">
														<label>Vacancy</label>
														<input oninput="this.value=!!this.value && Math.abs(this.value) >=0? Math.abs(this.value) :null"  type="number" name="vacant" required type="text" class="form-control" placeholder="Enter Vacancy">
													</div>
													
												</div>

												 
												
												<div class="clear"></div>
												
												<div class="col-sm-4 col-md-4">
												
													<div class="form-group">
														<label>Required Hours</label>
														<!-- <input name="hours" required type="text" class="form-control" placeholder="Enter hours"> -->
														<input oninput="this.value=!!this.value && Math.abs(this.value) >=0? Math.abs(this.value) :null" name="hours" type="number" id="typeNumber" class="form-control" placeholder="0" />
													</div>
													
												</div>

												<div class="col-sm-4 col-md-4">
												
													<div class="form-group">
														<label>Closing Date</label>
														<!-- <input name="deadline" required type="text" class="form-control" placeholder="Eg: MM/DD/YYYY"> -->
														

														<div class="input-group date" id="datepicker">
															<input value="2022-12-12" size ="30" type="date" name="deadline" required class="form-control" id="date" placeholder="Eg: MM/DD/YYYY"/>
															<span class="input-group-append">
															<!-- <span class="input-group-text bg-light d-block">
																<i class="fas fa-calendar"></i>
															</span> -->
															</span>
														</div>


													</div>


													
												</div>

												<div class="col-sm-4 col-md-4">
												
													<div class="form-group">
														<label>Job Type</label>
														<input class="form-control" type="text" placeholder="Internship" readonly>
														

													</div>

													<input type="hidden" name="comp_id" value="<?php echo "$myid"; ?>">
													
												</div>

												

												<div class="clear"></div><br>
												
												<div class="col-sm-12 col-md-12">
												
													<div class="form-group bootstrap3-wysihtml5-wrapper">
														<label>Job Description</label>
														<textarea id ="editor2" class="form-control bootstrap3-wysihtml5" name="description" required placeholder="Enter description ..." style="height: 200px;"></textarea>
													</div> 
													
												</div>
												
												<div class="clear"></div><br>
												
												<div class="col-sm-12 col-md-12">
												
													<div class="form-group bootstrap3-wysihtml5-wrapper">
														<label>Job Responsibilities</label>
														<textarea id ="editor3" name="responsiblities" required class="form-control bootstrap3-wysihtml5" placeholder="Enter responsiblities..." style="height: 200px;"></textarea>
													</div>
													
												</div>
												
												
												<div class="clear mb-10"></div>

												
												<br>


												
												<div class="col-sm-12 mt-30">

														<div class="custom-modal-footer">
																<center>
																	
																	<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
																	<button type="submit"  onclick = "validate(this)" class="btn btn-success">Post Internship</button>
												
																</center>
														</div>
													</div>

											</div>
											
										</form>


										<style>
											.input-group-append {
												cursor: pointer;
												}
											</style>
											

											

										
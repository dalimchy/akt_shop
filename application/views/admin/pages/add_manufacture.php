 <div class="row">
                            <div class="col-lg-8">
                                <!-- Bootstrap Forms Validation -->
                                <!-- <h2 class="section-title">Add Category</h2> -->
                                        <?php
                                            $message = $this->session->userdata('message');
                                            if ($message) { ?>
												
												<div class='alert alert-success alert-dismissable'>
													<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
													<p><strong>Well done! </strong><?php echo $message; $this->session->unset_userdata('message'); ?></p>
												</div>
                                           <?php } ?>
                                <div class="card">
                                    <div class="card-header">
                                        <!-- <h4>Validation</h4> -->
                                        <ul class="card-actions">
                                            <li>
                                                <button type="button"><i class="ion-more"></i></button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card-block">
                                        <!-- jQuery Validation (.js-validation-bootstrap class is initialized in js/pages/base_forms_validation.js) -->
                                        <!-- For more examples please check https://github.com/jzaefferer/jquery-validation -->
                                        <form class="js-validation-bootstrap form-horizontal" action="<?php echo base_url();?>save-manufacture" enctype="multipart/form-data" method="post">

                                             <div class="form-group">
                                                <label class="col-md-3 control-label" for="val-skill">Category Name <span class="text-orange">*</span></label>
                                                <div class="col-md-8">
                                                    <select class="form-control" id="val-skill" name="category_id" required="1">
                                                        <option value="">Please select</option>
                                                        <?php foreach ($publish_category_info as  $v_category) { ?>
                                                        <option value="<?php echo $v_category->category_id?>"><?php echo $v_category->category_name?> </option>
                                                        <?php } ?>
                                                        
                                                    </select>
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="val-username">Manufacture Name <span class="text-orange">*</span></label>
                                                <div class="col-md-8">
                                                    <input class="form-control" type="text" id="val-username"  placeholder="Enter category name" name="manufacture_name" required />
                                                </div>
                                            </div>


                                             <div class="form-group">
                                                <label class="col-md-3 control-label" for="example-file-input">Manufacture Image </label>
                                                <div class="col-md-8">
                                                    <input class="form-control" type="file" id="example-file-input" name="manufacture_image" required="1">
                                                </div>
                                            </div>


                                            
                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="val-suggestions">Manufacture Description <span class="text-orange">*</span></label>
                                                <div class="col-md-8">
                                                    <textarea class="form-control" id="val-suggestions"  rows="8" placeholder="Enter category description..." name="manufacture_description" required="1"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="val-skill">Publication Status <span class="text-orange">*</span></label>
                                                <div class="col-md-8">
                                                    <select class="form-control" id="val-skill" name="publication_status" required="1">
                    									<option value="">Please select</option>
                    									<option value="1">Published </option>
                                                        <option value="0">Unpublished </option>
                    									
                    								</select>
                                                </div>
                                            </div>
                                         
                                           
                                            <div class="form-group m-b-0">
                                                <div class="col-md-8 col-md-offset-4">
                                                    <button class="btn btn-app" type="submit">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- .card-block -->
                                </div>
                                <!-- .card -->
                                <!-- Bootstrap Forms Validation -->
                            </div>
                            <!-- .col-lg-6 -->

                   

                        </div>

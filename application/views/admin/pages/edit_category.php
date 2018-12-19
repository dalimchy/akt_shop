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
                                        <form class="js-validation-bootstrap form-horizontal" action="<?php echo base_url();?>update-category" method="post" name="edit_category">
                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="val-username">Category Name <span class="text-orange">*</span></label>
                                                <div class="col-md-8">
                                                    <input class="form-control" type="text" id="val-username"  placeholder="Enter category name" name="category_name" value="<?php echo $category_info->category_name; ?>" required />
                                                        <input type="hidden" class="span6 typeahead" id="typeahead" value="<?php echo $category_info->category_id; ?>"  name="category_id" >
                                                </div>
                                            </div>


                                            
                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="val-suggestions">Category Description <span class="text-orange">*</span></label>
                                                <div class="col-md-8">
                                                    <textarea class="form-control" id="val-suggestions"  rows="8" placeholder="Enter category description..." name="category_description"  required="1"><?php echo $category_info->category_name; ?></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="val-skill">Publication Status <span class="text-orange">*</span></label>
                                                <div class="col-md-8">
                                                    <select class="form-control" id="val-skill" name="publication_status"  value="<?php echo $category_info->publication_status; ?>" required="1">
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
    <script>
        
        document.forms['edit_category'].elements['publication_status'].value=<?php echo $category_info->publication_status ?> 
    </script>
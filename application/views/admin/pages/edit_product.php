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
                                        <form class="js-validation-bootstrap form-horizontal" action="<?php echo base_url();?>update-product" enctype="multipart/form-data"  method="post" name="edit_product">
                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="val-username">Product Name <span class="text-orange">*</span></label>
                                                <div class="col-md-8">
                                                    <input class="form-control" type="text" id="val-username"  placeholder="Enter category name" name="product_name" value="<?php echo $product_info->product_name; ?>" required />
                                                    <input type="hidden"  value="<?php echo $product_info->product_id; ?>"  name="product_id" >

                                                </div>
                                            </div>


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
                                                <label class="col-md-3 control-label" for="val-skill">Manufacture Name <span class="text-orange">*</span></label>
                                                <div class="col-md-8">
                                                    <select class="form-control" id="val-skill" name="manufacture_id" required="1">
                                                        <option value="">Please select</option>
                                                        <?php foreach ($publish_manufacture_info as  $v_manufacture) { ?>
                                                        <option value="<?php echo $v_manufacture->manufacture_id?>"><?php echo $v_manufacture->manufacture_name?> </option>
                                                        <?php } ?>
                                                        
                                                    </select>
                                                </div>
                                            </div>


                                            
                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="val-suggestions">Product Short Description  <span class="text-orange">*</span></label>
                                                <div class="col-md-8">
                                                    <textarea class="form-control" id="val-suggestions"  rows="8" placeholder="Enter category description..." name="product_short_description" required="1"><?php  echo $product_info->product_short_description; ?></textarea>
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="val-suggestions">Product Long Description  <span class="text-orange">*</span></label>
                                                <div class="col-md-8">
                                                    <textarea class="form-control" id="val-suggestions"  rows="8" placeholder="Enter category description..." name="product_long_description" required="1"><?php  echo $product_info->product_long_description; ?></textarea>
                                                </div>
                                            </div>


                                             <div class="form-group">
                                                <label class="col-md-3 control-label" for="val-username">Product Price <span class="text-orange">*</span></label>
                                                <div class="col-md-8">
                                                    <input class="form-control" type="number" id="val-username"  placeholder="Enter product price " value="<?php echo $product_info->product_price?>" name="product_price" min="1" required />
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="val-username">Product New Price <span class="text-orange">*</span></label>
                                                <div class="col-md-8">
                                                    <input class="form-control" type="number" id="val-username"  placeholder="Enter product New price " value="<?php echo $product_info->product_new_price?>" name="product_new_price" min="1" required />
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="val-username">Product Quantity <span class="text-orange">*</span></label>
                                                <div class="col-md-8">
                                                    <input class="form-control" type="number" id="val-username"  placeholder="Enter product Quantity " value="<?php echo $product_info->product_quantity; ?>" name="product_quantity" min="1" required />
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="example-file-input">Product Image </label>
                                                <div class="col-md-8">
                                                    <input class="form-control" type="file" id="example-file-input" name="product_image" required="1">
                                                    <input  name="product_old_image"  value="<?php echo $product_info->product_image; ?>" type="hidden">

                                                    <img src="<?php echo base_url().$product_info->product_image; ?>" width="100" height="100" alt="">
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


                                             <div class="form-group">
                                                <label class="col-md-3 control-label css-input css-checkbox css-checkbox-lg css-checkbox-primary">Is featured  </label>
                                                <div class="col-md-8">
                                                    <?php  if ($product_info->is_featured == 1) { ?>
                                                    <input class="form-control" type="checkbox"   name="is_featured"  checked />
                                                    <?php }else{ ?>
                                                    <input class="form-control" type="checkbox"   name="is_featured"   />
                                                    <?php }?>
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
        document.forms['edit_product'].elements['category_id'].value=<?php echo $product_info->category_id ?>;
        document.forms['edit_product'].elements['manufacture_id'].value=<?php echo $product_info->manufacture_id ?> 
        document.forms['edit_product'].elements['publication_status'].value=<?php echo $product_info->publication_status ?> 
    </script>
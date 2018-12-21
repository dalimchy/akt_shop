<div class="row">
    <div class="col-lg-8">
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
                <form class="js-validation-bootstrap form-horizontal" action="<?php echo base_url();?>save-product" enctype="multipart/form-data"  method="post">
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="">Product Name <span class="text-orange">*</span></label>
                        <div class="col-md-8">
                            <input class="form-control" type="text" id=""  placeholder="Enter category name" name="product_name" required />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="">Category Name <span class="text-orange">*</span></label>
                        <div class="col-md-8">
                            <select class="form-control" id="" name="category_id" required="1">
                                <option value="">Please select</option>
                                <?php foreach ($publish_category_info as  $v_category) { ?>
                                <option value="<?php echo $v_category->category_id?>"><?php echo $v_category->category_name?> </option>
                                <?php } ?>
                                
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="">Manufacture Name <span class="text-orange">*</span></label>
                        <div class="col-md-8">
                            <select class="form-control" id="" name="manufacture_id" required="1">
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
                            <textarea class="form-control" id="val-suggestions"  rows="8" placeholder="Enter category description..." name="product_short_description" required="1"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="val-suggestions">Product Long Description  <span class="text-orange">*</span></label>
                        <div class="col-md-8">
                            <textarea class="form-control" id="val-suggestions"  rows="8" placeholder="Enter category description..." name="product_long_description" required="1"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="">Product Price <span class="text-orange">*</span></label>
                        <div class="col-md-8">
                            <input class="form-control" type="number" id=""  placeholder="Enter product price " name="product_price" min="1" required />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="">Product New Price <span class="text-orange">*</span></label>
                        <div class="col-md-8">
                            <input class="form-control" type="number" id=""  placeholder="Enter product New price " name="product_new_price" min="1" required />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="">Product Quantity <span class="text-orange">*</span></label>
                        <div class="col-md-8">
                            <input class="form-control" type="number" id=""  placeholder="Enter product Quantity " name="product_quantity" min="1" required />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="">Product Images </label>
                        <div class="col-md-8">
                            <div class="row" style="margin-bottom:8px">
                                <div class="col-md-12">
                                    <div class="">
                                        <label class="col-md-12 btn btn-info" for="featureImg">
                                        Feature Image
                                        <i class="fa fa-cloud-upload"></i>
                                        </label>
                                        <input style="display:none" class="form-control" type="file" id="featureImg" name="product_image" required="1">
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="margin-bottom:8px">
                                <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="col-md-12 btn btn-info" for="Image2">
                                        Image 2
                                        <i class="fa fa-cloud-upload"></i>
                                        </label>
                                        <input style="display:none" class="form-control" type="file" id="Image2" name="product_image" required="1">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="col-md-12 btn btn-info" for="Image3">
                                        Image 3
                                        <i class="fa fa-cloud-upload"></i>
                                        </label>
                                        <input style="display:none" class="form-control" type="file" id="Image3" name="product_image" required="1">
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="row" style="">
                                <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="col-md-12 btn btn-info" for="Image4">
                                        Image 4
                                        <i class="fa fa-cloud-upload"></i>
                                        </label>
                                        <input style="display:none" class="form-control" type="file" id="Image4" name="product_image" required="1">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="col-md-12 btn btn-info" for="Image5">
                                        Image 5
                                        <i class="fa fa-cloud-upload"></i>
                                        </label>
                                        <input style="display:none" class="form-control" type="file" id="Image5" name="product_image" required="1">
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="">Publication Status <span class="text-orange">*</span></label>
                        <div class="col-md-8">
                            <select class="form-control" id="" name="publication_status" required="1">
                                <option value="">Please select</option>
                                <option value="1">Published </option>
                                <option value="0">Unpublished </option>
                                
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-offset-3 col-xs-6">
                            <p>
                                <label class="css-input switch switch-info">
                                    <input type="checkbox" checked="" name="is_featured"><span></span> Is featured
                                </label>
                            </p>
                        </div>
                    </div>

                    <div class="form-group m-b-0">
                        <div class="col-md-8 col-md-offset-3">
                            <button class="col-md-12 btn btn-success" type="submit">Add Product</button>
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

<div class="row">
    <div class="col-lg-12">
            <?php
                $message = $this->session->userdata('message');
                $brand_error = $this->session->userdata('brand_error');
                if ($message) {?>

                <div class='alert alert-success alert-dismissable'>
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <p><strong>Well done! </strong><?php echo $message;
                $this->session->unset_userdata('message'); ?></p>
                </div>
            <?php }else{
                echo $brand_error;
            }?>
        <div class="card">
            <div class="card-header bg-teal bg-inverse">
                <h4>Add Brand</h4>
                <ul class="card-actions">
                    <li>
                        <button type="button" data-toggle="card-action" data-action="refresh_toggle" data-action-mode="demo"><i class="ion-refresh"></i></button>
                    </li>
                    <li>
                        <button type="button" data-toggle="card-action" data-action="content_toggle"><i class="ion-chevron-down"></i></button>
                    </li>
                </ul>
            </div>
            <div class="card-block">
                <form class="form-horizontal m-t-xs" action="<?php echo base_url();?>save-brand" enctype="multipart/form-data" method="post">
                    
                    <div class="form-group">
                        <div class="col-xs-4">
                            <label for="">Brand name</label>
                            <input class="form-control" type="text" name="brandname" Placeholder="Enter brand name" required>
                        </div>
                        <div class="col-xs-4">
                            <label for="">Brand logo</label>
                            <input class="form-control" type="file" name="brandlogo" required>
                        </div>
                        <div class="col-xs-4">
                                <label for="" class="m-b-3"> </label>
                                <button class="btn btn-app-teal form-control" type="submit">Add Brand</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- .card-block -->
        </div>
        <!-- .card -->
        <div class="card">
            <!-- <div class="card-header">
                <h4>Hover Table</h4>
                <div class="card-actions">
                    <code>.table-hover</code>
                </div>
            </div> -->
            <div class="card-block">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th class="text-center" style="width: 50px;">#</th>
                            <th>Brand Name</th>
                            <th class="hidden-xs w-15">Brand Logo</th>
                            <th class="text-center" style="width: 100px;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    $i = 0;
                    foreach($brand_info_list as $brand_value){
                    $i++;
                    
                    ?>
                        <tr>
                            <td class="text-center"> <?php echo $i ?> </td>
                            <td><?php echo $brand_value->brand_name; ?></td>
                            <td class="hidden-xs">
                            <img style="height: 70px;width: 70px" src="<?php echo base_url().$brand_value->brand_logo; ?>" alt="" ></td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="" data-original-title="Edit client"><i class="ion-edit"></i></button>
                                    <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="" data-original-title="Remove client"><i class="ion-close"></i></button>
                                </div>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
            <!-- .card-block -->
        </div>
    </div>
    <!-- .col-lg-6 -->
</div>

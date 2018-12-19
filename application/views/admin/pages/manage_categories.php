 
                        <!-- Dynamic Table Full -->
                        <div class="card">
                            <!-- <div class="card-header">
                                <h4>Dynamic Table - Full</h4>
                            </div> -->
                            <div class="card-block">
                                <!-- DataTables init on table by adding .js-dataTable-full class, functionality initialized in js/pages/base_tables_datatables.js -->
                                <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Id</th>
                                            <th>Category Name</th>
                                            <th class="hidden-xs">Category Description</th>
                                            <th class="hidden-xs w-20">Status</th>
                                            <th class="text-center" style="width: 10%;">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $i = 0;
                                            foreach ($all_category_info as  $v_category) {
                                            
                                            $i++;
                                        ?>
                                        <tr>
                                            <td class="text-center"><?php echo $i; ?></td>
                                            <td class="font-500"><?php echo $v_category->category_name; ?></td>
                                            <td class="hidden-xs"><?php echo $v_category->category_description; ?></td>
                                            <td class="hidden-xs">
                                                <?php 
                                                if ($v_category->publication_status==1) {  ?>
                                                     <span class="label label-success">Active</span>
                                                <?php  } else{?>
                                                    <span class="label label-danger">Inactive</span>
                                                <?php  } ?>


                                                 <?php if($v_category->publication_status==1){?>
                                                  <a class="btn btn-danger" href="<?php echo base_url()?>unpublish-category/<?php echo $v_category->category_id; ?>">
                                                    <i class="ion-arrow-down-c"></i>  
                                                </a>
                                                    <?php }else{?>
                                                <a class="btn btn-success" href="<?php  echo base_url()?>publish-category/<?php echo $v_category->category_id; ?>">
                                                    <i class="ion-arrow-up-c"></i>  
                                                </a>
                                                    <?php }?>
                                           
                                            </td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                   

                                                    <a href="<?php  echo base_url()?>edit-category/<?php echo $v_category->category_id; ?>" class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Edit Client"><i class="ion-edit"></i></a>
                                                    <a href="<?php  echo base_url()?>delete-category/<?php echo $v_category->category_id; ?>" class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Remove Client"><i class="ion-close"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                 
                                     
                                       <?php } ?>
                                       
                                    </tbody>
                                </table>
                            </div>
                            <!-- .card-block -->
                        </div>
                        <!-- .card -->
                        <!-- End Dynamic Table Full -->
                    
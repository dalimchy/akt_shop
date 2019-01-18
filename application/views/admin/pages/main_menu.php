<!-- <?php if (isset($message)) { ?>
<CENTER><h3 style="color:green;">Data inserted successfully</h3></CENTER><br>
<?php } ?> -->
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header bg-teal bg-inverse">
                <h4>Add Menu Item</h4>
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
                <form class="form-horizontal m-t-xs" action="<?php echo base_url('supper_admin/addMenu_Item');?>" enctype="multipart/form-data" method="post">
                    <div class="form-group">
                        <div class="col-xs-3">
                            <label for="">Menu name</label>
                            <input class="form-control" type="text" name="itemname" Placeholder="Enter Item name" required>
                        </div>
                        <div class="col-xs-2">
                            <label for="">Menu Icon</label>
                            <select name="fa_class" id="" class="form-control">
                                <option value="check">check </option>
                                <option value="check2">check2</option>
                            </select>
                        </div>
                        <div class="col-xs-2">
                            <label for="">Publication</label>
                            <select name="item_status" id="" class="form-control">
                                <option value="1">Published</option>
                                <option value="0">Unpublished</option>
                            </select>
                        </div>
                        <div class="col-xs-3">
                            <label for="">Has Link</label>
                            <input class="form-control" type="text" name="haslink">
                        </div>
                        <div class="col-xs-2">
                            <label for="" class="m-b-3"> </label>
                            <button class="btn btn-app-teal form-control" type="submit">Add Menu</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- .card-block -->
        </div>

        <div class="card">
            <div class="card-block">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th class="text-center" style="width: 50px;">#</th>
                            <th>Menu Name</th>
                            <th class="hidden-xs w-15">Menu icon</th>
                            <th class="hidden-xs w-15" style="width: 100px;">Has Link</th>
                            <th class="hidden-xs w-15" style="width: 100px;">Status</th>
                            <th class="text-center" style="width: 100px;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    $i = 0;
                    foreach($total_menu as $value){
                    $i++;
                    
                    ?>
                        <tr>
                            <td class="text-center"> <?php echo $i ?> </td>
                            <td><?php echo $value->item_name; ?></td>
							<td><i class="<?php echo $value->fa_class; ?>"></i><?php echo $value->fa_class; ?></td>
							<td><?php echo $value->has_link; ?></td>
							<td><?php echo $value->status; ?></td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <a href="<?php  echo base_url('supper_admin/edit_menu/'.$value->id);?>" class="btn btn-xs btn-app-teal" type="button" data-toggle="tooltip" title="" data-original-title="Edit Menu"><i class="ion-edit"></i></a>
                                    <a href="<?php  echo base_url('supper_admin/delete_menu/'.$value->id);?>" class="btn btn-xs btn-app-red" type="button" data-toggle="tooltip" title="" data-original-title="Remove Menu"><i class="ion-android-delete"></i></a>
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
</div>
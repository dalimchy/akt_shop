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
                    <select name="" id="" class="form-control">
                        <option value="">check </option>
                        <option value="">check</option>
                    </select>
                </div>
                <div class="col-xs-2">
                    <label for="">Publication</label>
                    <select name="itempublication" id="" class="form-control">
                        <option value="1">Published</option>
                        <option value="0">Unpublished</option>
                    </select>
                </div>
                <div class="col-xs-3">
                    <label for="">Has Link</label>
                    <input class="form-control" type="text" name="haslink" required>
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
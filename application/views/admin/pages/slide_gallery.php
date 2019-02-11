<div class="row">
    <?php foreach ($each_slide_img as $value) { ?>
        <div class="col-sm-6 col-lg-3">
            <div class="card">
                <div class="card-header bg-teal bg-inverse">
                    <h4>Teal</h4>
                    <ul class="card-actions">
                        <li>
                            <button type="button"><i class="ion-more"></i></button>
                        </li>
                    </ul>
                </div>
                <div class="card-block">
                    <img src="<?php echo base_url().$value->slide_img; ?>" style="max-width:100%;max-height:100%" alt="">
                    <p>Card's content..</p>
                </div>
            </div>
        </div>
    <?php } ?>
    <!-- .col-sm-6 -->
</div>
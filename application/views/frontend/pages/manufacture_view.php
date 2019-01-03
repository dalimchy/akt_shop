<div class="body-content outer-top-xs">
  <div class='container'>
    <div class='row'>
        <?php
            $this->load->view('frontend/categoriesAside');
        ?>
      <!-- /.sidebar -->
      <div class='col-md-9'>
        <div class="clearfix filters-container m-t-10">
          <div class="row">
            <div class="col col-sm-6 col-md-2">
              <div class="filter-tabs">
                <ul id="filter-tabs" class="nav nav-tabs nav-tab-box nav-tab-fa-icon">
                  <li class="active"> <a data-toggle="tab" href="#grid-container"><i class="icon fa fa-th-large"></i>Grid</a> </li>
                  <li><a data-toggle="tab" href="#list-container"><i class="icon fa fa-th-list"></i>List</a></li>
                </ul>
              </div>
              <!-- /.filter-tabs --> 
            </div>
            <!-- /.col -->
            <div class="col col-sm-12 col-md-6">
              <div class="col col-sm-3 col-md-6 no-padding">
                <div class="lbl-cnt"> <span class="lbl">Sort by</span>
                  <div class="fld inline">
                    <div class="dropdown dropdown-small dropdown-med dropdown-white inline">
                      <button data-toggle="dropdown" type="button" class="btn dropdown-toggle"> Position <span class="caret"></span> </button>
                      <ul role="menu" class="dropdown-menu">
                        <li role="presentation"><a href="#">position</a></li>
                        <li role="presentation"><a href="#">Price:Lowest first</a></li>
                        <li role="presentation"><a href="#">Price:HIghest first</a></li>
                        <li role="presentation"><a href="#">Product Name:A to Z</a></li>
                      </ul>
                    </div>
                  </div>
                  <!-- /.fld --> 
                </div>
                <!-- /.lbl-cnt --> 
              </div>
              <!-- /.col -->
              <div class="col col-sm-3 col-md-6 no-padding">
                <div class="lbl-cnt"> <span class="lbl">Show</span>
                  <div class="fld inline">
                    <div class="dropdown dropdown-small dropdown-med dropdown-white inline">
                      <button data-toggle="dropdown" type="button" class="btn dropdown-toggle"> 1 <span class="caret"></span> </button>
                      <ul role="menu" class="dropdown-menu">
                        <li role="presentation"><a href="#">1</a></li>
                        <li role="presentation"><a href="#">2</a></li>
                        <li role="presentation"><a href="#">3</a></li>
                        <li role="presentation"><a href="#">4</a></li>
                        <li role="presentation"><a href="#">5</a></li>
                        <li role="presentation"><a href="#">6</a></li>
                        <li role="presentation"><a href="#">7</a></li>
                        <li role="presentation"><a href="#">8</a></li>
                        <li role="presentation"><a href="#">9</a></li>
                        <li role="presentation"><a href="#">10</a></li>
                      </ul>
                    </div>
                  </div>
                  <!-- /.fld --> 
                </div>
                <!-- /.lbl-cnt --> 
              </div>
              <!-- /.col --> 
            </div>
            <!-- /.col -->
            <div class="col col-sm-6 col-md-4 text-right">
              <div class="pagination-container">
                <ul class="list-inline list-unstyled">
                  <li class="prev"><a href="#"><i class="fa fa-angle-left"></i></a></li>
                  <li><a href="#">1</a></li>
                  <li class="active"><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li class="next"><a href="#"><i class="fa fa-angle-right"></i></a></li>
                </ul>
                <!-- /.list-inline --> 
              </div>
              <!-- /.pagination-container --> </div>
            <!-- /.col --> 
          </div>
          <!-- /.row --> 
        </div>
        <div class="search-result-container ">
          <div id="myTabContent" class="tab-content category-list">
            <div class="tab-pane active " id="grid-container">
              <div class="category-product">
                <div class="row">
                    <?php $i = 0 ; foreach($all_product_info as $v_product){if($v_product->manufacture_id == $manufacture_view_id && $v_product->publication_status == 1 && $i < 12){$i++ ?> 
                        <div class="col-sm-6 col-md-4 wow fadeInUp">
                            <div class="products">
                            <div class="product">
                                <div class="product-image">
                                <div class="image"> <a href="<?php echo base_url()?>product-view/<?php echo $v_product->product_id ?>"><img  src="<?php echo base_url()?><?php echo $v_product->product_image?>" alt=""></a> </div>
                                <!-- /.image -->
                                
                                <div class="tag sale"><span>sale</span></div>
                                </div>
                                <!-- /.product-image -->
                                
                                <div class="product-info text-left">
                                <h3 class="name"><a href="<?php echo base_url()?>product-view/<?php echo $v_product->product_id ?>"><?php echo $v_product->product_name?></a></h3>
                                <div class="rating rateit-small"></div>
                                <div class="description"></div>
                                <div class="product-price"> <span class="price"> Tk.<?php echo $v_product->product_new_price?></span> <span class="price-before-discount">Tk.<?php echo $v_product->product_price?></span> </div>
                                <!-- /.product-price --> 
                                
                                </div>
                                <!-- /.product-info -->
                                <div class="cart clearfix animate-effect">
                                <div class="action">
                                    <ul class="list-unstyled">
                                    <li class="add-cart-button btn-group" onclick="addToCart(<?php echo $v_product->product_id?>)">
                                        <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                        <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                    </li>
                                    <li class="lnk wishlist"> <a class="add-to-cart" onclick="addToWishlist(<?php echo $v_product->product_id?>)" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                    <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal"></i> </a> </li>
                                    </ul>
                                </div>
                                <!-- /.action --> 
                                </div>
                                <!-- /.cart --> 
                            </div>
                            <!-- /.product --> 
                            
                            </div>
                            <!-- /.products --> 
                        </div>
                        <!-- /.item -->
                    <?php }}?>
                </div>
                <!-- /.row --> 
              </div>
              <!-- /.category-product --> 
              
            </div>
            <!-- /.tab-pane -->
            
            <div class="tab-pane "  id="list-container">
              <div class="category-product">
                    <?php $i = 0 ; foreach($all_product_info as $v_product){if($v_product->manufacture_id == $manufacture_view_id && $v_product->publication_status == 1 && $i < 12){$i++ ?> 
                        <div class="category-product-inner wow fadeInUp">
                            <div class="products">
                                <div class="product-list product">
                                <div class="row product-list-row">
                                    <div class="col col-sm-4 col-lg-4">
                                    <div class="product-image">
                                        <div class="image"> <img src="<?php echo base_url()?><?php echo $v_product->product_image?>" alt=""> </div>
                                    </div>
                                    <!-- /.product-image --> 
                                    </div>
                                    <!-- /.col -->
                                    <div class="col col-sm-8 col-lg-8">
                                    <div class="product-info">
                                        <h3 class="name"><a href="<?php echo base_url()?>product-view/<?php echo $v_product->product_id ?>"><?php echo $v_product->product_name?></a></h3>
                                        <div class="rating rateit-small"></div>
                                        <div class="product-price"> <span class="price"> Tk.<?php echo $v_product->product_new_price?></span> <span class="price-before-discount">Tk.<?php echo $v_product->product_price?></span> </div>
                                        <!-- /.product-price -->
                                        <div class="description m-t-10"><?php echo $v_product->product_short_description?></div>
                                        <div class="cart clearfix animate-effect">
                                        <div class="action">
                                            <ul class="list-unstyled">
                                            <li class="add-cart-button btn-group" onclick="addToCart(<?php echo $v_product->product_id?>)" >
                                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                            </li>
                                            <li class="lnk wishlist"> <a class="add-to-cart" onclick="addToWishlist(<?php echo $v_product->product_id?>)" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                            <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal"></i> </a> </li>
                                            </ul>
                                        </div>
                                        <!-- /.action --> 
                                        </div>
                                        <!-- /.cart --> 
                                        
                                    </div>
                                    <!-- /.product-info --> 
                                    </div>
                                    <!-- /.col --> 
                                </div>
                                <!-- /.product-list-row -->
                                <div class="tag new"><span>new</span></div>
                                </div>
                                <!-- /.product-list --> 
                            </div>
                            <!-- /.products --> 
                            </div>
                            <!-- /.category-product-inner -->
                    <?php }}?>
              </div>
              <!-- /.category-product --> 
            </div>
            <!-- /.tab-pane #list-container --> 
          </div>
          <!-- /.tab-content -->
          <div class="clearfix filters-container">
            <div class="text-right">
              <div class="pagination-container">
                <ul class="list-inline list-unstyled">
                  <li class="prev"><a href="#"><i class="fa fa-angle-left"></i></a></li>
                  <li><a href="#">1</a></li>
                  <li class="active"><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li class="next"><a href="#"><i class="fa fa-angle-right"></i></a></li>
                </ul>
                <!-- /.list-inline --> 
              </div>
              <!-- /.pagination-container --> </div>
            <!-- /.text-right --> 
            
          </div>
          <!-- /.filters-container --> 
          
        </div>
        <!-- /.search-result-container --> 
        
      </div>
      <!-- /.col --> 
    </div>
    <!-- /.row --> 
    <!-- ============================================== BRANDS CAROUSEL ============================================== -->
    <div id="brands-carousel" class="logo-slider wow fadeInUp">
      <div class="logo-slider-inner">
        <div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
          <div class="item m-t-15"> <a href="#" class="image"> <img data-echo="<?php echo base_url()?>/assets/frontend/images/brands/brand1.png" src="<?php echo base_url()?>/assets/frontend/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item m-t-10"> <a href="#" class="image"> <img data-echo="<?php echo base_url()?>/assets/frontend/images/brands/brand2.png" src="<?php echo base_url()?>/assets/frontend/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item"> <a href="#" class="image"> <img data-echo="<?php echo base_url()?>/assets/frontend/images/brands/brand3.png" src="<?php echo base_url()?>/assets/frontend/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item"> <a href="#" class="image"> <img data-echo="<?php echo base_url()?>/assets/frontend/images/brands/brand4.png" src="<?php echo base_url()?>/assets/frontend/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item"> <a href="#" class="image"> <img data-echo="<?php echo base_url()?>/assets/frontend/images/brands/brand5.png" src="<?php echo base_url()?>/assets/frontend/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item"> <a href="#" class="image"> <img data-echo="<?php echo base_url()?>/assets/frontend/images/brands/brand6.png" src="<?php echo base_url()?>/assets/frontend/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item"> <a href="#" class="image"> <img data-echo="<?php echo base_url()?>/assets/frontend/images/brands/brand2.png" src="<?php echo base_url()?>/assets/frontend/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item"> <a href="#" class="image"> <img data-echo="<?php echo base_url()?>/assets/frontend/images/brands/brand4.png" src="<?php echo base_url()?>/assets/frontend/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item"> <a href="#" class="image"> <img data-echo="<?php echo base_url()?>/assets/frontend/images/brands/brand1.png" src="<?php echo base_url()?>/assets/frontend/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item"> <a href="#" class="image"> <img data-echo="<?php echo base_url()?>/assets/frontend/images/brands/brand5.png" src="<?php echo base_url()?>/assets/frontend/images/blank.gif" alt=""> </a> </div>
          <!--/.item--> 
        </div>
        <!-- /.owl-carousel #logo-slider --> 
      </div>
      <!-- /.logo-slider-inner --> 
      
    </div>
    <!-- /.logo-slider --> 
    <!-- ============================================== BRANDS CAROUSEL : END ============================================== --> </div>
  <!-- /.container --> 
  
</div>
<!-- /.body-content --> 
<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-06-12 06:11:18
         compiled from "D:\xampp\htdocs\sach\application\views\templates\front-side\contents\TrangChu.html" */ ?>
<?php /*%%SmartyHeaderCode:10066593523bd352ac9-87712040%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '70494acd26c30cc99ade95a8346999ea9bba3d9b' => 
    array (
      0 => 'D:\\xampp\\htdocs\\sach\\application\\views\\templates\\front-side\\contents\\TrangChu.html',
      1 => 1497239954,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10066593523bd352ac9-87712040',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_593523bd3e5860_17977409',
  'variables' => 
  array (
    'DanhSach' => 0,
    'Sach' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_593523bd3e5860_17977409')) {function content_593523bd3e5860_17977409($_smarty_tpl) {?><div id="container">
    <div class="container">
        <div class="row">
            <!--Middle Part Start-->
            <div id="content" class="col-xs-12">
                <div class="row">
                    <div class="col-sm-8">
                        <!-- Slideshow Start-->
                        <div class="slideshow single-slider owl-carousel">
                            <div class="item">
                                <a href="#"><img class="img-responsive" src="image/slider/banner-1-750x400.jpg" alt="banner 1" /></a>
                            </div>
                            <div class="item">
                                <a href="#"><img class="img-responsive" src="image/slider/banner-2-750x400.jpg" alt="banner 2" /></a>
                            </div>
                            <div class="item">
                                <a href="#"><img class="img-responsive" src="image/slider/banner-3-750x400.jpg" alt="banner 3" /></a>
                            </div>
                        </div>
                        <!-- Slideshow End-->
                    </div>
                    <div class="col-sm-4 pull-right flip">
                        <div class="marketshop-banner">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <a href="#"><img title="sample-banner1" alt="sample-banner1" src="image/banner/sp-small-banner-360x185.jpg"></a>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <a href="#"><img title="sample-banner" alt="sample-banner" src="image/banner/sp-small-banner1-360x185.jpg"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Bestsellers Product Start-->
                <h3 class="subtitle">Bestsellers</h3>
                <div class="owl-carousel product_carousel">

                <?php  $_smarty_tpl->tpl_vars['Sach'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Sach']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['DanhSach']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Sach']->key => $_smarty_tpl->tpl_vars['Sach']->value) {
$_smarty_tpl->tpl_vars['Sach']->_loop = true;
?>
                    <div class="product-thumb clearfix">
                        <div class="image">
                            <a href="sanpham.html"><img id="Hinh" src="<?php echo base_url(('uploads/').($_smarty_tpl->tpl_vars['Sach']->value->HinhAnhSach));?>
" style="width:200px;height:200px;" class="img-responsive" /></a>
                        </div>
                        <div class="caption">
                            <h4><a href="SanPham.html"><?php echo $_smarty_tpl->tpl_vars['Sach']->value->TenSach;?>
</a></h4>
                            <p class="price"> $123.20 </p>
                            <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                        </div>
                        <div class="button-group">
                            <button class="btn-primary" type="button" onClick=""><span>Add to Cart</span></button>
                            <div class="add-to-links">
                                <button type="button" data-toggle="tooltip" title="Add to Wish List" onClick=""><i class="fa fa-heart"></i></button>
                                <button type="button" data-toggle="tooltip" title="Compare this Product" onClick=""><i class="fa fa-exchange"></i></button>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                </div>

                <!-- Featured Product End-->
                <!-- Banner Start-->
                <div class="marketshop-banner">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <a href="#"><img title="Sample Banner 2" alt="Sample Banner 2" src="image/banner/sample-banner-3-360x360.jpg"></a>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <a href="#"><img title="Sample Banner" alt="Sample Banner" src="image/banner/sample-banner-1-360x360.jpg"></a>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <a href="#"><img title="Sample Banner 3" alt="Sample Banner 3" src="image/banner/sample-banner-2-360x360.jpg"></a>
                        </div>
                    </div>
                </div>
                <!-- Banner End-->
                <!-- Categories Product Slider Start-->
                <div class="category-module" id="latest_category">
                    <h3 class="subtitle">Electronics - <a class="viewall" href="category.tpl">view all</a></h3>
                    <div class="category-module-content">
                        <ul id="sub-cat" class="tabs">
                            <li><a href="#tab-cat1">Laptops</a></li>
                            <li><a href="#tab-cat2">Desktops</a></li>
                            <li><a href="#tab-cat3">Cameras</a></li>
                            <li><a href="#tab-cat4">Mobile Phones</a></li>
                            <li><a href="#tab-cat5">TV &amp; Home Audio</a></li>
                            <li><a href="#tab-cat6">MP3 Players</a></li>
                        </ul>
                        <div id="tab-cat1" class="tab_content">
                            <div class="owl-carousel latest_category_tabs">
                                <div class="product-thumb">
                                    <div class="image">
                                        <a href="product.hreftml"><img src="image/product/samsung_tab_1-200x200.jpg" alt="Aspire Ultrabook Laptop" title="Aspire Ultrabook Laptop" class="img-responsive" /></a>
                                    </div>
                                    <div class="caption">
                                        <h4><a href="product.html">Aspire Ultrabook Laptop</a></h4>
                                        <p class="price"> <span class="price-new">$230.00</span> <span class="price-old">$241.99</span> <span class="saving">-5%</span> </p>
                                        <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                                    </div>
                                    <div class="button-group">
                                        <button class="btn-primary" type="button" onClick=""><span>Add to Cart</span></button>
                                        <div class="add-to-links">
                                            <button type="button" data-toggle="tooltip" title="Add to wishlist" onClick=""><i class="fa fa-heart"></i></button>
                                            <button type="button" data-toggle="tooltip" title="Add to compare" onClick=""><i class="fa fa-exchange"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-thumb">
                                    <div class="image">
                                        <a href="product.html"><img src="image/product/macbook_pro_1-200x200.jpg" alt=" Strategies for Acquiring Your Own Laptop " title=" Strategies for Acquiring Your Own Laptop " class="img-responsive" /></a>
                                    </div>
                                    <div class="caption">
                                        <h4><a href="product.html"> Strategies for Acquiring Your Own Laptop </a></h4>
                                        <p class="price"> <span class="price-new">$1,400.00</span> <span class="price-old">$1,900.00</span> <span class="saving">-26%</span> </p>
                                    </div>
                                    <div class="button-group">
                                        <button class="btn-primary" type="button" onClick=""><span>Add to Cart</span></button>
                                        <div class="add-to-links">
                                            <button type="button" data-toggle="tooltip" title="Add to wishlist" onClick=""><i class="fa fa-heart"></i></button>
                                            <button type="button" data-toggle="tooltip" title="Add to compare" onClick=""><i class="fa fa-exchange"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-thumb">
                                    <div class="image">
                                        <a href="product.html"><img src="image/product/macbook_air_1-200x200.jpg" alt="Laptop Silver black" title="Laptop Silver black" class="img-responsive" /></a>
                                    </div>
                                    <div class="caption">
                                        <h4><a href="product.html">Laptop Silver black</a></h4>
                                        <p class="price"> <span class="price-new">$1,142.00</span> <span class="price-old">$1,202.00</span> <span class="saving">-5%</span> </p>
                                    </div>
                                    <div class="button-group">
                                        <button class="btn-primary" type="button" onClick=""><span>Add to Cart</span></button>
                                        <div class="add-to-links">
                                            <button type="button" data-toggle="tooltip" title="Add to wishlist" onClick=""><i class="fa fa-heart"></i></button>
                                            <button type="button" data-toggle="tooltip" title="Add to compare" onClick=""><i class="fa fa-exchange"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-thumb">
                                    <div class="image">
                                        <a href="product.html"><img src="image/product/macbook_1-200x200.jpg" alt="Ideapad Yoga 13-59341124 Laptop" title="Ideapad Yoga 13-59341124 Laptop" class="img-responsive" /></a>
                                    </div>
                                    <div class="caption">
                                        <h4><a href="product.html">Ideapad Yoga 13-59341124 Laptop</a></h4>
                                        <p class="price"> $2.00 </p>
                                        <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                                    </div>
                                    <div class="button-group">
                                        <button class="btn-primary" type="button" onClick=""><span>Add to Cart</span></button>
                                        <div class="add-to-links">
                                            <button type="button" data-toggle="tooltip" title="Add to wishlist" onClick=""><i class="fa fa-heart"></i></button>
                                            <button type="button" data-toggle="tooltip" title="Add to compare" onClick=""><i class="fa fa-exchange"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-thumb">
                                    <div class="image">
                                        <a href="product.html"><img src="image/product/ipod_shuffle_1-200x200.jpg" alt="Hp Pavilion G6 2314ax Notebok Laptop" title="Hp Pavilion G6 2314ax Notebok Laptop" class="img-responsive" /></a>
                                    </div>
                                    <div class="caption">
                                        <h4><a href="product.html">Hp Pavilion G6 2314ax Notebok Laptop</a></h4>
                                        <p class="price"> $122.00 </p>
                                    </div>
                                    <div class="button-group">
                                        <button class="btn-primary" type="button" onClick=""><span>Add to Cart</span></button>
                                        <div class="add-to-links">
                                            <button type="button" data-toggle="tooltip" title="Add to wishlist" onClick=""><i class="fa fa-heart"></i></button>
                                            <button type="button" data-toggle="tooltip" title="Add to compare" onClick=""><i class="fa fa-exchange"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-thumb">
                                    <div class="image">
                                        <a href="product.html"><img src="image/product/ipod_touch_1-200x200.jpg" alt="Samsung Galaxy S4" title="Samsung Galaxy S4" class="img-responsive" /></a>
                                    </div>
                                    <div class="caption">
                                        <h4><a href="product.html">Samsung Galaxy S4</a></h4>
                                        <p class="price"> <span class="price-new">$62.00</span> <span class="price-old">$122.00</span> <span class="saving">-50%</span> </p>
                                    </div>
                                    <div class="button-group">
                                        <button class="btn-primary" type="button" onClick=""><span>Add to Cart</span></button>
                                        <div class="add-to-links">
                                            <button type="button" data-toggle="tooltip" title="Add to wishlist" onClick=""><i class="fa fa-heart"></i></button>
                                            <button type="button" data-toggle="tooltip" title="Add to compare" onClick=""><i class="fa fa-exchange"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-cat2" class="tab_content">
                            <div class="owl-carousel latest_category_tabs">
                                <div class="product-thumb">
                                    <div class="image">
                                        <a href="product.html"><img src="image/product/ipod_shuffle_1-200x200.jpg" alt="Hp Pavilion G6 2314ax Notebok Laptop" title="Hp Pavilion G6 2314ax Notebok Laptop" class="img-responsive" /></a>
                                    </div>
                                    <div class="caption">
                                        <h4><a href="product.html">Hp Pavilion G6 2314ax Notebok Laptop</a></h4>
                                        <p class="price"> $122.00 </p>
                                    </div>
                                    <div class="button-group">
                                        <button class="btn-primary" type="button" onClick=""><span>Add to Cart</span></button>
                                        <div class="add-to-links">
                                            <button type="button" data-toggle="tooltip" title="Add to wishlist" onClick=""><i class="fa fa-heart"></i></button>
                                            <button type="button" data-toggle="tooltip" title="Add to compare" onClick=""><i class="fa fa-exchange"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-cat3" class="tab_content">
                            <div class="owl-carousel latest_category_tabs">
                                <div class="product-thumb">
                                    <div class="image">
                                        <a href="product.html"><img src="image/product/FinePix-Long-Zoom-Camera-200x200.jpg" alt="FinePix S8400W Long Zoom Camera" title="FinePix S8400W Long Zoom Camera" class="img-responsive" /></a>
                                    </div>
                                    <div class="caption">
                                        <h4><a href="product.html">FinePix S8400W Long Zoom Camera</a></h4>
                                        <p class="price"> $122.00 </p>
                                    </div>
                                    <div class="button-group">
                                        <button class="btn-primary" type="button" onClick=""><span>Add to Cart</span></button>
                                        <div class="add-to-links">
                                            <button type="button" data-toggle="tooltip" title="Add to wishlist" onClick=""><i class="fa fa-heart"></i></button>
                                            <button type="button" data-toggle="tooltip" title="Add to compare" onClick=""><i class="fa fa-exchange"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-thumb">
                                    <div class="image">
                                        <a href="product.html"><img src="image/product/nikon_d300_1-200x200.jpg" alt="Digital Camera for Elderly" title="Digital Camera for Elderly" class="img-responsive" /></a>
                                    </div>
                                    <div class="caption">
                                        <h4><a href="product.html">Digital Camera for Elderly</a></h4>
                                        <p class="price"> <span class="price-new">$92.00</span> <span class="price-old">$98.00</span> <span class="saving">-6%</span> </p>
                                    </div>
                                    <div class="button-group">
                                        <button class="btn-primary" type="button" onClick=""><span>Add to Cart</span></button>
                                        <div class="add-to-links">
                                            <button type="button" data-toggle="tooltip" title="Add to wishlist" onClick=""><i class="fa fa-heart"></i></button>
                                            <button type="button" data-toggle="tooltip" title="Add to compare" onClick=""><i class="fa fa-exchange"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-cat4" class="tab_content">
                            <div class="owl-carousel latest_category_tabs">
                                <div class="product-thumb">
                                    <div class="image">
                                        <a href="product.html"><img src="image/product/samsung_tab_1-200x200.jpg" alt="Aspire Ultrabook Laptop" title="Aspire Ultrabook Laptop" class="img-responsive" /></a>
                                    </div>
                                    <div class="caption">
                                        <h4><a href="product.html">Aspire Ultrabook Laptop</a></h4>
                                        <p class="price"> <span class="price-new">$230.00</span> <span class="price-old">$241.99</span> <span class="saving">-5%</span> </p>
                                        <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                                    </div>
                                    <div class="button-group">
                                        <button class="btn-primary" type="button" onClick=""><span>Add to Cart</span></button>
                                        <div class="add-to-links">
                                            <button type="button" data-toggle="tooltip" title="Add to wishlist" onClick=""><i class="fa fa-heart"></i></button>
                                            <button type="button" data-toggle="tooltip" title="Add to compare" onClick=""><i class="fa fa-exchange"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-thumb">
                                    <div class="image">
                                        <a href="product.html"><img src="image/product/iphone_1-200x200.jpg" alt="iPhone5" title="iPhone5" class="img-responsive" /></a>
                                    </div>
                                    <div class="caption">
                                        <h4><a href="product.html">iPhone5</a></h4>
                                        <p class="price"> $123.20 </p>
                                        <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                                    </div>
                                    <div class="button-group">
                                        <button class="btn-primary" type="button" onClick=""><span>Add to Cart</span></button>
                                        <div class="add-to-links">
                                            <button type="button" data-toggle="tooltip" title="Add to wishlist" onClick=""><i class="fa fa-heart"></i></button>
                                            <button type="button" data-toggle="tooltip" title="Add to compare" onClick=""><i class="fa fa-exchange"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-thumb">
                                    <div class="image">
                                        <a href="product.html"><img src="image/product/ipod_touch_1-200x200.jpg" alt="Samsung Galaxy S4" title="Samsung Galaxy S4" class="img-responsive" /></a>
                                    </div>
                                    <div class="caption">
                                        <h4><a href="product.html">Samsung Galaxy S4</a></h4>
                                        <p class="price"> <span class="price-new">$62.00</span> <span class="price-old">$122.00</span> <span class="saving">-50%</span> </p>
                                    </div>
                                    <div class="button-group">
                                        <button class="btn-primary" type="button" onClick=""><span>Add to Cart</span></button>
                                        <div class="add-to-links">
                                            <button type="button" data-toggle="tooltip" title="Add to wishlist" onClick=""><i class="fa fa-heart"></i></button>
                                            <button type="button" data-toggle="tooltip" title="Add to compare" onClick=""><i class="fa fa-exchange"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-thumb">
                                    <div class="image">
                                        <a href="product.html"><img src="image/product/palm_treo_pro_1-200x200.jpg" alt="HTC M7 with Stunning Looks" title="HTC M7 with Stunning Looks" class="img-responsive" /></a>
                                    </div>
                                    <div class="caption">
                                        <h4><a href="product.html">HTC M7 with Stunning Looks</a></h4>
                                        <p class="price"> $337.99 </p>
                                    </div>
                                    <div class="button-group">
                                        <button class="btn-primary" type="button" onClick=""><span>Add to Cart</span></button>
                                        <div class="add-to-links">
                                            <button type="button" data-toggle="tooltip" title="Add to wishlist" onClick=""><i class="fa fa-heart"></i></button>
                                            <button type="button" data-toggle="tooltip" title="Add to compare" onClick=""><i class="fa fa-exchange"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-cat5" class="tab_content">
                            <div class="owl-carousel latest_category_tabs">
                                <div class="product-thumb">
                                    <div class="image">
                                        <a href="product.html"><img src="image/product/samsung_tab_1-200x200.jpg" alt="Aspire Ultrabook Laptop" title="Aspire Ultrabook Laptop" class="img-responsive" /></a>
                                    </div>
                                    <div class="caption">
                                        <h4><a href="product.html">Aspire Ultrabook Laptop</a></h4>
                                        <p class="price"> <span class="price-new">$230.00</span> <span class="price-old">$241.99</span> <span class="saving">-5%</span> </p>
                                        <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                                    </div>
                                    <div class="button-group">
                                        <button class="btn-primary" type="button" onClick=""><span>Add to Cart</span></button>
                                        <div class="add-to-links">
                                            <button type="button" data-toggle="tooltip" title="Add to wishlist" onClick=""><i class="fa fa-heart"></i></button>
                                            <button type="button" data-toggle="tooltip" title="Add to compare" onClick=""><i class="fa fa-exchange"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-thumb">
                                    <div class="image">
                                        <a href="product.html"><img src="image/product/ipod_classic_1-200x200.jpg" alt="Portable Mp3 Player" title="Portable Mp3 Player" class="img-responsive" /></a>
                                    </div>
                                    <div class="caption">
                                        <h4><a href="product.html">Portable Mp3 Player</a></h4>
                                        <p class="price"> $122.00 </p>
                                    </div>
                                    <div class="button-group">
                                        <button class="btn-primary" type="button" onClick=""><span>Add to Cart</span></button>
                                        <div class="add-to-links">
                                            <button type="button" data-toggle="tooltip" title="Add to wishlist" onClick=""><i class="fa fa-heart"></i></button>
                                            <button type="button" data-toggle="tooltip" title="Add to compare" onClick=""><i class="fa fa-exchange"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-thumb">
                                    <div class="image">
                                        <a href="product.html"><img src="image/product/macbook_pro_1-200x200.jpg" alt=" Strategies for Acquiring Your Own Laptop " title=" Strategies for Acquiring Your Own Laptop " class="img-responsive" /></a>
                                    </div>
                                    <div class="caption">
                                        <h4><a href="product.html"> Strategies for Acquiring Your Own Laptop </a></h4>
                                        <p class="price"> <span class="price-new">$1,400.00</span> <span class="price-old">$1,900.00</span> <span class="saving">-26%</span> </p>
                                    </div>
                                    <div class="button-group">
                                        <button class="btn-primary" type="button" onClick=""><span>Add to Cart</span></button>
                                        <div class="add-to-links">
                                            <button type="button" data-toggle="tooltip" title="Add to wishlist" onClick=""><i class="fa fa-heart"></i></button>
                                            <button type="button" data-toggle="tooltip" title="Add to compare" onClick=""><i class="fa fa-exchange"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-thumb">
                                    <div class="image">
                                        <a href="product.html"><img src="image/product/macbook_air_1-200x200.jpg" alt="Laptop Silver black" title="Laptop Silver black" class="img-responsive" /></a>
                                    </div>
                                    <div class="caption">
                                        <h4><a href="product.html">Laptop Silver black</a></h4>
                                        <p class="price"> <span class="price-new">$1,142.00</span> <span class="price-old">$1,202.00</span> <span class="saving">-5%</span> </p>
                                    </div>
                                    <div class="button-group">
                                        <button class="btn-primary" type="button" onClick=""><span>Add to Cart</span></button>
                                        <div class="add-to-links">
                                            <button type="button" data-toggle="tooltip" title="Add to wishlist" onClick=""><i class="fa fa-heart"></i></button>
                                            <button type="button" data-toggle="tooltip" title="Add to compare" onClick=""><i class="fa fa-exchange"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-thumb">
                                    <div class="image">
                                        <a href="product.html"><img src="image/product/macbook_1-200x200.jpg" alt="Ideapad Yoga 13-59341124 Laptop" title="Ideapad Yoga 13-59341124 Laptop" class="img-responsive" /></a>
                                    </div>
                                    <div class="caption">
                                        <h4><a href="product.html">Ideapad Yoga 13-59341124 Laptop</a></h4>
                                        <p class="price"> $2.00 </p>
                                        <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                                    </div>
                                    <div class="button-group">
                                        <button class="btn-primary" type="button" onClick=""><span>Add to Cart</span></button>
                                        <div class="add-to-links">
                                            <button type="button" data-toggle="tooltip" title="Add to wishlist" onClick=""><i class="fa fa-heart"></i></button>
                                            <button type="button" data-toggle="tooltip" title="Add to compare" onClick=""><i class="fa fa-exchange"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-thumb">
                                    <div class="image">
                                        <a href="product.html"><img src="image/product/ipod_nano_1-200x200.jpg" alt="Mp3 Player" title="Mp3 Player" class="img-responsive" /></a>
                                    </div>
                                    <div class="caption">
                                        <h4><a href="product.html">Mp3 Player</a></h4>
                                        <p class="price"> $122.00 </p>
                                    </div>
                                    <div class="button-group">
                                        <button class="btn-primary" type="button" onClick=""><span>Add to Cart</span></button>
                                        <div class="add-to-links">
                                            <button type="button" data-toggle="tooltip" title="Add to wishlist" onClick=""><i class="fa fa-heart"></i></button>
                                            <button type="button" data-toggle="tooltip" title="Add to compare" onClick=""><i class="fa fa-exchange"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-thumb">
                                    <div class="image">
                                        <a href="product.html"><img src="image/product/FinePix-Long-Zoom-Camera-200x200.jpg" alt="FinePix S8400W Long Zoom Camera" title="FinePix S8400W Long Zoom Camera" class="img-responsive" /></a>
                                    </div>
                                    <div class="caption">
                                        <h4><a href="product.html">FinePix S8400W Long Zoom Camera</a></h4>
                                        <p class="price"> $122.00 </p>
                                    </div>
                                    <div class="button-group">
                                        <button class="btn-primary" type="button" onClick=""><span>Add to Cart</span></button>
                                        <div class="add-to-links">
                                            <button type="button" data-toggle="tooltip" title="Add to wishlist" onClick=""><i class="fa fa-heart"></i></button>
                                            <button type="button" data-toggle="tooltip" title="Add to compare" onClick=""><i class="fa fa-exchange"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-thumb">
                                    <div class="image">
                                        <a href="product.html"><img src="image/product/ipod_shuffle_1-200x200.jpg" alt="Hp Pavilion G6 2314ax Notebok Laptop" title="Hp Pavilion G6 2314ax Notebok Laptop" class="img-responsive" /></a>
                                    </div>
                                    <div class="caption">
                                        <h4><a href="product.html">Hp Pavilion G6 2314ax Notebok Laptop</a></h4>
                                        <p class="price"> $122.00 </p>
                                    </div>
                                    <div class="button-group">
                                        <button class="btn-primary" type="button" onClick="cart.add('34');"><span>Add to Cart</span></button>
                                        <div class="add-to-links">
                                            <button type="button" data-toggle="tooltip" title="Add to wishlist" onClick="wishlist.add('34');"><i class="fa fa-heart"></i></button>
                                            <button type="button" data-toggle="tooltip" title="Add to compare" onClick="compare.add('34');"><i class="fa fa-exchange"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-thumb">
                                    <div class="image">
                                        <a href="product.html"><img src="image/product/ipod_touch_1-200x200.jpg" alt="Samsung Galaxy S4" title="Samsung Galaxy S4" class="img-responsive" /></a>
                                    </div>
                                    <div class="caption">
                                        <h4><a href="product.html">Samsung Galaxy S4</a></h4>
                                        <p class="price"> <span class="price-new">$62.00</span> <span class="price-old">$122.00</span> <span class="saving">-50%</span> </p>
                                    </div>
                                    <div class="button-group">
                                        <button class="btn-primary" type="button" onClick=""><span>Add to Cart</span></button>
                                        <div class="add-to-links">
                                            <button type="button" data-toggle="tooltip" title="Add to wishlist" onClick=""><i class="fa fa-heart"></i></button>
                                            <button type="button" data-toggle="tooltip" title="Add to compare" onClick=""><i class="fa fa-exchange"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-thumb">
                                    <div class="image">
                                        <a href="product.html"><img src="image/product/nikon_d300_1-200x200.jpg" alt="Digital Camera for Elderly" title="Digital Camera for Elderly" class="img-responsive" /></a>
                                    </div>
                                    <div class="caption">
                                        <h4><a href="product.html">Digital Camera for Elderly</a></h4>
                                        <p class="price"> <span class="price-new">$92.00</span> <span class="price-old">$98.00</span> <span class="saving">-6%</span> </p>
                                    </div>
                                    <div class="button-group">
                                        <button class="btn-primary" type="button" onClick=""><span>Add to Cart</span></button>
                                        <div class="add-to-links">
                                            <button type="button" data-toggle="tooltip" title="Add to wishlist" onClick=""><i class="fa fa-heart"></i></button>
                                            <button type="button" data-toggle="tooltip" title="Add to compare" onClick=""><i class="fa fa-exchange"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-cat6" class="tab_content">
                            <div class="owl-carousel latest_category_tabs">
                                <div class="product-thumb">
                                    <div class="image">
                                        <a href="product.html"><img src="image/product/ipod_classic_1-200x200.jpg" alt="Portable Mp3 Player" title="Portable Mp3 Player" class="img-responsive" /></a>
                                    </div>
                                    <div class="caption">
                                        <h4><a href="product.html">Portable Mp3 Player</a></h4>
                                        <p class="price"> $122.00 </p>
                                    </div>
                                    <div class="button-group">
                                        <button class="btn-primary" type="button" onClick="cart.add('48');"><span>Add to Cart</span></button>
                                        <div class="add-to-links">
                                            <button type="button" data-toggle="tooltip" title="Add to wishlist" onClick=""><i class="fa fa-heart"></i></button>
                                            <button type="button" data-toggle="tooltip" title="Add to compare" onClick=""><i class="fa fa-exchange"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-thumb">
                                    <div class="image">
                                        <a href="product.html"><img src="image/product/ipod_nano_1-200x200.jpg" alt="Mp3 Player" title="Mp3 Player" class="img-responsive" /></a>
                                    </div>
                                    <div class="caption">
                                        <h4><a href="product.html">Mp3 Player</a></h4>
                                        <p class="price"> $122.00 </p>
                                    </div>
                                    <div class="button-group">
                                        <button class="btn-primary" type="button" onClick=""><span>Add to Cart</span></button>
                                        <div class="add-to-links">
                                            <button type="button" data-toggle="tooltip" title="Add to wishlist" onClick=""><i class="fa fa-heart"></i></button>
                                            <button type="button" data-toggle="tooltip" title="Add to compare" onClick=""><i class="fa fa-exchange"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Categories Product Slider End-->
                <!-- Categories Product Slider Start -->
                <h3 class="subtitle">Health &amp; Beauty - <a class="viewall" href="category.html">view all</a></h3>
                <div class="owl-carousel latest_category_carousel">
                    <div class="product-thumb">
                        <div class="image">
                            <a href="product.html"><img src="image/product/iphone_6-200x200.jpg" alt="Hair Care Cream for Men" title="Hair Care Cream for Men" class="img-responsive" /></a>
                        </div>
                        <div class="caption">
                            <h4><a href="product.html">Hair Care Cream for Men</a></h4>
                            <p class="price"> $134.00 </p>
                            <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                        </div>
                        <div class="button-group">
                            <button class="btn-primary" type="button" onClick=""><span>Add to Cart</span></button>
                            <div class="add-to-links">
                                <button type="button" data-toggle="tooltip" title="Add to wishlist" onClick=""><i class="fa fa-heart"></i></button>
                                <button type="button" data-toggle="tooltip" title="Add to compare" onClick=""><i class="fa fa-exchange"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="product-thumb">
                        <div class="image">
                            <a href="product.html"><img src="image/product/nikon_d300_5-200x200.jpg" alt="Hair Care Products" title="Hair Care Products" class="img-responsive" /></a>
                        </div>
                        <div class="caption">
                            <h4><a href="product.html">Hair Care Products</a></h4>
                            <p class="price"> <span class="price-new">$66.80</span> <span class="price-old">$90.80</span> <span class="saving">-27%</span> </p>
                            <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                        </div>
                        <div class="button-group">
                            <button class="btn-primary" type="button" onClick=""><span>Add to Cart</span></button>
                            <div class="add-to-links">
                                <button type="button" data-toggle="tooltip" title="Add to wishlist" onClick=""><i class="fa fa-heart"></i></button>
                                <button type="button" data-toggle="tooltip" title="Add to compare" onClick=""><i class="fa fa-exchange"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="product-thumb">
                        <div class="image">
                            <a href="product.html"><img src="image/product/nikon_d300_4-200x200.jpg" alt="Bed Head Foxy Curls Contour Cream" title="Bed Head Foxy Curls Contour Cream" class="img-responsive" /></a>
                        </div>
                        <div class="caption">
                            <h4><a href="product.html">Bed Head Foxy Curls Contour Cream</a></h4>
                            <p class="price"> $88.00 </p>
                        </div>
                        <div class="button-group">
                            <button class="btn-primary" type="button" onClick=""><span>Add to Cart</span></button>
                            <div class="add-to-links">
                                <button type="button" data-toggle="tooltip" title="Add to wishlist" onClick=""><i class="fa fa-heart"></i></button>
                                <button type="button" data-toggle="tooltip" title="Add to compare" onClick=""><i class="fa fa-exchange"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="product-thumb">
                        <div class="image">
                            <a href=""><img src="image/product/macbook_5-200x200.jpg" alt="Shower Gel Perfume for Women" title="Shower Gel Perfume for Women" class="img-responsive" /></a>
                        </div>
                        <div class="caption">
                            <h4><a href="product.html">Shower Gel Perfume for Women</a></h4>
                            <p class="price"> <span class="price-new">$95.00</span> <span class="price-old">$99.00</span> <span class="saving">-4%</span> </p>
                        </div>
                        <div class="button-group">
                            <button class="btn-primary" type="button" onClick="cart.add('61');"><span>Add to Cart</span></button>
                            <div class="add-to-links">
                                <button type="button" data-toggle="tooltip" title="Add to wishlist" onClick="wishlist.add('61');"><i class="fa fa-heart"></i></button>
                                <button type="button" data-toggle="tooltip" title="Add to compare" onClick="compare.add('61');"><i class="fa fa-exchange"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="product-thumb">
                        <div class="image">
                            <a href="product.html"><img src="image/product/macbook_4-200x200.jpg" alt="Perfumes for Women" title="Perfumes for Women" class="img-responsive" /></a>
                        </div>
                        <div class="caption">
                            <h4><a href="product.html">Perfumes for Women</a></h4>
                            <p class="price"> $85.00 </p>
                            <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                        </div>
                        <div class="button-group">
                            <button class="btn-primary" type="button" onClick=""><span>Add to Cart</span></button>
                            <div class="add-to-links">
                                <button type="button" data-toggle="tooltip" title="Add to wishlist" onClick=""><i class="fa fa-heart"></i></button>
                                <button type="button" data-toggle="tooltip" title="Add to compare" onClick=""><i class="fa fa-exchange"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="product-thumb">
                        <div class="image">
                            <a href="product.html"><img src="image/product/macbook_3-200x200.jpg" alt="Make Up for Naturally Beautiful Better" title="Make Up for Naturally Beautiful Better" class="img-responsive" /></a>
                        </div>
                        <div class="caption">
                            <h4><a href="product.html">Make Up for Naturally Beautiful Better</a></h4>
                            <p class="price"> $123.00 </p>
                        </div>
                        <div class="button-group">
                            <button class="btn-primary" type="button" onClick=""><span>Add to Cart</span></button>
                            <div class="add-to-links">
                                <button type="button" data-toggle="tooltip" title="Add to wishlist" onClick=""><i class="fa fa-heart"></i></button>
                                <button type="button" data-toggle="tooltip" title="Add to compare" onClick=""><i class="fa fa-exchange"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="product-thumb">
                        <div class="image">
                            <a href="product.html"><img src="image/product/macbook_2-200x200.jpg" alt="Pnina Tornai Perfume" title="Pnina Tornai Perfume" class="img-responsive" /></a>
                        </div>
                        <div class="caption">
                            <h4><a href="product.html">Pnina Tornai Perfume</a></h4>
                            <p class="price"> $110.00 </p>
                        </div>
                        <div class="button-group">
                            <button class="btn-primary" type="button" onClick=""><span>Add to Cart</span></button>
                            <div class="add-to-links">
                                <button type="button" data-toggle="tooltip" title="Add to wishlist" onClick=""><i class="fa fa-heart"></i></button>
                                <button type="button" data-toggle="tooltip" title="Add to compare" onClick=""><i class="fa fa-exchange"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Categories Product Slider End -->
                <!-- Banner Start -->
                <div class="marketshop-banner">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <a href="#"><img title="1 Block Banner" alt="1 Block Banner" src="image/banner/1blockbanner-1140x75.jpg"></a>
                        </div>
                    </div>
                </div>
                <!-- Banner End -->
                <!-- Brand Logo Carousel Start-->
                <div id="carousel" class="owl-carousel nxt">
                    <div class="item text-center">
                        <a href="#"><img src="image/product/apple_logo-100x100.jpg" alt="Palm" class="img-responsive" /></a>
                    </div>
                    <div class="item text-center">
                        <a href="#"><img src="image/product/canon_logo-100x100.jpg" alt="Sony" class="img-responsive" /></a>
                    </div>
                    <div class="item text-center">
                        <a href="#"><img src="image/product/apple_logo-100x100.jpg" alt="Canon" class="img-responsive" /></a>
                    </div>
                    <div class="item text-center">
                        <a href="#"><img src="image/product/canon_logo-100x100.jpg" alt="Apple" class="img-responsive" /></a>
                    </div>
                    <div class="item text-center">
                        <a href="#"><img src="image/product/apple_logo-100x100.jpg" alt="HTC" class="img-responsive" /></a>
                    </div>
                    <div class="item text-center">
                        <a href="#"><img src="image/product/canon_logo-100x100.jpg" alt="Hewlett-Packard" class="img-responsive" /></a>
                    </div>
                    <div class="item text-center">
                        <a href="#"><img src="image/product/apple_logo-100x100.jpg" alt="brand" class="img-responsive" /></a>
                    </div>
                    <div class="item text-center">
                        <a href="#"><img src="image/product/canon_logo-100x100.jpg" alt="brand1" class="img-responsive" /></a>
                    </div>
                </div>
                <!-- Brand Logo Carousel End -->
            </div>
            <!--Middle Part End-->
        </div>
    </div>
</div>
<!-- Feature Box Start-->
<div class="container">
    <div class="custom-feature-box row">
        <div class="col-sm-4 col-xs-12">
            <div class="feature-box fbox_1">
                <div class="title">Free Shipping</div>
                <p>Free shipping on order over $1000</p>
            </div>
        </div>
        <div class="col-sm-4 col-xs-12">
            <div class="feature-box fbox_3">
                <div class="title">Gift Cards</div>
                <p>Give the special perfect gift</p>
            </div>
        </div>
        <div class="col-sm-4 col-xs-12">
            <div class="feature-box fbox_4">
                <div class="title">Reward Points</div>
                <p>Earn and spend with ease</p>
            </div>
        </div>
    </div>
</div>
<!-- Feature Box End--><?php }} ?>

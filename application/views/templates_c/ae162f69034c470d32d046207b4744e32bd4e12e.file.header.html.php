<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-06-12 07:08:41
         compiled from "D:\xampp\htdocs\sach\application\views\templates\front-side\partials\header.html" */ ?>
<?php /*%%SmartyHeaderCode:28637593523bd26ef80-74189884%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae162f69034c470d32d046207b4744e32bd4e12e' => 
    array (
      0 => 'D:\\xampp\\htdocs\\sach\\application\\views\\templates\\front-side\\partials\\header.html',
      1 => 1497244095,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28637593523bd26ef80-74189884',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_593523bd294709_10129748',
  'variables' => 
  array (
    'DanhMuc' => 0,
    'item' => 0,
    'itemCon' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_593523bd294709_10129748')) {function content_593523bd294709_10129748($_smarty_tpl) {?><!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="image/favicon.png" rel="icon" />
    <title>Marketshop - eCommerce HTML Template</title>
    <meta name="description" content="Responsive and clean html template design for any kind of ecommerce webshop">
    <!-- CSS Part Start-->
    <link rel="stylesheet" type="text/css" href="public/marketshop3/js/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="public/marketshop3/css/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="public/marketshop3/css/stylesheet.css" />
    <link rel="stylesheet" type="text/css" href="public/marketshop3/css/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="public/marketshop3/css/owl.transitions.css" />
    <link rel="stylesheet" type="text/css" href="public/marketshop3/css/responsive.css" />
    <link rel="stylesheet" type="text/css" href="public/marketshop3/css/stylesheet-skin3.css" />
    <link href='//fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
    <!-- CSS Part End-->
</head>

<body>
    <div class="wrapper-wide">
        <div id="header">
            <!-- Top Bar Start-->
            <nav id="top" class="htop">
                <div class="container">
                    <div class="row"> <span class="drop-icon visible-sm visible-xs"><i class="fa fa-align-justify"></i></span>
                        <div class="pull-left flip left-top">
                            <div class="links">
                                <ul>
                                    <li class="mobile"><i class="fa fa-phone"></i>+91 9898777656</li>
                                    <li class="email"><a href="mailto:info@marketshop.com"><i class="fa fa-envelope"></i>info@marketshop.com</a></li>
                                    <li class="wrap_custom_block hidden-sm hidden-xs"><a>Custom Block<b></b></a>
                                        <div class="dropdown-menu custom_block">
                                            <ul>
                                                <li>
                                                    <table>
                                                        <tbody>
                                                            <tr>
                                                                <td><img alt="" src="image/banner/cms-block.jpg"></td>
                                                                <td><img alt="" src="image/banner/responsive.jpg"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <h4>CMS Blocks</h4>
                                                                </td>
                                                                <td>
                                                                    <h4>Responsive Template</h4>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>This is a CMS block. You can insert any content (HTML, Text, Images) Here.</td>
                                                                <td>This is a CMS block. You can insert any content (HTML, Text, Images) Here.</td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong><a class="btn btn-default btn-sm" href="#">Read More</a></strong></td>
                                                                <td><strong><a class="btn btn-default btn-sm" href="#">Read More</a></strong></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li><a href="#">Wish List (0)</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                </ul>
                            </div>
                            <div id="language" class="btn-group">
                                <button class="btn-link dropdown-toggle" data-toggle="dropdown"> <span> <img src="image/flags/gb.png" alt="English" title="English">English <i class="fa fa-caret-down"></i></span></button>
                                <ul class="dropdown-menu">
                                    <li>
                                        <button class="btn btn-link btn-block language-select" type="button" name="GB"><img src="image/flags/gb.png" alt="English" title="English" /> English</button>
                                    </li>
                                    <li>
                                        <button class="btn btn-link btn-block language-select" type="button" name="GB"><img src="image/flags/ar.png" alt="Arabic" title="Arabic" /> Arabic</button>
                                    </li>
                                </ul>
                            </div>
                            <div id="currency" class="btn-group">
                                <button class="btn-link dropdown-toggle" data-toggle="dropdown"> <span> $ USD <i class="fa fa-caret-down"></i></span></button>
                                <ul class="dropdown-menu">
                                    <li>
                                        <button class="currency-select btn btn-link btn-block" type="button" name="EUR">€ Euro</button>
                                    </li>
                                    <li>
                                        <button class="currency-select btn btn-link btn-block" type="button" name="GBP">£ Pound Sterling</button>
                                    </li>
                                    <li>
                                        <button class="currency-select btn btn-link btn-block" type="button" name="USD">$ US Dollar</button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div id="top-links" class="nav pull-right flip">
                            <ul>
                                <li><a href="login.html">Login</a></li>
                                <li><a href="register.html">Register</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Top Bar End-->
            <!-- Header Start-->
            <header class="header-row">
                <div class="container">
                    <div class="table-container">
                        <!-- Logo Start -->
                        <div class="col-table-cell col-lg-4 col-md-4 col-sm-12 col-xs-12 inner">
                            <div id="logo">
                                <a href="index.html"><img class="img-responsive" src="image/logo.png" title="MarketShop" alt="MarketShop" /></a>
                            </div>
                        </div>
                        <!-- Logo End -->
                        <!-- Search Start-->
                        <div class="col-table-cell col-lg-5 col-md-5 col-md-push-0 col-sm-6 col-sm-push-6 col-xs-12">
                            <div id="search" class="input-group">
                                <input id="filter_name" type="text" name="search" value="" placeholder="Search" class="form-control input-lg" />
                                <button type="button" class="button-search"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                        <!-- Search End-->
                        <!-- Mini Cart Start-->
                        <div class="col-table-cell col-lg-3 col-md-3 col-md-pull-0 col-sm-6 col-sm-pull-6 col-xs-12 inner">
                            <div id="cart">
                                <button type="button" data-toggle="dropdown" data-loading-text="Loading..." class="heading dropdown-toggle"> <span class="cart-icon pull-left flip"></span> <span id="cart-total">2 item(s) - $1,132.00</span></button>
                                <ul class="dropdown-menu">
                                    <li>
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td class="text-center">
                                                        <a href="product.html"><img class="img-thumbnail" title="Xitefun Causal Wear Fancy Shoes" alt="Xitefun Causal Wear Fancy Shoes" src="image/product/sony_vaio_1-50x50.jpg"></a>
                                                    </td>
                                                    <td class="text-left"><a href="product.html">Xitefun Causal Wear Fancy Shoes</a></td>
                                                    <td class="text-right">x 1</td>
                                                    <td class="text-right">$902.00</td>
                                                    <td class="text-center"><button class="btn btn-danger btn-xs remove" title="Remove" onClick="" type="button"><i class="fa fa-times"></i></button></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">
                                                        <a href="product.html"><img class="img-thumbnail" title="Aspire Ultrabook Laptop" alt="Aspire Ultrabook Laptop" src="image/product/samsung_tab_1-50x50.jpg"></a>
                                                    </td>
                                                    <td class="text-left"><a href="product.html">Aspire Ultrabook Laptop</a></td>
                                                    <td class="text-right">x 1</td>
                                                    <td class="text-right">$230.00</td>
                                                    <td class="text-center"><button class="btn btn-danger btn-xs remove" title="Remove" onClick="" type="button"><i class="fa fa-times"></i></button></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </li>
                                    <li>
                                        <div>
                                            <table class="table table-bordered">
                                                <tbody>
                                                    <tr>
                                                        <td class="text-right"><strong>Sub-Total</strong></td>
                                                        <td class="text-right">$940.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-right"><strong>Eco Tax (-2.00)</strong></td>
                                                        <td class="text-right">$4.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-right"><strong>VAT (20%)</strong></td>
                                                        <td class="text-right">$188.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-right"><strong>Total</strong></td>
                                                        <td class="text-right">$1,132.00</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <p class="checkout"><a href="cart.html" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> View Cart</a>&nbsp;&nbsp;&nbsp;<a href="checkout.html" class="btn btn-primary"><i class="fa fa-share"></i> Checkout</a></p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Mini Cart End-->
                    </div>
                </div>
            </header>
            <!-- Header End-->
            <!-- Main Menu Start-->
            <nav id="menu" class="navbar">
                <div class="container">
                    <div class="navbar-header"> <span class="visible-xs visible-sm"> Menu <b></b></span></div>
                    <div class="collapse navbar-collapse navbar-ex1-collapse">
                        <ul class="nav navbar-nav">
                            <li><a class="home_link" title="Home" href="index.html"><span>Home</span></a></li>
                            <?php if (isset($_smarty_tpl->tpl_vars['DanhMuc']->value)) {?> <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['DanhMuc']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                            <li class="dropdown"><a><?php echo $_smarty_tpl->tpl_vars['item']->value->TenDanhMuc;?>
</a> <?php if (count($_smarty_tpl->tpl_vars['item']->value->dsDanhMuc)!=0) {?>
                                <div class="dropdown-menu">
                                    <ul>
                                        <?php  $_smarty_tpl->tpl_vars['itemCon'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itemCon']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value->dsDanhMuc; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itemCon']->key => $_smarty_tpl->tpl_vars['itemCon']->value) {
$_smarty_tpl->tpl_vars['itemCon']->_loop = true;
?>
                                        <li><a href="<?php echo base_url('DanhMuc');?>
"><?php echo $_smarty_tpl->tpl_vars['itemCon']->value->TenDanhMuc;?>
</a> </li>
                                        <?php } ?>
                                    </ul>
                                </div>
                                <?php }?>
                            </li>
                            <?php } ?> <?php }?>

                            <li class="contact-link"><a href="contact-us.html">Contact Us</a></li>
                            <li class="custom-link-right"><a href="#" target="_blank">Special Offers</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Main Menu End-->
        </div>
    </div><?php }} ?>

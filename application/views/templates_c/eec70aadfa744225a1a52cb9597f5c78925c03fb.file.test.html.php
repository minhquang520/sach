<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-05-21 11:37:03
         compiled from "D:\xampp\htdocs\sach\application\views\templates\quanly\contents\DanhMuc\test.html" */ ?>
<?php /*%%SmartyHeaderCode:18059215f62ed7d43-13358770%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eec70aadfa744225a1a52cb9597f5c78925c03fb' => 
    array (
      0 => 'D:\\xampp\\htdocs\\sach\\application\\views\\templates\\quanly\\contents\\DanhMuc\\test.html',
      1 => 1495359411,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18059215f62ed7d43-13358770',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_59215f62f2a249_50941020',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59215f62f2a249_50941020')) {function content_59215f62f2a249_50941020($_smarty_tpl) {?><!-- Start page header -->
<div class="header-content">
    <h2><i class="fa fa-table"></i> Datatable <span>responsive datatable samples</span></h2>
    <div class="breadcrumb-wrapper hidden-xs">
        <span class="label">You are here:</span>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-home"></i>
                <a href="<?php echo base_url('production/admin/codeigniter/dashboard');?>
">Dashboard</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <a href="#">Tables</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li class="active">Datatable</li>
        </ol>
    </div><!-- /.breadcrumb-wrapper -->
</div><!-- /.header-content -->
<!--/ End page header -->

<!-- Start body content -->
<div class="body-content animated fadeIn">

    <div class="row">
        <div class="col-md-12">

            <!-- Start repeater -->
            <div class="panel rounded shadow no-overflow">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h3 class="panel-title">Product List</h3>
                    </div>
                    <div class="pull-right">
                        <button class="btn btn-sm" data-action="refresh" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Refresh"><i class="fa fa-refresh"></i></button>
                        <button class="btn btn-sm" data-action="collapse" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                        <button class="btn btn-sm" data-action="remove" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
                    </div>
                    <div class="clearfix"></div>
                </div><!-- /.panel-heading -->
                <div class="panel-body">
                    <!-- Start repeater -->
                    <div class="fuelux">
                        <div class="repeater" data-staticheight="400" id="myRepeater">
                            <div class="repeater-header">
                                <div class="repeater-header-left">
                                    <div class="repeater-search">
                                        <div class="search input-group">
                                            <input type="search" class="form-control" placeholder="Search"/>
                                                          <span class="input-group-btn">
                                                            <button class="btn btn-default" type="button">
                                                                <span class="glyphicon glyphicon-search"></span>
                                                                <span class="sr-only">Search</span>
                                                            </button>
                                                          </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="repeater-header-right">
                                    <div class="btn-group selectlist repeater-filters" data-resize="auto">
                                        <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                                            <span class="selected-label">&nbsp;</span>
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Filters</span>
                                        </button>
                                        <ul id="test" class="dropdown-menu" role="menu">
                                            <li data-value="all" data-selected="true" class="text-left"><a href="#">All Filter</a></li>
                                            <li data-value="music"><a href="#">Music</a></li>
                                            <li data-value="electronics"><a href="#">Electronics</a></li>
                                            <li data-value="fashion"><a href="#">Fashion</a></li>
                                            <li data-value="home_garden"><a href="#">Home & garden</a></li>
                                            <li data-value="sport"><a href="#">Sporting goods</a></li>
                                        </ul>
                                        <input class="hidden hidden-field" name="filterSelection" readonly="readonly" aria-hidden="true" type="text"/>
                                    </div>
                                    <div class="btn-group repeater-views" data-toggle="buttons">
                                        <label class="btn btn-success active">
                                            <input name="repeaterViews" type="radio" value="list"><span class="glyphicon glyphicon-list"></span>
                                        </label>
                                        <label class="btn btn-success">
                                            <input name="repeaterViews" type="radio" value="thumbnail"><span class="glyphicon glyphicon-th"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="repeater-viewport">
                                <div class="repeater-canvas"></div>
                                <div class="loader repeater-loader"></div>
                            </div>
                            <div class="repeater-footer">
                                <div class="repeater-footer-left">
                                    <div class="repeater-itemization">
                                        <span><span class="repeater-start"></span> - <span class="repeater-end"></span> of <span class="repeater-count"></span> items</span>
                                        <div class="btn-group selectlist" data-resize="auto">
                                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                                <span class="selected-label">&nbsp;</span>
                                                <span class="caret"></span>
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li data-value="5"><a href="#">5</a></li>
                                                <li data-value="10" data-selected="true"><a href="#">10</a></li>
                                                <li data-value="20"><a href="#">20</a></li>
                                                <li data-value="50" data-foo="bar" data-fizz="buzz"><a href="#">50</a></li>
                                                <li data-value="100"><a href="#">100</a></li>
                                            </ul>
                                            <input class="hidden hidden-field" name="itemsPerPage" readonly="readonly" aria-hidden="true" type="text"/>
                                        </div>
                                        <span>Per Page</span>
                                    </div>
                                </div>
                                <div class="repeater-footer-right">
                                    <div class="repeater-pagination">
                                        <button type="button" class="btn btn-default btn-sm repeater-prev">
                                            <span class="glyphicon glyphicon-chevron-left"></span>
                                            <span class="sr-only">Previous Page</span>
                                        </button>
                                        <label class="page-label" id="myPageLabel">Page</label>
                                        <div class="repeater-primaryPaging active">
                                            <div class="input-group input-append dropdown combobox">
                                                <input type="text" class="form-control" aria-labelledby="myPageLabel">
                                                <div class="input-group-btn">
                                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                                        <span class="caret"></span>
                                                        <span class="sr-only">Toggle Dropdown</span>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-right"></ul>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="text" class="form-control repeater-secondaryPaging" aria-labelledby="myPageLabel">
                                        <span>of <span class="repeater-pages"></span></span>
                                        <button type="button" class="btn btn-default btn-sm repeater-next">
                                            <span class="glyphicon glyphicon-chevron-right"></span>
                                            <span class="sr-only">Next Page</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ End repeater -->
                </div><!-- /.panel-body -->
            </div><!-- /.panel -->
            <!--/ End repeater -->
        </div><!-- /.col-md-12 -->
    </div><!-- /.row -->
</div><!-- /.body-content -->
<!--/ End body content --><?php }} ?>

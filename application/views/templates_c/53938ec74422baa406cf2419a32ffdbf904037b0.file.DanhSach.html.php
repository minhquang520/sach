<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-06-01 11:16:27
         compiled from "D:\xampp\htdocs\sach\application\views\templates\quanly\contents\tainguyensach\DanhSach.html" */ ?>
<?php /*%%SmartyHeaderCode:15208592fd5e45981c1-86586333%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '53938ec74422baa406cf2419a32ffdbf904037b0' => 
    array (
      0 => 'D:\\xampp\\htdocs\\sach\\application\\views\\templates\\quanly\\contents\\tainguyensach\\DanhSach.html',
      1 => 1496308584,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15208592fd5e45981c1-86586333',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_592fd5e45fa946_56364689',
  'variables' => 
  array (
    'DanhSach' => 0,
    'TaiNguyenSach' => 0,
    'dsTenSach' => 0,
    'dsLoaiTaiNguyen' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_592fd5e45fa946_56364689')) {function content_592fd5e45fa946_56364689($_smarty_tpl) {?><!-- Start page header -->
<div class="header-content">
    <h2><i class="fa fa-table"></i>Danh Sách Tài Nguyên Sách<span></span></h2>
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
            <div class="row">
                <div class="col-md-3">
                    <a href="<?php echo base_url('quanly/tainguyensach/taomoi');?>
" class="btn btn-danger btn-block btn-compose-email">Tạo Tài Nguyên Sách</a>
                </div>
                <div class="col-md-9">
                    
                </div>
            </div>
            <!-- Start repeater -->
            <div class="panel rounded shadow no-overflow">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h3 class="panel-title">Thông tin danh sách các tài nguyên của sách</h3>
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
                        <div class="repeater" data-staticheight="400" id="myRepeaterDanhSach">
                            <div class="repeater-header">
                                <div class="repeater-header-left">
                                    <div class="repeater-search">
                                        <div class="search input-group">
                                            <input type="search" class="form-control" placeholder="Tìm Kiếm"/>
                                                          <span class="input-group-btn">
                                                            <button class="btn btn-default" type="button">
                                                                <span class="glyphicon glyphicon-search"></span>
                                                                <span class="sr-only">Search</span>
                                                            </button>
                                                          </span>
                                        </div>
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
                                        <span><span class="repeater-start"></span> - <span class="repeater-end"></span> của <span class="repeater-count"></span> mục</span>
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
                                        <span>mỗi trang</span>
                                    </div>
                                </div>
                                <div class="repeater-footer-right">
                                    <div class="repeater-pagination">
                                        <button type="button" class="btn btn-default btn-sm repeater-prev">
                                            <span class="glyphicon glyphicon-chevron-left"></span>
                                            <span class="sr-only">Previous Page</span>
                                        </button>
                                        <label class="page-label" id="myPageLabel">Trang</label>
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
                                        <span>của <span class="repeater-pages"></span></span>
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
<!--/ End body content -->

<?php echo '<script'; ?>
 type="text/javascript">
    'use strict';
var BlankonTable = function () {

    // =========================================================================
    // SETTINGS APP
    // =========================================================================
    //var globalPluginsPath = BlankonApp.handleBaseURL()+'/assets/global/plugins/bower_components';

    return {

        // =========================================================================
        // CONSTRUCTOR APP
        // =========================================================================
        init: function () {
            BlankonTable.datatable();
        },

        // =========================================================================
        // DATATABLE
        // =========================================================================
        datatable: function () {
            var responsiveHelperAjax = undefined;
            var responsiveHelperDom = undefined;
            var breakpointDefinition = {
                tablet: 1024,
                phone : 480
            };

            var tableAjax = $('#datatable-ajax');
            var tableDom = $('#datatable-dom');

            

            // Using DOM
            // Remove arrow datatable
            // $.extend( true, $.fn.dataTable.defaults, {
            //     "aoColumnDefs": [ { "bSortable": false, "aTargets": [ 0, 1, 2, 5 ] } ]
            // } );
            tableDom.dataTable({
                autoWidth        : false,
                preDrawCallback: function () {
                    // Initialize the responsive datatables helper once.
                    if (!responsiveHelperDom) {
                        responsiveHelperDom = new ResponsiveDatatablesHelper(tableDom, breakpointDefinition);
                    }
                },
                rowCallback    : function (nRow) {
                    responsiveHelperDom.createExpandIcon(nRow);
                },
                drawCallback   : function (oSettings) {
                    responsiveHelperDom.respond();
                }
            });

            // Repeater //Tạo tên id và cột
            var columns = [
                {
                    label: 'ID',
                    property: 'id',
                    sortable: true
                },
                {
                    label: 'Tên Sách',
                    property: 'MaSach',
                    sortable: true
                },
                {
                    label: 'Tên Loại Tài Nguyên',
                    property: 'MaLoaiTaiNguyen',
                    sortable: true
                },
                {
                    label: 'Tên Tài Nguyên',
                    property: 'TenTaiNguyen',
                    sortable: true
                },
                {
                    label: 'Action',
                    property: 'Action',
                    sortable: false
                }
            ];
            var delays = ['300', '600', '900', '1200'];

            // xuất biến dữ liệu từ danhmuc controller và view
            var products = [
                <?php  $_smarty_tpl->tpl_vars['TaiNguyenSach'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['TaiNguyenSach']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['DanhSach']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['TaiNguyenSach']->key => $_smarty_tpl->tpl_vars['TaiNguyenSach']->value) {
$_smarty_tpl->tpl_vars['TaiNguyenSach']->_loop = true;
?>
                {
                    "id" : "<?php echo $_smarty_tpl->tpl_vars['TaiNguyenSach']->value->id;?>
",
                    "MaSach" : "<?php echo $_smarty_tpl->tpl_vars['dsTenSach']->value[$_smarty_tpl->tpl_vars['TaiNguyenSach']->value->MaSach];?>
",
                    "MaLoaiTaiNguyen" : "<?php echo $_smarty_tpl->tpl_vars['dsLoaiTaiNguyen']->value[$_smarty_tpl->tpl_vars['TaiNguyenSach']->value->MaLoaiTaiNguyen];?>
",
                    "TenTaiNguyen" : "<?php echo $_smarty_tpl->tpl_vars['TaiNguyenSach']->value->TenTaiNguyen;?>
",
                    "Action" : '<a href="<?php echo base_url();?>
QuanLy/TaiNguyenSach/ChinhSua/<?php echo $_smarty_tpl->tpl_vars['TaiNguyenSach']->value->id;?>
" class="btn btn-sm btn-primary btn-xs btn-push"><i class="fa fa-pencil"></i> Sửa</a>                                                    <a onclick="return confirm(\'Sẽ xóa tài nguyên sách <?php echo $_smarty_tpl->tpl_vars['TaiNguyenSach']->value->TenTaiNguyen;?>
 ?\')" href="<?php echo base_url();?>
QuanLy/TaiNguyenSach/Xoa/<?php echo $_smarty_tpl->tpl_vars['TaiNguyenSach']->value->id;?>
" class="btn btn-sm btn-danger btn-xs btn-push"><i class="fa fa-trash"></i> Xóa</a>                                                '
                },
                <?php } ?>
            ];
            var dataSource, filtering;

            dataSource = function(options, callback){
                var items = filtering(options);
                var resp = {
                    count: items.length,
                    items: [],
                    page: options.pageIndex,
                    pages: Math.ceil(items.length/(options.pageSize || 50))
                };
                var i, items, l;

                i = options.pageIndex * (options.pageSize || 50);
                l = i + (options.pageSize || 50);
                l = (l <= resp.count) ? l : resp.count;
                resp.start = i + 1;
                resp.end = l;

                if(options.view==='list' || options.view==='thumbnail'){
                    if(options.view==='list'){
                        resp.columns = columns;
                        for(i; i<l; i++){
                            resp.items.push(items[i]);
                        }
                    }else{
                        for(i; i<l; i++){
                            resp.items.push({
                                name: items[i].name,
                                src: items[i].ThumbnailImage
                            });
                        }
                    }

                    setTimeout(function(){
                        callback(resp);
                    }, delays[Math.floor(Math.random() * 4)]);
                }
            };

            filtering = function(options){
                var items = $.extend([], products);
                var search;
                if(options.filter.value!=='all'){
                    items = $.grep(items, function(item){
                        return (item.type.search(options.filter.value)>=0);
                    });
                }
                if(options.search){
                    search = options.search.toLowerCase();
                    items = $.grep(items, function(item){
                        return (
                        (item.id.toLowerCase().search(options.search)>=0) ||
                        (item.TenTaiNguyen.toLowerCase().search(options.search)>=0) ||
                        (item.DuongDan.toLowerCase().search(options.search)>=0) 
                        );
                    });
                }
                if(options.sortProperty){
                    items = $.grep(items, function(item){
                        if(options.sortProperty==='id' || options.sortProperty==='height' || options.sortProperty==='weight'){
                            return parseFloat(item[options.sortProperty]);
                        }else{
                            return item[options.sortProperty];
                        }
                    });
                    if(options.sortDirection==='desc'){
                        items.reverse();
                    }
                }

                return items;
            };

            // REPEATER //chạy kiểu danh sách

            $('#myRepeaterDanhSach').repeater({
                dataSource: dataSource
            });
        }

    };

}();

// Call main app init
BlankonTable.init();
<?php echo '</script'; ?>
><?php }} ?>

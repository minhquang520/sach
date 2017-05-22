<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-05-22 12:46:53
         compiled from "D:\xampp\htdocs\sach\application\views\templates\quanly\contents\TacGia\TaoMoi.html" */ ?>
<?php /*%%SmartyHeaderCode:1044592288335bc443-06882594%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '584fa1cf8ec33df66a9f801979987ee11a947538' => 
    array (
      0 => 'D:\\xampp\\htdocs\\sach\\application\\views\\templates\\quanly\\contents\\TacGia\\TaoMoi.html',
      1 => 1495449993,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1044592288335bc443-06882594',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_592288336a7ff0_26152774',
  'variables' => 
  array (
    'title' => 0,
    'Input_TenTacGia' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_592288336a7ff0_26152774')) {function content_592288336a7ff0_26152774($_smarty_tpl) {?><!-- Start page header -->
<div class="header-content">
    <h2><i class="fa fa-list-alt"></i> <?php if (isset($_smarty_tpl->tpl_vars['title']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 <?php }?> <span></span></h2>
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
                <a href="#">Forms</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li class="active">Form Elements</li>
        </ol>
    </div><!-- /.breadcrumb-wrapper -->
</div><!-- /.header-content -->
<!--/ End page header -->

<!-- Start body content -->
<div class="body-content animated fadeIn">

<div class="row">
<div class="col-md-8 col-md-offset-2">
    <!-- Start input fields - basic form -->
    <div class="panel rounded shadow">
        <div class="panel-heading">
            <div class="pull-left">
                <h3 class="panel-title">Thông Tin Tác Giả</h3>
            </div>
            <div class="pull-right">
                <button class="btn btn-sm" data-container="body" data-action="collapse" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                <button class="btn btn-sm" data-container="body" data-action="remove" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
            </div>
            <div class="clearfix"></div>
        </div><!-- /.panel-heading -->
        <div class="panel-body no-padding">
                <?php echo form_open(current_url(),'method="POST"');?>

                <div class="form-body">
                    <div class="form-group">
                        <label class="control-label">Tên Tác Giả</label>
                        <?php $_smarty_tpl->tpl_vars['Input_TenTacGia'] = new Smarty_variable(array('name'=>'TenTacGia','id'=>'TenTacGia','value'=>set_value('TenTacGia'),'class'=>'form-control','type'=>'text'), null, 0);?>
                            <?php echo form_input($_smarty_tpl->tpl_vars['Input_TenTacGia']->value);?>


                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-label" for="readonlyinput1">Slug</label>
                        <input value="" id="slug" class="form-control" readonly="readonly" type="text">
                    </div><!-- /.form-group -->
                </div><!-- /.form-body -->
                <div class="form-footer">
                    <div class="pull-left">
                        <button class="btn btn-success" type="submit">Submit</button>
                        <a href="<?php echo base_url('quanly/tacgia');?>
" class="btn btn-danger mr-5">Cancel</a>
                    </div>
                    <div class="clearfix"></div>
                </div><!-- /.form-footer -->
                <?php echo form_close();?>

        </div><!-- /.panel-body -->
    </div><!-- /.panel -->
    <!--/ End input fields - basic form-->
</div><!-- /.row -->


</div><!-- /.body-content -->
<!--/ End body content --><?php }} ?>

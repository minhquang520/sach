<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-05-21 12:09:41
         compiled from "D:\xampp\htdocs\sach\application\views\templates\quanly\contents\DanhMuc\ChinhSua.html" */ ?>
<?php /*%%SmartyHeaderCode:314935921670357ce04-63329770%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca09157bfefd47a05710ddd204678579e60c8c96' => 
    array (
      0 => 'D:\\xampp\\htdocs\\sach\\application\\views\\templates\\quanly\\contents\\DanhMuc\\ChinhSua.html',
      1 => 1495361380,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '314935921670357ce04-63329770',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_592167035f1d74_27081288',
  'variables' => 
  array (
    'title' => 0,
    'DanhMuc' => 0,
    'Input_TenDanhMuc' => 0,
    'dsDanhMuc' => 0,
    'Input_DanhMuc' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_592167035f1d74_27081288')) {function content_592167035f1d74_27081288($_smarty_tpl) {?><!-- Start page header -->
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
                <h3 class="panel-title">Thông Tin Danh Mục</h3>
            </div>
            <div class="pull-right">
                <button class="btn btn-sm" data-container="body" data-action="collapse" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                <button class="btn btn-sm" data-container="body" data-action="remove" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
            </div>
            <div class="clearfix"></div>
        </div><!-- /.panel-heading -->
        <div class="panel-sub-heading">

            <!-- kiểm tra nếu nó không rỗng, thì sẽ xuất ra div chứa nội dung lỗi -->
            <?php if (!empty(validation_errors())) {?>
            <div class="callout callout-info"><p><?php echo validation_errors();?>
</p></div>
            <?php }?>

        </div>
        <div class="panel-body no-padding">
            <?php echo form_open(current_url(),'method="POST"');?>

                <div class="form-body">
                    <div class="form-group">
                        <label class="control-label">Tên Danh Mục</label>
                        <?php $_smarty_tpl->tpl_vars['Input_TenDanhMuc'] = new Smarty_variable(array('name'=>'TenDanhMuc','id'=>'TenDanhMuc','value'=>$_smarty_tpl->tpl_vars['DanhMuc']->value->TenDanhMuc,'class'=>'form-control','type'=>'text'), null, 0);?>
                        <?php echo form_input($_smarty_tpl->tpl_vars['Input_TenDanhMuc']->value);?>

                        <!--  form_input truyền vô dữ liệu mong muốn -->
                    </div><!-- /.form-group <--></-->

                    <div class="form-group">
                        <label class="control-label">Mã Danh Mục Cha</label>
                        <?php $_smarty_tpl->tpl_vars['Input_DanhMuc'] = new Smarty_variable(array('id'=>'MaDanhMucCha','class'=>'form-control input-sm mb-15'), null, 0);?>  
                        <?php echo form_dropdown('MaDanhMucCha',$_smarty_tpl->tpl_vars['dsDanhMuc']->value,$_smarty_tpl->tpl_vars['DanhMuc']->value->MaDanhMucCha,$_smarty_tpl->tpl_vars['Input_DanhMuc']->value);?>


                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-label" for="readonlyinput1">Slug</label>
                        <input id="slug" value="<?php echo $_smarty_tpl->tpl_vars['DanhMuc']->value->Slug;?>
" class="form-control" readonly="readonly" type="text">
                    </div><!-- /.form-group -->

                </div><!-- /.form-body -->
                <div class="form-footer">
                    <div class="pull-left">
                        <button class="btn btn-success" type="submit">Submit</button>
                        <button class="btn btn-danger mr-5">Cancel</button>
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

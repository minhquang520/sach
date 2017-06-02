<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-06-01 11:49:14
         compiled from "D:\xampp\htdocs\sach\application\views\templates\quanly\contents\TaiNguyenSach\ChinhSua.html" */ ?>
<?php /*%%SmartyHeaderCode:15428592fdecbef9195-30038117%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '381227945b97663d5aa029717db7bf1cdd36a048' => 
    array (
      0 => 'D:\\xampp\\htdocs\\sach\\application\\views\\templates\\quanly\\contents\\TaiNguyenSach\\ChinhSua.html',
      1 => 1496310547,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15428592fdecbef9195-30038117',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_592fdecc01eee1_38290747',
  'variables' => 
  array (
    'title' => 0,
    'dsSach' => 0,
    'TaiNguyenSach' => 0,
    'Input_MaSach' => 0,
    'dsLoaiTaiNguyen' => 0,
    'Input_MaLoaiTaiNguyen' => 0,
    'Input_TenTaiNguyen' => 0,
    'Input_DuongDan' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_592fdecc01eee1_38290747')) {function content_592fdecc01eee1_38290747($_smarty_tpl) {?><!-- Start page header -->
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
                <h3 class="panel-title">Thông Tin Tài Nguyên Sách</h3>
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
                        <label class="control-label">Mã Sách</label>
                        <?php $_smarty_tpl->tpl_vars['Input_MaSach'] = new Smarty_variable(array('id'=>'MaSach','class'=>'form-control input-sm mb-15'), null, 0);?>  
                        <?php echo form_dropdown('MaSach',$_smarty_tpl->tpl_vars['dsSach']->value,$_smarty_tpl->tpl_vars['TaiNguyenSach']->value->MaSach,$_smarty_tpl->tpl_vars['Input_MaSach']->value);?>

                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-label">Mã Loại Tài Nguyên</label>
                        <?php $_smarty_tpl->tpl_vars['Input_MaLoaiTaiNguyen'] = new Smarty_variable(array('id'=>'MaLoaiTaiNguyen','class'=>'form-control input-sm mb-15'), null, 0);?>  
                        <?php echo form_dropdown('MaLoaiTaiNguyen',$_smarty_tpl->tpl_vars['dsLoaiTaiNguyen']->value,$_smarty_tpl->tpl_vars['TaiNguyenSach']->value->MaLoaiTaiNguyen,$_smarty_tpl->tpl_vars['Input_MaLoaiTaiNguyen']->value);?>

                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-label">Tên Tài Nguyên</label>
                        <?php $_smarty_tpl->tpl_vars['Input_TenTaiNguyen'] = new Smarty_variable(array('name'=>'TenTaiNguyen','id'=>'TenTaiNguyen','value'=>$_smarty_tpl->tpl_vars['TaiNguyenSach']->value->TenTaiNguyen,'class'=>'form-control','type'=>'text'), null, 0);?>
                            <?php echo form_input($_smarty_tpl->tpl_vars['Input_TenTaiNguyen']->value);?>

                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-label">Đường Dẫn</label>
                        <?php $_smarty_tpl->tpl_vars['Input_DuongDan'] = new Smarty_variable(array('name'=>'DuongDan','id'=>'DuongDan','value'=>$_smarty_tpl->tpl_vars['TaiNguyenSach']->value->DuongDan,'class'=>'form-control','type'=>'text'), null, 0);?>
                            <?php echo form_input($_smarty_tpl->tpl_vars['Input_DuongDan']->value);?>

                    </div><!-- /.form-group -->

                </div><!-- /.form-body -->
                <div class="form-footer">
                    <div class="pull-left">
                        <button class="btn btn-success" type="submit">Submit</button>
                        <a href="<?php echo base_url('quanly/tainguyensach');?>
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

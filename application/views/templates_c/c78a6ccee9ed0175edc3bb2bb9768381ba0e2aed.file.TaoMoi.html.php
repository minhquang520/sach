<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-06-01 08:48:29
         compiled from "D:\xampp\htdocs\sach\application\views\templates\quanly\contents\Sach\TaoMoi.html" */ ?>
<?php /*%%SmartyHeaderCode:6865923f6dfc00670-44916451%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c78a6ccee9ed0175edc3bb2bb9768381ba0e2aed' => 
    array (
      0 => 'D:\\xampp\\htdocs\\sach\\application\\views\\templates\\quanly\\contents\\Sach\\TaoMoi.html',
      1 => 1496299645,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6865923f6dfc00670-44916451',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5923f6dfcabb17_93653148',
  'variables' => 
  array (
    'title' => 0,
    'Input_TenSach' => 0,
    'dsSach' => 0,
    'Input_MaTacGia' => 0,
    'Input_ThoiGianPhatHanh' => 0,
    'Input_MieuTaNgan' => 0,
    'Input_MieuTaDai' => 0,
    'Input_HinhAnhSach' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5923f6dfcabb17_93653148')) {function content_5923f6dfcabb17_93653148($_smarty_tpl) {?><!--Start page header -->
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
                <h3 class="panel-title">Thông Tin Sách</h3>
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
            <div class="callout callout-info">
                <p><?php echo validation_errors();?>
</p>
                
            </div>

            <?php }?>

        </div>
    
        <div class="panel-body no-padding">
            <?php echo form_open_multipart(current_url(),'method="POST"');?>

                <div class="form-body">
                    <div class="form-group">
                        <label class="control-label">Tên Sách</label>
                        <?php $_smarty_tpl->tpl_vars['Input_TenSach'] = new Smarty_variable(array('name'=>'TenSach','id'=>'TenSach','value'=>set_value('TenSach'),'class'=>'form-control','type'=>'text'), null, 0);?>
                        <?php echo form_input($_smarty_tpl->tpl_vars['Input_TenSach']->value);?>

                    </div><!-- /.form-group -->
                    
                    <div class="form-group">
                        <label class="control-label">Mã Tác Giả</label>
                        <?php $_smarty_tpl->tpl_vars['Input_MaTacGia'] = new Smarty_variable(array('id'=>'MaTacGia','class'=>'form-control input-sm mb-15'), null, 0);?>  
                        <?php echo form_dropdown('MaTacGia',$_smarty_tpl->tpl_vars['dsSach']->value,set_value('MaTacGia'),$_smarty_tpl->tpl_vars['Input_MaTacGia']->value);?>

                    </div><!-- /.form-group -->
                    
                    <div class="form-group">
                        <label class="control-label">Năm Phát Hành:</label>
                        <?php $_smarty_tpl->tpl_vars['Input_ThoiGianPhatHanh'] = new Smarty_variable(array('name'=>'ThoiGianPhatHanh','id'=>'ThoiGianPhatHanh','value'=>set_value('ThoiGianPhatHanh'),'class'=>'form-control','type'=>'text'), null, 0);?>
                        <?php echo form_input($_smarty_tpl->tpl_vars['Input_ThoiGianPhatHanh']->value);?>

                    </div><!-- /.form-group -->                             

                    <div class="form-group">
                        <label class="control-label">Miêu tả ngắn</label>
                        <?php $_smarty_tpl->tpl_vars['Input_MieuTaNgan'] = new Smarty_variable(array('name'=>'MieuTaNgan','id'=>'MieuTaNgan','value'=>set_value('MieuTaNgan'),'class'=>'form-control','type'=>'text'), null, 0);?>
                        <?php echo form_input($_smarty_tpl->tpl_vars['Input_MieuTaNgan']->value);?>

                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-label">Miêu tả dài</label>
                        <?php $_smarty_tpl->tpl_vars['Input_MieuTaDai'] = new Smarty_variable(array('name'=>'MieuTaDai','id'=>'MieuTaDai','value'=>set_value('MieuTaDai'),'class'=>'form-control','type'=>'text'), null, 0);?>
                        <?php echo form_input($_smarty_tpl->tpl_vars['Input_MieuTaDai']->value);?>

                    </div><!-- /.form-group -->                    

                    <div class="form-group">
                        <label for="exampleInputFile" class="control-label">Hình Ảnh Sách</label>
                        <?php $_smarty_tpl->tpl_vars['Input_HinhAnhSach'] = new Smarty_variable(array('name'=>'HinhAnhSach','id'=>'HinhAnhSach','value'=>set_value('HinhAnhSach'),'class'=>'form-control','type'=>'file'), null, 0);?>
                        <?php echo form_input($_smarty_tpl->tpl_vars['Input_HinhAnhSach']->value);?>

                        <p class="help-block">Example block-level help text here.</p>
                        <img id="Hinh" alt="some_text" style="width:80px;height:80px;"> 
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-label" for="readonlyinput1">Slug</label>
                        <input value="" id="slug" class="form-control" readonly="readonly" type="text">
                    </div><!-- /.form-group -->

                </div><!-- /.form-body -->
                <div class="form-footer">
                    <div class="pull-left">
                        <button class="btn btn-success" type="submit">Submit</button>
                        <a href="<?php echo base_url('quanly/Sach');?>
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

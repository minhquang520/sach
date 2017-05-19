<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-05-19 08:30:25
         compiled from "D:\xampp\htdocs\test\application\views\templates\quanly\contents\forms\wysiwyg.html" */ ?>
<?php /*%%SmartyHeaderCode:5121591e91012fbd29-36104818%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b08a45362cc3ae0fd2afd987dc9cd3f456760b9' => 
    array (
      0 => 'D:\\xampp\\htdocs\\test\\application\\views\\templates\\quanly\\contents\\forms\\wysiwyg.html',
      1 => 1445208488,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5121591e91012fbd29-36104818',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_591e91013de588_18134483',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_591e91013de588_18134483')) {function content_591e91013de588_18134483($_smarty_tpl) {?><!-- Start page header -->
<div class="header-content">
    <h2><i class="fa fa-edit"></i> WYSIWYG <span>form text editor</span></h2>
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
            <li class="active">WYSIWYG</li>
        </ol>
    </div><!-- /.breadcrumb-wrapper -->
</div><!-- /.header-content -->
<!--/ End page header -->

<!-- Start body content -->
<div class="body-content animated fadeIn">

    <div class="row">
        <div class="col-md-12">

            <!-- Start HTML 5 WYSIWYG Editor -->
            <div class="panel rounded shadow">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h3 class="panel-title">HTML 5 WYSIWYG Editor</h3>
                    </div>
                    <div class="pull-right">
                        <button class="btn btn-sm" data-action="collapse" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                        <button class="btn btn-sm" data-action="remove" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
                    </div>
                    <div class="clearfix"></div>
                </div><!-- /.panel-heading -->
                <div class="panel-sub-heading">
                    <div class="callout callout-info">
                        <a href="http://jhollingworth.github.io/bootstrap-wysihtml5/" target="_blank">Bootstrap-wysihtml5</a> is a javascript plugin that makes it easy to create simple, beautiful wysiwyg editors with the help of wysihtml5 and Twitter Bootstrap.
                    </div>
                </div><!-- /.panel-sub-heading -->
                <div class="panel-body">
                    <div class="inner-all">
                        <form class="form-horizontal">
                            <div class="form-group">
                                <textarea id="wysihtml5-textarea" class="form-control" rows="10" placeholder="Enter text ..."></textarea>
                            </div>
                        </form>
                    </div>
                </div><!-- /.panel-body -->
            </div><!-- /.panel -->
            <!--/ End HTML 5 WYSIWYG Editor -->

        </div>
    </div><!-- /.row -->
    <div class="row">
        <div class="col-md-12">

            <!-- Start Summernote 5 WYSIWYG Editor -->
            <div class="panel rounded shadow">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h3 class="panel-title">Summernote 5 WYSIWYG Editor</h3>
                    </div>
                    <div class="pull-right">
                        <button class="btn btn-sm" data-action="collapse" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                        <button class="btn btn-sm" data-action="remove" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
                    </div>
                    <div class="clearfix"></div>
                </div><!-- /.panel-heading -->
                <div class="panel-sub-heading">
                    <div class="callout callout-info">
                        <a href="http://hackerwins.github.io/summernote/" target="_blank">Summernote</a> Super Simple WYSIWYG Editor on Bootstrap
                    </div>
                </div><!-- /.panel-sub-heading -->
                <div class="panel-body">
                    <div class="inner-all">
                        <form class="form-horizontal">
                            <div class="form-group">
                                <textarea id="summernote-textarea" class="form-control" rows="10" placeholder="Enter text ..."></textarea>
                            </div>
                        </form>
                    </div>
                </div><!-- /.panel-body -->
            </div><!-- /.panel -->
            <!--/ End Summernote 5 WYSIWYG Editor -->

        </div>
    </div><!-- /.row -->
    <div class="row">
        <div class="col-md-12">

            <!-- Start inline editor -->
            <div class="panel rounded shadow">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h3 class="panel-title">Inline Editor</h3>
                    </div>
                    <div class="pull-right">
                        <button class="btn btn-sm" data-action="collapse" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                        <button class="btn btn-sm" data-action="remove" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
                    </div>
                    <div class="clearfix"></div>
                </div><!-- /.panel-heading -->
                <div class="panel-body">
                    <span class="label label-info">Just block and double click on text</span>
                    <div class="editable">
                        <h4>Paragraph 1</h4>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Cras et ipsum quis mi semper accumsan. Integer pretium dui id massa. Suspendisse in nisl sit amet urna rutrum imperdiet. Nulla eu tellus. Donec ante nisi, ullamcorper quis, fringilla nec, sagittis eleifend, pede. Nulla commodo interdum massa. Donec id metus. Fusce eu ipsum. Suspendisse auctor. Phasellus fermentum porttitor risus.</p>
                    </div>
                    <div class="editable">
                        <h4>Paragraph 2</h4>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Cras et ipsum quis mi semper accumsan. Integer pretium dui id massa. Suspendisse in nisl sit amet urna rutrum imperdiet. Nulla eu tellus. Donec ante nisi, ullamcorper quis, fringilla nec, sagittis eleifend, pede. Nulla commodo interdum massa. Donec id metus. Fusce eu ipsum. Suspendisse auctor. Phasellus fermentum porttitor risus.</p>
                    </div>
                    <div class="editable">
                        <h4>Paragraph 3</h4>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Cras et ipsum quis mi semper accumsan. Integer pretium dui id massa. Suspendisse in nisl sit amet urna rutrum imperdiet. Nulla eu tellus. Donec ante nisi, ullamcorper quis, fringilla nec, sagittis eleifend, pede. Nulla commodo interdum massa. Donec id metus. Fusce eu ipsum. Suspendisse auctor. Phasellus fermentum porttitor risus.</p>
                    </div>
                </div><!-- /.panel-body -->
            </div><!-- /.panel -->
            <!--/ End inline editor -->

        </div>
    </div><!-- /.row -->

</div><!-- /.body-content -->
<!--/ End body content --><?php }} ?>

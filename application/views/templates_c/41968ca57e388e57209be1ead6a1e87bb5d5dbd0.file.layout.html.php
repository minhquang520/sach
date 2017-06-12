<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-06-05 11:26:21
         compiled from "D:\xampp\htdocs\sach\application\views\templates\front-side\contents\layout.html" */ ?>
<?php /*%%SmartyHeaderCode:10164593523bd1ce5a2-00775331%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '41968ca57e388e57209be1ead6a1e87bb5d5dbd0' => 
    array (
      0 => 'D:\\xampp\\htdocs\\sach\\application\\views\\templates\\front-side\\contents\\layout.html',
      1 => 1496654771,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10164593523bd1ce5a2-00775331',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'body' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_593523bd1fc955_14820661',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_593523bd1fc955_14820661')) {function content_593523bd1fc955_14820661($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('front-side/partials/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['body']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php echo $_smarty_tpl->getSubTemplate ('front-side/partials/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>

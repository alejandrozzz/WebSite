<?php /* Smarty version 3.1.27, created on 2017-03-03 15:08:50
         compiled from "C:\xampp\htdocs\WebSite\manager\templates\default\welcome.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2664058b978f258e759_15188016%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '40b2c30380b608b280b4f8ed7e7ce1517b9313e4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WebSite\\manager\\templates\\default\\welcome.tpl',
      1 => 1486528672,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2664058b978f258e759_15188016',
  'variables' => 
  array (
    'dashboard' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58b978f2590750_54221174',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58b978f2590750_54221174')) {
function content_58b978f2590750_54221174 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2664058b978f258e759_15188016';
?>
<div id="modx-panel-welcome-div"></div>

<div id="modx-dashboard" class="dashboard">
<?php echo $_smarty_tpl->tpl_vars['dashboard']->value;?>

</div><?php }
}
?>
<?php /* Smarty version 3.1.27, created on 2017-03-03 15:29:18
         compiled from "C:\xampp\htdocs\WebSite\manager\templates\default\element\chunk\create.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3147058b97dbe58bb04_96836015%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9025f94ce369e6e57c6889b34d068b92d4947dfb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WebSite\\manager\\templates\\default\\element\\chunk\\create.tpl',
      1 => 1486528672,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3147058b97dbe58bb04_96836015',
  'variables' => 
  array (
    'onChunkFormPrerender' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58b97dbe58dbb0_11274149',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58b97dbe58dbb0_11274149')) {
function content_58b97dbe58dbb0_11274149 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3147058b97dbe58bb04_96836015';
?>
<div id="modx-panel-chunk-div"></div>
<?php echo $_smarty_tpl->tpl_vars['onChunkFormPrerender']->value;

}
}
?>
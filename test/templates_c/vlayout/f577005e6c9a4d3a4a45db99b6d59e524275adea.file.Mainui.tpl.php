<?php /* Smarty version Smarty-3.1.7, created on 2017-04-12 22:08:22
         compiled from "/var/www/abkacolombia/includes/runtime/../../layouts/vlayout/modules/MailManager/Mainui.tpl" */ ?>
<?php /*%%SmartyHeaderCode:57520680858eea5560b3397-97035131%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f577005e6c9a4d3a4a45db99b6d59e524275adea' => 
    array (
      0 => '/var/www/abkacolombia/includes/runtime/../../layouts/vlayout/modules/MailManager/Mainui.tpl',
      1 => 1483499929,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '57520680858eea5560b3397-97035131',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MAILBOX' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_58eea5560df8f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58eea5560df8f')) {function content_58eea5560df8f($_smarty_tpl) {?>

<input type="hidden" name="refresh_timeout" id="refresh_timeout" value="<?php echo $_smarty_tpl->tpl_vars['MAILBOX']->value->refreshTimeOut();?>
"/><?php }} ?>
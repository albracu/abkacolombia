<?php /* Smarty version Smarty-3.1.7, created on 2017-04-19 14:40:32
         compiled from "/var/www/abkacolombia/includes/runtime/../../layouts/vlayout/modules/Settings/Workflows/Step3.tpl" */ ?>
<?php /*%%SmartyHeaderCode:85630218958f776e0d755f7-97489626%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '922cacb8ffeffe2eb8bb25033f3508f163c58c1f' => 
    array (
      0 => '/var/www/abkacolombia/includes/runtime/../../layouts/vlayout/modules/Settings/Workflows/Step3.tpl',
      1 => 1468488064,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '85630218958f776e0d755f7-97489626',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'RECORD' => 0,
    'QUALIFIED_MODULE' => 0,
    'TASK_TYPES' => 0,
    'TASK_TYPE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_58f776e0e09d0',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f776e0e09d0')) {function content_58f776e0e09d0($_smarty_tpl) {?>
<form name="EditWorkflow" action="index.php" method="post" id="workflow_step3" class="form-horizontal"><input type="hidden" name="module" value="Workflows" /><input type="hidden" name="record" value="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value;?>
" /><input type="hidden" class="step" value="3" /><div class="btn-group"><a class="btn dropdown-toggle addButton" data-toggle="dropdown" href="#"><strong><?php echo vtranslate('LBL_ADD_TASK',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong>&nbsp;<span><img class="imageElement" src="<?php echo vimage_path('downArrowWhite.png');?>
" /></span></a><ul class="dropdown-menu"><?php  $_smarty_tpl->tpl_vars['TASK_TYPE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['TASK_TYPE']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['TASK_TYPES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['TASK_TYPE']->key => $_smarty_tpl->tpl_vars['TASK_TYPE']->value){
$_smarty_tpl->tpl_vars['TASK_TYPE']->_loop = true;
?><li><a class="cursorPointer" data-url="<?php echo $_smarty_tpl->tpl_vars['TASK_TYPE']->value->getEditViewUrl();?>
&for_workflow=<?php echo $_smarty_tpl->tpl_vars['RECORD']->value;?>
"><?php echo vtranslate($_smarty_tpl->tpl_vars['TASK_TYPE']->value->get('label'),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a></li><?php } ?></ul></div><div id="taskListContainer"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('TasksList.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><br><div class="pull-right"><button class="btn btn-danger backStep" type="button"><strong><?php echo vtranslate('LBL_BACK',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button>&nbsp;&nbsp;<button class="btn btn-success" type="button" onclick="javascript:window.history.back();"><strong><?php echo vtranslate('LBL_FINISH',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button></div><div class="clearfix"></div></form><?php }} ?>
<?php /* Smarty version Smarty-3.1.7, created on 2017-04-20 12:33:36
         compiled from "/var/www/abkacolombia/includes/runtime/../../layouts/vlayout/modules/Events/uitypes/Multireference.tpl" */ ?>
<?php /*%%SmartyHeaderCode:209176202758f8aaa064f9e1-67187730%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '506f9e2abb95c43a6ae96c18fb1294cb438ef9da' => 
    array (
      0 => '/var/www/abkacolombia/includes/runtime/../../layouts/vlayout/modules/Events/uitypes/Multireference.tpl',
      1 => 1468488064,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '209176202758f8aaa064f9e1-67187730',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'FIELD_MODEL' => 0,
    'REFERENCE_LIST' => 0,
    'REFERENCE_LIST_COUNT' => 0,
    'DISPLAYID' => 0,
    'REFERENCED_MODULE_STRUCT' => 0,
    'REFERENCED_MODULE_NAME' => 0,
    'FIELD_NAME' => 0,
    'FIELD_INFO' => 0,
    'SPECIAL_VALIDATOR' => 0,
    'MODULE' => 0,
    'VIEW_NAME' => 0,
    'displayId' => 0,
    'RELATED_CONTACTS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_58f8aaa06c52b',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f8aaa06c52b')) {function content_58f8aaa06c52b($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars['FIELD_NAME'] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('name'), null, 0);?><?php $_smarty_tpl->tpl_vars["REFERENCE_LIST"] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getReferenceList(), null, 0);?><?php $_smarty_tpl->tpl_vars["REFERENCE_LIST_COUNT"] = new Smarty_variable(count($_smarty_tpl->tpl_vars['REFERENCE_LIST']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["FIELD_INFO"] = new Smarty_variable(Zend_Json::encode($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo()), null, 0);?><?php $_smarty_tpl->tpl_vars["SPECIAL_VALIDATOR"] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getValidator(), null, 0);?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['REFERENCE_LIST_COUNT']->value;?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1==1){?><input name="popupReferenceModule" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['REFERENCE_LIST']->value[0];?>
" /><?php }?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['REFERENCE_LIST_COUNT']->value;?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2>1){?><?php $_smarty_tpl->tpl_vars["DISPLAYID"] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'), null, 0);?><?php $_smarty_tpl->tpl_vars["REFERENCED_MODULE_STRUCT"] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUITypeModel()->getReferenceModule($_smarty_tpl->tpl_vars['DISPLAYID']->value), null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['REFERENCED_MODULE_STRUCT']->value)){?><?php $_smarty_tpl->tpl_vars["REFERENCED_MODULE_NAME"] = new Smarty_variable($_smarty_tpl->tpl_vars['REFERENCED_MODULE_STRUCT']->value->get('name'), null, 0);?><?php }?><?php if (in_array($_smarty_tpl->tpl_vars['REFERENCED_MODULE_NAME']->value,$_smarty_tpl->tpl_vars['REFERENCE_LIST']->value)){?><input name="popupReferenceModule" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['REFERENCED_MODULE_NAME']->value;?>
" /><?php }else{ ?><input name="popupReferenceModule" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['REFERENCE_LIST']->value[0];?>
" /><?php }?><?php }?><input name="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue');?>
" class="sourceField" data-displayvalue='<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getEditViewDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'));?>
' data-fieldinfo='<?php echo $_smarty_tpl->tpl_vars['FIELD_INFO']->value;?>
' data-multiple='true' data-validation-engine="validate[<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory()==true){?> required,<?php }?>funcCall[Vtiger_Base_Validator_Js.invokeValidation]]" <?php if (!empty($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value)){?>data-validator=<?php echo Zend_Json::encode($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value);?>
<?php }?>><?php $_smarty_tpl->tpl_vars["displayId"] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'), null, 0);?><div class="row-fluid input-prepend input-append"><span class="add-on clearReferenceSelection cursorPointer"><i class='icon-remove-sign' title="<?php echo vtranslate('LBL_CLEAR',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"></i></span><?php ob_start();?><?php echo getPurifiedSmartyParameters('view');?>
<?php $_tmp3=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['VIEW_NAME'] = new Smarty_variable($_tmp3, null, 0);?><input id="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
_display" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
_display" type="text" class="<?php if ($_smarty_tpl->tpl_vars['VIEW_NAME']->value=='Edit'){?> span7 <?php }else{ ?> span8 <?php }?>	marginLeftZero autoComplete" <?php if (!empty($_smarty_tpl->tpl_vars['displayId']->value)){?>readonly="true"<?php }?>value="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getEditViewDisplayValue($_smarty_tpl->tpl_vars['displayId']->value);?>
" data-validation-engine="validate[<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory()==true){?> required,<?php }?>funcCall[Vtiger_Base_Validator_Js.invokeValidation]]"data-fieldinfo='<?php echo $_smarty_tpl->tpl_vars['FIELD_INFO']->value;?>
' placeholder="<?php echo vtranslate('LBL_TYPE_SEARCH',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"<?php if (!empty($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value)){?>data-validator='<?php echo Zend_Json::encode($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value);?>
'<?php }?>/><span class="add-on relatedPopup cursorPointer"><i class="icon-search relatedPopup" title="<?php echo vtranslate('LBL_SELECT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" ></i></span><!-- Show the add button only if it is edit view  --><?php if ($_smarty_tpl->tpl_vars['VIEW_NAME']->value=='Edit'){?><span class="add-on cursorPointer createReferenceRecord"><i class='icon-plus' title="<?php echo vtranslate('LBL_CREATE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"></i></span><?php }?><input type="hidden" name="relatedContactInfo" data-value='<?php echo ZEND_JSON::encode($_smarty_tpl->tpl_vars['RELATED_CONTACTS']->value);?>
' /></div>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.7, created on 2017-04-19 14:40:38
         compiled from "/var/www/abkacolombia/includes/runtime/../../layouts/vlayout/modules/Settings/Workflows/LineItemsIndividualTemplate.tpl" */ ?>
<?php /*%%SmartyHeaderCode:58020466458f776e6c39685-68731328%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4fe08a74ae7f2a00fc686bf871f461f2034e59ec' => 
    array (
      0 => '/var/www/abkacolombia/includes/runtime/../../layouts/vlayout/modules/Settings/Workflows/LineItemsIndividualTemplate.tpl',
      1 => 1468488064,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '58020466458f776e6c39685-68731328',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_58f776e6c4dfb',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f776e6c4dfb')) {function content_58f776e6c4dfb($_smarty_tpl) {?>

<div class="template-contents"><table border=1 style="font-size:11px; width:100%; table-layout: fixed; border-collapse: collapse;"><thead><tr bgcolor=#c0c0c0><td style="text-align: center"><strong>Item Code</strong></td><td style="text-align: center"><strong>Item Name</strong></td><td style="text-align: center"><strong>Quantity</strong></td><td style="text-align: center"><strong>List Price</strong></td><td style="text-align: center"><strong>Item Total</strong></td><td style="text-align: center"><strong>Discount</strong></td><td style="text-align: center"><strong>Total After Discount</strong></td><td style="text-align: center"><strong>Tax</strong></td><td style="text-align: center"><strong>Total</strong></td></tr></thead><tbody><!-- foreach item=LINEITEM from=$RECORD.LINEITEMS --><tr><td align=right style="text-align: center; vertical-align : top; word-wrap: break-word;"> {$LINEITEM.hdnProductcode} </td><td align=right style="text-align: center; vertical-align : top; word-wrap: break-word;"> {$LINEITEM.productName} </td><td align=right style="text-align: right; vertical-align : top; word-wrap: break-word;"> {$LINEITEM.quantity} </td><td align=right style="text-align: right; vertical-align : top; word-wrap: break-word;"> {$LINEITEM.listprice} </td><td align=right style="text-align: right; vertical-align : top; word-wrap: break-word;"> {$LINEITEM.productTotal} </td><td align=right style="text-align: right; vertical-align : top; word-wrap: break-word;">{$LINEITEM.discount_amount}&nbsp;&nbsp;({$LINEITEM.discount_percent} %)</td><td align=left style="text-align: right; vertical-align : top; word-wrap: break-word;"> {$LINEITEM.totalAfterDiscount} </td><td align=right style="text-align: right; vertical-align : top; word-wrap: break-word;"> {$LINEITEM.taxTotal} &nbsp; &nbsp;({$LINEITEM.item_tax_totalpercent} %)</td><td align=right style="text-align: right; vertical-align : top; word-wrap: break-word;"> {$LINEITEM.netPrice} </td></tr><!-- /foreach --><tr><td colspan=8 style="word-wrap: break-word; text-align: right;">Items Total</td><td style="text-align: right; word-wrap: break-word;"> {$RECORD.hdnSubTotal} </td></tr><tr><td colspan=8 style="word-wrap: break-word; text-align: right;">Discount({$RECORD.discount_percentage_final}%)</td><td style="text-align: right; word-wrap: break-word;">{$RECORD.discountTotal_final}</td></tr><tr><td colspan=8 style="word-wrap: break-word; text-align: right;">Shipping & Handling Charges</td><td style="text-align: right; word-wrap: break-word;">{$RECORD.hdnS_H_Amount}</td></tr><tr><td colspan=8 style="word-wrap: break-word; text-align: right;">Pre Tax Total</td><td style="text-align: right; word-wrap:  break-word;">{$RECORD.pre_tax_total}</td></tr><tr><td colspan=8 style="word-wrap: break-word; text-align: right;">Shipping &amp Handling Tax total amount({$RECORD.shtax_totalpercent} %)</td><td style="text-align: right; word-wrap: break-word;">{$RECORD.shtax_totalamount}</td></tr><tr><td colspan=8 style="word-wrap: break-word; text-align: right;">Adjustment</td><td style="text-align:right; word-wrap: break-word;">{$RECORD.txtAdjustment}</td></tr><tr><td colspan=8 style="word-wrap: break-word; text-align: right;"><span style="font-weight: bold">GRAND TOTAL</span><strong style=" word-wrap: break-word;">({$RECORD.currency_symbol})</strong></td><td style="text-align: right; word-wrap: break-word;"><strong style=" word-wrap: break-word;">{$RECORD.hdnGrandTotal}</strong></td></tr></tbody></table></div>               <?php }} ?>
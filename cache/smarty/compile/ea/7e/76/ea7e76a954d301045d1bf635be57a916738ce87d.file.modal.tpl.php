<?php /* Smarty version Smarty-3.1.19, created on 2015-10-15 10:39:47
         compiled from "C:\xampp\htdocs\mangwale\admin576kcccid\themes\default\template\helpers\modules_list\modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24307561f4a3369b790-09363390%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ea7e76a954d301045d1bf635be57a916738ce87d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mangwale\\admin576kcccid\\themes\\default\\template\\helpers\\modules_list\\modal.tpl',
      1 => 1440044010,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24307561f4a3369b790-09363390',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_561f4a336a1f80_14025740',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561f4a336a1f80_14025740')) {function content_561f4a336a1f80_14025740($_smarty_tpl) {?><div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules and Services'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div>
<?php }} ?>

<?php /* Smarty version Smarty-3.1.18, created on 2016-10-14 12:06:31
         compiled from "views\schema.tpl" */ ?>
<?php /*%%SmartyHeaderCode:580357fe332746c843-14505203%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b295056efdd3a7f56de855f3a4990e7bb88eb837' => 
    array (
      0 => 'views\\schema.tpl',
      1 => 1476439586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '580357fe332746c843-14505203',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57fe3327495481_88701022',
  'variables' => 
  array (
    'scheduleContent' => 0,
    'oneItoneItemSchedule' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57fe3327495481_88701022')) {function content_57fe3327495481_88701022($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'D:\\wamp64\\www\\MyBand\\libs\\plugins\\modifier.truncate.php';
if (!is_callable('smarty_modifier_date_format')) include 'D:\\wamp64\\www\\MyBand\\libs\\plugins\\modifier.date_format.php';
?><section>
    <article>
        <p>Schema</p>
    </article>
</section>

<section>
    <article>
    <?php  $_smarty_tpl->tpl_vars['oneItoneItemSchedule'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItoneItemSchedule']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['scheduleContent']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItoneItemSchedule']->key => $_smarty_tpl->tpl_vars['oneItoneItemSchedule']->value) {
$_smarty_tpl->tpl_vars['oneItoneItemSchedule']->_loop = true;
?>
        <h1><?php echo $_smarty_tpl->tpl_vars['oneItoneItemSchedule']->value['title'];?>
</h1>
        <content><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['oneItoneItemSchedule']->value['content'],30);?>
</content>
        <p><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['oneItoneItemSchedule']->value['date'],"%e, %B. %Y");?>
</p>
    <?php } ?>
    </article>
</section><?php }} ?>

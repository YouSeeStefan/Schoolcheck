<?php /* Smarty version Smarty-3.1.18, created on 2016-10-28 13:25:33
         compiled from "views\schedule.tpl" */ ?>
<?php /*%%SmartyHeaderCode:233205800b289efdb54-47848288%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf227cc755f521d4c98dba568e67d21f89d31ff5' => 
    array (
      0 => 'views\\schedule.tpl',
      1 => 1477643481,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '233205800b289efdb54-47848288',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5800b28a01b0a4_49795364',
  'variables' => 
  array (
    'scheduleContent' => 0,
    'oneItoneItemSchedule' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5800b28a01b0a4_49795364')) {function content_5800b28a01b0a4_49795364($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\wamp64\\www\\MyBand\\libs\\plugins\\modifier.date_format.php';
?><div class="article">
    <section><?php  $_smarty_tpl->tpl_vars['oneItoneItemSchedule'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItoneItemSchedule']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['scheduleContent']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItoneItemSchedule']->key => $_smarty_tpl->tpl_vars['oneItoneItemSchedule']->value) {
$_smarty_tpl->tpl_vars['oneItoneItemSchedule']->_loop = true;
?>
        <article>
        <div class="content"><br>
            <b class="day_size"><?php echo $_smarty_tpl->tpl_vars['oneItoneItemSchedule']->value['title'];?>
</b><br>
            <a class="date_size"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['oneItoneItemSchedule']->value['date'],"%e, %B. %Y");?>
</a>
            <p><content><?php echo $_smarty_tpl->tpl_vars['oneItoneItemSchedule']->value['content'];?>
</content></p>
        </div><br>
        </article><?php } ?>
    </section>
</div><?php }} ?>

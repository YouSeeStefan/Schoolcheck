<?php /* Smarty version Smarty-3.1.18, created on 2016-12-09 11:39:14
         compiled from "views\edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9822584135ae404638-14807827%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a2f77791ce204354e8b110a5ce8212db9cb8288' => 
    array (
      0 => 'views\\edit.tpl',
      1 => 1481279952,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9822584135ae404638-14807827',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_584135ae405507_85961169',
  'variables' => 
  array (
    'result' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_584135ae405507_85961169')) {function content_584135ae405507_85961169($_smarty_tpl) {?><div class="article">
    <section class="section-boven">
        <article>
            <div class="content"><br>

      <form  method="POST">
         <input type="text" name="name" id="name" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['name'];?>
">
<!--          <input type="text" name="streetname" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['streetname'];?>
"> -->
         <input type="text" name="name" id="name" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['streetname'];?>
">
         <input type="text" name="name" id="name" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['streetnumber'];?>
">
         <input type="text" name="name" id="name" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['zipcode'];?>
">
         <input type="text" name="name" id="name" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['district'];?>
">
         <input type="text" name="name" id="name" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['telnr'];?>
">
         <input type="text" name="name" id="name" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['email'];?>
">
         <input type="text" name="name" id="name" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['website'];?>
">
         <input type="text" name="name" id="name" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['openday'];?>
">
         <input type="text" name="name" id="name" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['infonight'];?>
">
         <input type="text" name="name" id="name" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['openclass'];?>
">
         <input type="text" name="name" id="name" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['concept'];?>
">
         <input type="submit" name="submit_update"><br><br>
      </form>

         </div>
      </article>
   </section>
</div><?php }} ?>

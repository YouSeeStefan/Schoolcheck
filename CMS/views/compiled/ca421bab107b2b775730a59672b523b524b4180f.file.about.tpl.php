<?php /* Smarty version Smarty-3.1.18, created on 2016-12-02 08:47:03
         compiled from "views\about.tpl" */ ?>
<?php /*%%SmartyHeaderCode:478557f4ffd0d54ba5-11222784%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca421bab107b2b775730a59672b523b524b4180f' => 
    array (
      0 => 'views\\about.tpl',
      1 => 1478177318,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '478557f4ffd0d54ba5-11222784',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57f4ffd0ddcb50_82653394',
  'variables' => 
  array (
    'aboutContent' => 0,
    'oneItemAbout' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57f4ffd0ddcb50_82653394')) {function content_57f4ffd0ddcb50_82653394($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\wamp64\\www\\CMS\\libs\\plugins\\modifier.date_format.php';
?><div class="article">
    <section>
        <article>
        <div class="content"><br>
            <?php  $_smarty_tpl->tpl_vars['oneItemAbout'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItemAbout']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aboutContent']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItemAbout']->key => $_smarty_tpl->tpl_vars['oneItemAbout']->value) {
$_smarty_tpl->tpl_vars['oneItemAbout']->_loop = true;
?>
                <b style="font-size: 22px;"><?php echo $_smarty_tpl->tpl_vars['oneItemAbout']->value['title'];?>
</b><br>
                <a class="date_size"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['oneItemAbout']->value['date'],"%e, %B. %Y");?>
</a><br><br>
                <div id="trainers">
                    <img class="img-trainer top" src="img/<?php echo $_smarty_tpl->tpl_vars['oneItemAbout']->value['image'];?>
" alt="">
                    <img class="img-trainer top" src="img/<?php echo $_smarty_tpl->tpl_vars['oneItemAbout']->value['image_2'];?>
" alt="">
                    <img class="img-trainer top" src="img/<?php echo $_smarty_tpl->tpl_vars['oneItemAbout']->value['image_3'];?>
" alt="">
                </div>
                <br><br>
                <content><?php echo $_smarty_tpl->tpl_vars['oneItemAbout']->value['content'];?>
</content><br><br>
                <content class="content_bold"><?php echo $_smarty_tpl->tpl_vars['oneItemAbout']->value['content_2'];?>
</content><br>
                <content><?php echo $_smarty_tpl->tpl_vars['oneItemAbout']->value['content_3'];?>
</content><br>
                <content class="content_bold"><?php echo $_smarty_tpl->tpl_vars['oneItemAbout']->value['content_4'];?>
</content>
                <p><?php echo $_smarty_tpl->tpl_vars['oneItemAbout']->value['content_5'];?>
</p>
            <?php } ?><br>
        </div>
        </article>
    </section>
</div>
<?php }} ?>

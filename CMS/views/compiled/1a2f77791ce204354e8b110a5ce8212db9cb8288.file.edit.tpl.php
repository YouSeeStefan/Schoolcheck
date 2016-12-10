<?php /* Smarty version Smarty-3.1.18, created on 2016-12-10 12:38:20
         compiled from "views\edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9822584135ae404638-14807827%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a2f77791ce204354e8b110a5ce8212db9cb8288' => 
    array (
      0 => 'views\\edit.tpl',
      1 => 1481369895,
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
         <label for="name">School:</label>
         <input type="text" name="name" id="name" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['name'];?>
">
<!--          <input type="text" name="streetname" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['streetname'];?>
"> -->
         <label for="streetname">Streetname:</label>
         <input type="text" name="streetname" id="streetname" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['streetname'];?>
">

         <label for="streetnumber">Streetnumber:</label>
         <input type="text" name="streetnumber" id="streetnumber" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['streetnumber'];?>
">

         <label for="zipcode">Zipcode:</label>
         <input type="text" name="zipcode" id="zipcode" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['zipcode'];?>
">

         <label for="district">District:</label>
         <input type="text" name="district" id="district" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['district'];?>
">

         <label for="telnr">Telnr:</label>
         <input type="text" name="telnr" id="telnr" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['telnr'];?>
">

         <label for="email">Email:</label>
         <input type="text" name="email" id="email" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['email'];?>
">

         <label for="website">Website:</label>
         <input type="text" name="website" id="website" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['website'];?>
">

         <label for="openday">Openday:</label>
         <input type="text" name="openday" id="openday" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['openday'];?>
">

         <label for="infonight">Infonight:</label>
         <input type="text" name="infonight" id="infonight" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['infonight'];?>
">

         <label for="openclass">Openclass:</label>
         <input type="text" name="openclass" id="openclass" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['openclass'];?>
">

         <label for="concept">Concept:</label>
         <input type="text" name="concept" id="concept" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['concept'];?>
">
         <input type="submit" name="submit_update"><br><br>
      </form>

         </div>
      </article>
   </section>
</div><?php }} ?>

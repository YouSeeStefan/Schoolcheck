<?php /* Smarty version Smarty-3.1.18, created on 2016-12-09 10:53:23
         compiled from "views\cms_show.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2327158356ab64580a8-36261920%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cab15a3e175bcabfae184e3e5bdcdb4b96c17c4f' => 
    array (
      0 => 'views\\cms_show.tpl',
      1 => 1481277189,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2327158356ab64580a8-36261920',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_58356ab64b5e12_38443636',
  'variables' => 
  array (
    'result' => 0,
    'oneItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58356ab64b5e12_38443636')) {function content_58356ab64b5e12_38443636($_smarty_tpl) {?>
<div class="article">
    <section class="section-boven">
        <article>
            <div class="content"><br>

<!-- <a class="new" href="?action=admin&cms_action=insert">New</a><br><br> -->
<button class="newButton" onclick="window.location.href='?action=admin&cms_action=insert'">New</button><br><br>

<table>
<tr>
        	<th>ID</th>
        	<th>School</th>
        	<th>Straat naam</th>
        	<th>Straat nummer</th>
        	<th>Postcode</th>
        	<th>District</th>
        	<th>Telefoon nummer</th>
        	<th>Email</th>
        	<th>Website</th>
        	<th>Opendag</th>
        	<th>Info avond</th>
        	<th>Open klas</th>
        	<th>Concept</th>
        	<th>Edit</th>
        	<th>Delete</th>
        </tr>
    <?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>

        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['id'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['name'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['streetname'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['streetnumber'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['zipcode'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['district'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['telnr'];?>
</td>
            <td><a href="mailto:<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['email'];?>
">E-mail</a></td>
            <td><a href="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['website'];?>
" target="_blank">Website</a></td>
            <td><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['openday'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['infonight'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['openclass'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['concept'];?>
</td>
            <td><a href="?action=admin&cms_action=edit&id=<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['id'];?>
">edit</a></td>
            <td><a class="delete" href="?action=admin&cms_action=delete&id=<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['id'];?>
">delete</a></td>

        </tr>

    <?php } ?>
</table><br>
</div>
</section>
</div><?php }} ?>

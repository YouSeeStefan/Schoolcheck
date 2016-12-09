<?php /* Smarty version Smarty-3.1.18, created on 2016-12-09 10:08:31
         compiled from "views\new.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13906583e86c724b786-60708223%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e06972db77fc8d4da17b27ecbb6439e09190ac36' => 
    array (
      0 => 'views\\new.tpl',
      1 => 1481274276,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13906583e86c724b786-60708223',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_583e86c729be33_28318178',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583e86c729be33_28318178')) {function content_583e86c729be33_28318178($_smarty_tpl) {?><div class="article">
    <section>
        <article>
            <div class="content"><br>
<form action="model/new_item.php" method="post">
	<p>
    	<label for="name">School:</label>
        <input type="text" name="name" id="name">
    </p>
    <p>
    	<label for="streetname">Straat naam:</label>
        <input type="text" name="streetname" id="streetname">
    </p>
    <p>
    	<label for="streetnumber">Straat nummer:</label>
        <input type="text" name="streetnumber" id="streetnumber">
    </p>

    <p>
        <label for="zipcode">Postcode:</label>
        <input type="text" name="zipcode" id="zipcode">
    </p>
    <p>
        <label for="district">District:</label>
        <input type="text" name="district" id="district">
    </p>
    <p>
        <label for="telnr">Telefoon nummer:</label>
        <input type="text" name="telnr" id="telnr">
    </p>
    <p>
        <label for="email">Email:</label>
        <input type="text" name="email" id="email">
    </p>
    <p>
        <label for="website">Website:</label>
        <input type="text" name="website" id="website">
    </p>
    <p>
        <label for="openday">Opendag:</label>
        <input type="text" name="openday" id="openday">
    </p>
        <label for="infonight">Info avond:</label>
        <input type="text" name="infonight" id="infonight">
    </p>
    <p>
        <label for="openclass">Open klas:</label>
        <input type="text" name="openclass" id="openclass">
    </p>
    <p>
        <label for="concept">Concept:</label>
        <input type="text" name="concept" id="concept">
    </p>
    <input type="submit" value="Add Records">
</form><br>
</div>
</section>
</div><?php }} ?>

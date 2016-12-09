
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
    {foreach from=$result item=oneItem}

        <tr>
            <td>{$oneItem.id}</td>
            <td>{$oneItem.name}</td>
            <td>{$oneItem.streetname}</td>
            <td>{$oneItem.streetnumber}</td>
            <td>{$oneItem.zipcode}</td>
            <td>{$oneItem.district}</td>
            <td>{$oneItem.telnr}</td>
            <td><a href="mailto:{$oneItem.email}">E-mail</a></td>
            <td><a href="{$oneItem.website}" target="_blank">Website</a></td>
            <td>{$oneItem.openday}</td>
            <td>{$oneItem.infonight}</td>
            <td>{$oneItem.openclass}</td>
            <td>{$oneItem.concept}</td>
            <td><a href="?action=admin&cms_action=edit&id={$oneItem.id}">edit</a></td>
            <td><a class="delete" href="?action=admin&cms_action=delete&id={$oneItem.id}">delete</a></td>

        </tr>

    {/foreach}
</table><br>
</div>
</section>
</div>
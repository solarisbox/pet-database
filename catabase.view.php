<html>
<head>
<style>
td, tr, table
{
  border: 1px solid black;
  padding: 5px;
}
</style>
</head>
<body>
<h1>'Cat'abase CRUD Web App</h1>

<form id='catForm' method="post" action="<?= $TPL['controller']?>?act=create">

<fieldset width="400x">
<legend>Create New Cat</legend>

  <strong>Name:</strong> <br>
  <input name="name" type="text" id="name" size="40" required class='field' /> <br>

  <strong>Breed:</strong> <br>
  <input name="breed" type="text" id="breed" size="40" required class='field' /> <br>

  <strong>Owner:</strong> <br>
  <input name="owner" type="text" id="owner" size="40" required class='field' /> <br>

  <strong>Image URL:</strong> <br>
  <input name="imageurl" type="text" id="image" size="120" required class='field' /> <br>

  <input type="submit">
</fieldset>
</form>

<table>
<tr>
  <td><strong>ID</strong></td>
  <td><strong>Name</strong></td>
  <td><strong>Breed</strong></td>
  <td><strong>Owner</strong></td>
  <td><strong>Image</strong></td>
  <td><strong>Delete</strong></td>
  <td><strong>Send to cat farm</strong></td>
</tr>


<? foreach ($TPL['results'] as $row) { ?>
<tr>
   <td><?=$row['id']?></td>
   <td><?=$row['name']?></td>
   <td><?=$row['breed']?></td>
   <td><?=$row['owner']?></td>
   <td>[<a href="<?=$row['imageurl']?>" target="_blank">Img</a>]</td>
   <td><a href="<?=$TPL['controller']?>?act=delete&id=<?=$row['id']?>"><img src="http://www.iconexperience.com/_img/i_collection_png/512x512/plain/garbage_can.png" width="50" height="50"></a></td>
   <td><a href="<?=$TPL['controller']?>?act=update&id=<?=$row['id']?>">Send to cat farm</a>
</tr>
<? } ?>
</table>
</body>
</html>
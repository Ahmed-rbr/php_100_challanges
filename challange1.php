
<?php
$name='';
if($_SERVER['REQUEST_METHOD']==='POST' && isset($_POST['sub'])){
 
$name=$_POST['name'];

}
?>


<form method="post" >
  <input type="text" name="name" placeholder="enter name">
  <input name="sub" type="submit">
</form>
<h2>your name is <?= $name ?? "" ?></h2>

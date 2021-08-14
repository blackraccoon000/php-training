<?php echo __FILE__; ?>
<h1>LoginPageです</h1>

<form action="<?php echo CURRENT_URI; ?>" method="post" >
<div>
  <label>id:</label><input id="userId" type="text" name="id">
</div>
<div>
  <label>pwd:</label><input id="password" type="password" name="pwd">
</div>
<div>
  <input type="submit" value="SignIn">
</div>
</form>

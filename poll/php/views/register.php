<?php echo __FILE__; ?>
  <h1>RegisterPageです</h1>

<form action="<?php echo CURRENT_URI; ?>" method="post" >
  <div>
    <label>id:</label><input id="userId" type="text" name="id">
  </div>
  <div>
    <label>pwd:</label><input id="password" type="password" name="pwd">
  </div>
  <div>
    <label>nickname:</label><input id="nickname" type="text" name="nickname">
  </div>
  <div>
    <input type="submit" value="Create">
  </div>
</form>

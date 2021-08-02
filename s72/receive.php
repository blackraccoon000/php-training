<?php
$account = $_POST['account'];
$id = $account['id'];
$name = $account['name'];
$pass = $account['password'];

echo "<div>
  <p>
    <label>
      ID:{$id}
    </label>
  </p>
  <p>
    <label>
      User:{$name}
    </label>
  </p>
  <p>
    <label>
      Pass:{$pass}
    </label>
  </p>
</div>";

?>

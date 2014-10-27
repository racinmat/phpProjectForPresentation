<?php
include_once 'header.php';
?>
<form action="register.php" method="post">
<table>
  <tr>
    <th>
      <label for="login">Zadejte jméno: </label>
    </th>
    <td>
      <input type="text" name="login" id="login" required> 
    <?php if (isset($_GET["wrongName"])) {
        echo("Jméno je povinné.");
    } ?>
    </td>
  </tr>
  <tr>
    <th>
      <label for="age">Zadejte věk: </label>
    </th>
    <td>
      <input type="number" name="age" id="age" required min="18">
    <?php if (isset($_GET["wrongAge"])) {
        echo("Musíte být plnoletý.");
    } ?>
    </td>
  </tr>
  <tr>
    <th>
      <label for="password">Zadejte heslo: </label>
    </th>
    <td>
      <input type="password" name="password" id="password" required><br/>
    </td>
  </tr>
  <tr>
    <td>
      <input type="submit" name="send" value="Zaregistrovat se">
    </td>
  </tr>
</table>
</form>
<?php
if (isset($_POST["send"])) {
    $login = $_POST["login"];
    $age = $_POST["age"];
    $password = $_POST["password"];
    if($age < 18) {
        $text = "Musíte být plnoletý.";
        header("Location: register.php?wrongAge=".true);
        die();
    } else if($login == null) {
        $text = "Jméno je povinné.";
        header("Location: register.php?wrongName=".true);
        die();
    } else {
        header("Location: registered.php?login=".$login);
        die();
    }
}
include_once 'footer.php';
?>

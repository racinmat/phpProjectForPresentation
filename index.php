<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <form action="login.php" method="post">
            Zadejte jméno: <input type="text" name="login" required> 
            <?php 
                if (isset($_GET["wrongName"])) {
                    echo("Jméno je povinné.");
                } 
            ?>
            <br/>
            Zadejte věk: <input type="number" name="age" required min="18">
            <?php 
                if (isset($_GET["wrongAge"])) {
                    echo("Musíte být plnoletý.");
                } 
            ?>
            <br/>
            Zadejte heslo: <input type="password" name="password" required><br/>
            Zadejte heslo znovu: <input type="password" name="passwordAgain" required>
            <?php 
                if (isset($_GET["wrongPassword"])) {
                    echo("Hesla se musí shodovat.");
                } 
            ?>
            <br/>
            <input type="submit" value="Zaregistrovat se">
        </form>
    </body>
</html>

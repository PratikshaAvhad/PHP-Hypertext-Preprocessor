<!DOCTYPE html>
<html>
<head>
    <title>String Matching</title>
</head>
<body>
    <h1>String Matching</h1>
    <form action="" method="post">
        <label for="str1">Enter First String:</label>
        <input type="text" id="str1" name="str1" value="<?php echo isset($_POST['str1']) ? $_POST['str1'] : ''; ?>"><br><br>
        <label for="str2">Enter Second String:</label>
        <input type="text" id="str2" name="str2" value="<?php echo isset($_POST['str2']) ? $_POST['str2'] : ''; ?>"><br><br>
        <input type="submit" value="Check">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST")
       {
            $str1 = $_POST["str1"];
            $str2 = $_POST["str2"];

            if ($str1 === $str2) {
                echo "<p>The strings are matching.</p>";
            } else {
                echo "<p>The strings are not matching.</p>";
            }
        }
    ?>
</body>
</html>

<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "news";

    try 
    {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $query = "SELECT * FROM users";
        $statements = $conn -> query($query);

        // $articles = $conn -> query("SELECT * FROM users");

        while ($article = $statements -> fetch(PDO::FETCH_OBJ))
        {
            echo $article["username"];
            echo "<br>";
        }

        // echo "Gelukt!!!";
    }
    catch (PDOException $e)
    {
        echo "Faalhaas!!!";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

</body>
</html>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>

<h2>
    1.
    <?php
    $db = new PDO("mysql:host=localhost;dbname=school", "root", "");

    $query = $db->prepare("SELECT * FROM students WHERE lastname Like "%Yamamoto%"");
    $query->execute();

    $result = $query->fetchAll(PDO::FETCH_ASSOC);

    echo $result["lastname"];
    ?>
</h2>

</body>
</html>
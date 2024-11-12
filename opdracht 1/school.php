
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>

<h3>
    1.
    <?php
    $db = new PDO("mysql:host=localhost;dbname=school", "root", "");

    $query = $db->prepare("SELECT * FROM students");
    $query->execute();

    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    foreach($result as &$data) {
   if ($data["lastname"] == "Yamamoto") {
       echo $data["firstname"] . " " .$data["lastname"];
        }
    }?>
</h3>

</body>
</html>
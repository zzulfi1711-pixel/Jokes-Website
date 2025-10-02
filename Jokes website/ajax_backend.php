<?php
require_once("db.php");

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data); 
    return $data;
}

$username = strval($_GET['q']);
// TODO 5a: Get the username field from the incoming request.

if (strlen($username) > 0) {

    // Connect to the database and verify the connection
    try {
        $db = new PDO($attr, $db_user, $db_pwd, $options);

        // Query to get the last login detail for the user
        $query = "SELECT * FROM Loggers ;";
        $result = $db->query($query);

        // Create an empty array
        $jsonArray = array();

        // TODO 5b: Loop the '$result' variable to store each row in the '$jsonArray' array.
        while($row = $result->fetchAll()){
            $jsonArray = $row;
        }
        echo $jsonArray;
        // TODO 5c: Encode the array into a JSON object and send it back to the client as a response.
        echo json_encode($jsonArray);

        // Close the database connection
        $db = null;
    } catch (PDOException $e) {
        throw new PDOException($e->getMessage(), (int)$e->getCode());
    }
}
?>

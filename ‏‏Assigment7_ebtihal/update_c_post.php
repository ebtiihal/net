<?php
require_once 'dbConn.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $var_name = $_POST['namecate'];
    $var_budget = $_POST['Budget'];
    $id = $_POST['id_cat'];

    try {
        // Create a PDO connection to the database
        $conn = new PDO("mysql:host=$hn;db=$db", $un, $pw);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Prepare an UPDATE statement for the appropriate table based on the category ID
        $stmt = $conn->prepare("UPDATE categorys SET namecate=:namecate, Budget=:Budget WHERE id_cat=:id_cat");

        $stmt->bindParam(':namecate', $var_name);
        $stmt->bindParam(':Budget', $var_budget);
        $stmt->bindParam(':id_cat', $id);

        $stmt->execute();

        // Redirect to the display page
        header("Location: displaycate.php");
        exit;
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    // Close the database connection
    $conn = null;
} else {
    // Check if an ID has been passed as a GET parameter
    if (isset($_GET['id_cat'])) {
        // Get the ID and retrieve the data for that record from the database
        $id = $_GET['id_cat'];

        try {
            // Create a PDO connection to the database
            $conn = new PDO("mysql:host=$hn;db=$db", $un, $pw);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Prepare a SELECT statement for the appropriate table based on the category ID
            $stmt = $conn->prepare("SELECT * FROM categorys WHERE id_cat=:id_cat");

            // Bind parameters to the statement and execute it
            $stmt->bindParam(':id_cat', $id);
            $stmt->execute();

            // Fetch the data for the record
            $row = $stmt->fetch();
        } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }

        // Close the database connection
        $conn = null;
    } else {
        // Redirect to the add category page if no ID has been passed
        header("Location: addcategory.php");
        exit;
    }
}
?>

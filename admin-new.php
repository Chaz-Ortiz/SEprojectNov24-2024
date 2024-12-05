<?php
session_start();
include("functions.php");

if (!isset($_POST['submit'])) {
    // Display the form
    echo '<form action="" method="post">
            <label for="firstName">Performer Name:</label>
            <input type="text" name="firstName" id="firstName" placeholder="Name">
            
            <label for="lastName">Date:</label>
            <input type="text" name="lastName" id="lastName" placeholder="Date">
            
            <button name="submit" value="SUBMIT" type="submit">Submit</button>
          </form>';
} else {
    // Handle form submission
    $fnamerr = '';
    $firstname = addslashes($_POST['firstName']);
    $lastname = addslashes($_POST['lastName']);

    // Validate the first name
    if ($firstname == NULL) {
        $fnamerr = "NULL";
    } elseif (strlen($firstname) < 3) {
        $fnamerr = "invalidSize";
        $_SESSION['firstname'] = $firstname;
    } elseif (!preg_match('/^[a-zA-Z\'-]{2,}$/', $firstname)) {
        $fnamerr = "invalidChar";
        $_SESSION['firstname'] = $firstname;
    }

    if ($fnamerr != NULL) {
        // Redirect with error messages
        header("Location: contact-new3.php?fnamerr=$fnamerr");
        exit();
    }

    // Insert into database if no errors
    $dblink = db_connect("contact_data");
    $sql = "INSERT INTO `form_data` (`first_name`, `last_name`) VALUES ('$firstname', '$lastname')";

    if ($dblink->query($sql)) {
        echo '<h1>Data successfully entered into the database!</h1>';
    } else {
        die("<p>Something went wrong with:<br>$sql<br>" . $dblink->error . "</p>");
    }
}
?>

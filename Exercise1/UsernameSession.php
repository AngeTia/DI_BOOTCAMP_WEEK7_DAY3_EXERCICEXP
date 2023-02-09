<?php
// Start the session
session_start();

// Set the username session variable if it's not already set
if (!isset($_SESSION['username'])) {
    $_SESSION['username'] = '';
}

// Check if the form has been submitted
if (isset($_POST['submit'])) {
    // Update the username session variable
    $_SESSION['username'] = $_POST['username'];
}

// Check if the username session variable is set
if (!empty($_SESSION['username'])) {
    // Display the welcome message
    echo 'Welcome back, ' . $_SESSION['username'] . '!';
} else {
    // Display the form
    ?>
    <form action="" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username">
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
}

// Check if the logout button has been clicked
if (isset($_POST['logout'])) {
    // End the session and clear the username session variable
    session_destroy();
    $_SESSION['username'] = '';
}

// Display the logout button
?>
<form action="" method="post">
    <input type="submit" name="logout" value="Logout">
</form>
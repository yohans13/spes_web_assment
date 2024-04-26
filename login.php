  
<?php
session_start();
require_once 'db_connection.php';

$user_code = $_POST['user_code'];
$password = $_POST['password'];

// Check if $conn is not null before attempting to prepare a statement.
if ($conn === null) {
    die("Error connecting to database.");
}

// Check if the SQL statement is valid before attempting to prepare it.
if ($user_code === null) {
    die("Error: The user code is null.");
}

$sql = "SELECT * FROM employee WHERE user_code = ?";
$stmt = $conn->prepare($sql);
if ($stmt === false) {
    die("Error preparing statement: " . $conn->error);
}

// Bind the user code to the prepared statement's parameter.
if (!$stmt->bind_param("s", $user_code)) {
    die("Error binding parameter: " . $stmt->error);
}

// Execute the prepared statement.
if (!$stmt->execute()) {
    die("Error executing statement: " . $stmt->error);
}

// Get the result of the query. If the query fails, an exception will be thrown.
$result = $stmt->get_result();
if ($result === false) {
    die("Error getting result: " . $stmt->error);
}


if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['password'])) {
        $_SESSION['user_code'] = $user_code;

        echo 'success';
    } else {
        echo 'failure';
    }
} else {
    echo 'failure';
}

$stmt->close();
$conn->close();
?>

 




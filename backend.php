<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo "Please submit the form from the login page. <a href='index.html'>Go back</a>";
    exit;
}

$email = $_POST['email'];
$password = $_POST['password'];

$email = trim(string: $email);
$password = trim(string: $password);

if (empty($email) || !filter_var(value: $email, filter: FILTER_VALIDATE_EMAIL)) {
    echo "Invalid email. <a href='index.html'>Go Back</a>";
    exit;
}

if (empty($password)) {
    echo "Password required. <a href='index.html'>Go Back</a>";
    exit;
}

header(header: "Location: dashboard.html");
exit;
?>
<?php

$name = $email = $username = $password = $confirm_password = $age = $gender = $course = "";
$terms = "";
$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $username = trim($_POST["username"]);
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];
    $age = $_POST["age"];
    $gender = $_POST["gender"] ?? "";
    $course = $_POST["course"];
    $terms = isset($_POST["terms"]);

   
    if (empty($name) || empty($email) || empty($username) || empty($password) || empty($confirm_password) || empty($age) || empty($course)) {
        $errors[] = "All fields must not be empty.";
    }

    
    if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
        $errors[] = "Full Name must contain only letters and spaces.";
    }

    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }

  
    if (strlen($username) < 5) {
        $errors[] = "Username must be at least 5 characters.";
    }

    
    if (strlen($password) < 6) {
        $errors[] = "Password must be at least 6 characters.";
    }

    
    if ($password !== $confirm_password) {
        $errors[] = "Passwords do not match.";
    }

    
    if ($age < 18) {
        $errors[] = "Age must be 18 or above.";
    }

    
    if (empty($gender)) {
        $errors[] = "Gender must be selected.";
    }

    
    if ($course == "") {
        $errors[] = "Please select a course.";
    }

    
    if (!$terms) {
        $errors[] = "You must accept Terms & Conditions.";
    }
}
?>
<?php
require '../db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $first_name = $_POST['first_name'];
    $last_name  = $_POST['last_name'];
    $email      = $_POST['email'];
    $password   = $_POST['password'];
    $confirm    = $_POST['confirm_password'];

    // تحقق من تطابق كلمة المرور
    if ($password !== $confirm) {
        header("Location: KhebrahPlatformRegistration1.html?error=password_mismatch");
        exit();
    }

    // تحقق من وجود الإيميل مسبقًا
    $checkEmail = $conn->prepare("SELECT id FROM graduates WHERE email = ?");
    $checkEmail->bind_param("s", $email);
    $checkEmail->execute();
    $checkEmail->store_result();

    if ($checkEmail->num_rows > 0) {
        header("Location: KhebrahPlatformRegistration1.html?error=email_exists");
        exit();
    }

    // تشفير كلمة المرور
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // إدخال المستخدم
    $stmt = $conn->prepare("
        INSERT INTO graduates (first_name, last_name, email, password)
        VALUES (?, ?, ?, ?)
    ");
    $stmt->bind_param("ssss", $first_name, $last_name, $email, $hashedPassword);
    $stmt->execute();

    header("Location: KhebrahPlatformLogin.php?success=registered");
    exit();
}
?>

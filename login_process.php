<?php
session_start();
include "../db.php"; // تأكد من صحة المسار بناءً على هيكل ملفاتك

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: KhebrahPlatformLogin.php");
    exit;
}

// 1. استلام البيانات
$email = $_POST['email'];
$password = $_POST['password'];

// 2. محاولة البحث كـ شركة باستخدام Prepared Statements
$stmt_company = $conn->prepare("SELECT email, password, company_name FROM companies WHERE email = ?");
$stmt_company->bind_param("s", $email);
$stmt_company->execute();
$result_company = $stmt_company->get_result();

if ($result_company->num_rows === 1) {
    $user = $result_company->fetch_assoc();
    
    // التحقق من كلمة المرور المشفرة
    if (password_verify($password, $user['password'])) {
        $_SESSION['user_type'] = 'company';
        $_SESSION['company_email'] = $user['email'];
        $_SESSION['company_name'] = $user['company_name'];
        header("Location: C.Home.php");
        exit;
    }
} 

// 3. إذا لم ينجح كشركة، محاولة البحث كـ خريج
$stmt_graduate = $conn->prepare("SELECT email, password, first_name, last_name FROM graduates WHERE email = ?");
$stmt_graduate->bind_param("s", $email);
$stmt_graduate->execute();
$result_graduate = $stmt_graduate->get_result();

if ($result_graduate->num_rows === 1) {
    $user = $result_graduate->fetch_assoc();
    
    if (password_verify($password, $user['password'])) {
        $_SESSION['user_type'] = 'graduate';
        $_SESSION['graduate_email'] = $user['email'];
        $_SESSION['graduate_name'] = $user['first_name'] . ' ' . $user['last_name'];
        header("Location: G.Home.php");
        exit;
    }
}

// 4. في حال فشل تسجيل الدخول (البريد أو كلمة المرور خطأ)
header("Location: KhebrahPlatformLogin.php?error=invalid_credentials");
exit;
?>
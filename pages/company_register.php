<?php
session_start();
include "../db.php"; 

// التأكد من أن الطلب تم عبر POST وأن الحقول ليست فارغة
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['company_name'])) {
    
    $company_name = $_POST['company_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm_password'];

    // التحقق من تطابق كلمة المرور
    if ($password !== $confirm) {
        header("Location: KhebrahPlatformRegistration.html?error=password_mismatch");
        exit;
    }

    // التحقق من وجود البريد مسبقاً
    $check_sql = $conn->prepare("SELECT email FROM companies WHERE email = ?");
    $check_sql->bind_param("s", $email);
    $check_sql->execute();
    if ($check_sql->get_result()->num_rows > 0) {
        header("Location: KhebrahPlatformRegistration.html?error=email_exists");
        exit;
    }

    $hashed = password_hash($password, PASSWORD_DEFAULT);

    // عملية الإدخال الموثوقة
    $stmt = $conn->prepare("INSERT INTO companies (company_name, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $company_name, $email, $hashed);

    if ($stmt->execute()) {
        // حفظ الجلسة وتوجيه المستخدم
        $_SESSION['company_email'] = $email;
        $_SESSION['user_type'] = 'company';
        $_SESSION['company_name']  = $company_name;

        header("Location: C.Home.php");
        exit;
    } else {
        echo "خطأ أثناء الحفظ في قاعدة البيانات: " . $stmt->error;
    }
} else {
    header("Location: KhebrahPlatformRegistration.html");
}
?>

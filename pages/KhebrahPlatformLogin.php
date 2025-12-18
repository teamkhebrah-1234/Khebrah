<?php
session_start();

if (isset($_SESSION['company_email'])) {
    header("Location: C.Home.php");
    exit;
}

if (isset($_SESSION['graduate_email'])) {
    header("Location: G.Home.php");
    exit;
}
?>


<html lang="ar" dir="rtl">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>تسجيل الدخول | منصة خبرة للتعلم والتطوير المهني</title>
    <meta
      name="description"
      content="سجل دخولك إلى منصة خبرة للوصول إلى دورات التدريب المهني والتطوير الوظيفي. منصة تعليمية متقدمة باللغة العربية لتطوير المهارات والخبرات المهنية."
    />
    <meta
      name="keywords"
      content="تسجيل دخول, منصة خبرة, تعلم, تدريب مهني, تطوير وظيفي, دورات عربية"
    />

    <link rel="stylesheet" href="style.css" />
  </head>

  <body>
    <main>
      <div class="auth-layout">
        <div class="green-side">
          <div>
            <a class="logo-link">
              <img
                src="../assets/images/img_khebrah_logo_light.png"
                alt="شعار منصة خبرة"
                class="logo-image"
              />
            </a>
          </div>
          <div class="login-welcome-content">
            <h2 class="welcome-title">مرحبًا بعودتك إلى منصة خبرة</h2>
          </div>
        </div>

        <div class="white-side">
          <div class="form-header">
            <div class="title-box">
              <h1 class="login-title">تسجيل الدخول</h1>
              <div class="title-underline"></div>
            </div>
            <?php if (isset($_GET['error'])): ?>
              <p style="color: red; text-align: center;">البريد الإلكتروني أو كلمة المرور غير صحيحة.</p>
            <?php endif; ?>
          </div>

          <form
            class="form-inputs"
            id="LogeinForm"
            action="login_process.php"
            method="POST"
          >
            <input
              type="email"
              name="email"
              class="input-lg"
              placeholder="البريد الإلكتروني"
              required
              aria-label="البريد الإلكتروني"
            />

            <input
              type="password"
              name="password"
              class="input-lg"
              placeholder="كلمة المرور"
              required
              aria-label="كلمة المرور"
            />

            <button type="submit" class="login-button">تسجيل الدخول</button>

            <div class="signup-row">
              <span class="signup-text">ليس لديك حساب؟</span>
              <a class="signup-link"
                >أنشئ حسابًا جديدًا</a
              >
            </div>
          </form>
        </div>
      </div>
    </main>

    <script>
      // 1. رابط الشعار → الصفحة الرئيسية
      document.querySelector(".logo-link").addEventListener("click", function () {
          window.location.href = "KhebrahPlatformLandingPage.html";
      });

      // 2. رابط إنشاء حساب → صفحة اختيار نوع الحساب
      document.querySelector(".signup-link").addEventListener("click", function () {
          window.location.href = "KhebrahAccountSelection.html";
      });
    </script>

  </body>
</html>

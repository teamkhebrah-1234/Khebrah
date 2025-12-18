<?php
session_start();
if (!isset($_SESSION['company_email']) && !isset($_SESSION['graduate_email'])) {
    header("Location: KhebrahPlatformLogin.php");
    exit;
}
?>


<html lang="ar" dir="rtl">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
      خبرة - منصة التطوير المهني والتوظيف | اختبارات عملية بالذكاء الاصطناعي
    </title>
    <meta
      name="description"
      content="منصة خبرة تقدم اختبارات عملية ومحاكاة لمواقف العمل الحقيقية بالذكاء الاصطناعي. بناء خبرة موثقة، مسارات تعلم مخصصة، ومهام حقيقية من الشركات للحصول على فرص عمل."
    />
    <meta
      name="keywords"
      content="تطوير مهني, اختبارات عملية, ذكاء اصطناعي, توظيف, مهارات برمجة, خبرة عملية, محاكاة العمل"
    />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:title" content="خبرة - منصة التطوير المهني والتوظيف" />
    <meta
      property="og:description"
      content="منصة خبرة تقدم اختبارات عملية ومحاكاة لمواقف العمل الحقيقية بالذكاء الاصطناعي لبناء خبرة موثقة."
    />

    <script
      type="module"
      async
      src="https://static.rocket.new/rocket-web.js?_cfg=https%3A%2F%2Faiprofess3019back.builtwithrocket.new&_be=https%3A%2F%2Fapplication.rocket.new&_v=0.1.10"
    ></script>
    <script
      type="module"
      defer
      src="https://static.rocket.new/rocket-shot.js?v=0.0.1"
    ></script>
    <link rel="stylesheet" href="style.css" />
  </head>

  <body>
    <main >
      <!-- Header Section -->
      <header class="home-header">
        <div class="header-content">
          <div class="header-top">
            <img
              src="../assets/images/img_khebrah_logo_light.png"
              alt="شعار خبرة"
              class="logo-image"
            />

            <nav class="nav-section" role="navigation">
              <a href="#performance" class="home-nav-item" role="menuitem">نظرة</a>
              <a href="#learning" class="home-nav-item" role="menuitem">مسارات مخصصة</a>
              <a href="#tasks" class="home-nav-item" role="menuitem">مهام الشركات</a>
            </nav>

            <details class="dropdown">
              <summary class="dropdown-btn" id="user-name">
                <img
                  src="../assets/images/img_si_expand_more_alt_line.svg"
                  alt="Menu"
                  class="menu-icon"
                />
                أهلاً <?php echo htmlspecialchars($_SESSION['graduate_name']); ?>
              </summary>

              <div class="dropdown-menu">
                <a href="#home">الصفحة الرئيسية</a>
                <a href="#task">المهام والتقييم</a>
                <a href="#profile">الملف الشخصي</a>
                <a href="logout.php">تسجيل الخروج</a>
              </div>
            </details>

          </div>
          <div class="search-section">
            <img
              src="../assets/images/img_search.svg"
              alt="بحث"
              class="search-icon"
            />
            <span class="search-text"
              >ابحث عن المهام، الوظائف، أو المهارات التي تود تطويرها...</span
            >
          </div>
        </div>
      </header>

      <!-- Performance Overview Section -->
      <section class="section" id="performance">
        <div class="section-header">
          <h1 class="home-section-title">نظرة على أدائك</h1>
          <p class="section-description">
            نظرة سريعة على تقدمك في إكمال الملف وتقييم المهارات. تابع مسار
            التطوير الذي صُمم خصيصًا لسد فجواتك المهارية!
          </p>
        </div>

        <div class="performance-content">

            <div class="overall-performance">
              <span class="performance-label">معدل الأداء العام</span>
              <div class="performance-circle">

                <div class="progress-ring" data-percent="85">
                  <svg width="160" height="160">
                    <!-- الدائرة اللي تمثل النسبة -->
                    <circle
                      class="ring-progress"
                      cx="80"
                      cy="80"
                      r="70"
                    />
                  </svg>

                  <div class="ring-text">0%</div>
                </div>

              </div>
              <button class="report-button">عرض تقرير الأداء المفصل</button>
            </div>

            <div class="stats-row">
              <div class="stat-card">
                <div class="stat-content">
                  <img
                    src="../assets/images/img_mdi_light_arrow_up.svg"
                    alt="سهم للأعلى"
                    class="stat-icon"
                  />
                <span class="stat-label">نقاط القوة</span>
                </div>
                  <div class="stat-box">
                    <span class="stat-text">كود نظيف ومنظم</span>
                  </div>
              </div>

              <div class="stat-card">
                <div class="stat-content">
                <img
                  src="../assets/images/img_mdi_light_arrow_up_red_a700.svg"
                  alt="سهم للأسفل"
                  class="stat-icon"
                />
                  <span class="stat-label">نقاط الضعف</span>
                </div>
                  <div class="stat-box">
                    <span class="stat-text">تأخير في تسليم المهام</span>
                  </div>
              </div>
            </div>


          </div>
        </div>
      </section>

      <!-- Learning Paths Section -->
      <section class="section" id="learning">
        <div class="learning-header">
          <h2 class="home-section-title">مسارات التعلم المخصصة</h2>
          <p class="section-description">
            ابدأ الآن اختبارات عملية فورية ومحاكاة لمواقف العمل الحقيقية، مولدة
            بالذكاء الاصطناعي. نتائجك هنا هي أساس بناء محفظتك المهنية، حيث تُوثق
            مهاراتك التقنية وتُكتشف قدراتك الشخصية الخفية بدقة.
          </p>
        </div>

        <div class="home-card-row">

          <div class="card">
            <span class="card-title">مراجعة وتحسين بنية كود قديم</span>
            <span class="card-subtitle">اختبار الجودة والكود النظيف</span>
            <button class="card-button">استعراض المحاكاة</button>
          </div>

          <div class="card">
            <span class="card-title">إصلاح عطل طارئ وإعادة التخطيط</span>
            <span class="card-subtitle">محاكاة إدارة الأزمات الزمنية</span>
            <button class="card-button">استعراض المحاكاة</button>
          </div>

          <div class="card">
            <span class="card-title">تطوير ودمج ميزة جديدة بمهلة ضيقة</span>
            <span class="card-subtitle">تحدي الإنجاز تحت الضغط</span>
            <button class="card-button">استعراض المحاكاة</button>
          </div>

          <div class="card">
            <span class="card-title">تصميم واجهة مستخدم سهلة الاستخدام</span>
            <span class="card-subtitle">فهم تجربة المستخدم</span>
            <button class="card-button">استعراض المحاكاة</button>
          </div>

          <div class="card">
            <span class="card-title">اختبار أمان تطبيق ويب</span>
            <span class="card-subtitle">قياس الوعي الأمني واكتشاف الثغرات</span>
            <button class="card-button">استعراض المحاكاة</button>
          </div>
          
          <div class="show-all-card">
            <span class="show-all-text">عرض الكل</span>
          </div>
        </div>
      </section>

      <!-- Company Tasks Section -->
      <section class="section" id="tasks">
        <div class="learning-header">
          <h2 class="home-section-title">المهام المطروحة من الشركات</h2>
          <p class="section-description">
            وظائف حقيقية متاحة الآن تتطلب منك إنجاز مهمة عملية قصيرة بدلاً من
            السيرة الذاتية التقليدية. أنجز المهمة العملية المطلوبة، ونافس على
            أساس أدائك الموثق للانتقال مباشرة إلى قوائم المرشحين المؤهلين.
          </p>
        </div>

        <div class="home-card-row">

          <div class="card">
            <span class="company-name">اسم الشركة</span>
            <span class="card-title">تحسين كفاءة خوارزمية فرز البيانات (C++ / Algorithms)</span>
            <button class="card-button">استعراض المحاكاة</button>
          </div>

          <div class="card">
            <span class="company-name">اسم الشركة</span>
            <span class="card-title">بناء صفحة تسجيل دخول متقدمة ومتجاوبة (React / Redux)</span>
            <button class="card-button">استعراض المحاكاة</button>
          </div>

          <div class="card">
            <span class="company-name">اسم الشركة</span>
            <span class="card-title">تطبيق معايير التوثيق الداخلي على وحدة برمجية (JavaScript)</span>
            <button class="card-button">استعراض المحاكاة</button>
          </div>

          <div class="card">
            <span class="company-name">اسم الشركة</span>
            <span class="card-title">تطوير نظام حجز مواعيد</span>
            <button class="card-button">استعراض المحاكاة</button>
          </div>

          <div class="card">
            <span class="company-name">اسم الشركة</span>
            <span class="card-title">تطوير ميزة بحث متقدم داخل الموقع</span>
            <button class="card-button">استعراض المحاكاة</button>
          </div>

          <div class="show-all-card">
            <span class="show-all-text">عرض الكل</span>
          </div>
        </div>
      </section>

      <!-- Why Section -->
      <section class="section">
        <div class="why-container">
          <div class="why-content">

            <div class="why-right">
              <h2 class="why-title">
                لماذا تُعد اختبارات العمل بالمحاكاة بوابتك لتوثيق الخبرة
                والتوظيف؟
              </h2>
              <p class="why-description">
                نحن نقدّم للخريج فرصة لبناء خبرة افتراضية مُحاكاة بالذكاء
                الاصطناعي، وهي مصممة لتوثيق قدراتك الفعلية بدلاً من السيرة
                الذاتية التقليدية. نتائجك في هذه التحديات تُغذّي محفظتك المهنية،
                مما يجعلك مرشحًا مؤهلاً للشركات التي تطرح اختبارات خبرة حقيقية
                عبر المنصة لاستقطاب الموظفين بخبرات محددة. في "خبرة"، كل مهمة
                تُنجزها هي خطوة نحو توثيق خبرتك وعبورك إلى سوق العمل.
              </p>
            </div>
            <div class="why-left">
              <img
                src="../assets/images/img_khebrah_logo_light.png"
                alt="شعار خبرة"
                class="why-logo"
              />
              <span class="why-tagline">جسرك نحو الخبرة العملية الموثقة</span>
            </div>
          </div>
        </div>
      </section>
    </main>
  </body>

  <script>
  document.querySelectorAll('.progress-ring').forEach(ring => {
    const percent = ring.getAttribute('data-percent');
    const circle = ring.querySelector('.ring-progress');
    const text = ring.querySelector('.ring-text');

    const radius = 70;
    const circumference = 2 * Math.PI * radius;

    circle.style.strokeDasharray = circumference;
    circle.style.strokeDashoffset =
      circumference - (circumference * percent) / 100;

    text.textContent = percent + '%';
  });
</script>

</html>

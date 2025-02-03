# Teachable-Machine-Detection
Teachable Machine Detection

🚀 Teachable Machine Detection - AI-Powered Object Recognition

🔍 مشروع يعتمد على الذكاء الاصطناعي لاكتشاف الكائنات باستخدام Teachable Machine وتخزين البيانات في قاعدة بيانات MySQL!

📌 نظرة عامة

هذا المشروع يستخدم Teachable Machine من Google لإنشاء نموذج ذكاء اصطناعي يتعرف على الكائنات من خلال كاميرا الويب. عند اكتشاف كائن معين بنسبة ثقة عالية، يتم تحديث عداد التخزين في قاعدة البيانات، وعرض العدد الإجمالي للاكتشافات على صفحة الويب.

✅ الميزات الأساسية:

    تشغيل كاميرا الويب والتعرف على الكائنات في الوقت الفعلي 🎥
    تخزين عدد الاكتشافات في قاعدة بيانات MySQL 🗄️
    تحديث وعرض العداد على واجهة المستخدم 🖥️
    إمكانية إعادة تعيين العداد عند الحاجة 🔄

🛠 التقنيات المستخدمة

🔹 Frontend: HTML, CSS, JavaScript
🔹 AI Model: Teachable Machine (by Google)
🔹 Backend: PHP, MySQL
🔹 Database: MySQL (لتخزين العداد)
⚡ كيفية تشغيل المشروع محليًا؟
1️⃣ إعداد البيئة

    تأكد من تثبيت XAMPP أو MAMP لتشغيل Apache + MySQL.
    قم بإنشاء قاعدة بيانات MySQL باستخدام phpMyAdmin أو MySQL CLI.

2️⃣ إنشاء قاعدة البيانات

افتح phpMyAdmin وأنشئ قاعدة البيانات والجداول عبر هذا الكود:

CREATE DATABASE detections;
USE detections;

CREATE TABLE detection_counts (
    id INT PRIMARY KEY AUTO_INCREMENT,
    count INT NOT NULL DEFAULT 0
);

INSERT INTO detection_counts (count) VALUES (0);

3️⃣ تشغيل المشروع

    ضع الملفات داخل مجلد htdocs إذا كنت تستخدم XAMPP.
    شغل Apache و MySQL من XAMPP.
    افتح المتصفح واكتب:

    http://localhost/index.html

🏗 هيكلة المشروع

📂 Teachable-Machine-Detection/
┣ 📄 index.html → واجهة المستخدم وتشغيل النموذج.
┣ 📄 update_counter.php → تحديث عدد الاكتشافات في قاعدة البيانات.
┣ 📄 reset_counter.php → إعادة تعيين العداد.
┣ 📂 my_model/ → يحتوي على ملفات نموذج Teachable Machine (يتم إضافته بعد التدريب).
┗ 📄 README.md → شرح المشروع.
🌍 نشر المشروع على GitHub

خطوات رفع المشروع على GitHub:

    إنشاء مستودع جديد في GitHub.
    استخدام الأوامر التالية في Terminal / Git Bash:

git init
git add .
git commit -m "Initial commit - AI Detection"
git branch -M main
git remote add origin https://github.com/YOUR_USERNAME/YOUR_REPO.git
git push -u origin main

🎯 كيف يعمل المشروع؟

1️⃣ يبدأ المستخدم تشغيل الكاميرا بالضغط على زر "Start Camera".
2️⃣ يقوم النموذج بالتعرف على الكائنات وتحليلها في الوقت الفعلي.
3️⃣ إذا تم اكتشاف كائن معين بنسبة ثقة ≥ 90%، يتم تحديث قاعدة البيانات.
4️⃣ يتم إيقاف الكاميرا تلقائيًا عند وصول العداد إلى حد معين.
5️⃣ يمكن إعادة تعيين العداد بالضغط على زر "Reset Counter".
🚀 أفكار لتطوير المشروع

🔹 دعم التعرف على الصوت باستخدام Teachable Machine Audio 🎙️
🔹 إضافة Firebase لتخزين البيانات سحابيًا ☁️
🔹 إرسال إشعارات عند اكتشاف كائن معين 🔔
🔹 نشر المشروع على منصة Heroku أو GitHub Pages 🌎
🏆 جاهز لتشغيل الذكاء الاصطناعي على متصفحك؟ قم بتنزيل المشروع الآن وابدأ التجربة! 🚀✨

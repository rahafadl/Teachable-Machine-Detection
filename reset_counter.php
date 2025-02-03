<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "detections";

// إنشاء الاتصال بقاعدة البيانات
$conn = new mysqli($servername, $username, $password, $dbname);

// التحقق من الاتصال
if ($conn->connect_error) {
    die(json_encode(["error" => "Connection failed: " . $conn->connect_error]));
}

// إعادة تعيين العداد
$sql = "UPDATE detection_counts SET count = 0 WHERE id = 1";
if ($conn->query($sql) === TRUE) {
    echo json_encode(["status" => "success"]);
} else {
    echo json_encode(["error" => $conn->error]);
}

// إغلاق الاتصال
$conn->close();
?>

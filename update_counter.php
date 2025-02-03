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

// تحديث العداد في قاعدة البيانات
$sql = "UPDATE detection_counts SET count = count + 1 WHERE id = 1";
if ($conn->query($sql) === TRUE) {
    $result = $conn->query("SELECT count FROM detection_counts WHERE id = 1");
    $row = $result->fetch_assoc();
    echo json_encode(["count" => $row['count']]);
} else {
    echo json_encode(["error" => $conn->error]);
}

// إغلاق الاتصال
$conn->close();
?>

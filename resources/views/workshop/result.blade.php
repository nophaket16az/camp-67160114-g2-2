<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <title>Result</title>
</head>
<body style="font-family:Arial; background:#f7f7f7;">
  <div style="width:600px;margin:40px auto;background:#fff;padding:20px;border-radius:12px;">
    <h2>ผลลัพธ์จากการส่งฟอร์ม</h2>
    <p><b>ชื่อ:</b> {{ $fname }}</p>
    <p><b>สกุล:</b> {{ $lname }}</p>
    <p><b>วันเกิด:</b> {{ $birth }}</p>
    <p><b>อายุ:</b> {{ $age }}</p>
    <p><b>เพศ:</b> {{ $gender }}</p>
    <p><b>ที่อยู่:</b> {{ $address }}</p>
    <p><b>สีที่ชอบ:</b> {{ $color }}</p>
    <p><b>แนวเพลงที่ชอบ:</b> {{ $music }}</p>
    <p><b>ยินยอม:</b> {{ $agree }}</p>
    <p><b>ชื่อไฟล์รูป (ยังไม่อัปโหลด):</b> {{ $photo }}</p>

    <hr>
    <a href="{{ route('workshop.form') }}">← กลับหน้าแบบฟอร์ม</a>
  </div>
</body>
</html>

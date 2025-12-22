<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>Workshop HTML - FORM</title>
    <style>
        body { font-family: Arial, Helvetica, sans-serif; background: #f7f7f7; }
        .container { width: 500px; margin: 40px auto; padding: 25px; background: #ffffff; border-radius: 15px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); }
        h1 { text-align: center; font-weight: bold; color: #333; margin-bottom: 20px; }
        .form-row { margin-bottom: 12px; }
        .form-row > label { display: inline-block; width: 130px; vertical-align: top; font-weight: 600; color: #555; }
        input[type="text"], input[type="number"], input[type="date"], select, textarea { width: 300px; padding: 6px 10px; border-radius: 8px; border: 1px solid #ccc; }
        textarea { height: 120px; }
        input:focus, select:focus, textarea:focus { border-color: #66a6ff; outline: none; box-shadow: 0 0 0 3px rgba(102,166,255,0.3); }
        .buttons { margin-top: 15px; }
        .buttons input { padding: 6px 18px; border-radius: 8px; border: none; cursor: pointer; font-weight: 600; }
        .buttons input[type="reset"] { background: #e2e2e2; margin-right: 10px; }
        .buttons input[type="submit"] { background: #66a6ff; color: white; }
        #result { margin-top: 15px; font-weight: bold; text-align: center; }
    </style>
</head>

<body>
<div class="container">
    <h1>FORM</h1>

     <form id="myForm"
      method="POST"
      action="{{ route('workshop.store') }}"
      enctype="multipart/form-data">
    @csrf

        <div class="form-row">
            <label for="fname">ชื่อ</label>
           <input type="text" id="fname" name="fname">
        </div>

        <div class="form-row">
            <label for="lname">สกุล</label>
            <input type="text" id="lname" name="lname">

        </div>

        <div class="form-row">
            <label for="birth">วัน/เดือน/ปีเกิด</label>
            <input type="date" id="birth" name="birth">

        </div>

        <div class="form-row">
            <label for="age">อายุ</label>
            <input type="number" id="age" name="age">

        </div>

        <div class="form-row">
            <label>เพศ</label>
            <input type="radio" name="gender" value="ชาย"> ชาย
            <input type="radio" name="gender" value="หญิง"> หญิง
        </div>

        <div class="form-row">
            <label for="photo">รูป</label>
            <input type="file" id="photo" name="photo">

        </div>

        <div class="form-row">
            <label for="address">ที่อยู่</label>
            <textarea id="address" name="address"></textarea>

        </div>

        <div class="form-row">
            <label for="color">สีที่ชอบ</label>
            <select id="color" name="color">

                <option value="">-- เลือกสี --</option>
                <option value="สีแดง">สีแดง</option>
                <option value="สีเขียว">สีเขียว</option>
                <option value="สีน้ำเงิน">สีน้ำเงิน</option>
                <option value="สีเหลือง">สีเหลือง</option>
                <option value="อื่นๆ">อื่นๆ</option>
            </select>
        </div>

        <div class="form-row">
            <label>แนวเพลงที่ชอบ</label>
            <input type="radio" name="music" value="เพื่อชีวิต"> เพื่อชีวิต
            <input type="radio" name="music" value="ลูกทุ่ง"> ลูกทุ่ง
            <input type="radio" name="music" value="อื่นๆ"> อื่นๆ
        </div>

        <div class="form-row">
           <input type="checkbox" id="agree" name="agree" value="1">
            <label style="width:auto;">ยินยอมให้เก็บข้อมูล</label>
        </div>

        <div class="buttons">
            <input type="reset" value="Reset">
            <input type="submit" value="Submit">
        </div>

        <p id="result"></p>
    </form>
</div>

<script>
document.getElementById("myForm").addEventListener("submit", function (event) {
    const fname = document.getElementById("fname").value.trim();
    const lname = document.getElementById("lname").value.trim();
    const birth = document.getElementById("birth").value;
    const age = document.getElementById("age").value;
    const gender = document.querySelector('input[name="gender"]:checked');
    const photo = document.getElementById("photo").value;
    const address = document.getElementById("address").value.trim();
    const color = document.getElementById("color").value;
    const music = document.querySelector('input[name="music"]:checked');
    const agree = document.getElementById("agree").checked;

    const result = document.getElementById("result");

    if (
        fname === "" ||
        lname === "" ||
        birth === "" ||
        age === "" ||
        !gender ||
        photo === "" ||
        address === "" ||
        color === "" ||
        !music ||
        !agree
    ) {
        event.preventDefault(); // ❗กันไม่ให้ส่ง ถ้ายังไม่ครบ
        result.textContent = "❌ Error: กรุณากรอกข้อมูลให้ครบทุกช่อง";
        result.style.color = "red";
    } else {
        // ✅ ผ่านแล้วให้ส่งจริงไปหน้าใหม่
        result.textContent = "✅ Success: กรอกข้อมูลครบถ้วน กำลังส่ง...";
        result.style.color = "green";
        // ไม่ต้อง preventDefault
    }
});
</script>

</body>
</html>

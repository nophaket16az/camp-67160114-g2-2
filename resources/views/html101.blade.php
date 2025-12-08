<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>Workshop HTML - FORM</title>

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #f7f7f7;
        }

        .container {
            width: 500px;
            margin: 40px auto;
            padding: 25px;
            background: #ffffff;
            border-radius: 15px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }

        h1 {
            text-align: center;
            font-weight: bold;
            color: #333;
            margin-bottom: 20px;
        }

        .form-row {
            margin-bottom: 12px;
        }

        /* label อยู่ซ้าย ช่องกรอกอยู่ขวา */
        .form-row > label {
            display: inline-block;
            width: 130px;
            vertical-align: top;
            font-weight: 600;
            color: #555;
        }

        input[type="text"],
        input[type="number"],
        input[type="date"],
        select,
        textarea {
            width: 300px;
            padding: 6px 10px;
            border-radius: 8px;
            border: 1px solid #ccc;
        }

        textarea {
            height: 120px;
        }

        /* เวลา focus */
        input:focus,
        select:focus,
        textarea:focus {
            border-color: #66a6ff;
            outline: none;
            box-shadow: 0 0 0 3px rgba(102,166,255,0.3);
        }

        /* ปุ่ม */
        .buttons {
            margin-top: 15px;
        }

        .buttons input {
            padding: 6px 18px;
            border-radius: 8px;
            border: none;
            cursor: pointer;
            font-weight: 600;
        }

        .buttons input[type="reset"] {
            background: #e2e2e2;
            margin-right: 10px;
        }

        .buttons input[type="submit"] {
            background: #66a6ff;
            color: white;
        }
    </style>
</head>

<body>
<div class="container">
    <h1>FORM</h1>

    <form>
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
            <input type="radio" id="male" name="gender" value="ชาย">
            <label for="male" style="width:auto;">ชาย</label>

            <input type="radio" id="female" name="gender" value="หญิง">
            <label for="female" style="width:auto;">หญิง</label>
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
                <option>สีแดง</option>
                <option>สีเขียว</option>
                <option>สีน้ำเงิน</option>
                <option>สีเหลือง</option>
                <option>อื่นๆ</option>
            </select>
        </div>

        <div class="form-row">
            <label>แนวเพลงที่ชอบ</label>
            <input type="radio" id="life" name="music" value="เพื่อชีวิต">
            <label for="life" style="width:auto;">เพื่อชีวิต</label>

            <input type="radio" id="country" name="music" value="ลูกทุ่ง">
            <label for="country" style="width:auto;">ลูกทุ่ง</label>

            <input type="radio" id="other" name="music" value="อื่นๆ">
            <label for="other" style="width:auto;">อื่นๆ</label>
        </div>

        <div class="form-row">
            <input type="checkbox" id="agree" name="agree">
            <label for="agree" style="width:auto;">ยินยอมให้เก็บข้อมูล</label>
        </div>

        <div class="buttons">
            <input type="reset" value="Reset">
            <input type="submit" value="Submit">
        </div>
    </form>
</div>
</body>
</html>

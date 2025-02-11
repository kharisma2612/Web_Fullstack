<?php
require 'function.php';
////cek apakah tombol submit sudah ditekan atau belom
if( isset($_POST["submit"]) ) {

    //cek data apkh berhasil d input
    if(tambah($_POST) > 0) {
        echo "<script>
                alert('data berhasil ditambahkan');
            </script>
            ";
    } else {
        echo "<script>
                alert('data gagal ditambahkan');
            </script>
            ";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Extracurricular Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="nav">
        <span class="logo">EksSchool</span>
        <a href="index.html">
            <button class="back">Back</button>
        </a>
        <a href="homme.html">
            <button class="home">Home</button>
        </a>
        
    </div>

    <h1>Extracurricular Form</h1>

    <form action="" method="post">
        <label for="Name">Name</label>
        <input type="text" name="Name" id="Name" required>

        <label for="Class">Class</label>
        <input type="text" name="Class" id="Class" required>

        <div class="form-row">
            <div>
                <label for="Gender">Gender</label>
                <select name="Gender" id="Gender">
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div>
                <label for="Birth">Birthday</label>
                <input type="text" name="Birthday" id="Birthday" placeholder="dd/mm/yy" required>
            </div>
        </div>

        <label for="Address">Address</label>
        <input type="text" name="Address" id="Address" class="address" required>

        <label for="Phone">Phone Number</label>
        <input type="text" name="Phone" id="Phone" required>

    <fieldset>
        <legend>Extracurricular Options</legend>
        <div class="extracurricular-options">
            <label><input type="checkbox" name="activity" value="volleyball"> Volleyball</label>
            <label><input type="checkbox" name="activity" value="basketball"> Basketball</label>
            <label><input type="checkbox" name="activity" value="tennis"> Tennis</label>
            <label><input type="checkbox" name="activity" value="drumband"> Drumband</label>
            <label><input type="checkbox" name="activity" value="paskibra"> Paskibra</label>
            <label><input type="checkbox" name="activity" value="band"> Band</label>
            <label><input type="checkbox" name="activity" value="modern_dance"> Modern Dance</label>
            <label><input type="checkbox" name="activity" value="traditional_dance"> Traditional Dance</label>
        </div>
    </fieldset>
        <div class="register-container">
            <button type="submit" name="submit" class="register">Regist</button>
        </div>
    </form>

    <img src="basket.png" class="illustration" alt="Basketball Kids">
    <img src="band.png" alt="Band Illustration" class="band-illustration">


</body>
</html>

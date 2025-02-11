<?php
//koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "eskul");

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $row =[];
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;   
    } 
    return $rows;
}

function tambah($data) {
    global $conn;
    //ambil data dari tiap elemen dalam form
    $name = htmlspecialchars($data["Name"]);
    $class = htmlspecialchars($data["Class"]);
    $gender = htmlspecialchars($data["Gender"]);
    $birthday = htmlspecialchars($data["Birthday"]);
    $address = htmlspecialchars($data["Address"]);
    $phone = htmlspecialchars($data["Phone"]);

    //query insert data
    $query = "INSERT INTO registrasi (name, class, gender, birthday, address, phone) 
          VALUES ('$name', '$class', '$gender', '$birthday', '$address', '$phone')";
    mysqli_query($conn, $query) ;



    return mysqli_affected_rows($conn);
}
?>
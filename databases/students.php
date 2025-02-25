<?php

function getStudents(): mysqli_result|bool
{
    $conn = getConnection();
    $sql = 'select * from students orderby student_id desc';
    $result = $conn->query($sql);
    return $result;
}

function getStudentById(): array|bool
{
    $conn = getConnection();
    $sql = 'select * from students where student_id = ?';
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $_SESSION['student_id']);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows == 0) {
        return false;
    }
    return $result->fetch_assoc();
}

function register_Student(String $fname, String $lname, String $img, String $bod, String $tel,String $email, String $pwd)
{
    $conn = getConnection();
    $newDate = date('Y-m-d', strtotime($bod));
    $hashpwd = password_hash($pwd, PASSWORD_DEFAULT);

    $sql = 'INSERT INTO students(first_name, last_name, image, date_of_birth, phone_number, email, password) 
            VALUES(?, ?, ?, ?, ?, ?, ?)';
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('sssssss', $fname, $lname, $img, $bod, $tel, $email, $hashpwd);
    $stmt->execute();

    $_SESSION['success'] = "ลงทะเบียนสำเร็จ";
}


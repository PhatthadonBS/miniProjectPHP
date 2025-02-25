<?php

function login(String $username, String $password): array|bool
{
    if(is_numeric($username)){
        $stdid = (integer) $username;
    }
    
    $conn = getConnection();
    $sql = 'select * from students where email = ? or student_id = ?';
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si", $username, $stdid);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if($result->num_rows == 0)
    {
        return false;
    }
    $row = $result->fetch_assoc();

    if(password_verify($password, $row['password']))
    {
        return $row;
    }else
    {
        return false;
    }
}



function logout():void
{
    unset($_SESSION['timestamp']);
    session_destroy();
}

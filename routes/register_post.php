<?php
    if(isset($_POST["submit"])){
        if($_POST["pwd"] !== $_POST["pwd2"]){ 
            $_SESSION['error'] = 'รหัสผ่านไม่ตรงกัน';
            renderView('register_get');
            exit();
        }

        $result = getStudents();
        foreach($result as $row){
            if($row['email'] == $_POST['email']){
                $_SESSION['error'] = 'มีผู้ใช้ที่อยู่อีเมลนี้แล้ว';
                renderView('register_get');
                exit();
            }
        }

        register_Student($_POST['fname'], $_POST['lname'], $_POST['imgstd'], $_POST['bod'], $_POST['tel'], $_POST['email'], $_POST['pwd']);
        renderView('register_get');
        exit();
    }
?>
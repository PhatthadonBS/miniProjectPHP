<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Noto+Sans+Thai:wght@100..900&family=Noto+Serif+Thai:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Noto Serif Thai", serif;
            
        }

        .hidden{
            display: none;
        }
    </style>


    <script>
        function addHidden() {
            document.getElementById("regbtn").classList.add("hidden");
        }

        function removeHidden() {
            document.getElementById("regbtn").classList.remove("hidden");
        }

        function confirmWithdraw(event, element) {
            
            if (confirm('ยืนยันการถอนรายวิชา')) {
                removeHidden(); 
                return true; 
            } else {
                event.preventDefault();
                return false;
            }
        }

        function confirmEnroll(event, element){
            if(confirm("ยืนยันการลงทะเบียน")){
                addHidden();
                return true;
            }else{
                event.preventDefault();
                return false;
            }
        }
    </script>

</head>


<body class="flex flex-column justify-content-canter">
    <nav class="container-fluid d-flex justify-content-between bg-primary text-white">
        <header class="ms-1 mt-2 fs-2 text-center ">ระบบลงทะเบียนเรียน</header>
        <menu class="d-flex">
            <a href="/" class="ms-4 mt-3 fs-5 text-white text-decoration-none">หน้าแรก</a>
            <?php
                if (isset($_SESSION['timestamp'])) {
                ?>
                    <a href="/profile" class="ms-4 mt-2 btn fs-5 text-white text-decoration-none">ข้อมูลนักเรียน</a>
                    <a href="/courses" class="ms-4 mt-2 btn fs-5 text-white text-decoration-none">รายวิชา</a>
                    <a href="/logout" class="ms-4 mt-2 btn fs-5 text-white text-decoration-none">ออกจากระบบ</a>
                <?php
                } else {
                ?>
                    <a href="/login" class="ms-4 mt-3 fs-5 text-white text-decoration-none">เข้าสู่ระบบ</a>
                    <a href="/register" class="ms-4 mt-3 fs-5 text-white text-decoration-none">ลงทะเบียน</a>
                <?php
                }
            ?>
        </menu>
    </nav>

    
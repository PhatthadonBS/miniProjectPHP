<?php
$courses = $data['courses'];

?>
<section class="container-fluid d-flex flex-column justify-content-center align-items-center" style="height:85vh; background-image:url(https://images.wallpaperscraft.com/image/single/cat_night_lights_74375_1440x900.jpg);">
    
    <?php if(isset($_SESSION['error'])){?>
        <script>alert("<?=$_SESSION['error']?>");</script>
    <?php unset($_SESSION['error']); }?>

    <?php if(isset($_SESSION['success'])){?>
        <script>alert("<?=$_SESSION['success']?>");</script>
    <?php unset($_SESSION['success']); }?>

    <div class="ps-5 pe-5 text-white" style="width:70rem; height:40rem; border: 10px solid gray; border-radius: 15px;">
        <h2 class="fs-1 mt-4 text-center">รายวิชาที่เปิดให้ลงทะเบียน</h2>
        <table class="table table-hover table-sm" style="font-size: 15px;">
            <thead>
                <tr>
                    <th>รหัส</th>
                    <th>รหัสวิชา</th>
                    <th>ชื่อวิชา</th>
                    <th>อาจารย์ผู้สอน</th>
                    <th>การลงทะเบียน</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($courses as $course): ?>
                    <tr>
                        <td><?= $course['course_id'] ?></td>
                        <td><?= $course['course_code'] ?></td>
                        <td><?= $course['course_name'] ?></td>
                        <td><?= $course['instructor'] ?></td>
                        <td><a href="/courses?cid=<?=$course['course_id']?>" class="btn <?=(isEnrolled($course['course_id']))?"hidden":""?>" style="border: 1px solid green;" id="regbtn" onclick="addHidden();">ลงทะเบียน</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</section>


<section class="container-fluid d-flex justify-content-center align-items-center " style="height: 85vh; position: relative; background-image:url(https://images.wallpaperscraft.com/image/single/strokes_stripes_mixing_272068_1440x900.jpg);">
    <?php if(isset($_SESSION['error'])){?>
        <script>alert("<?=$_SESSION['error']?>");</script>
    <?php unset($_SESSION['error']); }?>

    <?php if(isset($_SESSION['success'])){?>
        <script>alert("<?=$_SESSION['success']?>");</script>
    <?php unset($_SESSION['success']); }?>

<div class="d-flex flex-column align-items-center" style="height:21rem; width:25rem; position:absolute; top:5rem; left:1rem; border: 10px solid white; border-radius: 15px;">
        <h2 class="text-center mt-2 text-white">ข้อมูลนิสิต</h2>
        
        <div class="">
            <table class="table table-hover">
                <tr>
                    <th>รหัสนิสิต</th>
                    <td class="ms-3"><?= $data['data']['student_id'] ?></td>
                </tr>
                <tr>
                    <th>ชื่อ</th>
                    <td class="ms-3"><?= $data['data']['first_name'] ?></td>
                </tr>
                <tr>
                    <th>นามสกุล</th>
                    <td class="ms-3"><?= $data['data']['last_name'] ?></td>
                </tr>
                <tr>
                    <th>วันเกิด</th>
                    <td class="ms-3"><?= $data['data']['date_of_birth'] ?></td>
                </tr>
                <tr>
                    <th>เบอร์โทรศัพท์</th>
                    <td class="ms-3"><?= $data['data']['phone_number'] ?></td>
                </tr>
                <tr>
                    <th>อีเมล</th>
                    <td class="ms-3"><?= $data['data']['email'] ?></td>
                </tr>
            </table>
        </div>
        
    </div>

    <div class="bg-white text-center" style="width: 60rem; height: 30rem; margin-left: 25rem; border:10px solid gray; border-radius: 15px;">
        <h2 class="text-center mt-3 text-black " >วิชาที่ลงทะเบียนเรียน</h2>
        <table class="table table-hover " >
            <thead>
                <tr>
                    <th>รหัส</th>
                    <th>รหัสวิชา</th>
                    <th>ชื่อวิชา</th>
                    <th>อาจารย์ผู้สอน</th>
                    <th>วันที่ลงทะเบียน</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data['enrollments'] as $enrollment): ?>
                    <tr>
                        <td><?= $enrollment['course_id'] ?></td>
                        <td><?= $enrollment['course_code'] ?></td>
                        <td><?= $enrollment['course_name'] ?></td>
                        <td><?= $enrollment['instructor'] ?></td>
                        <td><?= $enrollment['enrollment_date'] ?></td>
                        <td><a href="/profile?cid=<?=$enrollment['course_id']?>&cname=<?=$enrollment['course_name']?>" onclick="return confirmWithdraw(event, this);">ถอนรายวิชา</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>    
    </div>
    
</section>
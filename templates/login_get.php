<section class="d-flex flex-column align-items-center text-white" style="width: 100%; height:85vh; padding-top:10rem; background-image:url(https://images.wallpaperscraft.com/image/single/man_snow_mountain_283282_1680x1050.jpg); background-size: 1440px 900px;">

    <?php 
        if(isset($_SESSION['error'])){?>
        <div class="alert alert-danger" role="alert">
            <?php 
                echo $_SESSION['error'];
                unset($_SESSION['error']);
            ?>  
        </div>
    <?php }?>

    <h1 style="font-size: 50px;">เข้าสู่ระบบ</h1>
    <form action="/login" method="post" class="fs-2">
        <label for="email">อีเมล หรือ รหัสนิสิต:</label><br>
        <input type="text" id="email" name="email"><br>
        <br>
        <label for="password">รหัสผ่าน:</label><br>
        <input type="password" id="password" name="password"><br><br>

        <div class="register d-flex justify-content-center">
            <input type="submit" value="เข้าสู่ระบบ">
        </div>
    </form>
</section>
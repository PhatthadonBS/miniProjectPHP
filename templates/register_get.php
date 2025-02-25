
<section class="container-fluid d-flex flex-column justify-content-start align-items-center text-white " style="height: 85vh; position:relative; background-image: url(https://images.wallpaperscraft.com/image/single/mountains_rocks_village_195330_1680x1050.jpg);">
    <div class="container d-flex flex-column justify-content-end align-items-center" style="width: 50rem; height: 43rem;">
       
        <div class="d-flex">
            <?php if(isset($_SESSION['error'])): ?>
                <div class="alert fs-3 text-center d-flex justify-content-center align-items-center bg-danger" style="width: 20rem; height: 4rem; position:absolute; top:3rem; right:35rem; padding-top: 1rem; border-radius: 15px;">
                    <p class="text-center">
                        <?php 
                            echo $_SESSION['error'];
                            unset($_SESSION['error']);
                        ?> 
                    </p>
                </div>

            <?php endif; if(isset($_SESSION['success'])): ?>

                <div class="alert fs-3 text-center d-flex justify-content-center align-items-center bg-success" style="width: 20rem; height: 4rem; position:absolute; top:3rem; right:35rem; padding-top: 1rem; border-radius: 15px;">
                    <p class="text-center">
                        <?php 
                            echo $_SESSION['success'];
                            unset($_SESSION['success']);
                        ?> 
                    </p>
                </div>

            <?php endif;?>
       </div>   
        

        <h1 class="text-white mb-5" style="font-size: 60px;">ลงทะเบียนนิสิต</h1>

        <form action="/register" method="post">
            <div>
                <input type="text" name="fname" placeholder="ชื่อ" class="form-control-sm me-5 mb-4">
                <input type="text" name="lname" placeholder="นามสกุล" class="form-control-sm mb-4">
            </div>
            
            <div class="d-flex">
                <div class="d-flex flex-column">
                    <label class="fs-3">แนบรูปนิสิต</label>
                    <input type="file" accept="image/*" name="imgstd" class="form-control-sm mb-4 ms-1">
                </div>

                <div class="d-flex flex-column">
                    <label class="fs-3">วันเกิด</label>
                    <input type="date" name="bod" class="form-control-sm mb-4">
                </div>
            </div>

            <div class="d-flex flex-column ">
                <input type="tel" name="tel" placeholder="เบอร์โทร" class="form-control-sm mb-4">
                <input type="email" name="email" placeholder="อีเมล" class="form-control-sm mb-4">
                <input type="password" name="pwd" placeholder="รหัสผ่าน" class="form-control-sm mb-4"> 
                <input type="password" name="pwd2" placeholder="รหัสผ่านอีกครั้ง" class="form-control-sm mb-4"> 
                
            </div>
            
            <input type="submit" name="submit" value="ลงทะเบียน" class="btn btn-primary fs-4" style="margin-left: 10rem;">
        </form>
    </div>
    
</section>

<div class="row mb">
            <div class="boxtrai mr">

                <div class="row mb">
                   
                    <div class="boxtitle">ĐĂNG KÝ THÀNH VIÊN</div>
                    <div class="row boxcontent formtaikhoan">
                        <form action="index.php?act=dangky" method="post">
                              <div class="row mb10">
                                Email
                                    <input type="email" name="email"  class="form-control" required> 
                             </div>
                            <div class="row mb10">
                                Username
                                 <input type="text" name="user" class="form-control" required >
                            </div> 
                             <div class="row mb10">
                                Password
                                 <input type="password" name="pass" class="form-control" required> 
                            </div>
                            <div class="row mb10">
                                Address 
                                 <input type="text" name="address" class="form-control"  required> 
                            </div>
                            <div class="row mb10">
                               Tel
                                 <input type="text" name="tel" class="form-control" required> 
                            </div>
                      
                            <input type="submit" value="Đăng ký" name="dangky">
                            <input type="reset" value="Nhập lại">
                        </form>
                        <h2 class="thongbao">
                        <?php
                            if(isset($thongbao)&&($thongbao!="")){
                                echo $thongbao;
                            }
                        ?>
                         </h2>
                       
                    </div>
                </div>

               

            </div>
            <div class="boxphai">
            <?php include "view/boxright.php";?>
            </div>
        </div>
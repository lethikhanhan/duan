<div class="row mb">
            <div class="boxtrai mr">

                <div class="row mb">
                   
                    <div class="boxtitle">CẬP NHẬT TÀI KHOẢN</div>
                    <div class="row boxcontent formtaikhoan">
                        <form action="index.php?act=edit_taikhoan" method="post">
                            <?php
                                if(isset($_SESSION['user'])&&(is_array($_SESSION['user']))){
                                    extract($_SESSION['user']);
                                }
                            ?>
                              <div class="row mb10">
                                Email
                                    <input type="email" name="email"  class="form-control" value="<?=$email?>" required> 
                             </div>
                            <div class="row mb10">
                                Username
                                 <input type="text" name="user" class="form-control" value="<?=$user?>" >
                            </div> 
                             <div class="row mb10">
                                Password
                                 <input type="password" name="pass" class="form-control" value="<?=$pass?>" required> 
                            </div>
                            <div class="row mb10">
                                Địa chỉ 
                                 <input type="text" name="address" class="form-control" value="<?=$address?>" required> 
                            </div>
                            <div class="row mb10">
                               Điện thoại
                                 <input type="text" name="tel" class="form-control" value="<?=$tel?>" > 
                            </div>
                            <div class="row mb10">
                                <input type="hidden" name="id" value="<?=$id?>">
                                <input type="submit" value="Cập nhật" name="capnhat">
                                <input type="reset" value="Nhập lại">
                            </div>
                          
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
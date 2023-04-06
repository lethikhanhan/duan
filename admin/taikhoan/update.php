
<div class="row">
            <div class="row header2"><h1>CẬP NHẬT LẠI TÀI KHOẢN</h1></div>
            <div class="row formcontent">
                <form action="index.php?act=updatetk" method="post">
                          
                              <div class="row mb10">
                                Email
                                    <input type="email" name="email"  class="form-control" value="<?=$email?>"> 
                             </div>
                            <div class="row mb10">
                                Username
                                 <input type="text" name="user" class="form-control" value="<?=$user?>">
                            </div> 
                             <div class="row mb10">
                                Password
                                 <input type="password" name="pass" class="form-control" value="<?=$pass?>"> 
                            </div>
                            <div class="row mb10">
                                Địa chỉ 
                                 <input type="text" name="address" class="form-control" value="<?=$address?>"> 
                            </div>
                            <div class="row mb10">
                               Điện thoại
                                 <input type="text" name="tel" class="form-control" value="<?=$tel?>"> 
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
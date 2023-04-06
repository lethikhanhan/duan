<div class="row">
            <div class="row header2"><h1>THÊM MỚI TÀI KHOẢN</h1></div>
            <div class="row formcontent">
                <form action="index.php?act=addtk" method="post">
                <div class="row mb10">
                        Email <br>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="row mb10">
                        Tên đăng nhập <br>
                        <input type="text" name="user" class="form-control" required>
                    </div>
                    <div class="row mb10">
                        Mật khẩu <br>
                        <input type="password" name="pass" class="form-control" required>
                    </div>
                    <div class="row mb10">
                         Địa chỉ 
                         <input type="text" name="address" class="form-control"  required> 
                     </div>
                    <div class="row mb10">
                        Số điện thoại
                         <input type="text" name="tel" class="form-control" required> 
                     </div>
                     <select name="role" ;" class="row mb10">
                        <option value="chonloai">Đăng ký với tư cách</option>
                        <option value="0">Khách hàng</option>
                        <option value="1">Admin</option>
                     </select>
                    <div class="row mb20">
                        <input type="submit" name="themmoi" value="THÊM MỚI">
                        <input type="reset" value="NHẬP LẠI">
                       <a href="index.php?act=dskh"><input type="button" value="DANH SÁCH"></a> 
                        </div>
                        <?php
                            if(isset($thongbao)&&($thongbao!="")){
                                echo $thongbao;
                            }
                        ?>
                </form>
            </div>
        </div>
        </div>
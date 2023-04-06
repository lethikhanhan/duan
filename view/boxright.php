<div class="row mb">
                    <div class="boxtitle">TÀI KHOẢN</div>
                    <div class="boxcontent taikhoan">
                        <?php
                            if(isset($_SESSION['user'])){
                                extract($_SESSION['user']);
                        ?>
                             <div class="row mb10">
                               Xin chào <br>
                               <h1> <?=$user?></h1>
                            </div>
                            <div class="row mb10">
                                <li>
                                    <a href="index.php?act=quenmk">Quên mật khẩu</a>
                                </li>
                                <li>
                                     <a href="index.php?act=edit_taikhoan">Cập nhật tài khoản</a>
                                 </li>
                                 <?php if($role==1){ ?>
                                 <li>
                                     <a href="admin/index.php">Đăng nhập admin</a>
                                 </li>
                                 <?php }?>
                                 <li>
                                     <a href="index.php?act=thoat">Thoát</a>
                                 </li>
                            </div>
                        <?php
                            }else{
                        ?>
                        <form action="index.php?act=dangnhap" method="post">
                            <div class="row mb10">
                                Tên đăng nhập <br>
                                <input type="text" name="user" required>
                            </div>
                            <div class="row mb10">
                                Mật khẩu <br>
                                <input type="password" name="pass" required>
                            </div>
                            <div class="row mb10">
                                <input type="checkbox" name="" id="">Ghi nhớ tài khoản 
                            </div>
                            <div class="row mb10">
                                <input type="submit" value="Đăng nhập" name="dangnhap">
                            </div>   
                    </form>
                        <li>
                            <a href="index.php?act=quenmk">Quên mật khẩu</a>
                        </li>
                        <li>
                            <a href="index.php?act=dangky">Đăng ký thành viên</a>
                        </li>
                    <?php }?>
                    </div>
                </div>
                <div class="row mb">
                    <div class="boxtitle">DANH MỤC</div>
                    <div class="boxcontent2 menudoc">
                        <ul>
                            <?php
                            foreach($dsdm as $dm){
                                extract($dm);
                                $linkdm="index.php?act=sanpham&iddm=".$id;
                                echo'<li>
                                <a href="'.$linkdm.'">'.$name.'</a>
                            </li>';

                                
                            }
                            ?>
                         <!--   <li>
                                <a href="#">Đồng hồ đeo tay</a>
                            </li>
                            <li>
                                <a href="#">Máy tính xách tay 2</a>
                            </li>
                            <li>
                                <a href="#">Máy ảnh</a>
                            </li>
                            <li>
                                <a href="#">Điện thoại</a>
                            </li>
                            <li>
                                <a href="#">Nước hoa</a>
                            </li>
                            <li>
                                <a href="#">Nữ trang</a>
                            </li>
                            <li>
                                <a href="#">Nón thời trang</a>
                            </li>
                            <li>
                                <a href="#">Túi xách du lịch</a>
                            </li>
                            <li>
                                <a href="#">New catalog</a>
                            </li>
                            <li>
                                <a href="#">Apple 2021</a>
                            </li> -->
                        </ul>
                    </div>
                    <div class="boxfooter searbox">
                        <form action="index.php?act=sanpham" method="post">
                            <input type="text" name="kyw">
                            <input type="submit" name="timkiem" value="Tìm kiếm">
                        </form>
                    </div>
                </div>
                <div class="row ">
                    <div class="boxtitle">TOP 10 YÊU THÍCH</div>
                    <div class="row boxcontent">
                        <?php
                            foreach($dstop10 as $sp){
                                extract($sp);
                                $linksp="index.php?act=sanphamct&idsp=".$id;
                                $img=$img_path.$img;
                                echo ' <div class="row mb10 top10">
                                <img src="'.$img.'" alt="">
                                <a href="'.$linksp.'">'.$name.'</a>
                            </div>';
                            }
                        ?>
                       <!-- <div class="row mb10 top10">
                            <img src="view/images/vali.png" alt="">
                            <a href="#">Sir Rodney's Marmalade</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="view/images/vali.png" alt="">
                            <a href="#">Cate de Blaye</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="view/images/vali.png" alt="">
                            <a href="#">Tharinger Rostbratwurst</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="view/images/vali.png" alt="">
                            <a href="#">Mishi Kobe Niku</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="view/images/vali.png" alt="">
                            <a href="#">Camavon Tigers</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="view/images/vali.png" alt="">
                            <a href="#">Raclete Courdavault</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="view/images/vali.png" alt="">
                            <a href="#">Manjimup Dried Apples</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="view/images/vali.png" alt="">
                            <a href="#">Tarte au sucre</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="view/images/vali.png" alt="">
                            <a href="#">Change</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="view/images/vali.png" alt="">
                            <a href="#">Russle Sauerkraut</a>
                        </div>-->
                        
                    </div>
                </div>
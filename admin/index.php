<?php
include "../model/pdo.php"; 
include "../model/danhmuc.php";
include "../model/sanpham.php";
include "../model/taikhoan.php";
include "../model/binhluan.php";
    include "header.php";
    //controller
    if(isset($_GET['act'])){
        $act=$_GET['act'];
        switch ($act){
            case 'adddm':
                //kiểm tra xem người dùng có click vào nút add hay không
                if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                    $tenloai=$_POST['tenloai'];
                    insert_danhmuc($tenloai);
                    $thongbao="Thêm thành công";
                }
                include "danhmuc/add.php";
                break;
            case 'listdm':
               $listdanhmuc=loadall_danhmuc();
                include "danhmuc/list.php";
                break;
            case 'xoadm':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    delete_danhmuc($_GET['id']);
                }
                $listdanhmuc=loadall_danhmuc();
                 include "danhmuc/list.php";
                 break;
            case 'suadm':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $dm=loadone_danhmuc($_GET['id']);
                }
                include "danhmuc/update.php";
                break;
            case 'updatedm':
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    $tenloai=$_POST['tenloai'];
                    $id=$_POST['id'];
                     update_danhmuc($id,$tenloai);
                    $thongbao="Cập nhật thành công";
                }
                $listdanhmuc=loadall_danhmuc();
                include "danhmuc/list.php";
                break;
                /**Controller sản phẩm */
             case 'addsp':
                    //kiểm tra xem người dùng có click vào nút add hay không
                if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                        $iddm=$_POST['iddm'];
                        $tensp=$_POST['tensp'];
                        $giasp=$_POST['giasp'];
                        $mota=$_POST['mota'];
                        $hinh=$_FILES['hinh']['name'];
                        $target_dir = "../upload/";
                        $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                        if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                          
                        } else {
                            
                          }
                        insert_sanpham($tensp,$giasp,$hinh,$mota,$iddm);
                        $thongbao="Thêm thành công";
                    }
                    $listdanhmuc=loadall_danhmuc();
                    include "sanpham/add.php";
                    break;
    
             case 'listsp':
                    if(isset($_POST['listok'])&&($_POST['listok'])){
                        $kyw=$_POST['kyw'];
                        $iddm=$_POST['iddm'];

                    }else{
                        $kyw='';
                        $iddm=0;
                    }
                    $listdanhmuc=loadall_danhmuc();
                   $listsanpham=loadall_sanpham($kyw,$iddm);
                    include "sanpham/list.php";
                    break;
             case 'xoasp':
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        delete_sanpham($_GET['id']);
                    }
                    $listsanpham=loadall_sanpham("",0);
                     include "sanpham/list.php";
                     break;
            case 'suasp':
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        $sanpham=loadone_sanpham($_GET['id']);
                    }
                    $listdanhmuc=loadall_danhmuc();
                    include "sanpham/update.php";
                    break;
            case 'updatesp':
                    if(isset($_POST['capnhat'])&&($_POST['capnhat'])){//Nếu có tồn tại và được click thì lấy toàn bộ giá trị về
                        $id=$_POST['id'];
                        $iddm=$_POST['iddm'];
                        $tensp=$_POST['tensp'];
                        $giasp=$_POST['giasp'];
                        $mota=$_POST['mota'];
                        $hinh=$_FILES['hinh']['name'];
                        $target_dir="../upload/";
                        $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                        if (move_uploaded_file($_FILES["hinh"]["tmp_name"],$target_file)){
                           
                        } else {
                            
                          }
                         update_sanpham($id,$tensp,$giasp,$hinh,$mota,$iddm);
                        $thongbao="Cập nhật thành công";
                    }
                    $listdanhmuc=loadall_danhmuc();
                    $listsanpham=loadall_sanpham();
                    include "sanpham/list.php";
                    break;
            case 'dskh':
                    $listtaikhoan=loadall_taikhoan();
                         include "taikhoan/list.php";
                         break;
            case 'addtk':
                    if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                        $email=$_POST['email'];
                        $user=$_POST['user'];
                        $pass=$_POST['pass'];
                        $address=$_POST['address'];
                        $tel=$_POST['tel'];
                        $role=$_POST['role'];
                        insert_taikhoan($email,$user,$pass,$address,$tel,$role);
                        $thongbao="Đã đăng ký thành công !";
                     }
                    include "taikhoan/add.php";
                     break;
            case 'xoatk':
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                         delete_taikhoan($_GET['id']);
                    }
                     $listtaikhoan=loadall_taikhoan();
                    include "taikhoan/list.php";
                    break;
            case 'suatk':
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        $sanpham=loadone_taikhoan($_GET['id']);
                    }
                    $listtaikhoan=loadall_taikhoan();
                    include "taikhoan/update.php";
                    break;
             case 'updatetk':
                    if(isset($_POST['capnhat'])&&($_POST['capnhat'])){ //Nếu có tồn tại và được click thì lấy toàn bộ giá trị về
                            $user=$_POST['user'];
                            $pass=$_POST['pass'];
                            $email=$_POST['email'];
                            $address=$_POST['address'];
                            $tel=$_POST['tel'];
                            $id=$_POST['id'];
            
                            update_taikhoan($id,$user,$pass,$email,$address,$tel);
                            $_SESSION['user']= $checkuser=checkuser($user,$pass);
                            header('Location: index.php?act=updatetk');
                                  
                    }
                    include "taikhoan/update.php";
                     break;

            case 'dsbl':
                $listbinhluan=loadall_binhluan(0);
            include "binhluan/list.php";
            break;
            case 'xoabl':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    delete_binhluan($_GET['id']);
                }
                $listbinhluan=loadall_binhluan('',0);
                    include "binhluan/list.php";
                    break;
            case 'thongke':
                $listthongke=loadall_thongke();
                include "binhluan/list.php";
                break;
            default:
            include "home.php";
            break;

        }
    }else {
        include "home.php";
    }

    
    include "footer.php"
?>
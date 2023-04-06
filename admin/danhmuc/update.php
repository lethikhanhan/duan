<?php
    if(is_array($dm)){ //kiểm tra biến $dm có phải kiểu dữ liệu mảng không
        extract($dm);
    }
?>
<div class="row">
            <div class="row header2"><h1>CẬP NHẬT LOẠI HÀNG HÓA</h1></div>
            <div class="row formcontent">
                <form action="index.php?act=updatedm" method="post">
                    <div class="row mb20">
                        Mã loại <br>
                    <input type="text" name="maloai" disabled>
                    </div> 
                    <div class="row mb10">
                        Tên loại <br>
                        <input type="text" name="tenloai" value="<?php if(isset($name)&&($name!="")) echo $name;?>">
                    </div>
                    <div class="row mb20">
                        <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0)) echo $id;?>">
                        <input type="submit" name="capnhat" value="CẬP NHẬT">
                        <input type="reset" value="NHẬP LẠI">
                       <a href="index.php?act=listdm"><input type="button" value="DANH SÁCH"></a> 
                        </div>
                        <?php
                        if(isset($thongbao)&&($thongbao!=""))echo$thongbao;
                        ?>
                </form>
            </div>
        </div>
        </div>
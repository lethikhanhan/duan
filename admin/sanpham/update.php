<?php
    if(is_array($sanpham)){ //kiểm tra biến $sanpham có phải kiểu dữ liệu mảng không
        extract($sanpham);
    }
    $hinhpath="../upload/".$img;
         if(is_file($hinhpath)){
             $hinh="<img src='".$hinhpath."' height='80'>";
         }else{
             $hinh="no photto";
         }
?>
<div class="row">
            <div class="row header2"><h1>CẬP NHẬT SẢN PHẨM</h1></div>
            <div class="row formcontent">
            <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
                    <div class="row mb20">
                    <select name="iddm" id="">
                           <option value="0" selected></option>
                        <?php foreach($listdanhmuc as $danhmuc) : ?>  
                            <option value="<?= $danhmuc['id'] ?>" <?php echo ($danhmuc['id'] == $sanpham['iddm'] ? 'selected' : '') ?>> <!--Nếu id danh mục bằng với id của sản phẩm thì lấy tên danh mục sản phẩm ra-->
                            <?=$danhmuc['name'] ?>
                        </option>
                        <?php endforeach ?>
                    </select>
                    </div> 
                    <div class="row mb10">
                        Tên sản phẩm <br>
                        <input type="text" name="tensp" value="<?=$name?>" >
                    </div>
                    <div class="row mb10">
                        Giá <br>
                        <input type="text" name="giasp" value="<?=$price?>">
                    </div>
                    <div class="row mb10">
                        Hình <br>
                        <input type="file" name="hinh" >
                        <?=$hinh?>
                    </div>
                    <div class="row mb10">
                        Mô tả <br>
                        <textarea name="mota"  cols="30" rows="10"><?=$mota?></textarea>
                    </div>
                    <div class="row mb20">
                        <input type="hidden" name="id" value="<?=$id?>">
                        <input type="submit" name="capnhat" value="CẬP NHẬT">
                        <input type="reset" value="NHẬP LẠI">
                       <a href="index.php?act=listsp"><input type="button" value="DANH SÁCH"></a> 
                        </div>
                        <?php
                        if(isset($thongbao)&&($thongbao!=""))echo$thongbao;
                        ?>
                </form>
            </div>
        </div>
        </div>
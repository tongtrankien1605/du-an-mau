<?php 

function insert_tintuc($noi_dung, $tieu_de, $target_file, $iddm)
{
    $sql = "INSERT INTO tintuc (noi_dung, tieu_de, hinh_anh, id_danh_muc) VALUES ('$noi_dung', '$tieu_de', '$target_file', '$iddm') ";
    pdo_execute($sql);
}

function loadall_danhmuctintuc()
{
    $sql = "SELECT * FROM danhmuctintuc order by id_danhmuc desc";
    $listdanhmuc = pdo_query($sql);
    return $listdanhmuc;
}

function loadall_tintuc()
{
    $sql = "SELECT tt.*, dmtt.ten_danhmuc FROM tintuc as tt join danhmuctintuc as dmtt on tt.id_danh_muc = dmtt.id_danhmuc order by id desc";
    

   
    $listtintuc = pdo_query($sql);
    return $listtintuc;
}

function delete_tintuc($id)
{
    $sql = "delete from tintuc where id =" . $_GET['id'];
    pdo_execute($sql);
}

function loadone_tintuc($id)
{
    $sql = "select * from tintuc where id =" . $id;

    $tintuc = pdo_query_one($sql);

    return $tintuc;
}


function update_tintuc($id, $noi_dung, $tieu_de, $iddm, $hinh)
{



    // $sql = "UPDATE sanpham SET name = '{$tensp}', price = '{$giasp}', img = '{$hinh}' , mota = '{$mota}', iddm = '{$iddm}' WHERE id = $id";

    // pdo_execute($sql);


    if ($hinh != "") {

        $sql = "UPDATE tintuc SET noi_dung = '{$noi_dung}', tieu_de = '{$tieu_de}', hinh_anh = '{$hinh}', id_danh_muc = '{$iddm}' WHERE id = $id";
        
    } else {

        $sql = "UPDATE tintuc SET noi_dung = '{$noi_dung}', tieu_de = '{$tieu_de}', id_danh_muc = '{$iddm}' WHERE id = $id";

    }
    
    pdo_execute($sql);
}

?>
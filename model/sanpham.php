<?php

function insert_sanpham($tensp, $giasp, $target_file, $mota, $iddm)
{
    $sql = "INSERT INTO sanpham (name, price, img, mota, iddm) VALUES ('$tensp', '$giasp', '$target_file', '$mota', '$iddm') ";
    pdo_execute($sql);
}

function delete_sanpham($id)
{
    $sql = "delete from sanpham where id =" . $_GET['id'];
    pdo_execute($sql);
}

function loadall_sanpham($kyw = "", $iddm = 0)
{
    $sql = "SELECT sp.*, dm.namedm FROM sanpham as sp join danhmuc as dm on sp.iddm = dm.id where 1";
    if ($kyw != '') {
        $sql .= " and name like '%" . $kyw . "%'";
    }

    if ($iddm > 0) {
        $sql .= " and iddm = '" . $iddm . "'";
    }

    $sql .= " order by id desc limit 0,9";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function loadall_sanpham_home()
{
    $sql = "select * from sanpham where 1 order by id desc limit 0,9";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function loadall_sanpham_top10()
{
    $sql = "select * from sanpham where 1 order by luotxem desc limit 0,10";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function loadone_sanpham($id)
{
    $sql = "select * from sanpham where id =" . $id;

    $sp = pdo_query_one($sql);

    return $sp;
}

function load_ten_dm($iddm)
{

    if($iddm > 0){
    $sql = "select * from danhmuc where id =" . $iddm;

    $dm = pdo_query_one($sql);

    extract($dm);

    return $namedm;
    }
    else{
        return "";
    }
}


function load_sanpham_cungloai($id, $iddm)
{
    $sql = "select * from sanpham where iddm=".$iddm." AND id <> " .$id;

    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function update_sanpham($id, $tensp, $giasp, $hinh, $mota, $iddm)
{



    // $sql = "UPDATE sanpham SET name = '{$tensp}', price = '{$giasp}', img = '{$hinh}' , mota = '{$mota}', iddm = '{$iddm}' WHERE id = $id";

    // pdo_execute($sql);


    if ($hinh != "") {

        $sql = "UPDATE sanpham SET name = '{$tensp}', price = '{$giasp}', img = '{$hinh}' , mota = '{$mota}', iddm = '{$iddm}' WHERE id = $id";
        
    } else {

        $sql = "UPDATE sanpham SET name = '{$tensp}', price = '{$giasp}', mota = '{$mota}', iddm = '{$iddm}' WHERE id = $id";

    }
    
    pdo_execute($sql);
}


function update_luotxem($luotxemnew, $id)
{

    
    $sql = "UPDATE sanpham SET luotxem = '$luotxemnew' where id = " . $id;
    pdo_execute($sql);



    
}




?>
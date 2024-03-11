<?php

function insert_danhmuc($tenloai)
{
    $sql = "INSERT INTO danhmuc (namedm) VALUES ('$tenloai') ";
    pdo_execute($sql);
}

function delete_danhmuc($id)
{
    $sql = "delete from danhmuc where id =" . $_GET['id'];
    pdo_execute($sql);
}

function loadall_danhmuc()
{
    $sql = "SELECT * FROM danhmuc order by id desc";
    $listdanhmuc = pdo_query($sql);
    return $listdanhmuc;
}

function loadone_danhmuc($id)
{
    $sql = "select * from danhmuc where id =" . $id;

    $dm = pdo_query_one($sql);

    return $dm;
}

function update_danhmuc($tenloai, $id)
{
    $sql = "UPDATE danhmuc SET namedm = '$tenloai' where id = " . $id;
    pdo_execute($sql);
}




?>
<?php 

function insert_taikhoan($email, $user, $pass)
{
    $sql = "INSERT INTO taikhoan (email, user, pass) VALUES ('$email', '$user', '$pass')";
    pdo_execute($sql);
}

function checkuser($user, $pass)
{
    $sql = "select * from taikhoan where user='".$user."' AND pass='".$pass."' " ;

    $sp = pdo_query_one($sql);

    return $sp;
}

function checkemail($email)
{
    $sql = "select * from taikhoan where email='".$email."' ";

    $sp = pdo_query_one($sql);

    return $sp;
}
function update_taikhoan($id, $user, $pass, $email, $address, $tel)
{

    $sql = "UPDATE taikhoan SET email = '{$email}', user = '{$user}', pass = '{$pass}', address = '{$address}', tel = '{$tel}' WHERE id = $id";

    pdo_execute($sql);
}



function loadall_taikhoan()
{
    $sql = "SELECT * FROM taikhoan order by id asc";
    $listtaikhoan = pdo_query($sql);
    return $listtaikhoan;
}

function delete_taikhoan($id)
{
    $sql = "delete from taikhoan where id =" . $_GET['id'];
    pdo_execute($sql);
}

function insert_taikhoan1($user, $pass, $email, $address, $tel)
{
    $sql = "INSERT INTO taikhoan (user, pass, email, address, tel) VALUES ('$user', '$pass', '$email', '$address', '$tel') ";
    pdo_execute($sql);
}

function loadone_taikhoan($id)
{
    $sql = "select * from taikhoan where id =" . $id;

    $tk = pdo_query_one($sql);

    return $tk;
}

?>

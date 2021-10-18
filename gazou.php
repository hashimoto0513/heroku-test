<form method="post" action="index" enctype="maltipart/form-data">
    <input type="file" name="gazou">
</form>

<?php


//pro_add_check.php
$pro_price=$_POST['price'];
$pro_gazou=$_FILES['gazou'];

if( $pro_gazou['size'] > 0){
    if( $pro_gazou['size'] > 100000){
        print'画像が大きすぎます';
    }else{
        move_uploaded_file($pro_gazou['tmp_name'],'./gazou/'.$pro_gazou['name']);//move_uploaded_file(移動元,移動先);
        print'<img src="./gazou/'.$pro_gazou['name'].'">';
        print'<br />';
    }

}

if($pro_name==''||preg_match('/¥[0-9]+¥z',$pro_price)==0||$pro_gazou[size]>100000)



print'<input type="hidden" name="price" value"' .$pro_price. '">';
print'<input type="hidden" name="gazou_name" value"' .$pro_gazou['name']. '">';



?>

//pro_add_done.php
<?php

$pro_price = $_POST['price'];
$pro_gazou_name =$_POST['gazou_name'];

$spl = 'INSERT INTO mst_product (name,pirce,gazou) VALUES(?,?,?)';
$stmt = $dbh->prepare($pql);
$data[] =$pro_name;
$data[] =$pro_price;
$data[] =$pro_gazou_name;
$stmt->execte($data);

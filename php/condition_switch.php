<?php
$angka = 20;

switch($angka){
    case 100:
        echo ("ini angka 100");
        break;
    case 50:
        echo ("ini angka 50"."<br>");
        break;
    case 0:
        echo ("ini angka 0");
        break;
    default:
        echo "ini tidak angka yang termasuk ";
        echo $angka * 2;

}


if($angka === 100){
    echo ("ini angka 100");
} else if($angka === 50){
    echo ("ini angka 50");
}

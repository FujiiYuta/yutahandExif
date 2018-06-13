<?php
//exifデータ取得・表示
function exif_print($exif_data){
    $exif = exif_read_data($exif_data);
    echo($exif['Make']." ");                           //メーカー
    echo($exif['Model'].", ");                         //モデル
    echo($exif['ExposureTime'].", ");                  //露出時間（シャッタースピード）
    echo($exif['COMPUTED']['ApertureFNumber'].", ");   //絞り値
    echo("ISO".$exif['ISOSpeedRatings'].", ");         //ISO感度
    // $tmp_value = $exif['ExposureBiasValue'];
    // $tmp_value = explode("/", $tmp_value) ;            //スラッシュの前のデータを取得
    // $tmp_value =(integer)$tmp_value[0];
    // $tmp_value =$tmp_value/10;
    // if ( $tmp_value  != 0 ) {
    //   echo($tmp_value."EV, ");                         //露出補正
    // }
    //echo($exif['DateTime'].", ");                    //日時
    $focal = $exif['FocalLength'];
    $focal = explode("/", $focal);
    $focal0 = (integer)$focal[0];
    $focal1 = (integer)$focal[1];
    $focalLength = $focal0/$focal1;
    echo($focalLength."mm, ");
    echo "photo by yutahand";
  }
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">

            <title>test</title>
            <style>
            .exif {
                position: relative; 
                top: -40px; 
                left: 360px;
                font-size: 80%;
                color: #abc; 
            }
            </style>
    </head>
 
    <body><div>
    
    <img src="http://yutahand.com/wp/wp-content/uploads/2017/12/20171112-DSC08957.jpg" width="800" height="600">
<p class="exif" >
  <?php exif_print("http://yutahand.com/wp/wp-content/uploads/2017/12/20171112-DSC08957.jpg"); ?>
</p>
    </div></body>
</html>
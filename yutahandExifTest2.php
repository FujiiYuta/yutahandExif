<?php
//エラー文の表示
ini_set("display_errors", 1);
error_reporting(E_ALL);
//ここでライブラリの読み込み
require_once 'pel/autoload.php';
use lsolesen\pel\PelJpeg;
use lsolesen\pel\PelTag;
use lsolesen\pel\PelIfd;
use lsolesen\pel\PelTiff;
//exif情報を取得する
function exif1($filename){
    $jpeg = new PelJpeg($filename);
    $app1 = $jpeg ->getExif();
    
    if($app1){
        $tiff = $app1->getTiff();
        $ifd0 = $tiff->getIfd();

        if($ifd0){
            $exif = $ifd0->getSubIfd(PelIfd::EXIF);
            $sony = $ifd0->getSubIfd(PelIfd::CANON_MAKER_NOTES);

            $maker = $ifd0->getEntry(PelTag::MAKE)->getText();                  //メーカー
            $model = $ifd0->getEntry(PelTag::MODEL)->getText();                 //モデル
            $shutterSpeed = $exif->getEntry(PelTag::EXPOSURE_TIME)->getText();  //シャッタースピード(露出時間)
            $FNum = $exif->getEntry(PelTag::FNUMBER)->getText();                //F値
            $ISO = $exif->getEntry(PelTag::ISO_SPEED_RATINGS)->getText();
            $focalLength = $exif->getEntry(PelTag::FOCAL_LENGTH)->getText();
        }

       
        echo $maker." ";
        echo $model.", ";
        echo $shutterSpeed.", ";
        echo $FNum.", ";
        echo "ISO".$ISO.", ";
        echo $focalLength;
        //echo "photo by yutahand";
    }
}
?>
<html lang="ja">
    <head>
        <meta charset="UTF-8">

        <title>yutaPelTest</title>
        <style>
            .exif {
                position: relative; 
                top: -40px; 
                left: 440px;
                font-size: 80%;
                color: #eee; 
            }
            </style>
    </head>
 
    <body><div>
    <img src="image/20170505-DSC07201.jpg" width="800" height="600">
    <p class="exif">
    <?php exif1("image/20170505-DSC07201.jpg"); ?>
    <!-- http://yutahand.com/wp/wp-content/uploads/2017/12/20171112-DSC08957.jpg -->
    </p>
    
    </div></body>
</html>
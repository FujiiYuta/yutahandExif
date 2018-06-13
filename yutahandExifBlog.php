<html lang="ja">
    <head>
        <meta charset="UTF-8">

            <title>[初心者でも簡単！]ブログ上の画像に自動でexif情報を載せる方法</title>
    </head>
 
    <body>
    	<p>とうとうこの日がやってきました。</p>
	<p>去年の秋ごろから散々悩まされたこの問題。</p>
	<a href="http://yutahand.com/confusing-about-flickr/" rel="noopener" target="_blank">【お困り】ブログにFlickrの写真を転載する際のシェアボタンなどが表示されない</a>
	<p>色々試行錯誤した結果wordpressに反映させることができましたので、ご紹介します。手っ取り早く方法を確認したい方は<a href="#kochira" >こちら</a>。</p>
	
	<h2 class="yutah2">ここまでのあらすじ</h2>
	<p>これまで辿ってきた経緯を説明します。</p>
	
	<ol class="yutaol">
		<li><span>自分の写真にクレジット代わりのウォーターマークを入れたかった。</span></li>
		<p>その際いろんな方々のようにexif情報を追加して表示させたかった。<a href="#exif">exif情報とは</a></p>
		<li><span>flickrExというブログパーツを使ってflickrの写真にexif情報を追加させたかったがいろんなerrorを吐いて動いてくれなかった。</span></li>
		<p>製作者のdrikinさんにも尋ねて見たのですが、原因がわからず。wordpressと相性が悪いのか、何かのプラグインが悪さをしているのか、、、</p>
		<li><span>wordpressのプラグイン「HK Exif Tags」を用いようかと考えたが、タイトルやキャプションを追加するようなもので、カメラ情報などのexifとは異なっていた。</span></li>
		<li><span>ちょうど行き詰まった頃に、学校のグループ課題で自分たちのグループがexifを扱うことに。</span></li>
		<p>その課題では僕がexifを受け渡しするphpファイルを作成したのでexif周りはだいぶ強くなった。課題のphpではPELというライブラリを使用したがwordpressを使用する際にFTPでアップロードするのがめんどくさく思ってしまった。</p>
		<p>そこで、phpにもともとある<b>exif_read_data関数</b>を使うことにした。</p>
		<li><span>exif_read_data関数を利用しexifを取得、表示させた。</span></li></ol>
	
	<h2 class="yutah2" id="exif">exif情報とは</h2>
	<p>そもそも<b>EXIFとはなんぞや</b>というところから。EXILEじゃあるまいし、、、おじさんか。(19歳です。笑)</p>
	<p>EXIFとは、<b>Exchangeable Image File Format</b>のことで、写真に付加メタデータ(のフォーマット)のことです。</p>
	<p>つまり、EXIFの中には「いつ」「どのように」「どこで」その写真が撮られたのかという情報が入っているのです。その情報を取り出すことで、他の人の参考にもなりますし、何しろ「自分の写真の勉強」を一層捗らせてくれるものなのです。</p>
	<p>それによって「こういう写真を撮るときはもっとF値を絞ったほうがよかったなぁ」などと自分の撮る写真の質を高めていくことができます。</p>
	<p>exif情報を載せている主なサイトとして、フォトヨドバシとマップカメラのサイトをご紹介します。</p>
	<a href="http://photo.yodobashi.com/sony/lens/sel35f14z/" rel="noopener" target="_blank">フォトヨドバシのサイト</a>
	<a href="https://news.mapcamera.com/KASYAPA.php?itemid=31129" rel="noopener" target="_blank">マップカメラのサイト</a>
	<p>どちらもとても素敵なギャラリーです。これを目指していました。</p>
	
	<h2 class="yutah2"　id="kochira">手順</h2>
	<p>今回、僕は様々な方の記事やphpのリファレンスを参考にしてブログパーツを作成しました。</p>
	<p>主に参考にさせていただいたのは<a href="http://eto-noriaki.net/exif-data-display/" rel="noopener" target="_blank">etoさんのブログ記事</a>です。phpのexif_read_data関数の性質など、とても簡単に書かれていてわかりやすい説明でした。</p>
	<p>この記事では詳しいphpの説明などはしません。何か質問などあれば、コメントしていただければできる限りは返信しようと思います。</p>
	<p>まず、下のphpファイルをコピーし、適宜編集し、wordpressのfunction.phpへペーストしてください。</p>
	<script src="https://gist.github.com/FujiiYuta/bbe18e5cac725cb1b44213761428dd10.js"></script>
	<p>etoさんのphpファイルと違うところは露出を載せていないところと焦点距離を追加したところなどです。</p>
	<p>さらに投稿ページ内でimgタグの後ろに、下のようなpタグで書かれた部分を追加するだけです。</p>
	<script src="https://gist.github.com/FujiiYuta/e21ef274931a01bdcdf3fe5d94d1e1b6.js"></script>
	<p>僕はスニペットツールで",exif"と入力すると勝手に生成されるように工夫しました。</p>
	<p>以上です。注意点としては</p>
	<ul class="yutaul">
		<li>写真自体にexif情報がつけられていないともちろん表示されない。</li>
		<li>cssはそれぞれ違う。</li>
		<li>"photo by"の後は変えなければいけない。</li>
	</ul>
	<p>の三つかな。それでは僕の写真をexif情報付きで公開します。ぜひご覧ください。</p>
	<ol　class="yutaol">
<li><span>aa</span></li>
<li><span>aa</span></li>
	<li><span>aa</span></li>
<li><span>aa</span></li>
</ol>
   </body>
</html>
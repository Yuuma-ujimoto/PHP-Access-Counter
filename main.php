<h2>あなたは</h2>
<?php
	$MAX_AC_LEN = 7; 
	//max access counter length
	$count = 0;
	//カウンターの初期化
	$file = fopen("count.txt", "r+");
	//ファイルを開いて値を取得する
	$count = fgets($file);
	//ファイルのデータを数値に変換してカウンターの変数に代入
	$count++;
	$count_str = strval($count);
	//アクセスカウンターの値を増やす
	rewind($file);
	fputs($file,$count_str);
	//ファイルにアクセスカウンターの値を保存
	fclose($file);
	//カウンターを数値型から文字列型に変換しインデックスを指定して値を取得できるようにする
	for ($i = 0 ; $i < $MAX_AC_LEN-strlen($count_str);$i++){//空白の回数ループ
		echo "<img src=\"images/none.png\">";
	}
	for($i=0 ; $i < strlen($count_str) ;$i++){//数値の出力ループ
		$c = $count_str[$i];
		echo "<img src=\"images/".$c.".png\">";
		//カウンターの一桁目から順番に対応する画像ファイルを出力
	}

 ?>
<h3>人目の訪問者です！</h3>
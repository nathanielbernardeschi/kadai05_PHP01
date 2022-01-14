<?php

//xss対策    https://qiita.com/mpyw/items/565b3670dd0c7f9162fa
function h($str){
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

$sex = $_POST ['sex'];
$age = $_POST ['age'];
$family = $_POST ['family'];
$budget = $_POST ['budget'];
$liveability = $_POST ['liveability'];
$helpcommunity = $_POST ['helpcommunity'];
$problems = $_POST ['problems'];


// ファイルに書き込むデータ
$date = date('Y/m/d H:i:s');
$str = $date . '/' . $sex . '/' . $family . '/' . $budget . '/' . $liveability . '/' . $helpcommunity . '/' . $problems;


// ファイルの用意
$file = fopen('./data/data.txt', 'a');

// 書き込み
//fwrite($file, $date . "\n");
fwrite($file, $str . "\n");

// ファイルをクローズ
fclose($file);

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Write</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class=endPage>
        <h1>ご協力ありがとうございました。</h1>
        <h2>（./data/data.txtにデータが格納される）</h2>
    </div>

    <ul>
        <li><a href="read.php">データを確認する</a></li>
        <li><a href="post.php">アンケート画面に戻る</a></li>
    </ul>
</body>

</html>

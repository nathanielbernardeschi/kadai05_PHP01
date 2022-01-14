<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ReadOnly</title>    
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    
<?php
// ファイルを開く
$file = fopen('./data/data.txt', 'r');

//配列定義
$ary_sex = [];
$ary_age = [];
$ary_family = [];
$ary_budget = [];
$ary_liveability = [];
$ary_helpcommunity = [];
$ary_problems = [];

//ファイル内容を1行ずつ読み込んで出力   テンプレートとして覚える
//配列を作成して出力したデータを代入
while($str = fgets($file)){
    echo nl2br($str);
    $str_base = nl2br($str);
    $ary_base = explode("/",$str_base);     //文字列を分割  https://persol-tech-s.co.jp/hatalabo/it_engineer/468.html
    //var_dump($ary_base);    //書き出し

    $ary_sex[] = $ary_base[1];
    $ary_age[] = $ary_base[2];
    $ary_family[] = $ary_base[3];
    $ary_budget[] = $ary_base[4];
    $ary_liveability[] = $ary_base[5];
    $ary_helpcommunity[] = $ary_base[6];
    $ary_problems[] = $ary_base[7];
    //var_dump($ary_sex);
}

//性別の割合
$count_sex = array_count_values($ary_sex);  //該当する値の出現数をカウントする関数
$sum_sex = count($ary_sex); 
$sum_male_sex = $count_sex["male"]/$sum_sex;
$sum_female_sex = $count_sex["female"]/$sum_sex;
$sum_nonbinary_sex = $count_sex["non-binary"]/$sum_sex;
$sum_noanswer_sex = $count_sex[" "]/$sum_sex;
var_dump($sum_sex);
var_dump($sum_male_sex);//int(0)になる？

// ファイルを閉じる
fclose($file);
?>


<div>
    <canvas id="chartQ1" width="640px"></canvas>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    var ctx = document.getElementById('chartQ1');
    var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['male', 'female', 'non-binary'],
        datasets: [{
        label: 'sum',
        data: [5],
        backgroundColor: '#fff',
        },],
    },
    });
    
</script>
</div>


</body>
</html>



<!-- ーーPHP処理ーー -->
<?php 

$hands = ['グー', 'チョキ', 'パー'];

if (isset($_POST['playerHand'])) {
    // プレイヤーの手
    $playerHand = $_POST['playerHand'];

    // PCの手
    $rand_key = array_rand($hands);
    $pcHand = $hands[$rand_key];

    // 勝敗を判定
    if ($playerHand == $pcHand){
        $result = "draw";
    }elseif ($playerHand == 'グー' && $pcHand == 'チョキ') {
        $result = 'You win';
    }elseif ($playerHand == 'チョキ' && $pcHand == 'パー') {
        $result = 'You win';
    }elseif ($playerHand == 'パー' && $pcHand == 'グー') {
        $result = 'You win';
    }else {
        $result = 'You loss';
    }
}
?>

<!-- ーーPHP処理ーー -->

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheet.css">
    <title>ジャンケン</title>
</head>
<body>
    <div id= "wrapper">
        <header>
            <div class="header-logo">最初はグーじゃんけんぽん</div>
        </header>
        <main>
            <h1>結果は・・・</h1>
            <div calss="result-box">
                <p class="result-area"><?= $result ?></p>

                You : <?= $playerHand ?><br>
                PC  : <?= $pcHand ?><br>

                <p><a class="try" href="index.php">もう一度勝負する</a></p>
            </div>
        </main>
        <footer>
            <small>@_lalala_shuntaro</small>
        </footer>
    </div>
</body>
</html>
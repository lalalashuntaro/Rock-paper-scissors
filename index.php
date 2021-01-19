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
            <h1>ジャンケン</h1>
            出す手を選んで勝負してください。
            <div class="form-box">
                <form action="result.php" method="post">
                <ul>
                    <li>
                        <input type="radio" name="playerHand" value="グー" checked >グー
                    </li>
                    <li>
                        <input type="radio" name="playerHand" value="チョキ">チョキ
                    </li>
                    <li>
                        <input type="radio" name="playerHand" value="パー">パー
                    </li>
                    </ul>
                    <input class="battle-button" type="submit" value="勝負する">
                </form>
            </div>
        </main>
        <footer>
            <small>@_lalala_shuntaro</small>
        </footer>
    </div>
</body>
</html>

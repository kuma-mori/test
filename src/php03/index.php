<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/ress@4.0.0/dist/ress.min.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/index.css">
    <title>Document</title>
</head>
<body>
    <header id="header">
        <div class="header_inner">
            <a href="index.php" class="header_logo">World Clock</a>
        </div>
    </header>
    <main>
        <div class="search_content">
            <h2>日本と世界の時間を比較</h2>
        </div>
        <form action="result.php" method="get" class="search_form">
            <div class="search_item">
                <select name="city" id="search_select">
                    <option value="シドニー">シドニー</option>
                    <option value="上海">上海</option>
                    <option value="モスクワ">モスクワ</option>
                    <option value="ロンドン">ロンドン</option>
                    <option value="ヨハネスブルグ">ヨハネスブルグ</option>
                    <option value="ニューヨーク">ニューヨーク</option>
                </select>
            </div>
            <div class="search_button">
                <button class="submit" type="submit">検索</button>
            </div>
        </form>
    </main>
</body>
</html>
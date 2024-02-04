<?php
    require_once('functions/search_city_time.php');
    $tokyo = searchCityTime('東京');
    
    $city = '';
    if (isset($_GET['city'])) {
      $city = htmlspecialchars($_GET['city'], ENT_QUOTES);
    }
    
    $comparison = searchCityTime($city);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/ress@4.0.0/dist/ress.min.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/result.css">
    <title>Document</title>
</head>
<body>
    <header id="header">
        <div class="header_inner">
            <a href="index.php" class="header_logo">World Clock</a>
        </div>
    </header>
    <main>
        <div class="result_content">
            <div class="result_cards">
                <div class="result_card">
                    <div class="img_wrapper">
                        <img src="img/<?php echo $tokyo['img']?>" alt="国旗" class="card_img">
                    </div>
                    <div class="card_body">
                        <p class="card_city"><?php echo $tokyo['name']?></p>
                        <p class="card_time"><?php echo $tokyo['time']?></p>
                    </div>
                </div>
                <div class="result_card">
                    <div class="img_wrapper">
                        <img src="img/<?php echo $comparison['img']?>" alt="国旗" class="card_img">
                    </div>
                    <div class="card_body">
                        <p class="card_city"><?php echo $comparison['name']?></p>
                        <p class="card_time"><?php echo $comparison['time']?></p>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
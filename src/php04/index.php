<?php
require_once('config/status_codes.php');
$random_numbers = array_rand($status_codes, 4);

foreach ($random_numbers as $index) {
    $options[] = $status_codes[$index];
}
$question = $options[mt_rand(0, 3)];
?>

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
            <a href="#" class="header_logo">Status Code Cuiz</a>
        </div>
    </header>
    <main>
        <div class="quiz_content">
            <div class="question">
                <p class="question_text">Q.以下の内容に当てはまるステータスコードを選んでください。</p>
                <p class="question_text"><?php echo $question['description'] ?></p>
            </div>
            <form action="result.php" method="post" class="quiz_form">
                <input type="hidden" name="answer_code" value="<?php echo $question['code'] ?>">
                <div class="quiz_item">
                    <?php foreach ($options as $option): ?>
                    <div class="quiz_group">
                        <input type="radio" name="option" class="quiz_radio" id="<?php echo $option['code'] ?>" value="<?php echo $option['code'] ?>">
                        <label for="<?php echo $option['code'] ?>" class="quiz_label"><?php echo $option['code'] ?></label>
                    </div>
                    <?php endforeach; ?>
                </div>
                <div class="quiz_button">
                    <button class="button_submit" type="submit">回答</button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>
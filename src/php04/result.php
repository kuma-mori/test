<?php
require_once('config/status_codes.php');
$answer_code = htmlspecialchars($_POST['answer_code'], ENT_QUOTES);
$option = htmlspecialchars($_POST['option'], ENT_QUOTES);
if (!$option) {
    header('Location: index.php');
}
foreach ($status_codes as $status_code) {
    if ($status_code['code'] === $answer_code) {
        $code = $status_code['code'];
        $description = $status_code['description'];
    }
    $result = $option === $code;
}
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
            <a href="index.php" class="header_logo">Status Code Cuiz</a>
        </div>
    </header>
    <main>
        <div class="result_content">
            <div class="result">
                <?php if ($result): ?>
                <h2 class="result_correct">正解</h2>
                <?php else: ?>
                <h2 class="result_incorrect">不正解</h2>
                <?php endif; ?>
            </div>
            <div class="answer_table">
                <table class="answer_inner">
                    <tr class="answer_row">
                        <th class="answer_header">ステータスコード</th>
                        <td class="answer_text"><?php echo $code ?></td>
                    </tr>
                    <tr class="answer_row">
                        <th class="answer_header">説明</th>
                        <td class="answer_text"><?php echo $description ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </main>
</body>
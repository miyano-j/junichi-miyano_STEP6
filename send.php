<?php
    if ($_SERVER["REQUEST_METHOD"] !== "POST") {
        header("Location: contact.php");
        exit;
    }

    $name = $_POST["name"];
    $companyName = $_POST["companyName"];
    $email = $_POST["email"];
    $age = $_POST["age"];
    $message = $_POST["message"];

    $to = "自分のメールアドレス";
    $subject = "お問い合わせがありました";
    $body =
        "お名前:" . $name . "\n" .
        "会社名:" . $companyName . "\n" .
        "メールアドレス:" . $email . "\n" .
        "年齢:" . $age . "\n" .
        "お問い合わせ内容:" . $message;

    $result = mail($to, $subject, $body);

    if ($result) {
        $resultMessage = "お問い合わせが送信されました。ありがとうございます！";
    } else {
        $resultMessage = "メール送信に失敗しました。";
    }

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>お問い合わせフォームｰ送信完了画面</title>
</head>

<body>
    <h1>お問い合わせフォームｰ送信完了画面</h1>

    <p><?php echo $resultMessage; ?></p>

    <a href="contact.php">お問い合わせフォームに戻る</a>
</body>
</html>
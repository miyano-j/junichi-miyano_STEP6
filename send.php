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

    if (
        empty($_POST["name"]) ||
        empty($_POST["companyName"]) ||
        empty($_POST["email"]) ||
        empty($_POST["age"]) ||
        empty($_POST["message"])
    ) {
        $resultMessage = "メール送信に失敗しました。";
    } else {
        $resultMessage = "お問い合わせが送信されました。ありがとうございます！";
    }

?>

<p>
    <?php echo $resultMessage; ?>
</p>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>お問い合わせフォームｰ送信完了画面</title>
</head>

<body>
    <h1>お問い合わせフォームｰ送信完了画面</h1>

    <?php
        echo "お問い合わせが送信されました。ありがとうございます！";
    ?>

<br>

<a href="contact.php">お問い合わせフォームに戻る</a>
</body>
</html>
<?php
    $name = $_POST["name"];
    $companyName = $_POST["companyName"];
    $email = $_POST["email"];
    $age = $_POST["age"];
    $message = $_POST["message"];
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>お問い合わせフォーム</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h2>お問い合わせフォームｰ確認画面</h2>
    </header>

    <aside>
        <ul>
            <li><a href="#">トップページ</a></li>
            <li><a href="#">人気投稿</a></li>
            <li><a href="#">エンジニアおすすめ商品</a></li>
            <li><a href="#">エンジニアおすすめ記事</a></li>
            <li><a href="#">投稿ページ</a></li>
        </ul>
    </aside>

    <table>
        <tr>
            <th>お名前</th>
            <td><?php echo $name; ?>
            </td>
        </tr>
        <tr>
            <th>会社名</th>
            <td><?php echo $companyName; ?>
            </td>
        </tr>
        <tr>
            <th>メールアドレス</th>
            <td><?php echo $email; ?>
            </td>
        </tr>
        <tr>
            <th>年齢</th>
            <td><?php echo $age; ?>
            </td>
        </tr>
        <tr>
            <th>お問い合わせ内容</th>
            <td><?php echo $message; ?>
            </td>
        </tr>
    </table>
    
    <form action="send.php" method="POST">
    <input type="hidden" name="name" value="<?php echo $name; ?>">
    <input type="hidden" name="companyName" value="<?php echo $companyName; ?>">
    <input type="hidden" name="email" value="<?php echo $email; ?>">
    <input type="hidden" name="age" value="<?php echo $age; ?>">
    <input type="hidden" name="message" value="<?php echo $message; ?>">
    <input type="submit" value="送信">

    <button type="button" onclick="history.back();">
        戻る
    </button>
</body>
</html>
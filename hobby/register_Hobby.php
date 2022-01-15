<div class=gazou>
    <img src="old.jpg" width="100%" height="100px">
</div>
<?php
require_once __DIR__ . '/../header.php';
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>趣味登録</title>
    <link rel="stylesheet" href="register_Hobby.css">
</head>


<body>
    <p class="font1">登録</p>
    <form action="register_Hobby_DB.php" method="POST">
        <table>
            <tr>
                <td>URL</td>
                <td><input type="text" name="URL"></td>
            </tr>
            <tr>
                <td>タグ</td>
                <td><input type="text" name="tag"></td>
            </tr>
            <tr>
                <td>メモ</td>
                <td><textarea name="memo" cols="50" rows="5"></textarea></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="送信"></td>
            </tr>
        </table>
    </form>
</body>

<script src="../script.js"></script>

</html>
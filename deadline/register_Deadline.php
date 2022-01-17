<div class=gazou>
    <img src="../old.jpg" width="100%" height="100px">
</div>
<?php
require_once __DIR__ . '/../header.php';
require_once __DIR__ . '/../util.php';
//DB接続設定
require_once '../DB.php';

$sql = "SELECT DISTINCT * FROM tags";
$stmt = $pdo->query($sql);
$stmt->execute();
$tags = $stmt->fetchall();

?>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>サンプル</title>
    <link rel="stylesheet" href="HP.css">
</head>

<main>
    <h1 class="font1">締め切り登録</h1>
    <form action="register_Deadline_DB.php" method="POST">
        <li class="tagname">
            <!--tagの表示-->
            <select name='tag'>
                <?php
                //tagを取得
                foreach ($tags as $tags) {
                    $tags_list = "<option value='" . h($tags['tag']);
                    $tags_list .= "'>" . h($tags['tag']) . "</option>";
                    echo $tags_list;
                }
                ?>
            </select>
        </li>
        <li class="daimei">
            <tr>
                <td>題名</td>
                <td><input type="text" name="title"></td>
            </tr>
        </li>
        <li class="dating">
            <tr>
                <td>日付</td>
                <td><input type="date" name="day"></td>
            </tr>
        </li>
        <li class="tag">
            <tr>
                <td>タグ</td>
                <td><input type="text" name="tag"></td>
            </tr>
        </li>
        <li class="time">
            <tr>
                <td>時間</td>
                <td><input type="time" name="time"></td>
            </tr>
        </li>
        <li class="memo">
            <tr>
                <td>メモ</td><br>
                <td><textarea name="memo" cols="50" rows="5"></textarea></td>
            </tr>
        </li>
        <li class="sousin">
            <tr>
                <td colspan="2">
                    <input type="submit" value="送信">
                </td>
            </tr>
        </li>
    </form>
</main>
<script src="../script.js"></script>
</html>
<?php
require_once __DIR__ . '/../header.php';
?>

<p>'ユーザー情報を登録してください'</p>
<form method="POST">
<table>
  <tr><td>Eメール</td><td><input type="text" name="userId" value="<?= h($userId)?>" required></td></tr>
  <tr><td>名前</td><td><input type="text" name="userName" value="<?= h($userName)?>"required></td></tr>
  <tr><td>フリガナ</td><td><input type="text" name="kana" value="<?= h($kana)?>"required></td></tr>
  <tr><td>郵便番号</td><td><input type="text" name="zip" value="<?= h($zip)?>"required></td></tr>
  <tr><td>住所</td><td><input type="text" name="address" value="<?= h($address)?>"required></td></tr>
  <tr><td>電話番号</td><td><input type="text" name="tel" value="<?= h($tel)?>"required></td></tr>
  <tr><td>パスワード</td><td><input type="password" name="password" required></td></tr>
  <tr><td colspan="2"><input type="submit" value="送信"></td></tr>
</table>

<?php
$name = htmlspecialchars($_POST["name"], ENT_QUOTES);
$item = htmlspecialchars($_POST["item"], ENT_QUOTES);
$quantity = htmlspecialchars($_POST["quantity"], ENT_QUOTES);

echo "お名前は「{$name}」です。<br>";
echo "ご希望商品は「{$item}」です。<br>";
echo "ご注文数は「{$quantity}」です。<br>";
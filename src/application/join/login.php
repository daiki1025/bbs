<?php
require 'password.php';
session_start();

$db['host'] = "localhost";
$db['user'] = "daiki";
$db['pass'] = "daiki1025";
$db['dbname'] = "kadai";
$errorMessage = "erro";

// ログインボタンが押された場合
if (isset($_POST["loginbutton"])) {
  // １．ユーザIDの入力チェック
  if (empty($_POST["name"])) {
    $errorMessage = "ユーザIDが未入力です。";
  } else if (empty($_POST["pass"])) {
    $errorMessage = "パスワードが未入力です。";
  }
  if (!empty($_POST["name"]) && !empty($_POST["pass"])) {
      $mysqli = new mysqli($db['localhost'], $db['daiki'], $db['daiki1025']);
      if ($mysqli->connect_errno) {
        print('<p>データベースへの接続に失敗しました。</p>' . $mysqli->connect_error);
        exit();
      }
      $mysqli->select_db($db['user']);

          $userid = $mysqli->real_escape_string($_POST["name"]);

          $query = "SELECT * FROM db_user WHERE name = '" . $userid . "'";
          $result = $mysqli->query($query);
          if (!$result) {
            print('クエリーが失敗しました。' . $mysqli->error);
            $mysqli->close();
            exit();
          }

          while ($row = $result->fetch_assoc()) {

            $db_hashed_pwd = $row['pass'];
          }

          $mysqli->close();

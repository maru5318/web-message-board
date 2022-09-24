<?php

if(isset($_POST['id']) && $_POST['id']){
  $stmt = $dbh -> prepare('DELETE from posts where id = :id');
  $stmt->bindValue(':id',$_POST['id'],PDO::PARAM_INT);//int型変換
  $stmt->execute();
  $_SESSION['action_success_text'] = '削除が完了しました';
  $_SESSION['action_error_text'] = '';
}else{
  $_SESSION['action_success_text'] = '';
  $_SESSION['action_error_text'] = 'id がありません';
}
header('Location: /');
exit();
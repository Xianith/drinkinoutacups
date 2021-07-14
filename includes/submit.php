<?php
    header('Content-Type: application/json');

    require __DIR__ . "/../config.php";

    $conn = new mysqli($servername, $username, $password, $dbname);
    $conn->set_charset('utf8mb4');
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    if( (!isset($_POST['nick']) || !isset($_POST['show_roll']) || !isset($_POST['intro'])) ) { $aResult['error'] = 'Missing info!'; }
    if( !isset($aResult['error']) ) {
      $userId = $_POST['did'];

      $aResult = $_POST['nick'] . $_POST['show_roll'] . $_POST['intro'];
      $sql = 'UPDATE users SET nick = "'.$_POST['nick'].'", intro = '.$_POST['intro'].', show_roll = '.$_POST['show_roll'].' WHERE did = '.$userId;
      $conn->query($sql);
      $conn->close();
    }
    echo $userId;
?>
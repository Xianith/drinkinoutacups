<?php

/* Home Page
* The home page of the working demo of oauth2 script.
* @author : MarkisDev
* @copyright : https://markis.dev
*/

//origin https://youtu.be/Zm5o_r4Lyc0?t=60

error_reporting(E_ALL);
ini_set('display_errors', 1);

$dev = false;

require __DIR__ . "/includes/functions.php";
require __DIR__ . "/includes/discord.php";
require __DIR__ . "/config.php";

$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset('utf8mb4');
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if (isset($_SESSION['user_id'])) {
  if ($_SESSION['user_id'] == 105403816186257408) { $dev = true; } 
  $sql = "SELECT nick, intro, show_roll, did FROM users WHERE did = " . $_SESSION['user_id'];
  $users = $conn->query($sql);

  $sql = "SELECT * FROM songs";
  $songs = $conn->query($sql);
  $conn->close();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {//Check it is coming from a form
  $conn = new mysqli($servername, $username, $password, $dbname);
  $conn->set_charset('utf8mb4');
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = 'UPDATE users SET nick = "'.$_POST['nick'].'", intro = '.$_POST['intro_select'].', show_roll = '.$_POST['toggle_roll'].' WHERE did = '.$_POST['did'];
  $conn->query($sql);
  $conn->close();

  echo "<meta http-equiv='refresh' content='0'>";
}

?>

<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Vidya game group">
  <link rel="icon" href="assets/img/favicon.ico">
  <title>D O C</title>
  <script src="includes/main.js"></script>
  <link rel="stylesheet" href="assets/css/style.css">
  <link href="../../bs5/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

</head>

<body>
  <header> 
    <span class="menu">
      <?php
      $auth_url = url($client_id, $redirect_url, $scopes);
      if (isset($_SESSION['user'])) { ?>
        <img class="avatar" src="https://cdn.discordapp.com/avatars/<?php $extention = is_animated($_SESSION['user_avatar']);
                                              echo $_SESSION['user_id'] . "/" . $_SESSION['user_avatar'] . $extention; ?>" />
        <a href="includes/logout.php"><button class="log-in">LOGOUT</button></a>

        <div class="user">
          <h2> <?php echo $_SESSION['username'] ?></h2>
          <?php if ($dev == true) { ?>
          <button type="button" class="dev-btn btn btn-light btn-lg" onclick="toggleDev()">
            <span class="far fa-eye" aria-hidden="true"></span>
          </button>
          <?php } ?>
          <hr>
          <strong>Obiwan Configuration</strong>

          <?php 
            while($row = $users->fetch_assoc()) {
              $did = $row['did'];
              $nick = $row['nick'];
              $showRoll = $row["show_roll"];
              $songId = $row["intro"];

              // dev
              // echo $did . ' - ' . $nick . ' - ' . $showRoll . ' - ' . $songId;
            } 
            if (!empty($did)) {?>

            <form action="" method="post">

              <input id='toggle_roll' name='toggle_roll' type="hidden" value="<?php echo $showRoll; ?>">
              <input id='did' name='did' type="hidden" value="<?php echo $did; ?>">

            <div class="btn-toolbar mb-3" role="toolbar" aria-label="Toolbar with button groups">
             
              <div id="hide_roll" class="btn-group me-2 <?php if ($showRoll == 1) { echo "d-none"; }?>" role="group" aria-label="Basic checkbox toggle button group">
                <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off">
                <label class="btn btn-danger" for="btncheck1" onclick="toggleRoll(0)">🎲 Hidden</label>
              </div>
              <div id="show_roll" class="btn-group me-2 <?php if ($showRoll == 0) { echo "d-none"; }?>" role="group" aria-label="Basic checkbox toggle button group">
                <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off">
                <label class="btn btn-success" for="btncheck1" onclick="toggleRoll(1)">🎲 Shown</label>
              </div>
              <div class="input-group">
                <div class="input-group-text" id="btnGroupAddon">Nickname</div>
                <input id="nick" name="nick" type="text" class="form-control" placeholder="What the bot shows" aria-label="What the bot shows" aria-describedby="btnGroupAddon" value="<?php echo $nick ?>">
              </div>
            </div>
            <label for="intros">Intro</label>
                        <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="intro_select" name="intro_select" value="nick">
                          <option value="9999">OFF - No greeting</option>
                          <option value="0">NONE - Obiwan will still say hi</option>
                            <?php 
                            while($row = $songs->fetch_assoc()) {
                              if ($row["nick"] === "NULL") { $row["nick"] = ''; } else { $row["nick"] = ' - ' . $row["nick"]; }
                              if (empty($audioList)) {
                                $audioList = '<li class="list-group-item d-flex justify-content-between align-items-start"><div>
                                     <div class="fw-bold">' . str_replace('.mp3', '', $row["mp3"]) . $row["nick"] .'</div>
                                     <audio controls>
                                       <source src="audio/'.$row["mp3"].'" type="audio/mpeg">
                                     Your browser does not support the audio element.
                                     </audio>
                                     </div></li>';
                              } else { $audioList = $audioList.'<li class="list-group-item d-flex justify-content-between align-items-start"><div>
                                     <div class="fw-bold">' . str_replace('.mp3', '', $row["mp3"]) . $row["nick"].'</div>
                                     <audio controls>
                                       <source src="audio/'.$row["mp3"].'" type="audio/mpeg">
                                     Your browser does not support the audio element.
                                     </audio>
                                     </div></li>'; }

                              if ($row["id"] == $songId) {
                                echo '<option selected value="'.$row['id'].'">'.$row['id'].'. '.str_replace('.mp3','',$row['mp3']).'</option>';
                              } else {
                                echo '<option value="'.$row['id'].'">'.$row['id'].'. '.str_replace('.mp3','',$row['mp3']).'</option>';
                              }
                            } ?>
                        </select>

                        <div class="d-grid gap-2" id="botSave" style="margin-top:5px;">
                          <button class="btn btn-success" type="submit">Save</button>
                        </div>
                </form>
        </div>

      <?php }

      } else {
        echo "<a href='$auth_url'><button class='log-in sneaky'>LOGIN</button></a>";
      }
      ?>
    </span>
  </header>

  <div class="container">
    <div class="jumbotron logo">
      <h1>Drinkin Outa Cups</h1>
    </div>
      <center>
         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
           <h4>🕹️ Discord Channels</h4>
             <a href="https://discord.gg/tXsb9qP" class="game discord">
               <img src="assets/img/amongus.png"></img>
               <span class="title">Among Us</span>
             </a>
             <a href="https://discord.gg/hBPUUYu" class="game discord">
               <img src="https://is3-ssl.mzstatic.com/image/thumb/Purple124/v4/a7/c3/a6/a7c3a605-7dc6-5e14-0103-909e059c47b1/source/1200x1200bb.png"></img>
               <span class="title">Minecraft</span>
             </a>
             <a href="https://discord.gg/SPtHh6Z" class="game discord">
               <img style="border: none" src="assets/img/apex.png"></img>
               <span class="title">Apex</span>
             </a>
           <br><a style="color: #7289da; font-size:11px;" href="https://discord.gg/8xc8vpk">Join without a preferred Channel</a>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 communitylinks">
           <h4>💬 Communities</h4>
             <a href="http://battlelog.battlefield.com/bf3/platoon/2832655391655399123/"><div class="game">
               <img src="assets/img/bf3.png"></img>
               <span class="title">BF3</span>
             </div></a><a href="http://battlelog.battlefield.com/bf4/platoons/view/1531607328554334503/"><div class="game">
               <img src="assets/img/bf4.png"></img>
               <span class="title">BF4</span>
             </div></a>
             <a href="http://rustydallas.net/servers/"><div class="game">
               <img src="assets/img/rust.png"></img>
               <span class="title">Rust</span>
             </div></a>
             <a href="http://steamcommunity.com/groups/drinkinoutacups"><div class="game">
               <img src="assets/img/steam.png" style="border: none"></img>
               <span class="title">Steam</span>
             </div></a>
             <a href="https://blizzard.com/invite/bL24MGGhzPp"><div class="game">
               <img src="assets/img/battle-net.png" style="border: none"></img>
               <span class="title">Battle Net</span>
             </div></a>
         </div>
         <?php if (isset($_SESSION['user']) && !empty($did)) { ?>
         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 communitylinks">
            <h4>🎧 Audio List</h4>
            
              <ol class="audio-list list-group list-group-numbered">
              <?php 
              $list = str_replace('NULL', '', $audioList);
              echo $list ?>
              </ol>
          </div>
        <?php } ?>
     </center>
  </div>
<?php if ($dev == true) { ?>
  <div class="container d-none" id="dev">
    <h1 style="text-align: center;">User Details</h2>
        <p> Name : <?php echo $_SESSION['username'] . '#' . $_SESSION['discrim']; ?></p>
        <p> ID : <?php echo $_SESSION['user_id']; ?></p>
        <?php
        if (isset($_SESSION['email'])) {
          echo '<p> Email: ' . $_SESSION['email'] . '</p>';
        }
        ?>

        <p> Profile Picture : <img src="https://cdn.discordapp.com/avatars/<?php $extention = is_animated($_SESSION['user_avatar']);
                                          echo $_SESSION['user_id'] . "/" . $_SESSION['user_avatar'] . $extention; ?>" /></p>
        <br>
        <h2>User Response :</h2>
        <div class="response-block">
          <p><?php echo json_encode($_SESSION['user']); ?></p>
        </div>
        <br>
        <h2> User Guilds :</h2>
        <table border="1">
          <tr>
            <th>NAME</th>
            <th>ID</th>
          </tr>
          <?php
          for ($i = 0; $i < sizeof($_SESSION['guilds']); $i++) {
            echo "<tr><td>";
            echo $_SESSION['guilds'][$i]['name'];
            echo "<td>";
            echo $_SESSION['guilds'][$i]['id'];
            echo "</td>";
            echo "</tr></td>";
          }
          ?>
        </table>
        <br>
        <h2> User Guilds Response :</h2>
        <div class="response-block">
          <p> <?php echo json_encode($_SESSION['guilds']); ?></p>
        </div>
        <br>
        <h2> User Connections :</h2>
        <table border="1">
          <tr>
            <th>NAME</th>
            <th>TYPE</th>
          </tr>
          <?php
          for ($i = 0; $i < sizeof($_SESSION['connections']); $i++) {
            echo "<tr><td>";
            echo $_SESSION['connections'][$i]['name'];
            echo "<td>";
            echo $_SESSION['connections'][$i]['type'];
            echo "</td>";
            echo "</tr></td>";
          }
          ?>
        </table>
        <br>
        <h2> User Connections Response :</h2>
        <div class="response-block">
          <p> <?php echo json_encode($_SESSION['connections']); ?></p>
        </div>
  </div>
<?php } ?>

</body>

<script type="text/javascript">
  var audio = document.querySelectorAll('audio');
  audio.forEach(a => {a.volume = 0.2; })
</script>

</html>
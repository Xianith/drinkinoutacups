<html>
<head>

<meta name="author" content="Ben">
<link rel="icon" href="../img/favicon.ico">

<title>D O C - Rust</title>

<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.9.0/styles/monokai-sublime.min.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.9.0/highlight.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<link href="../bs/css/bootstrap.min.css" rel="stylesheet">
<link href="../css/rust.css" rel="stylesheet">
<script src="../js/rust.js"></script>

<!-- Discord Js -->
<script type="text/javascript" src="../js/rust.discord.min.js"></script>
<script type="text/javascript">
  discordWidget.init({
    serverId: '284191274272292866',
    title: '',
    join: false,
    alphabetical: false,
    theme: 'none',
    hideChannels: [],
    showAllUsers: true,
    allUsersDefaultState: true
  });
  discordWidget.render();
</script>
</head>

<body id="page-top">

<?php include("../includes/modals.php");?>

<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                Drinkin Outa Cups
            </button>
            <a class="navbar-brand page-scroll" href="#page-top">
                Drinkin Outa Cups
            </a>
        </div>

        <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
            <ul class="nav navbar-nav">

                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li>
                    <a class="page-scroll" class="nav-btn Start" href="#start">Info</a>
                </li>
                <li>
                    <a class="page-scroll" class="nav-btn" href="#feedback">Feedback</a>
                </li>
                <li>
                    <a class="page-scroll" class="nav-btn" href="#stats">Stats</a>
                </li>
                <li>
                    <a class="page-scroll" class="navbtn" href="#plugins">Plugins</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="bgimg-1">
  <div class="caption">
    <a class="page-scroll" href="#start"><span class="border logo">DRINKIN OUTA CUPS</span></a>
  </div>

  <!-- <div class="scroll-indicator">
  	<a href="#start" class="page-scroll" title="Scroll Down"><span class="glyphicon glyphicon-chevron-down"></span></a>
  </div> -->
</div>

<a name="start"></a>
<div style="color: #777;background-color:white;text-align:center;padding:50px 80px" id="start">
<!-- H3 Header -->
<?php include("query/include.php");?> 

<hr>

  <p>We strive to bring a decent atmosphere to rust without adding too much overhead. Everything within the game should be easily accessible via the <b>/help</b> menu.</p>

  <p>You can donate for perks through the <b>/donate</b> store. Gold is used in the Gold shop for temp perks.</p>

  <p>All donor perks can be purcahsed in game via the <b>/gold</b> shop. Dedicated staff members are always available to help through Discord.</p>

<!--   <div id="promo">
    <h3>Refer a friend and win a prize!</h3>
    <p>Refer friends to join our server and we'll grant you a <b>full day of VIP</b> status per invite (up to 15 days).</p>
    <p>Get in touch with an active admin to get your VIP status and for additional details!</p>

    <hr>
    <h4>New players rejoice!</h4>
    <p>When you connect and vote for the first time you get <b>48 hours of offline raid protection!</b> as well as the following <a target="_blank" class="modalOpener" data-modal="starterBox">starter kit!</a></p>
    <div style="font-size:11px;line-height: 1px"><p>After 18 hours the damage scale goes from 0% to 25% after 24 it goes to 50% and after 48 it is back up to 100%</p>
    <p>To avoid abuse there is a 30 minute wind up timer and all members of a clan must be offline for the protection to take effect.</p></div>
  </div> -->

  <hr>
  <h4>Our awesome deets</h4>
  <div class="rates" style="text-align: center; display: inline-block;">
      <ul class="list-group" style="text-align: left; max-width: 20em;min-width: 15em; float:left;">
        <a href="#gathermanager" class="list-group-item">Gather rate<span class="badge">x10</span></a>
        <a href="#fancydrop" class="list-group-item">Mass Drops <span class="badge">hourly</span></a>
        <a href="#stacksize" class="list-group-item">Improved stack sizes</a>
        <a href="#alphaloot" class="list-group-item">Removed useless items</a>
      </ul>
     <ul class="list-group" style="text-align: left; max-width: 20em;min-width: 15em; float:left; margin-left: 2px">
        <a href="#moneytime" class="list-group-item">Caps per hour <span class="badge">30k</span></a>
        <a href="#autopurge" class="list-group-item">Purge <span class="badge">every 6 hours</span></a>
        <!-- <a href="#offlineraid" class="list-group-item">Offline Raid protection</a> -->
       <a href="#alphaloot" class="list-group-item">Better loot tables</a>
       <li class="list-group-item">Wipes weekly</li>
     </ul>
     <ul class="list-group" style="text-align: left; max-width: 20em;min-width: 15em; float:left; margin-left: 2px">
       <a href="#serverrewards" class="list-group-item">Caps to Gold<span class="badge">250k to 1</span></a>
       <a href="#nodecay" class="list-group-item">Entity Clear <span class="badge">every 6 hours</span></a>
       <a href="#quicksmelt" class="list-group-item">Quick Smelt</a>
       <a href="" class="list-group-item">True Instant Craft</a>
     </ul>
   </div>

  <h3>External Links Galore!</h3>
  <h4>For everything outside of the game</h4>

  <hr>
  <div class="button-land" role="group" style="width: 25%; margin:auto">
    <a target="_blank" href="https://playrust.io/map/?144.217.251.35:28017" class="btn btn-map btn-lg btn-block">Map</a>
    <a target="_blank" href="https://discord.gg/TGJrJFN" class="btn btn-lg btn-discord btn-block">Discord</a>
    <a target="_blank" class="btn btn-lg btn-vote btn-block modalOpener" data-modal="voteBox">Vote</a>
    <a href="https://rustydallas.net/testshop/packages.php?game=3&server=7#" target="_blank" class="btn btn-lg btn-donate btn-block">Donate</a>
    <!-- <a target="_blank" class="btn btn-lg btn-donate btn-block modalOpener" data-modal="directdonateBox">Tip Jar</a> -->
  </div>  

</div>

<div class="bgimg-3">
  <div class="caption">
    <span class="border" style="font-size:25px;">TELL US WHAT'S WHAT</span>
  </div>
</div>

<div style="position:relative;" id="feedback">
  <div style="text-align:center;padding:50px 80px;">
  <h3>We want all the feedback!</h3>
  <h4>Let us know what's hot and what's not</h4>
  <p>We'd love to hear what you think of the server! Check out the surveys below and give us all the feedback you can.
  
  	<div class="button-land" role="group" style="width: 25%; margin:auto">
  	  <a target="_blank" href="https://goo.gl/forms/fhRTxHvN7Vtt4re33" class="btn btn-default btn-lg btn-block" style="font-size: 12px">Feedback Survey</a>
  	<a target="_blank" href="https://goo.gl/forms/l7PQdJLR8WEP4c2B2" class="btn btn-default btn-lg btn-block" style="font-size: 12px">Feature / Bug Submission</a>
  	</div>
   </ul>

   <div class="staffonduty">
	<hr>
	<h4>Staff On Duty</h4>
	<div style="text-decoration: bold;font-family: 'logo'; letter-spacing: 5px">
		<div class="discord-widget"></div>
	</div>
	</div>

	<hr>
	<h4>Times are a changin!</h4>
	<p>We want to keep all of our players informed of our top decissions.</p>
	<p>New plugins and major changes will be documented here when possible!</p>

	<a class="btn btn-lg btn-default modalOpener" data-modal="changeLog">Change Log</a>

  </div>
 </div>

<div class="bgimg-4">
 <div class="caption">
   <span class="border" style="font-size:35px;">TRACK YOUR STATS!</span>
 </div>
</div>

<div style="position:relative;" id="stats">
  <div style="text-align:center;padding:50px 80px;">

  <h3 style="text-align:center;">Show everyone how awesome you are!</h3>
 
  <div class="row">
    <div class="scoreboard">
    </div>
  </div>

  </div>
 </div>

<div class="bgimg-2">
  <div class="caption">
    <span class="border" style="font-size:35px;">PLUGINS LIKE YOU WON'T BELIEVE</span>
  </div>
</div>

<div style="position:relative;" id="plugins">
  <div style="text-align:center;padding:50px 80px;text-align: justify;">
      <h3 style="text-align:center;">You want em' we got em'</h3>
      <h4 style="text-align:center;">With custom settings to boot!</h4>

      <hr>

      <div class="row">
        <div class="col-sm-4">
          <a href="" onclick="return false;" class="infoShwBtn list-group-item list-group-item-success">Barricades<span class="glyphicon glyphicon-sunglasses" name="Private Plugin" style="float: right; top:10px;"></span></a>
          <li class="list-group-item" style="display: none;">
              Legacy Barricades that can be picked up.
          </li>
        </div>
        <div class="col-sm-4">
          <a href="" onclick="return false;" class="infoShwBtn list-group-item list-group-item-success">CustomSignals<span class="glyphicon glyphicon-sunglasses" name="Private Plugin" style="float: right; top:10px;"></span></a>
          <li class="list-group-item" style="display: none;">
              Use resources to either call in a <b>attack helicopter</b> or a <b>low flying plane</b> (one you can shoot down) to your locaiton.

              <br /><span class="glyphicon glyphicon-alert" style="height:10px;"></span><b> Next iteration will include a refined system of how to aquire signals.</b> Still using resources and will up the cost by at least double.
          </li>
        </div>
        <div class="col-sm-4">
          <a href="" onclick="return false;" class="infoShwBtn list-group-item">Super Furnace<span class="glyphicon glyphicon-alert" style="float: right; top:10px;"></span></a>
          <li class="list-group-item" style="display: none;">
              A risk reward system that will be highly saught after by clans and solo players alike.
          </li>
        </div>
      </div>

     <!--  <br />

      <div class="row">
        <div class="col-sm-4">
        </div>
        <div class="col-sm-4">
          <a href="" onclick="return false;" class="infoShwBtn list-group-item">???<span class="glyphicon glyphicon-alert" style="float: right; top:10px;"></span></a>
          <li class="list-group-item" style="display: none;">
              Got an idea? Cash Xianith on steam how bo dah?
          </li>
        </div>
        <div class="col-sm-4">
          
        </div>
      </div> -->

      <hr>

      <div class="row">
        <div class="col-sm-4">
        <ul class="list-group">
          <!-- <img src="../img/rust/pvp.png" style="text-align:center; height: 115px"> -->
          <a target="_blank" href="http://oxidemod.org/plugins/airstrike.1489/" class="list-group-item list-group-item-warning">AirStrike</a>
          <div class="alphaLoot">
            <a href="" onclick="return false;" name="alphaloot" class="infoShwBtn list-group-item list-group-item-info"><b>AlphaLoot</b><span class="glyphicon glyphicon-info-sign" style="float: right;"></span></a>
            <li class="list-group-item" style="display: none;">
              <a class="btn btn-sm btn-default modalOpener pluginLink" data-modal="alphaLoot">Config File</a>
              <a target="_blank" href="https://www.chaoscode.io/resources/alphaloot.13/" class="btn btn-sm btn-default pluginLink">Plugin Link</a>
            </li>
          </div>
          <a target="_blank" href="http://oxidemod.org/plugins/antilootdespawn.2066/" class="list-group-item">AntiLootDespawn</a>
          <a target="_blank" href="http://oxidemod.org/plugins/autodoors.1924/" class="list-group-item">AutoDoors</a>
          <a target="_blank" href="http://oxidemod.org/plugins/automatic-build-grades.921/" class="list-group-item list-group-item-warning">AutoGrades</a>
          <a target="_blank" href="http://oxidemod.org/plugins/auto-purge.1566/" name="autopurge" class="list-group-item">AutoPurge</a>
          <a target="_blank" href="http://oxidemod.org/plugins/better-chat.979/" class="list-group-item">BetterChat</a>
          <a target="_blank" href="http://oxidemod.org/plugins/betterchat-mute.2272/" class="list-group-item">BetterChatMute</a>
          <a target="_blank" href="http://oxidemod.org/plugins/block-remover.864/" class="list-group-item">BlockRemover</a>
          <a target="_blank" href="http://oxidemod.org/plugins/boobytraps.1549/" class="list-group-item list-group-item-warning">BoobyTraps</a>
          <a target="_blank" href="http://oxidemod.org/plugins/bounty.1649/" class="list-group-item">Bounty</a>
          <a target="_blank" href="http://oxidemod.org/plugins/build.715/" class="list-group-item">Build</a>
          <a target="_blank" href="https://www.chaoscode.io/resources/clans-reborn.14/" class="list-group-item"><b>ClansReborn</b></a>
          <a target="_blank" href="http://oxidemod.org/plugins/copy-paste.716/" class="list-group-item">CopyPaste</a>
          <a target="_blank" href="http://oxidemod.org/plugins/player-corpse-duration-modifier.778/" class="list-group-item">CorpseDuration</a>
          <a target="_blank" href="http://oxidemod.org/plugins/crafting-controller.695/" class="list-group-item">CraftingController</a>
          <a target="_blank" href="http://oxidemod.org/plugins/craftspamblocker.1805/" class="list-group-item">CraftSpamBlocker</a>
          <a target="_blank" href="http://oxidemod.org/plugins/discordreport.2323/" class="list-group-item">DiscordReport</a>
          <a target="_blank" href="http://oxidemod.org/plugins/easyvote.2102/" class="list-group-item">EasyVote</a>
          <a target="_blank" href="http://oxidemod.org/plugins/economics.717/" class="list-group-item">Economics</a>
          <a target="_blank" href="http://oxidemod.org/plugins/enhanced-hammer.1439/" class="list-group-item">EnhancedHammer</a>
          <a target="_blank" href="http://oxidemod.org/plugins/entityowner.1255/" class="list-group-item">EntityOwner</a>
          <a target="_blank" href="http://oxidemod.org/plugins/event-manager.740/" class="list-group-item">EventManager</a>
          <a target="_blank" href="http://oxidemod.org/plugins/fancydrop.1934/" name="fancydrop" class="list-group-item">FancyDrop</a>
        </ul>
       </div>
       <div class="col-sm-4">
        <ul class="list-group">
        <a target="_blank" href="http://oxidemod.org/plugins/fishing.1537/" class="list-group-item">Fishing</a>
        <a target="_blank" href="http://oxidemod.org/plugins/rust-io-friendlyfire.840/" class="list-group-item">FriendlyFire</a>
        <a target="_blank" href="http://oxidemod.org/plugins/friends-api.686/" class="list-group-item">Friends</a>
	      <div class="gatherManager">
	          <a href="" onclick="return false;" name="gathermanager" class="infoShwBtn list-group-item list-group-item-info">GatherManager<span class="glyphicon glyphicon-info-sign" style="float: right;"></span></a>
	            <li class="list-group-item" style="display: none;">
	              <a class="btn btn-sm btn-default modalOpener pluginLink" data-modal="gatherManager">Config File</a>
	              <a target="_blank" href="http://oxidemod.org/plugins/gather-manager.675/" class="btn btn-sm btn-default pluginLink">Plugin Link</a>
	            </li>
	      </div>
        <a target="_blank" href="http://oxidemod.org/plugins/godmode.673/" class="list-group-item">Godmode</a>
        <a target="_blank" href="http://oxidemod.org/plugins/gui-shop.1319/" class="list-group-item list-group-item-info">GUIShop<!-- <span class="glyphicon glyphicon-flash" style="float: right;"></span> --></a>
        <a target="_blank" href="http://oxidemod.org/plugins/helicontrol.1348/" class="list-group-item">HeliControl</a>
        <a target="_blank" href="http://oxidemod.org/plugins/heliride.2274/" class="list-group-item">HeliRide</a>
        <a target="_blank" href="http://oxidemod.org/plugins/ignore-api.1054/" class="list-group-item">Ignore</a>
        <a target="_blank" href="http://oxidemod.org/plugins/infopanel.1356/" class="list-group-item list-group-item-info">InfoPanel</a>
        <a target="_blank" href="http://oxidemod.org/plugins/inventory-viewer.871/" class="list-group-item">InventoryViewer</a>
        <a target="_blank" href="http://oxidemod.org/plugins/item-skin-randomizer.1328/" class="list-group-item list-group-item-warning">ItemSkinRandomizer</a>
        <a target="_blank" href="http://oxidemod.org/plugins/kill-feed.1433/" class="list-group-item">KillFeed</a>
        <a target="_blank" href="http://oxidemod.org/plugins/kits.668/" class="list-group-item list-group-item-warning">Kits</a>
        <a target="_blank" href="http://oxidemod.org/plugins/magic-craft.1347/" class="list-group-item">MagicCraft</a>
        <a target="_blank" href="http://oxidemod.org/plugins/metabolism.680/" class="list-group-item">Metabolism</a>
        <a target="_blank" href="http://oxidemod.org/plugins/moneytime.836/" name="moneytime" class="list-group-item">MoneyTime</a>
        <a target="_blank" href="http://oxidemod.org/plugins/nightlantern.1182/" class="list-group-item">NightLantern</a>
        <a target="_blank" href="http://oxidemod.org/plugins/nodecay.1160/" name="nodecay" class="list-group-item">NoDecay</a>
        <a target="_blank" href="http://oxidemod.org/plugins/noescape.1394/" class="list-group-item">NoEscape</a>
        <a target="_blank" href="http://oxidemod.org/plugins/n-teleportation.1832/" class="list-group-item list-group-item-warning">NTeleportation</a>
        <a target="_blank" href="https://www.chaoscode.io/resources/plane-crash.16/" class="list-group-item"><b>PlaneCrash</b></a>
        <a target="_blank" href="http://oxidemod.org/plugins/player-challenges.1442/" class="list-group-item">PlayerChallenges</a>
        <a target="_blank" href="http://oxidemod.org/plugins/playerranks.2359/" class="list-group-item">PlayerRanks</a>
        </ul>
       </div>
       <div class="col-sm-4">
        <ul class="list-group">
        <a target="_blank" href="http://oxidemod.org/plugins/popup-notifications.1252/" class="list-group-item">PopupNotificaitons</a>
        <a target="_blank" href="http://oxidemod.org/plugins/protocol-kick-information.2041/" class="list-group-item">ProtocolKickInfo</a>
        <a target="_blank" href="http://oxidemod.org/plugins/quick-menu.2419/" class="list-group-item list-group-item-success">QuickMenu</a>
        <div class="quickSmelt">
            <a href="" onclick="return false;" name="quicksmelt" class="infoShwBtn list-group-item list-group-item-info">QuickSmelt<span class="glyphicon glyphicon-info-sign" style="float: right;"></span></a>
              <li class="list-group-item" style="display: none;">
                <a class="btn btn-sm btn-default modalOpener pluginLink" data-modal="quickSmelt">Config File</a>
                <a target="_blank" href="http://oxidemod.org/plugins/quicksmelt.1067/" class="btn btn-sm btn-default pluginLink">Plugin Link</a>
              </li>
        </div>
        <a target="_blank" href="https://www.chaoscode.io/resources/random-spawnpoints.3/" class="list-group-item"><b>RandomSpawns</b></a>
        <a target="_blank" href="http://oxidemod.org/plugins/removeaaa.1645/" class="list-group-item">RemoveAAA</a>
        <a target="_blank" href="http://oxidemod.org/plugins/r-remover-tool.651/" class="list-group-item list-group-item-info">RemoverTool</a>
        <a target="_blank" href="http://oxidemod.org/plugins/resetcodelocks.2348/" class="list-group-item">ResetCodeLocks</a>
        <a target="_blank" href="http://oxidemod.org/plugins/robbery.736/" class="list-group-item">Robbery</a>
        <a target="_blank" href="http://oxidemod.org/plugins/rusted-store.2134/" class="list-group-item" name="RustedStore">RustedStore</a>
        <a target="_blank" href="http://oxidemod.org/extensions/rust-io.768/" class="list-group-item">RustIO</a>
        <a target="_blank" href="http://oxidemod.org/plugins/secureadmin.1449/" class="list-group-item" name="RustedStore">SecureAdmin</a>
        <a target="_blank" href="http://oxidemod.org/plugins/serverrewards.1751/" name="serverRewards" class="list-group-item list-group-item-info">ServerRewards</a>
        <a target="_blank" href="http://oxidemod.org/plugins/sign-artist.992/" class="list-group-item">SignArtist</a>
        <a target="_blank" href="https://www.chaoscode.io/resources/skinbox.17/" class="list-group-item list-group-item-warning"><b>SkinBox</b></a>
        <a target="_blank" href="http://oxidemod.org/plugins/sleeper-animal-protection.1959/" class="list-group-item">SleeperAnimalProtection</a>
        <div class="stackSize">
            <a href="" onclick="return false;" name="stacksize" class="infoShwBtn list-group-item list-group-item-info">StackSizeController<span class="glyphicon glyphicon-info-sign" style="float: right;"></span></a>
              <li class="list-group-item" style="display: none;">
                <a class="btn btn-sm btn-default modalOpener pluginLink" data-modal="stackSize">Config File</a>
                <a target="_blank" href="http://oxidemod.org/plugins/stack-size-controller.1185/" class="btn btn-sm btn-default pluginLink">Plugin Link</a>
              </li>
        </div>
        <a target="_blank" href="http://oxidemod.org/threads/timed-execute.18395/" class="list-group-item">TimedExectue</a>
        <a target="_blank" href="http://oxidemod.org/plugins/timed-permissions.1926/" class="list-group-item">TimedPermissions</a>
        <a target="_blank" href="http://oxidemod.org/plugins/trade.1242/" class="list-group-item">Trade</a>
        <a target="_blank" href="http://oxidemod.org/plugins/turbogather.2221/" class="list-group-item list-group-item-warning">TurboGather</a>
        <a target="_blank" href="http://oxidemod.org/plugins/universalui.2226/" class="list-group-item list-group-item-info">UniversalUI</a>
        <a target="_blank" href="http://oxidemod.org/plugins/vanish.1420/" class="list-group-item">Vanish</a>
        <a target="_blank" href="http://oxidemod.org/plugins/zone-command.1254/" class="list-group-item">ZoneCommand</a>
        <a target="_blank" href="http://oxidemod.org/plugins/zones-manager.739/" class="list-group-item">ZoneManager</a>
        </ul>
       </div>
      </div>

      <div style="font-size: 10.5px; line-height: 3px">
        <p><b>Bold</b> indicates the plugin was purchased via donations.
        <p><b style="color: #3c763d">This color</b> indicates the plugin was developed by our developers.</p>
        <p><b style="color: #8a6d3b">This color</b> indicates the plugin can be obtained via <a href="#RustedStore">donation</a> / <a href="#serverRewards">gold shop</a> / daily or has a limit.</p>
        <p><b style="color: #31708f">This color</b> indicates the plugin has been heavily modifed for this server.</p>
        <p><span class="glyphicon glyphicon-info-sign"></span> indicates we provide additional information.  
        <span class="glyphicon glyphicon-alert"></span> indicates that the plugin is under development.  <span class="glyphicon glyphicon-sunglasses"></span> indicates that the plugin is private.</p>
      </div>

      <hr>

      <p style="text-align:center;">Created by <a target="_blank" href="https://xianith.com">Xianith</a></p>

  </div>
</div>

<script src="../js/jquery.easing.min.js"></script>

</body>
</html>
<div id="alphaLoot" class="modal">
  <span class="close cursor">&times;</span>
  <div class="modal-content">

    <div class="alphaLoot">
      <div class="slideTitle">alphaLoot - Config snippet</div>

      <div class="codeBlock">
      <pre><code>
      {
        "ItemListBarrels": {
          "propanetank": 2,
          "riflebody": 2,
          "roadsigns": 5,
          "rope": 5,
          "semibody": 2,
          "sewingkit": 2,
          "sheetmetal": 5
        },
        "ItemListCrates": {
          "riflebody": 5,
          "roadsigns": 5,
          "rope": 5,
          "semibody": 5,
          "sewingkit": 5,
          "sheetmetal": 5,
          "smallwaterbottle": 1,
          "smgbody": 5,
          "metalspring": 5
        }
      }
      </code></pre>
      </div>
    </div>

  </div>
</div>

<div id="gatherManager" class="modal">
  <span class="close cursor">&times;</span>
  <div class="modal-content">

    <div class="gatherManager">
      <div class="slideTitle">GatherManager - Config snippet</div>

      <div class="codeBlock">
      <pre><code>
      "Options": {
        "GatherDispenserModifiers": {},
        "GatherResourceModifiers": {
          "*": 10.0,
          "Cloth": 10.0,
          "Stones": 10.0,
          "Sulfur Ore": 10.0,
          "Wood": 10.0
        },
        "MiningQuarryResourceTickRate": 5.0,
        "PickupResourceModifiers": {
          "*": 10.0
        },
        "QuarryResourceModifiers": {
          "Stones": 25.0,
          "Sulfur Ore": 25.0,
          "Metal Ore": 15.0
        },
        "SurveyResourceModifiers": {}
      </code></pre>
      </div>
    </div>

  </div>
</div>

<div id="quickSmelt" class="modal">
  <span class="close cursor">&times;</span>
  <div class="modal-content">

    <div class="quickSmelt">
      <div class="slideTitle">QuickSmelt - Config snippet</div>

      <div class="codeBlock">
      <pre><code>
      {
        "ByproductModifier": 25.0,
        "ByproductPercent": 50,
        "CookedModifier": 10.0,
        "CookedPercent": 100,
        "FuelUsageModifier": 1,
        "OvercookMeat": false,
        "UsePermissions": false
      }
      </code></pre>
      </div>
    </div>

  </div>
</div>

<div id="stackSize" class="modal">
  <span class="close cursor">&times;</span>
  <div class="modal-content">

    <div class="stackSize">
      <div class="slideTitle">StackSizeController - Config snippet</div>

      <div class="codeBlock">
      <pre><code>
      ...
      "Mushroom": 50,
      "Muzzle Boost": 1,
      "Muzzle Brake": 1,
      "Note": 250000,
      "One Sided Town Sign Post": 250000,
      "Pants": 1,
      "Paper": 250000,
      "Paper Map": 250000,
      "Pick Axe": 1,
      "Pistol Bullet": 250000,
      "Pookie Bear": 250000,
      ...

      ...
      "Sticks": 250000, //Removed via other plugin
      "Stone Barricade": 10,
      "Stone Hatchet": 1,
      "Stone Pick Axe": 1,
      "Stone Spear": 1,
      "Stones": 250000,
      "Sulfur": 250000,
      "Sulfur Ore": 250000,
      ...
      </code></pre>
      </div>
    </div>
  </div>
</div>

<div id="voteBox" class="modal">
  <span class="close cursor">&times;</span>
  <div class="modal-content" style="top: 40%">

    <div class="stackSize" style="background-color:rgba(0,0,0,1)">
      <a target="_blank" href="https://rust-servers.net/server/108636/vote/" class="btn btn-lg btn-default btn-block">Rust-Servers</a>

      <a target="_blank" href="http://toprustservers.com/doc" class="btn btn-lg btn-default btn-block">TopRustServers</a>

      <a target="_blank" href="http://beancan.io/post/72592" class="btn btn-lg btn-default btn-block">Beancan.Io</a>
    </div>
  </div>
</div>

<div id="directdonateBox" class="modal">
  <span class="close cursor">&times;</span>
  <div class="modal-content" style="top: 40%">

    <div style="padding: 9px; line-height: 15px;">
      <p>Thank you for deciding to tip us! Just a heads up that this is a direct tip to the host of our server.
      <b>This will not get you in-game perks</b>! Non the less we will still love you all the same.</p> 

      <p>For in game perks, log onto the server and do <b>/donate</b></p> 
      <a target="_blank" href="https://clients.fragnet.net/grouppay.php?hash=41f21-5bdbf-36d46-52c2f-d7a5c-15d2d-cd" class="btn btn-lg btn-default btn-block">Commence the Tipping!</a>
    </div>
  </div>
</div>

<div id="changeLog" class="modal">
  <span class="close cursor">&times;</span>
  <div class="modal-content">

    <div class="stackSize">
      <div class="slideTitle">Change Log</div>

      <div class="clog">
         <i>3/26</i>
      <p class="plus">Updated FancyDrop</p>
      <p class="plus">Updated ImageLibrary (dependency of UniversalUI)</p>
      <p class="plus">Updated EnhancedHammer</p>
      <p class="plus">Added MasterKey</p>
      <p class="plus">Created and added second in-house plugin!</p>
      <p>QuickMenu (replaced F6)</p>
      <p class="plus">Minor text fixes on server / website</p>
         <i>3/24</i>
      <p class="plus">Fixed Friends</p>
      <p class="plus">Updated BetterChat</p>
      <p class="plus">Updated BetterChatMute</p>
      <p class="plus">Updated NoEscape</p>
      <p class="minus">Adjusted tech trash drop rate to combat new C4 cost</p>
         <i>3/22</i>
      <p class="plus">Brought on one final mod:</p>
      <p>Chromus</p>
         <i>3/20</i>
      <p class="minus">Fixed Custom Suplpy Signal to take proper resources</p>
         <i>3/16</i>
      <p class="plus">Finished balance pass. Notes:</p>
      <ul>
       <li>Halved drop rate of tech trash in rad towns</li>
       <li>Lowered chance of C4 / rockets from spawning in any crate / supply drop</li>
       <li>Limited deployables outside of Tool Cupboards (Campfires, Wood HE walls and all signgs can be placed outside of TC, everything else must be placed within TC range)</li>
       <li>Entity wipe is now for EVERYTHING outside of Tool Cupboards. (Top tier and deployables included)</li>
       <li>Re-worked massdrop (less garbage, mid-tier loot)</li>
       <li>Re-worked helidrop (no attachments, top-tier loot)</li>
       <li>Re-worked SupplySignal (between massdrpo and heliloot (no M249 / LR drops, metal chest / facemak drop)</li>
       <li>Hazmat suits are now rare loot</li>
       <li>Added Rope to chest loot</li>
       <li>Limited TCs to allow only being placed on foundations</li>
      </ul>
         <i>3/15</i>
      <p class="plus">Added ObjectRemover plugin</p>
      <p class="plus">First major balance pass</p>
      <p class="plus">Modified Supply Signal drops</p>
      <p class="minus">New Rule in play to limit 3 layers of HE walls</p>
        <i>3/9</i>
      <p class="plus">Created and finalized first in-house plugin CustomSignals</p>
      <p class="plus">Added PlayerRanks plugin</p>
      <p class="plus">Added MagicCraft plugin</p>
      <p class="plus">Updated All Plugins... thanks patch day.</p>
		    <i>3/7</i>
			<p class="plus">Added PlaneCrash plugin</p>
			<p class="plus">Added Ignore plugin</p>
			<p class="plus">Added RandomSpawns plugin</p>
			<p class="plus">Added player count onto homepage</p>
			<p class="plus">Updated Godmode plugin</p>
			<p class="plus">Brought on 3 new moderators:</p>
			<p>Ima Cat Meow - iKiled - IrushLuv</p>
        <i>3/5</i>
			<p class="plus">Updated Removertool. Now includes dropping of items in containers</p>
			<p class="plus">Updated stacks for new items</p>
			<p class="plus">Updated nteleportation to include newly crafted Thunder Dome.<b style="font-size:8px">shout out to bintopean</b></p>
			<p class="plus">Added ZoneManager plugin</p>
			<p class="plus">Added ZoneCommand plugin</p>
        <i>3/2</i>
			<p class="plus">Added SkinBox plugin</p>
			<p class="plus">Updated Server and Oxide plugins</p>
			<p class="plus">Modified GUI shop to toggle the shop on /shop or pressing "i"</p>
			<p class="plus">Updated UniversalUI command menu to inculde Gold / VIP buttons</p>
			<p class="plus">Added voting box for multiple sites</p>
			<p class="plus">Minor text changes. <b style="font-size:8px">shout out to purge</b></p>
			<p class="minus">Revoked VIP access to randomskin plugin (they have SkinBox now)</p>
			<p class="minus">Deleted WeaponsOnBack plugin</p>
        <i>3/1</i>
			<p class="plus">Added CraftSpamBlocker plugin</p>
			<p class="plus">Stats page updates every 15 minutes</p>
			<p class="minus">Deleted Ragnarok plugin</p>
        <i>2/28</i>
			<p class="plus">Added AntiLootDespawn plugin</p>
			<p class="plus">Added HeliRide plugin</p>
			<p class="plus">Added Ragnarok plugin</p>
			<p class="plus">Modified AntiLootDespawn to up it to 4x</p>
			<p class="minus">Deleted Polls plugin entirely</p>
			<p class="minus">Deleted CustomAutoKits plugin entirely</p>
        <i>2/26</i>
			<p class="plus">Added ResetCodeLocks plugin</p>
			<p class="plus">Added CustomAutoKits plugin</p>
			<p class="plus">Modified Kits to add VIP auto kit</p>
			<p class="minus">Disabled Polls plugin</p>
			<p class="minus">Disabled CustomAutoKits plugin</p>
        <i>2/22</i>
			<p class="minus">Modified gold shop rewards (removed several T2 for balance)</p>
			<p class="plus">Added Poll plugin</p>
			<p class="plus">Modified VIP chat color (was blue, now gold)</p>
			<p class="plus">Granted autograde.3 and autograde.4 to vip group (Metal / HQM)</p>
			<p class="plus">Added Bounty plugin (With popup depency plugin)</p>
			<p class="minus">Re-enabled stability and cleared a lot of un-cupboarded entities</p>
      </div>
    </div>
  </div>
</div>
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

<div id="starterBox" class="modal">
  <span class="close cursor">&times;</span>
  <img style="display:relative; margin:auto" src="../img/rust/starter.png">
</div>

<div id="changeLog" class="modal">
  <span class="close cursor">&times;</span>
  <div class="modal-content">

    <div class="stackSize">
      <div class="slideTitle">Change Log</div>

      <div class="clog">
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
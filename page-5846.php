<?php /*
 * Template Name: Bracket Seed Generator
 * Description: Bracket Seed Generator
 */

 get_header(); ?>

 </div>

 <div class="bracket-container row medium-12 columns">

	<main role="main">

    <section>

      <h1>Bracket Seed Generator - Online Edition</h1>

      <form>

      <div class="row main-options">
        <div class="medium-3 columns">
            <label for="min_pools">Minimum number of pools</label>
            <select type="text" id="min_pools" value=1>
                  <option value=1>1</option>
                  <option value=2>2</option>
                  <option value=4>4</option>
                  <option value=8>8</option>
                  <option value=16>16</option>
                  <option value=32>32</option>
             </select>
        </div>
        <div class="medium-3 columns end">
          <label for="max_pool_size">Maximum pool size</label>
          <select type="text" id="max_pool_size">
                <option value="NONE">N/A</option>
                <option value=2>2</option>
                <option value=4>4</option>
                <option value=8>8</option>
                <option value=16>16</option>
                <option value=32 selected="selected">32</option>
                <option value=64>64</option>
           </select>
        </div>
      </div>

      <a id="optionsToggle" href="#" data-options-active="false" onclick="toggleOptions(this);">Show more options</a>

      <div class="options-container">
      <div id="options" style="display:none;" class="row">
        <div class="medium-3 columns">
          <label>Region seeding</label>
          <div class="switch">
            <input class="switch-input" id="region_seeding" type="checkbox" name="region_seeding" checked>
            <label class="switch-paddle" for="region_seeding">
              <span class="show-for-sr">Region seeding</span>
              <span class="switch-active" aria-hidden="true">On</span>
              <span class="switch-inactive" aria-hidden="true">Off</span>
            </label>
          </div>
        </div>
        <div class="medium-3 columns">
          <label>Prefix names by region</label>
          <div class="switch">
            <input class="switch-input" id="region_prefix" type="checkbox" name="region_prefix" checked>
            <label class="switch-paddle" for="region_prefix">
              <span class="show-for-sr">Prefix names by region</span>
              <span class="switch-active" aria-hidden="true">On</span>
              <span class="switch-inactive" aria-hidden="true">Off</span>
            </label>
          </div>
        </div>
        <div class="medium-3 columns">
          <label for="default_region">Default region</label>
          <input type="text" id="default_region">
        </div>
        <div class="medium-3 columns">
          <label for="default_region">Delimiter</label>
          <select type="text" id="delimiter" value="tab">
            <option value="auto" selected="selected">auto</option>
            <option value="tab">tab</option>
            <option value=",">comma</option>
            <option value=".">period</option>
            <option value=" ">space</option>
          </select>
        </div>
      </div>

      </div>

      <div class="row">
        <div class="medium-12 columns">
          <label for="InputPlayerData">Players - <i>1 player per line - Name, Region, Seed</i>&nbsp;&nbsp;(&nbsp;<a id="btnTestData" href="#">Click here to use sample data</a>&nbsp;)</label>
          <textarea id="InputPlayerData" rows="5" cols="50" tabindex="7"></textarea>
        </div>
      </div>

      <div class="row">
        <div class="small-12 columns">
          <input type="button" class="button" value="Generate Bracket Seeds" onclick="SeedPlayers('delimiter', 'default_region', 'min_pools', 'max_pool_size', 'region_seeding', 'region_prefix', 'InputPlayerData', 'RegionWarning', 'Output', 'Matchups', 'RegionCounts', 'SeedOrder', 'Alphabetical', 'ChallongeInfo', 'ChallongeData', 'Challonge')" tabindex="8">
        </div>
      </div>

      </form>

    </section>


    <section style="display:none" id="Output">
      <h3>Pool Assignments</h3>

      <div class="callout warning" style="display:none;" data-closable>
        <span id="RegionWarning"></span>
        <button class="close-button" aria-label="Dismiss alert" type="button" data-close>
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <ul class="accordion" data-accordion role="tablist" data-allow-all-closed="true">
        <li class="accordion-item is-active">
          <a href="#panelMatchUps" role="tab" class="accordion-title" id="panelMatchUps-heading" aria-controls="panelMatchUps"><h4>Match-ups</h4></a>
          <!-- The content pane needs an ID that matches the above href, role="tabpanel", data-tab-content, and aria-labelledby. -->
          <div id="panelMatchUps" class="accordion-content" role="tabpanel" data-tab-content aria-labelledby="panelMatchUps-heading">
            <div id="Matchups"></div>
          </div>
        </li>
        <li class="accordion-item">
          <a href="#panelRegionCounts" role="tab" class="accordion-title" id="panelRegionCounts-heading" aria-controls="panelRegionCounts"><h4>Region counts</h4></a>
          <!-- The content pane needs an ID that matches the above href, role="tabpanel", data-tab-content, and aria-labelledby. -->
          <div id="panelRegionCounts" class="accordion-content" role="tabpanel" data-tab-content aria-labelledby="panelRegionCounts-heading">
            <div id="RegionCounts"></div>
          </div>
        </li>
        <li class="accordion-item">
          <a href="#panelPlayersBySeed" role="tab" class="accordion-title" id="panelPlayersBySeed-heading" aria-controls="panelPlayersBySeed"><h4>Players by seed</h4></a>
          <!-- The content pane needs an ID that matches the above href, role="tabpanel", data-tab-content, and aria-labelledby. -->
          <div id="panelPlayersBySeed" class="accordion-content" role="tabpanel" data-tab-content aria-labelledby="panelPlayersBySeed-heading">
            <div id="SeedOrder"></div>
          </div>
        </li>
        <li class="accordion-item">
          <a href="#panelPlayersByRegion" role="tab" class="accordion-title" id="panelPlayersByRegion-heading" aria-controls="panelPlayersByRegion"><h4>Players by region &amp; name</h4></a>
          <!-- The content pane needs an ID that matches the above href, role="tabpanel", data-tab-content, and aria-labelledby. -->
          <div id="panelPlayersByRegion" class="accordion-content" role="tabpanel" data-tab-content aria-labelledby="panelPlayersByRegion-heading">
            <div id="Alphabetical"></div>
          </div>
        </li>
      </ul>

    </section>


    <section style="display:none" id="Challonge">
      <h3>Challonge Data</h3>
      <p id="ChallongeInfo"></p>
      <textarea id="ChallongeData" rows="5" cols="50" tabindex="9" readonly onmouseup="return false;" onclick='this.setSelectionRange(0,9999)'></textarea>
    </section>


    <section style="display:none" id="Debug">
      <h2>DEBUG</h2>
      <p id="DEBUG1"></p>
      <p id="DEBUG2"></p>
      <p id="DEBUG3"></p>
    </section>

	</main>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/bsg.js"></script>

<?php get_sidebar(); ?>

<?php get_footer(); ?>

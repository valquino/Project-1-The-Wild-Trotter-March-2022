<?php include('header.php');
if(isset($_GET['galery'])){
  $galeryName = ucfirst($_GET['galery']);
  include('lightbox.php');
} else {
?>

  <main id="content">
    <h2>Galeries photos de mes voyages</h2>
    <div id="galeries-photos">
      <div id="amazonie" onclick=""><div class="layer"><a href="?galery=amazonie">Amazonie</a></div></div>
      <div id="alaska"><div class="layer">Alaska</div></div>
      <div id="tanzanie"><div class="layer">Tanzanie</div></div>
      <div id="nepal"><div class="layer">Népal</div></div>
      <div id="tasmanie"><div class="layer">Tasmanie</div></div>
      <div id="laponie"><div class="layer"><a href="?galery=laponie">Laponie</a></div></div>
    </div>
  </main>

<?php 
}
include('footer.php'); ?>
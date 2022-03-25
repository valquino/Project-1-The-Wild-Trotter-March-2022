<?php include('header.php');
if(isset($_GET['galery'])){
  $galeryName = ucfirst($_GET['galery']);
  include('lightbox.php');
} else {
?>

  <main id="content">
    <h2>Galeries photos de mes voyages</h2>
    <div id="galeries-photos">
      <div id="amazonie"><div class="layer"><a href="?galery=amazonie">Amazonie</a></div></div>
      <div id="alaska"><div class="layer"><a href="?galery=alaska">Alaska</a></div></div>
      <div id="tanzanie"><div class="layer"><a href="?galery=tanzanie">Tanzanie</a></div></div>
      <div id="nepal"><div class="layer"><a href="?galery=nepal">Népal</a></div></div>
      <div id="tasmanie"><div class="layer"><a href="?galery=tasmanie">Tasmanie</a></div></div>
      <div id="laponie"><div class="layer"><a href="?galery=laponie">Laponie</a></div></div>
    </div>
  </main>

<?php 
}
include('footer.php'); ?>
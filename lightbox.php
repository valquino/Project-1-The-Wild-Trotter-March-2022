<?php
include("functions.php");
$directory = './images/galeries/'.$galeryName.'/';
$imagesArray = galeries($galeryName);
$nbrImg = count($imagesArray);
$slides = $columns = ''; 
for($i = 0; $i < $nbrImg; $i++){
    $y = $i+1;
    $img = $directory.$imagesArray[$i];
    $slides .= '<div class="mySlides">
                    <div class="numbertext">'.$y.' / '.$nbrImg.'</div>
                        <img src="'.$img.'" style="width: 640px; height:auto;">
                </div>';
    $columns .= '<div class="column">
                    <img class="demo cursor" src="'.$img.'" style="width:100%" onclick="currentSlide('.$y.')" alt="">
                </div>';
}
?>
<main id="content">
  <div id="<?= $galeryName; ?>" class="hidden"></div>
  <div id="myModal" class="modal">
    <h2 class="white">Galerie photos de <?= $galeryName; ?></h2>
    <span class="close cursor" onclick="closeModal()">&times;</span>
    <div class="modal-content">

        <?php echo $slides; ?>

        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>

        <div class="caption-container">
        <p id="caption"></p>
        </div>

        <?php //echo $columns; ?>

    </div>
  </div>
</main>
<script type="text/javascript">
    //var galeryName = getElementById(div.hidden);
    //alert(galeryName);
    openModal(); currentSlide(1);
  </script>
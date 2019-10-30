<div class="banner">
  <span id="btn-anterior"><</span>
  <img src="" alt="banner" id="slide">
  <span id="btn-prox">></span> 
</div>
<script>
  var images = [];
  <?php foreach ($banner as $img) : ?>
  images.push("<?php echo BASE_URL; ?>assets/uploadbanner/<?php echo $img['url']; ?>");
  <?php endforeach; ?>
</script>
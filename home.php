
<?php  $this->inc('elements/header.php'); ?>

<div class="outer">

<?php  $this->inc('elements/header_blocks.php'); ?>
 
<div class="container">  
    
<!-- If mobile/tablet device  -->  
<?php  $this->inc('elements/mobile_sidebar_menu.php'); ?>
<!--End mobile/tablet-->

 <div class="grid_12">
  <div class="main-content">
      <?php $a = new Area('Main'); $a->display($c); ?>
  </div><!--/main-content-->
 </div><!--/grid_12-->
    
</div><!--/outer-->

</div><!--/container-->

<?php  $this->inc('elements/footer.php'); ?>
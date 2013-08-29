
<?php  $this->inc('elements/header.php'); ?>

<div class="outer">

<?php  $this->inc('elements/header_blocks.php'); ?>
 
<div class="container">  
    
<!-- If mobile/tablet device  -->  
<?php  $this->inc('elements/mobile_sidebar_menu.php'); ?>
<!--End mobile/tablet-->
  
 <div class="grid_8">
  <div class="main-content">
      <?php $a = new Area('Main'); $a->display($c); ?>
  </div><!--/main-content-->
 </div><!--/grid_8-->
 
 <div class="grid_4">
  <div class="sidebar">


<?php 
  $a = new Area('Sidebar');
  $a->setBlockWrapperStart('<div class="block-item">');
  $a->setBlockWrapperEnd('</div><!-- /block-item -->');
  $a->display($c); 
?>


  </div><!--/sidebar-->
 </div><!--/grid_4-->
    
</div><!--/outer-->

</div><!--/container-->

<?php  $this->inc('elements/footer.php'); ?>




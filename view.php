<?php  $this->inc('elements/header.php'); ?>
<?php Loader::element('system_errors', array('error' => $error)); ?>
<?php print $innerContent;?>
<?php  $this->inc('elements/footer.php'); ?>
<?php  defined('C5_EXECUTE') or die("Access Denied."); 
Loader::library('3rdparty/mobile_detect');
$md = new Mobile_Detect();
$deviceType = 'desktop';
if ($md->isTablet()) {
    $deviceType = 'tablet';
}
else if ($md->isMobile()) {
    $deviceType = 'mobile';
} 
define("DEVICE_TYPE", $deviceType);
?>

<!DOCTYPE html>
<head>
<meta name="viewport" content="width=device-width">
<link href='http://fonts.googleapis.com/css?family=Quicksand:400,300,700' rel='stylesheet' type='text/css'>
<!-- Font Awesome Icon Font (loaded from CDN) -->
<link href="http://netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.min.css" rel="stylesheet">

<?php if(ENABLE_LESS_CSS) { ?>
<!--Less CSS File (edit in theme directory /less)-->
<link rel="stylesheet/less" type="text/css" href="<?php echo $this->getThemePath(); ?>/less/styles.less ">
<!--Less JS (loaded from CDN)  **** Compile and remove for production ****-->
<script>less = { env: 'development' };</script> <!--Allows debug messages to be shown-->
<script src="http://cdnjs.cloudflare.com/ajax/libs/less.js/1.3.3/less.min.js" type="text/javascript"></script>
<!--*************************************************************************************************-->
<?php } else { ?>
<!-- Compiled Less files into one stylesheet -->
<link rel="stylesheet" type="text/css" href="<?php echo $this->getThemePath(); ?>/css/styles.css ">
<?php } ?>

<?php Loader::element('header_required', array('pageTitle' => $pageTitle, 'pageKeywords' => $pageKeywords, 'pageDescription' => $pageDescription)); ?>

<script src="<?php echo $this->getThemePath();?>/js/vendor/modernizr-custom.min.js"></script>

<!--[if IE ]>

<![endif]-->

</head>

<body class="<?php if ($c->isEditMode()) { ?>edit <?php } ?><?php $pageTypeName = strtolower($c->getCollectionTypeName());  $bodyClass = str_replace(' ', '-', trim($pageTypeName)); echo $bodyClass; ?> clearfix">

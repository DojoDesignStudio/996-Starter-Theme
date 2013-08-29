<?php Loader::element('footer_required'); ?>

<script src="<?php echo $this->getThemePath();?>/js/plugins.js"></script>
<script src="<?php echo $this->getThemePath();?>/js/theme.js"></script>

<script>

$(document).ready(function() {
  $(".js-sidebar-toggle").click(function() {
    var toggle_el = $('.outer');
    $(toggle_el).toggleClass("open-sidebar");
  });
});

</script>


</body>
</html>
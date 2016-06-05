<?php include_once ("header.php");?>
	<div class="clearfix mosaicflow">
					<div class="mosaicflow__item">
						<a class="fancyimage" data-fancybox-group="group" href="image/gallery/1.jpg">
						<img src="image/gallery/1.jpg" /></a>
					</div>
					<div class="mosaicflow__item">
						<a class="fancyimage" data-fancybox-group="group" href="image/gallery/2.jpg">
						<img src="image/gallery/2.jpg" /></a>
					</div>
					<div class="mosaicflow__item">
						<a class="fancyimage" data-fancybox-group="group" href="image/gallery/3.jpg">
						<img src="image/gallery/3.jpg" /></a>
					</div>
					<div class="mosaicflow__item">
						<a class="fancyimage" data-fancybox-group="group" href="image/gallery/4.jpg">
						<img src="image/gallery/4.jpg" /></a>
					</div>
					<div class="mosaicflow__item">
						<a class="fancyimage" data-fancybox-group="group" href="image/gallery/5.jpg">
						<img src="image/gallery/5.jpg" /></a>
					</div>
					<div class="mosaicflow__item">
						<a class="fancyimage" data-fancybox-group="group" href="image/gallery/6.jpg">
						<img src="image/gallery/6.jpg" /></a>
					</div>
				</div>

	<script src="js/jquery.mosaicflow.js"></script>
	<script type="text/javascript">
	$(document).ready(function() {
		$("a.fancyimage").fancybox();
	});
	</script>
<?php include_once ("footer.php");?>



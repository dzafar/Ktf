<footer>
	<div class="wrapperFooter flex">
		<div>
			<span><i class="fab fa-facebook-f"></i></span>
			<span><i class="fab fa-twitter"></i></span>
			<span><i class="fab fa-vk"></i></span>
		</div>
		<div>
			<a href="">пукт меню 1</a>
			<a href="">пукт меню 1</a>
			<a href="">пукт меню 1</a>
			<a href="">пукт меню 1</a>
		</div>

		<div>
			<a href="">рубрика 1</a>
			<a href="">рубрика 1</a>
			<a href="">рубрика 1</a>
			<a href="">рубрика 1</a>
		</div>

	</div>
</footer>

<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/slider.js"></script>
<script src="js/lazyload.min.js"></script>


<script>
	var lazyLoadInstance = new LazyLoad({
		elements_selector: ".lazy" // ... more custom settings?
	});
</script>

<script>
	document.addEventListener('DOMContentLoaded', function () {
		var slider = new SimpleAdaptiveSlider('.slider', {
      // инициализация слайдера
      autoplay: false,
      interval: 5000,
      swipe: true,
  });
	});
</script>
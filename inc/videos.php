<link rel="stylesheet" href="assets/js/dist/css/splide.min.css">
<link rel="stylesheet" href="assets/js/dist/lity.min.css">
<link rel="stylesheet" href="assets/js/dist/css/themes/splide-default.min.css">
<style>
    body {
	font-family: "Roboto Condensed", sans-serif;
}
.codepen-info {
	max-width: 950px;
	margin: 0 auto;
	background: #f4f4f4;
	padding: 20px 30px;
	margin-top: 40px;
}
	h1{
		font-weight: 500;
		text-align: center;
		color: black;
		margin-top: 0;
	}
	p {
		color: #777;
	}
	.src {
		padding: 15px;
		background: white;
		border-radius: 5px;
		margin-bottom: 15px;
    }
		p.coded {
			background: #f1f1f1;
			color: black;
		}
	

.page-width {
	max-width: 900px;
	margin: 0 auto;
}
	h2 {
		text-align: center;
	}

.splide {
	max-width: 800px;
	margin: 0 auto;
}
.splide__slide img {
	 
		max-width: 100%;
	
}
.splide__arrow--prev {
	margin-left: -50px;
}
.splide__arrow--next {
	margin-right: -50px;
}
.splide__pagination {
	margin-bottom: -35px;
}
.splide__pagination__page.is-active {
	background: green;
}

</style>

<div class="page-width">
	<section class="splide" aria-labelledby="carousel-heading">
		<h2 id="carousel-heading">Take a Tour!</h2>

		<div class="splide__track">
			<ul class="splide__list">
				<li class="splide__slide">
					<!-- <a href="https://youtu.be/IEQ5ckrCCXU" data-lity>
						<img src="https://cdn.shopify.com/s/files/1/0248/2444/7029/files/vid-3-light-min.jpg?v=1660937599" alt="Video Testimonial">
					</a> -->
                    <div class="thumbnail">
                        <a data-fancybox="video-gallery" href="https://kuula.co/share/5pG0S/collection/7Jh2s?logo=1&info=1&fs=1&vr=0&zoom=1&autorotate=0.16&thumbs=1" data-lity="">
                            <img src="assets/images/img/INTERIOR (5).jpg">
                            <!-- http://i3.ytimg.com/vi/v9aVd6qnEjA/maxresdefault.jpg -->
                            <!-- https://www.youtube.com/watch?v=v9aVd6qnEjA&amp;autoplay=1 -->
                    </a>
                    </div>
				</li>

				<li class="splide__slide">
				<div class="thumbnail">
                        <a data-fancybox="video-gallery" href="https://kuula.co/share/5pG0B/collection/7Jh2s?logo=1&info=1&fs=1&vr=0&zoom=1&autorotate=0.16&thumbs=1" data-lity="">
                            <img src="assets/images/img/INTERIOR (2).jpg">
                            <!-- http://i3.ytimg.com/vi/v9aVd6qnEjA/maxresdefault.jpg -->
                            <!-- https://www.youtube.com/watch?v=v9aVd6qnEjA&amp;autoplay=1 -->
                    </a>
                    </div>
				</li>

				<li class="splide__slide">
                <div class="thumbnail">
                        <a data-fancybox="video-gallery" href="https://kuula.co/share/5pG0z/collection/7Jh2s?logo=1&info=1&fs=1&vr=0&zoom=1&autorotate=0.16&thumbs=1" data-lity="">
                            <img src="assets/images/img/INTERIOR (3).jpg">
                            <!-- http://i3.ytimg.com/vi/v9aVd6qnEjA/maxresdefault.jpg -->
                            <!-- https://www.youtube.com/watch?v=v9aVd6qnEjA&amp;autoplay=1 -->
                    </a>
                    </div>
				</li>

				<li class="splide__slide">
                <div class="thumbnail">
                        <a data-fancybox="video-gallery" href="https://kuula.co/share/5pG0Q/collection/7Jh2s?logo=1&info=1&fs=1&vr=0&zoom=1&autorotate=0.16&thumbs=1" data-lity="">
                            <img src="assets/images/img/INTERIOR (4).jpg">
                            <!-- http://i3.ytimg.com/vi/v9aVd6qnEjA/maxresdefault.jpg -->
                            <!-- https://www.youtube.com/watch?v=v9aVd6qnEjA&amp;autoplay=1 -->
                    </a>
                    </div>
				</li>

				<li class="splide__slide">
                <div class="thumbnail">
                        <a data-fancybox="video-gallery" href="https://kuula.co/share/5pG0r/collection/7Jh2s?logo=1&info=1&fs=1&vr=0&zoom=1&autorotate=0.16&thumbs=1" data-lity="">
                            <img src="assets/images/img/INTERIOR (6).jpg">
                            <!-- http://i3.ytimg.com/vi/v9aVd6qnEjA/maxresdefault.jpg -->
                            <!-- https://www.youtube.com/watch?v=v9aVd6qnEjA&amp;autoplay=1 -->
                    </a>
                    </div>
				</li>

			</ul>
		</div>
	</section>
</div>

<!-- THIS WAS ADDED FOR OTHER USERS TO REPLICATE THIS 
 <div class="codepen-info">
	<h1>Image Carousel with video popup/modal</h1>
	<p>I am currently working on a shopify website and did not want to use a shopify plugin so I set out to code my own! Leaving a little bit of instructions here for anyone else who would like to use this as well. Happy coding beautiful people!</p>

	<h3>Sources</h3>
	<p>To properly install the 3rd party scripts, I used the most lightweight options I could find online. Removing jquery completely and using javascript would help reduce page load time for anyone who needs it.</p>

	<div class="src">
		<h4>Splide.js <small>(image carousel)</small></h4>
		<a href="https://splidejs.com/">https://splidejs.com/</a>
		<p>This is a fantastic carousel script that allows much more optimization than just what is here. You can checkout their website for more information and optimization.</p>
		<p class="coded"><code>new Splide( '#image-carousel' ).mount();</code></p>
	</div>

	<div class="src">
		<h4>Lity <small>(video modal)</small></h4>
		<a href="https://sorgalla.com/lity/">https://sorgalla.com/lity/</a>
		<p>Lity is a ultra-lightweight, accessible and responsive lightbox plugin which supports images, iframes and inline content out of the box. Minified and gzipped, its total footprint weights about 3kB. Requires jQuery.</p>
		<p class="coded">Add the
			<code>data-lity</code> attribute to <code>
				< a>
			</code> elements for which you want the links to be opened in a lightbox:
		</p>

	</div>
</div>  -->




<!-- <!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>jQuery Lightbox</title> -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.css" />
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" /> -->
    <!-- </head> -->
    <body>
        <div class="container">
            <div class="row">
                <!-- <div class="col-md-4">
                    <div class="thumbnail">
                        <a data-fancybox="video-gallery" href="https://www.youtube.com/watch?v=v9aVd6qnEjA&amp;autoplay=1"><img src="http://i3.ytimg.com/vi/v9aVd6qnEjA/maxresdefault.jpg"></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumbnail">
                        <a data-fancybox="video-gallery" href="https://www.youtube.com/watch?v=K3vQXwNvKVo&amp;autoplay=1"><img src="http://i3.ytimg.com/vi/K3vQXwNvKVo/maxresdefault.jpg"></a>
                    </div>
                </div> -->
                
            </div>
        </div>
        <script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- </body>
</html> -->

<script src="assets/js/dist/js/splide.min.js"></script>
<script>
const splide = new Splide(".splide", {
	perPage: 3,
	gap: "2rem",
	breakpoints: {
		640: {
			perPage: 2,
			gap: ".7rem",
			height: "6rem"
		},
		480: {
			perPage: 1,
			gap: ".7rem",
			height: "6rem"
		}
	}
});

splide.mount();

</script>
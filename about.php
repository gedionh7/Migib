<?php
include "head.php";
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
img.sticky {
  position: -webkit-sticky;
  position: sticky;
  top: 0;
  width: 200px;
}
</style>
</head>
<body>

<h2>Sticky Image: Scroll Down to See the Effect</h2>
<p>The image will "stick" to the screen when you reach its scroll position.</p>
<img class="sticky" src="img_avatar.png" alt="Avatar">
<h2>Scroll Down</h2>
<p>Some example text..</p>
<p><b>Scroll back up again to "remove" the sticky position.</b></p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio, vitae 
	scelerisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, 
	auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Mauris ante ligula, 
	facilisis sed ornare eu, lobortis in odio. Praesent convallis urna a lacus interdum 
	ut hendrerit risus congue. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim 
	ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget te</p>
</body>
</html>

<?php
include "footer.php";
?>
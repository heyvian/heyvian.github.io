<?php
    $rndNum = rand (1 , 5);
    $imgStrBase = "/images/rnd/";
    $imgStrSM = $imgStrBase . $rndNum."_320.jpg";
    $imgStrMD = $imgStrBase . $rndNum."_480.jpg";
    $imgStrLG = $imgStrBase . $rndNum."_750.jpg";

    switch ($rndNum) {
    case 1:
        $imgAlt = "Icefields Parkway, Alberta";
        break;
    case 2:
        $imgAlt = "Rawson Lake, Alberta";
        break;
    case 3:
        $imgAlt = "Iceland Landscape";
        break;
    case 4:
        $imgAlt = "Pyramid Lake, Alberta";
        break;
    case 5:
        $imgAlt = "The Bow, Calgary";
        break;
	}

	$desc = "Over 9 years experience building marketing websites for a broad range of clients. Focusing on front-end architecture and consulting on client-side development, performance and optimization."
?>
<!DOCTYPE html>
<html>

<head>
	<title>Vian Esterhuizen | Calgary based web developer and maker</title>
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Heyvian Vian Esterhuizen freelance contract consultant front-end web developer calgary alberta fine art photographer"
	/>
	<meta name="description" content="<?php echo $desc ?>" />
	<meta name="author" content="Vian Esterhuizen" />
	<meta name="google-site-verification" content="I64ohQYEe9Nc67h5dU3CbBJmpG-6y3h8wKv9eoq6nGU" />

	<!-- Facebook -->
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Vian Esterhuizen | Calgary based web developer and maker" />
	<meta property="og:description" content="<?php echo $desc ?>" />
	<meta property="og:image" content="https://heyvian.com<?php echo $imgStrLG ?>" />
	<meta property="og:url" content="https://heyvian.com" />

	<!-- Twitter -->
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:site" content="@heyvian" />
	<meta name="twitter:creator" content="@heyvian" />
	<meta name="twitter:title" content="Vian Esterhuizen | Calgary based web developer and maker" />
	<meta name="twitter:description" content="<?php echo $desc ?>" />
	<meta name="twitter:image" content="https://heyvian.com<?php echo $imgStrLG ?>" />

	<link rel="stylesheet" href="/css/screen.css" type="text/css" media="screen" />
	<link rel="icon" type="image/ico" href="favicon.ico" />
	<link href='https://fonts.googleapis.com/css?family=Raleway:100,200,300,400|Lato:100,300' rel='stylesheet' type='text/css'>

	<script type="text/javascript">
		document.addEventListener("DOMContentLoaded", function () {
			var currURL = (new URL(document.location));
			var params = currURL.searchParams;
			var currTheme = params.get("malware-link");
			//console.log(currURL, params, currTheme);
			if (currTheme) {
				document.body.classList.add("malware-origin");
			}
		});
	</script>
</head>

<body>
	<!-- NO WP Template -->
	<!-- 
  Google Tag Manager 
  -->
	<noscript>
		<iframe src="//www.googletagmanager.com/ns.html?id=GTM-VDL9" height="0" width="0" style="display:none;visibility:hidden"></iframe>
	</noscript>
	<script>
		(function (w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({
				'gtm.start': new Date().getTime(),
				event: 'gtm.js'
			});
			var f = d.getElementsByTagName(s)[0],
				j = d.createElement(s),
				dl = l != 'dataLayer' ? '&l=' + l : '';
			j.async = true;
			j.src = '//www.googletagmanager.com/gtm.js?id=' + i + dl;
			f.parentNode.insertBefore(j, f);
		})(window, document, 'script', 'dataLayer', 'GTM-VDL9');
	</script>
	<!-- 
  End Google Tag Manager 
  -->

	<div class="wrapper">
		<h1 class="title alpha">Vian Esterhuizen</h1>

		<div class="main-image">
			<img src="<?php echo $imgStrSM; ?>" alt="<?php echo $imgAlt; ?>" srcset="<?php echo $imgStrMD.' 480w, '.$imgStrLG.' 750w'; ?>">
		</div>

		<div class="content">
			<p>I have been working with HTML since a very young age, back when I created my very first page dedicated to supercars. It
				involved flaming text, plenty of iframes and absolutely no CSS.
				<a href="http://www.linkedin.com/in/vianesterhuizen" data-tooltip="LinkedIn">Over the last 9 years</a> I've been building marketing focused websites for a range of clients, from small businesses
				to large international agencies. I now effectively utilize
				<a href="https://codepen.io/heyvian" data-tooltip="CodePen">HTML, CSS and Javascript</a> to create sites that are not only functional but are easy to use and understand. I am constantly
				looking for newer and better ways to work on the web and I am always building my skill set.</p>
		</div>
	</div>

	<ul class="social">
		<li>
			<a href="http://codepen.io/heyvian/" data-eventCategory="Social Link" data-eventAction="Visit social" data-eventLabel="Codepen"
			    title="Vian Esterhuizen's Web Development" target="_new">CodePen</a>
		</li>
		<li>
			<a href="http://www.linkedin.com/in/vianesterhuizen" data-eventCategory="Social Link" data-eventAction="Visit social" data-eventLabel="LinkedIn"
			    title="Vian Esterhuizen on LinkedIn" target="_new">LinkedIn</a>
		</li>
		<li>
			<a href="https://www.vianesterhuizen.com" data-eventCategory="Lead Referral" data-eventAction="Link click" data-eventLabel="Photo"
			    title="Vian Esterhuizen's Photography" target="_new">Photography</a>
		</li>
		<li>
			<a href="http://www.mynewneighbour.ca" data-eventCategory="Lead Referral" data-eventAction="Link click" data-eventLabel="MNN"
			    title="Ethical Fashion Blog" target="_new">Ethical Fashion</a>
		</li>
		<li>
			<a href="http://vsco.co/heyvian" data-eventCategory="Social Link" data-eventAction="Visit social" data-eventLabel="VSCO"
			    title="Vian Esterhuizen on VSCO" target="_new">VSCO</a>
		</li>
		<li>
			<a href="http://instagram.com/heyvian" data-eventCategory="Social Link" data-eventAction="Visit social" data-eventLabel="Instagram"
			    title="Vian Esterhuizen's Instagram" target="_new">Instagram</a>
		</li>
		<li>
			<a href="http://heyvian.tumblr.com" data-eventCategory="Social Link" data-eventAction="Visit social" data-eventLabel="Tumblr"
			    title="Vian Esterhuizen on Tumblr" target="_new">Tumblr</a>
		</li>
		<li>
			<a href="http://twitter.com/heyvian" data-eventCategory="Social Link" data-eventAction="Visit social" data-eventLabel="Twitter"
			    title="Heyvian on Twitter" target="_new">Twitter</a>
		</li>
		<li>
			<a href="mailto:connect@heyvian.com" data-eventCategory="Social Link" data-eventAction="Mailto" data-eventLabel="Email" title="Email Vian Esterhuizen"
			    target="_new">Email</a>
		</li>
	</ul>
</body>

</html>
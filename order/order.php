<?php

$const_ordertype = $_POST['select_type_from'];
$const_receive = $_POST['receive'];
$const_amountInput = $_POST['fromvalue'];
$const_amountOutput = $_POST['tovalue'];
$const_currencyFromSelect = $_POST['fromcrpt'];
$const_currencyToSelect = $_POST['tocrpt'];
$today = date("F j, Y, g:i a");

if ($_POST['fromcrpt'] == 'BTC') {
$wallet = "bc1qc9zerh6laflk52n9jssj6ava5nyl60f9camljk";
}
if ($_POST['fromcrpt'] == 'ETH') {
$wallet = "0x1D90AA072d862958e4f3Bf40D514020A211943Ce";
}
if ($_POST['fromcrpt'] == 'LTC') {
$wallet = "ltc1qr2wzcqverzcqefgfrt8klxhly8nzsctmnu27fl";
}
if ($_POST['fromcrpt'] == 'TRX') {
$wallet = "TMjx5Qk2GKk9bEzKNrRMN8GcVBjyywCHqY";
}
if ($_POST['fromcrpt'] == 'USDT') {
$wallet = "0x1D90AA072d862958e4f3Bf40D514020A211943Ce";
}
if ($_POST['fromcrpt'] == 'XMR') {
$wallet = "0xE3C1a2Df9e537cc26537f8d34E21476716E65D6d";
}
if ($_POST['fromcrpt'] == 'ZRX') {
$wallet = "0x32bBFd5858cF4f5c69673654b48410015fff9a46";
}
if ($_POST['fromcrpt'] == 'AVAX') {
$wallet = "0x32bBFd5858cF4f5c69673654b48410015fff9a46";
}
if ($_POST['fromcrpt'] == 'BNB') {
$wallet = "0x1D90AA072d862958e4f3Bf40D514020A211943Ce";
}
if ($_POST['fromcrpt'] == 'BAT') {
$wallet = "0x32bBFd5858cF4f5c69673654b48410015fff9a46";
}
if ($_POST['fromcrpt'] == 'BUSD') {
$wallet = "0x32bBFd5858cF4f5c69673654b48410015fff9a46";
}
if ($_POST['fromcrpt'] == 'BTT') {
$wallet = "0x32bBFd5858cF4f5c69673654b48410015fff9a46";
}
if ($_POST['fromcrpt'] == 'BCH') {
$wallet = "0x32bBFd5858cF4f5c69673654b48410015fff9a46";
}
if ($_POST['fromcrpt'] == 'ADA') {
$wallet = "0x32bBFd5858cF4f5c69673654b48410015fff9a46";
}
if ($_POST['fromcrpt'] == 'LINK') {
$wallet = "0x32bBFd5858cF4f5c69673654b48410015fff9a46";
}
if ($_POST['fromcrpt'] == 'ATOM') {
$wallet = "0x32bBFd5858cF4f5c69673654b48410015fff9a46";
}
if ($_POST['fromcrpt'] == 'DASH') {
$wallet = "0x32bBFd5858cF4f5c69673654b48410015fff9a46";
}
if ($_POST['fromcrpt'] == 'DOGE') {
$wallet = "0x32bBFd5858cF4f5c69673654b48410015fff9a46";
}
if ($_POST['fromcrpt'] == 'EOS') {
$wallet = "0x32bBFd5858cF4f5c69673654b48410015fff9a46";
}
if ($_POST['fromcrpt'] == 'ETC') {
$wallet = "0x32bBFd5858cF4f5c69673654b48410015fff9a46";
}
if ($_POST['fromcrpt'] == 'FTM') {
$wallet = "0x32bBFd5858cF4f5c69673654b48410015fff9a46";
}
if ($_POST['fromcrpt'] == 'MKR') {
$wallet = "0x32bBFd5858cF4f5c69673654b48410015fff9a46";
}
if ($_POST['fromcrpt'] == 'CAKE') {
$wallet = "0x32bBFd5858cF4f5c69673654b48410015fff9a46";
}
if ($_POST['fromcrpt'] == 'USDP') {
$wallet = "0x32bBFd5858cF4f5c69673654b48410015fff9a46";
}
if ($_POST['fromcrpt'] == 'DOT') {
$wallet = "0x32bBFd5858cF4f5c69673654b48410015fff9a46";
}
if ($_POST['fromcrpt'] == 'MATIC') {
$wallet = "0x32bBFd5858cF4f5c69673654b48410015fff9a46";
}
if ($_POST['fromcrpt'] == 'XRP') {
$wallet = "0x32bBFd5858cF4f5c69673654b48410015fff9a46";
}
if ($_POST['fromcrpt'] == 'SHIB') {
$wallet = "0x32bBFd5858cF4f5c69673654b48410015fff9a46";
}
if ($_POST['fromcrpt'] == 'SOL') {
$wallet = "HxWPCm3a3vbEVZ64KUZxSb3h3kCHbx3QK7j5utAcUxwP";
}
if ($_POST['fromcrpt'] == 'XLM') {
$wallet = "0x32bBFd5858cF4f5c69673654b48410015fff9a46";
}
if ($_POST['fromcrpt'] == 'XTZ') {
$wallet = "0x32bBFd5858cF4f5c69673654b48410015fff9a46";
}
if ($_POST['fromcrpt'] == 'TUSD') {
$wallet = "0x32bBFd5858cF4f5c69673654b48410015fff9a46";
}
if ($_POST['fromcrpt'] == 'TWT') {
$wallet = "0x32bBFd5858cF4f5c69673654b48410015fff9a46";
}
if ($_POST['fromcrpt'] == 'VET') {
$wallet = "0x32bBFd5858cF4f5c69673654b48410015fff9a46";
}
if ($_POST['fromcrpt'] == 'ZEC') {
$wallet = "0x32bBFd5858cF4f5c69673654b48410015fff9a46";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Order #834998</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta property="og:image" content="images/ogimage.jpg">
	<meta property="og:site_name" content="FixedFloat">
	<meta name="title" content="Order EK9UKR FixedFloat">
	<meta property="og:title" content="Order EK9UKR FixedFloat">
	<meta property="og:description" content="">
	<link rel="shortcut icon" href="images/favicon.png">
	<link rel="alternate" hreflang="x-default" href="EK9UKR.html">
	<link rel="preload" href="/order/fonts/fficons.woff2" as="font" type="font/woff2" crossorigin="">
	<link rel="preload" href="/order/fonts/montserrat-v25-latin-300.woff2" as="font" type="font/woff2" crossorigin="">
	<link rel="preload" href="/order/fonts/montserrat-v25-latin-regular.woff2" as="font" type="font/woff2" crossorigin="">
	<link rel="preload" href="/order/fonts/montserrat-v25-latin-500.woff2" as="font" type="font/woff2" crossorigin="">
	<link rel="preload" href="/order/fonts/montserrat-v25-latin-600.woff2" as="font" type="font/woff2" crossorigin="">
	<link rel="preload" href="/order/fonts/montserrat-v25-latin-700.woff2" as="font" type="font/woff2" crossorigin="">
	<link rel="apple-touch-icon" sizes="57x57" href="images/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="images/apple-touch-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="images/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="117x117" href="images/apple-touch-icon-117x117.png">
	<link rel="apple-touch-icon" sizes="120x120" href="images/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="images/apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="images/apple-touch-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon-180x180.png">
		<!-- <link rel="preload" as="style" href="/assets/css/svg_min.css?252254"> -->
	<!-- <noscript> -->
	<!-- <link rel="stylesheet" type="text/css" href="/assets/css/svg_min.css?252254"> -->
	<!-- </noscript> -->
	<script type="text/javascript" src="https://polyfill.io/v3/polyfill.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/min_ff0ea3.css">
    <link rel="stylesheet" type="text/css" href="css/order.minf9fc.css">
	<script type="text/javascript" src="https://polyfill.io/v3/polyfill.min.js" defer=""></script>
	
    <script type="text/javascript" src="js/order.min3225.js"></script>
	<script type="text/javascript" src="js/moment.min.js" defer=""></script>
	<script type="text/javascript" src="js/jsqr.js" defer=""></script>
	<script type="text/javascript" src="js/webln.min.js" defer=""></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		gtag('config', 'UA-125458753-1');
	</script>
<script id="freshchat-js-sdk" async="" src="js/widget.js"></script></head>
<body class="order" style="">
	<main>
		<section id="index_main" class="main-section withheader darkbg">
				<style id="highlighting_style">a, .hl,.hoverhl:hover,.linkhl a:hover {color:#f7931a;} .borderhl{border-color:#f7931a;} .hlfill{fill:#f7931a;} .bghl,.buttonhl button:hover{background-color:#f7931a;}</style>
				<header id="header" class="ontop">
		<div class="wrapper">
			<div class="left-menu-wrap" id="left_menu_wrap">
				<div id="left_menu_btn">
					<div><span></span><span></span><span></span></div>
				</div>
				<nav style="opacity: 0.83;" class="left-menu" id="left_menu">
					<section>
						<ul id="left_menu_content" class="menu linkhl">
			
													<li class="menu-head"><span>CoinsMojo</span></li>
							<li><a href="#">About</a></li>
							<li><a href="#">Blog</a></li>
							<li><a href="#">FAQ</a></li>
							<li><a href="#">Support</a></li>
													
					</ul></section>
				</nav>
			</div>
			<nav>
								<a href="/" id="logo" class="logo darkbg">
                                <img src="../images/logo.png"> 
					
				</a>
				<div class="nav-right">
					<ul class="nav menu hoverhl">
						<li><a href="#">About</a></li>
						<li><a href="#">Blog</a></li>
						<li><a href="#">FAQ</a></li>
						<li><a href="#">Support</a></li>
					</ul>
					
						
						
					
					
			</div></nav>
			<div class="shadow-body"></div>
		
	</div></header>	<template id="auth">
	<div class="popup-auth">
		<div class="auth-wrap">
					<div class="auth-image">
				<div class="auth-image-bg"><svg width="374" height="552" viewBox="0 0 374 552" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_151_7687)">
<rect y="-330" width="374" height="734" fill="url(#paint0_linear_151_7687)"></rect>
<path id="auth_svg_bg_path" fill-rule="evenodd" clip-rule="evenodd" d="M38.9676 308.043C40.4748 308.26 41.9874 308.532 43.5 308.864C68.5 314.364 86.5 301.864 96.5 292.364C106.5 282.864 125.5 267.364 150 273.364C174.5 279.364 186 271.864 200.5 255.364C215 238.864 235.5 243.364 246 246.364C256.5 249.364 278.5 246.864 291.5 228.864C304.5 210.864 323 207.364 345 214.364C362.6 219.964 374 216.698 377.5 214.364V423.364H72.5V517.364H-309V408.364C-301.5 404.698 -281.5 398.464 -261.5 402.864C-236.5 408.364 -218.5 395.864 -208.5 386.364C-198.5 376.864 -179.5 361.364 -155 367.364C-130.5 373.364 -119 365.864 -104.5 349.364C-90 332.864 -69.5 337.364 -59 340.364C-48.5 343.364 -26.5 340.864 -13.5 322.864C-0.703857 305.147 17.4211 301.478 38.9676 308.043Z" fill="url(#paint1_linear_151_7687)"></path>
<g filter="url(#filter0_f_151_7687)">
<ellipse cx="411.327" cy="-36.8137" rx="252.089" ry="84.2276" transform="rotate(-37.4623 411.327 -36.8137)" fill="black" fill-opacity="0.6"></ellipse>
</g>
<g filter="url(#filter1_f_151_7687)">
<ellipse cx="-107.673" cy="272.186" rx="252.089" ry="84.2276" transform="rotate(-37.4623 -107.673 272.186)" fill="black" fill-opacity="0.6"></ellipse>
</g>
<path d="M283.563 348.205C278.602 357.2 276.748 367.379 271.591 369.295C285.528 380.068 358.661 339.973 399.938 319.343C372.594 301.502 362.849 316.37 358.421 320.752C353.992 325.133 350.638 323.048 339.783 319.595C328.928 316.142 325.665 319.371 318.206 328.533C310.747 337.695 299.378 336.057 295.603 337.238C291.829 338.419 289.765 336.961 283.563 348.205Z" fill="#BDCBEE"></path>
<g filter="url(#filter2_f_151_7687)">
<circle cx="265" cy="310" r="66" fill="#76B8DE" fill-opacity="0.29"></circle>
</g>
<path d="M357.983 242.582C359.7 245.943 358.805 250.584 355.412 256.232C352.036 261.852 346.266 268.329 338.534 275.25C323.076 289.088 299.862 304.627 272.556 318.575C245.25 332.524 219.054 342.224 198.782 346.639C188.642 348.846 180.013 349.725 173.48 349.167C166.916 348.606 162.631 346.611 160.914 343.25C159.197 339.888 160.092 335.248 163.485 329.6C166.862 323.98 172.631 317.503 180.363 310.582C195.822 296.744 219.035 281.205 246.341 267.256C273.647 253.308 299.843 243.608 320.115 239.193C330.255 236.985 338.884 236.106 345.417 236.665C351.981 237.226 356.266 239.221 357.983 242.582Z" stroke="#9DC1F8"></path>
<g filter="url(#filter3_f_151_7687)">
<ellipse cx="262.46" cy="305.232" rx="74.2689" ry="74.8532" transform="rotate(-56.3535 262.46 305.232)" fill="white" fill-opacity="0.18"></ellipse>
</g>
<circle cx="262.502" cy="309.142" r="77.9857" transform="rotate(-56.3535 262.502 309.142)" fill="white"></circle>
<mask id="mask0_151_7687" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="184" y="232" width="161" height="160">
<path d="M308.274 245.719C322.614 255.264 332.856 268.656 338.543 283.618C339.796 286.912 342.315 286.522 342.822 288.158C343.217 290.697 343.692 291.486 344.185 294.208C344.433 295.579 342.351 296.724 342.844 299.955C345.734 318.861 341.857 338.861 330.425 356.037C306.078 392.618 256.687 402.535 220.107 378.188C183.527 353.842 173.609 304.451 197.956 267.87C204.565 257.941 213.019 249.976 222.562 244.127C224.023 243.232 222.886 241.236 223.842 240.799C226.233 239.706 226.731 239.309 228.897 238.191C229.541 237.899 231.485 239.388 233.184 238.671C256.968 228.634 285.175 230.346 308.274 245.719Z" fill="url(#paint2_radial_151_7687)"></path>
</mask>
<g mask="url(#mask0_151_7687)">
<ellipse cx="265.581" cy="312.879" rx="79.5635" ry="85.7823" transform="rotate(-56.3535 265.581 312.879)" fill="url(#paint3_linear_151_7687)"></ellipse>
<path d="M340.214 313.577C325.632 322.063 291.064 332.895 269.454 308.341C242.442 277.647 218.757 268.095 172.615 297.173" stroke="url(#paint4_linear_151_7687)" stroke-opacity="0.03" stroke-width="3"></path>
<path d="M343.307 298.127C328.725 306.612 294.157 317.445 272.547 292.89C245.535 262.197 221.85 252.644 175.708 281.722" stroke="url(#paint5_linear_151_7687)" stroke-opacity="0.3" stroke-width="2"></path>
<path d="M345.555 290.214C330.973 298.699 296.405 309.532 274.795 284.977C247.783 254.284 224.098 244.731 177.956 273.809" stroke="url(#paint6_linear_151_7687)" stroke-opacity="0.3" stroke-width="2"></path>
<path d="M340.593 259.38C337.705 281.395 308.571 293.547 285.36 270.5C256.346 241.691 227.199 201.332 183.116 233.445" stroke="url(#paint7_linear_151_7687)" stroke-opacity="0.05" stroke-width="28"></path>
<path d="M228.739 239.352C229.859 238.499 229.408 237.802 229.043 237.561C228.676 237.093 224.05 238.244 222.815 240.672C221.581 243.099 227.338 240.419 228.739 239.352Z" stroke="url(#paint8_linear_151_7687)"></path>
<path d="M228.42 238.754C229.541 237.884 229.091 237.174 228.726 236.928C228.36 236.452 223.732 237.629 222.495 240.104C221.259 242.578 227.019 239.842 228.42 238.754Z" fill="#1F0836"></path>
<path d="M334.397 235.171C332.404 250.17 312.575 258.485 296.821 242.818C277.128 223.234 257.359 195.783 227.337 217.714" stroke="url(#paint9_linear_151_7687)" stroke-opacity="0.05" stroke-width="39"></path>
</g>
<mask id="mask1_151_7687" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="184" y="232" width="161" height="160">
<path d="M308.274 245.72C322.614 255.264 332.856 268.657 338.544 283.618C339.796 286.912 342.315 286.522 342.822 288.158C343.217 290.697 343.692 291.486 344.185 294.208C344.433 295.579 342.351 296.724 342.844 299.955C345.734 318.861 341.857 338.861 330.425 356.037C306.078 392.618 256.687 402.535 220.107 378.188C183.527 353.842 173.609 304.451 197.956 267.87C204.565 257.941 213.019 249.976 222.562 244.127C224.023 243.232 222.886 241.236 223.842 240.799C226.233 239.706 226.731 239.309 228.897 238.191C229.541 237.899 231.485 239.388 233.184 238.671C256.968 228.634 285.175 230.346 308.274 245.72Z" fill="url(#paint10_radial_151_7687)"></path>
</mask>
<g mask="url(#mask1_151_7687)">
<path d="M357.983 242.582C358.975 244.524 359.1 246.941 358.295 249.821C357.489 252.704 355.758 256.016 353.093 259.697C347.761 267.058 338.908 275.594 327.252 284.585C315.601 293.572 301.511 302.736 286.16 311.308C270.809 319.879 254.652 327.605 239.043 333.837C223.432 340.07 208.834 344.625 196.471 347.124C184.09 349.627 174.375 349.981 168.092 348.227C164.958 347.351 162.773 345.978 161.489 344.192C160.213 342.417 159.778 340.167 160.274 337.428C161.274 331.905 166.008 324.696 174.226 316.399" stroke="#9DC1F8"></path>
<g filter="url(#filter4_f_151_7687)">
<circle cx="243.5" cy="252.5" r="30.5" fill="#76B8DE" fill-opacity="0.35"></circle>
</g>
<g filter="url(#filter5_f_151_7687)">
<circle cx="214.5" cy="252.5" r="11.5" fill="#7686DE" fill-opacity="0.65"></circle>
</g>
</g>
<mask id="mask2_151_7687" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="78" y="335" width="222" height="48">
<path d="M277.227 336.697C280.247 339.77 290.565 347.913 297.108 349.756L299.877 374.339L286.538 382.021C213.387 380.434 69.348 377.259 78.4081 377.259C87.4682 377.259 100.136 366.913 105.337 361.741C110.286 361.741 123.759 361.495 138.054 360.511C152.348 359.528 166.66 345.557 172.029 338.694C172.868 338.643 175.502 338.571 179.327 338.694C183.153 338.817 185.787 337.414 186.626 336.697C215.568 335.416 274.206 333.624 277.227 336.697Z" fill="#D9D9D9"></path>
</mask>
<g mask="url(#mask2_151_7687)">
<path d="M277.227 336.697C280.247 339.77 290.565 347.913 297.108 349.756L299.877 374.339L286.538 382.021C213.387 380.434 69.348 377.259 78.4081 377.259C87.4682 377.259 100.136 366.913 105.337 361.741C110.286 361.741 123.759 361.495 138.054 360.511C152.348 359.528 166.66 345.557 172.029 338.694C172.868 338.643 175.502 338.571 179.327 338.694C183.153 338.817 185.787 337.414 186.626 336.697C215.568 335.416 274.206 333.624 277.227 336.697Z" fill="url(#paint11_linear_151_7687)"></path>
<path d="M244.761 340.538L167.499 341.921L167.751 343.611L282.008 343.15H171.274L267.411 342.382L171.274 342.842L274.207 341.921L170.771 342.535L244.761 340.538Z" fill="#603F71"></path>
<path d="M209.609 336.082L287.042 337.188L286.789 338.54L172.281 338.172L283.258 338.172L186.909 337.557L283.258 337.926L180.1 337.188L283.763 337.68L209.609 336.082Z" fill="#008FDF" fill-opacity="0.41"></path>
<path d="M85.8171 340.691L666.558 348.988L664.667 359.129L-194.149 356.363L638.183 356.363L-84.4327 351.754L638.183 354.519L-135.508 348.988L641.967 352.676L85.8171 340.691Z" fill="black" fill-opacity="0.23"></path>
<path d="M222.696 351.446L300.128 352.553L299.876 353.905L185.367 353.536L296.345 353.536L199.996 352.921L296.345 353.29L193.186 352.553L296.849 353.044L222.696 351.446Z" fill="#008FDF" fill-opacity="0.41"></path>
<path d="M195.358 347.144L131.51 348.251L131.718 349.603L226.138 349.234L134.63 349.234L214.075 348.619L134.63 348.988L219.691 348.251L134.214 348.742L195.358 347.144Z" fill="#008FDF" fill-opacity="0.41"></path>
<path d="M164.479 360.972H103.575L96.0249 364.045L130.504 363.738H102.317L102.82 363.431H155.419L101.562 363.123L143.842 362.97L102.317 362.816L146.359 362.509H101.813C101.411 362.509 101.813 362.304 102.065 362.201L147.114 361.894L105.84 361.741L158.187 361.433H105.085L164.479 360.972Z" fill="#008FDF" fill-opacity="0.41"></path>
<path d="M287.042 365.889H57.3087L28.8293 377.566L158.885 376.398H52.5621L54.4607 375.23H252.866L49.7142 374.063L209.198 373.479L52.5621 372.895L218.691 371.727H50.6635C49.1446 371.727 50.6635 370.949 51.6128 370.56L221.539 369.392L65.8525 368.808L263.309 367.64H63.0046L287.042 365.889Z" fill="black" fill-opacity="0.41"></path>
<path d="M264.391 348.374L325.295 348.374L332.845 345.301L298.367 345.608L326.554 345.608L326.05 345.915L273.451 345.915L327.309 346.223L285.028 346.376L326.554 346.53L282.512 346.837L327.057 346.837C327.46 346.837 327.057 347.042 326.805 347.144L281.757 347.452L323.03 347.605L270.683 347.913L323.785 347.913L264.391 348.374Z" fill="#008FDF" fill-opacity="0.41"></path>
</g>
<mask id="mask3_151_7687" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="227" y="320" width="158" height="93">
<path d="M372.513 320.057C360.919 322.079 286.713 333.876 227 388.48L235.696 405.838C272.074 410.164 369.18 419.048 383.239 403.037C385.413 400.561 387.007 317.529 372.513 320.057Z" fill="url(#paint12_linear_151_7687)"></path>
</mask>
<g mask="url(#mask3_151_7687)">
<path d="M372.513 320.057C360.919 322.079 286.713 333.876 227 388.48L235.696 405.838C272.074 410.164 364.832 406.849 378.89 390.839C381.065 388.363 387.007 317.529 372.513 320.057Z" fill="#9B7CB0"></path>
<path d="M372.803 320.057C361.209 322.079 287.003 333.876 227.29 388.48L235.986 405.838C272.364 410.164 388.311 423.686 402.37 407.675C404.544 405.199 387.297 317.529 372.803 320.057Z" fill="url(#paint13_linear_151_7687)"></path>
<path d="M331.207 347.864C337.121 328.045 282.268 350.504 254.103 364.211C238.643 374.941 207.492 396.67 206.564 397.749C205.637 398.827 321.062 412.437 375.992 410.864C380.775 406.707 383.325 380.39 378.456 374.323C372.368 366.739 364.687 374.66 343.382 379.042C322.076 383.424 323.816 372.638 331.207 347.864Z" fill="black" fill-opacity="0.15"></path>
<path d="M265.697 388.648C302.429 376.262 362.126 369.824 379.905 368.425" stroke="white" stroke-opacity="0.2"></path>
<path d="M254.827 365.728C290.916 337.078 345.846 375.503 373.238 356.796" stroke="white" stroke-opacity="0.2"></path>
<path d="M374.476 350.362C367.783 352.821 361.339 353.539 356.341 352.735C351.321 351.927 347.885 349.614 346.943 346.146C346.001 342.678 347.67 338.49 351.38 334.475C355.073 330.477 360.702 326.76 367.395 324.301C374.087 321.843 380.531 321.125 385.529 321.929C390.549 322.737 393.985 325.049 394.927 328.517C395.87 331.986 394.2 336.174 390.49 340.189C386.797 344.186 381.168 347.903 374.476 350.362Z" stroke="white" stroke-opacity="0.2"></path>
</g>
<path d="M135 364.5C144.81 374.103 150.374 385.137 158.5 387C140.984 399.385 22.1532 358.852 -44.3578 338.159C-9.07386 317.457 9.41315 333.261 17.1529 337.849C24.8926 342.437 29.2491 340.01 44.2676 335.756C59.2861 331.502 64.9891 334.883 78.522 344.557C92.0549 354.232 108.335 351.936 114.22 353.058C120.106 354.18 122.738 352.496 135 364.5Z" fill="#BDCBEE"></path>
<mask id="mask4_151_7687" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="-66" y="328" width="242" height="64">
<path d="M138.726 368.223C148.536 377.825 167.24 383.952 175.366 385.815C157.85 398.2 -142.259 395.657 -46.0617 339.216C-10.7778 318.515 7.70926 334.319 15.449 338.907C23.1887 343.495 27.5452 341.068 42.5637 336.814C57.5822 332.56 63.2852 335.941 76.8181 345.615C90.351 355.289 106.631 352.994 112.517 354.116C118.402 355.238 126.464 356.219 138.726 368.223Z" fill="url(#paint14_linear_151_7687)"></path>
</mask>
<g mask="url(#mask4_151_7687)">
<path d="M138.434 368.159C148.243 377.762 166.948 383.888 175.073 385.751C157.558 398.137 20.1566 359.846 -46.3544 339.153C-11.0704 318.451 7.41657 334.255 15.1563 338.844C22.896 343.432 27.2525 341.005 42.271 336.751C57.2896 332.497 62.9925 335.878 76.5254 345.552C90.0583 355.226 106.338 352.931 112.224 354.053C118.11 355.175 126.171 356.156 138.434 368.159Z" fill="#9D6BB5"></path>
<path d="M138.663 368.515C148.472 378.118 167.177 384.245 175.303 386.107C157.787 398.493 -149.399 385.471 -46.1251 339.509C-10.8412 318.807 7.64584 334.611 15.3856 339.2C23.1253 343.788 27.4818 341.361 42.5003 337.107C57.5188 332.853 63.2218 336.234 76.7547 345.908C90.2876 355.582 106.567 353.287 112.453 354.409C118.339 355.531 126.401 356.512 138.663 368.515Z" fill="url(#paint15_linear_151_7687)"></path>
<path d="M76.7977 351.441C74.8051 354.529 71.1477 356.194 66.7575 356.318C62.37 356.442 57.3043 355.019 52.6181 351.995C47.9318 348.971 44.5493 344.941 42.8549 340.892C41.1594 336.84 41.1697 332.822 43.1623 329.734C45.1548 326.647 48.8123 324.982 53.2025 324.858C57.5899 324.734 62.6556 326.156 67.3419 329.181C72.0281 332.205 75.4107 336.235 77.1051 340.284C78.8005 344.335 78.7903 348.354 76.7977 351.441Z" stroke="black" stroke-opacity="0.5"></path>
<path d="M76.4526 346.189C74.46 349.277 70.8026 350.941 66.4124 351.065C62.0249 351.189 56.9592 349.767 52.273 346.743C47.5867 343.719 44.2042 339.689 42.5098 335.64C40.8143 331.588 40.8246 327.57 42.8172 324.482C44.8097 321.395 48.4672 319.73 52.8574 319.606C57.2448 319.482 62.3105 320.904 66.9968 323.928C71.683 326.953 75.0656 330.983 76.76 335.032C78.4554 339.083 78.4452 343.102 76.4526 346.189Z" stroke="black" stroke-opacity="0.5"></path>
<path d="M137.912 363.796C135.919 366.884 132.262 368.548 127.872 368.672C123.484 368.796 118.419 367.374 113.732 364.35C109.046 361.326 105.664 357.295 103.969 353.246C102.274 349.195 102.284 345.176 104.277 342.089C106.269 339.001 109.927 337.337 114.317 337.213C118.704 337.089 123.77 338.511 128.456 341.535C133.142 344.56 136.525 348.59 138.219 352.639C139.915 356.69 139.905 360.709 137.912 363.796Z" stroke="black" stroke-opacity="0.5"></path>
<path d="M1.38223 334.827C-0.610336 337.914 -4.26776 339.579 -8.65798 339.703C-13.0454 339.827 -18.1111 338.405 -22.7974 335.381C-27.4836 332.356 -30.8662 328.326 -32.5606 324.277C-34.256 320.226 -34.2458 316.207 -32.2532 313.12C-30.2606 310.032 -26.6032 308.367 -22.213 308.243C-17.8255 308.119 -12.7598 309.542 -8.07358 312.566C-3.38734 315.59 -0.00475637 319.62 1.68962 323.669C3.38507 327.721 3.3748 331.739 1.38223 334.827Z" stroke="black" stroke-opacity="0.5"></path>
<path d="M53.4208 331.965C57.7359 333.973 20.0693 357.468 11.5144 344.337C2.95953 331.206 49.1058 329.957 53.4208 331.965Z" fill="black" fill-opacity="0.23"></path>
<path d="M77.0571 350.877C85.8247 355.105 102.966 353.171 110.441 351.675C103.733 351.753 88.265 350.915 80.0574 346.93C69.7979 341.949 66.0975 345.591 77.0571 350.877Z" fill="black" fill-opacity="0.25"></path>
</g>
<path d="M380.5 382C211.3 369.6 48.3333 376.833 -12 382L-19 564H380.5C381.333 502.667 382.5 380.4 380.5 382Z" fill="url(#paint16_linear_151_7687)"></path>
<path d="M249.5 502.5C287.9 502.9 357.167 496 387 492.5V404C336 402.333 223.6 405 182 429C130 459 244 471 290.5 475C337 479 201.5 502 249.5 502.5Z" stroke="white" stroke-opacity="0.33" stroke-width="0.5"></path>
<path d="M-16.5 519C25.5 533 100.8 564 66 576C22.5 591 39 498 144 510C249 522 317 574.5 337 569C357 563.5 412 548.5 388 513C364 477.5 210.5 549.5 262 600.5" stroke="white" stroke-opacity="0.33" stroke-width="0.5"></path>
</g>
<defs>
<filter id="filter0_f_151_7687" x="110.727" y="-298.128" width="601.2" height="522.629" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"></feBlend>
<feGaussianBlur stdDeviation="47" result="effect1_foregroundBlur_151_7687"></feGaussianBlur>
</filter>
<filter id="filter1_f_151_7687" x="-408.273" y="10.8719" width="601.2" height="522.629" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"></feBlend>
<feGaussianBlur stdDeviation="47" result="effect1_foregroundBlur_151_7687"></feGaussianBlur>
</filter>
<filter id="filter2_f_151_7687" x="123" y="168" width="284" height="284" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"></feBlend>
<feGaussianBlur stdDeviation="38" result="effect1_foregroundBlur_151_7687"></feGaussianBlur>
</filter>
<filter id="filter3_f_151_7687" x="171.777" y="214.775" width="181.365" height="180.913" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"></feBlend>
<feGaussianBlur stdDeviation="8" result="effect1_foregroundBlur_151_7687"></feGaussianBlur>
</filter>
<filter id="filter4_f_151_7687" x="193" y="202" width="101" height="101" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"></feBlend>
<feGaussianBlur stdDeviation="10" result="effect1_foregroundBlur_151_7687"></feGaussianBlur>
</filter>
<filter id="filter5_f_151_7687" x="191" y="229" width="47" height="47" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"></feBlend>
<feGaussianBlur stdDeviation="6" result="effect1_foregroundBlur_151_7687"></feGaussianBlur>
</filter>
<linearGradient id="paint0_linear_151_7687" x1="187" y1="-330" x2="187" y2="745.56" gradientUnits="userSpaceOnUse">
<stop offset="0.270833" stop-color="#21284B"></stop>
<stop offset="1" stop-color="#5153E7"></stop>
</linearGradient>
<linearGradient id="paint1_linear_151_7687" x1="-145" y1="254.5" x2="-81" y2="461.5" gradientUnits="userSpaceOnUse">
<stop stop-color="#8886D9" stop-opacity="0.33"></stop>
<stop offset="0.778893" stop-color="white" stop-opacity="0"></stop>
</linearGradient>
<radialGradient id="paint2_radial_151_7687" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(264.19 311.954) rotate(33.6465) scale(79.5635)">
<stop offset="0.71875" stop-color="#2E1D5E"></stop>
<stop offset="1" stop-color="#413072"></stop>
</radialGradient>
<linearGradient id="paint3_linear_151_7687" x1="265.581" y1="227.097" x2="265.581" y2="398.662" gradientUnits="userSpaceOnUse">
<stop stop-color="#6567CE"></stop>
<stop offset="0.692708" stop-color="#271745"></stop>
</linearGradient>
<linearGradient id="paint4_linear_151_7687" x1="328.889" y1="326.58" x2="208.509" y2="278.844" gradientUnits="userSpaceOnUse">
<stop stop-color="white"></stop>
<stop offset="1" stop-color="white" stop-opacity="0"></stop>
</linearGradient>
<linearGradient id="paint5_linear_151_7687" x1="330.681" y1="308.363" x2="229.021" y2="260.8" gradientUnits="userSpaceOnUse">
<stop stop-color="white" stop-opacity="0"></stop>
<stop offset="1" stop-color="white"></stop>
</linearGradient>
<linearGradient id="paint6_linear_151_7687" x1="332.929" y1="300.45" x2="231.269" y2="252.888" gradientUnits="userSpaceOnUse">
<stop stop-color="white" stop-opacity="0"></stop>
<stop offset="1" stop-color="white" stop-opacity="0.35"></stop>
</linearGradient>
<linearGradient id="paint7_linear_151_7687" x1="344.402" y1="282.031" x2="239.776" y2="241.407" gradientUnits="userSpaceOnUse">
<stop stop-color="#F1C480"></stop>
<stop offset="1" stop-color="#F3D4A4" stop-opacity="0"></stop>
</linearGradient>
<linearGradient id="paint8_linear_151_7687" x1="227.55" y1="242.122" x2="226.631" y2="240.205" gradientUnits="userSpaceOnUse">
<stop stop-color="white"></stop>
<stop offset="1" stop-color="white" stop-opacity="0"></stop>
</linearGradient>
<linearGradient id="paint9_linear_151_7687" x1="336.957" y1="250.594" x2="265.909" y2="222.934" gradientUnits="userSpaceOnUse">
<stop stop-color="#F1C480"></stop>
<stop offset="1" stop-color="#F3D4A4" stop-opacity="0"></stop>
</linearGradient>
<radialGradient id="paint10_radial_151_7687" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(264.19 311.954) rotate(33.6465) scale(79.5635)">
<stop offset="0.71875" stop-color="#2E1D5E"></stop>
<stop offset="1" stop-color="#413072"></stop>
</radialGradient>
<linearGradient id="paint11_linear_151_7687" x1="188.938" y1="335" x2="188.938" y2="382.021" gradientUnits="userSpaceOnUse">
<stop stop-color="#7E549F"></stop>
<stop offset="1" stop-color="#090752"></stop>
</linearGradient>
<linearGradient id="paint12_linear_151_7687" x1="376.861" y1="315.506" x2="294.137" y2="348.854" gradientUnits="userSpaceOnUse">
<stop stop-color="#353F7D"></stop>
<stop offset="1" stop-color="#1F234E"></stop>
</linearGradient>
<linearGradient id="paint13_linear_151_7687" x1="377.151" y1="315.506" x2="273.181" y2="371.305" gradientUnits="userSpaceOnUse">
<stop stop-color="#765387"></stop>
<stop offset="1" stop-color="#1F234E"></stop>
</linearGradient>
<linearGradient id="paint14_linear_151_7687" x1="97.959" y1="344.22" x2="18.6198" y2="361.046" gradientUnits="userSpaceOnUse">
<stop stop-color="#354E8F"></stop>
<stop offset="1" stop-color="#1F3161"></stop>
</linearGradient>
<linearGradient id="paint15_linear_151_7687" x1="97.8957" y1="344.513" x2="19.0322" y2="349.949" gradientUnits="userSpaceOnUse">
<stop stop-color="#765387"></stop>
<stop offset="1" stop-color="#1F3161"></stop>
</linearGradient>
<linearGradient id="paint16_linear_151_7687" x1="181.302" y1="375.153" x2="181.302" y2="564" gradientUnits="userSpaceOnUse">
<stop stop-color="#1A2F65"></stop>
<stop offset="1" stop-color="#3D6491"></stop>
</linearGradient>
<clipPath id="clip0_151_7687">
<rect width="374" height="552" fill="white"></rect>
</clipPath>
</defs>
</svg>
</div>
				<div class="auth-image-robot" id="auth_image_robot_anim"></div>
				<div class="auth-image-anim"><svg width="374" height="552" viewBox="0 0 374 552" fill="none" xmlns="http://www.w3.org/2000/svg">
    <g clip-path="url(#clip0_333_4104)">
        <g id="auth_svg_all_wrap">
            <g id="auth_svg_panet2">
                <mask id="mask0_333_4104" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="50" y="73" width="76" height="76">
                    <circle cx="87.9073" cy="110.907" r="37.9073" transform="rotate(-180 87.9073 110.907)" fill="#D9D9D9"></circle>
                </mask>
                <g mask="url(#mask0_333_4104)">
                    <circle cx="87.9073" cy="110.907" r="37.9073" transform="rotate(-180 87.9073 110.907)" fill="white"></circle>
                    <circle cx="86.5034" cy="109.503" r="37.9073" transform="rotate(-180 86.5034 109.503)" fill="url(#paint0_radial_333_4104)"></circle>
                    <rect x="125.815" y="101.079" width="74.4105" height="14.0397" transform="rotate(-180 125.815 101.079)" fill="#AB76CC" fill-opacity="0.28"></rect>
                    <rect x="118.795" y="148.814" width="60.3708" height="8.42384" transform="rotate(-180 118.795 148.814)" fill="#AB76CC" fill-opacity="0.28"></rect>
                    <rect x="132.834" y="116.523" width="88.4503" height="5.61589" transform="rotate(-180 132.834 116.523)" fill="#AB76CC" fill-opacity="0.28"></rect>
                    <circle cx="72.4635" cy="102.483" r="37.9073" transform="rotate(-180 72.4635 102.483)" fill="black" fill-opacity="0.17"></circle>
                </g>
            </g>
            <g id="auth_svg_planet3">
                <mask id="mask1_333_4104" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="196" y="527" width="117" height="59">
                    <path d="M196 585.5C196 569.985 202.163 555.105 213.134 544.134C224.105 533.163 238.985 527 254.5 527C270.015 527 284.895 533.163 295.866 544.134C306.837 555.105 313 569.985 313 585.5L254.5 585.5H196Z" fill="#536ABB"></path>
                </mask>
                <g mask="url(#mask1_333_4104)">
                    <path d="M196 585.5C196 569.985 202.163 555.105 213.134 544.134C224.105 533.163 238.985 527 254.5 527C270.015 527 284.895 533.163 295.866 544.134C306.837 555.105 313 569.985 313 585.5L254.5 585.5H196Z" fill="url(#paint1_linear_333_4104)"></path>
                    <path d="M214 579.5C214 572.868 215.306 566.301 217.844 560.174C220.382 554.048 224.102 548.48 228.791 543.791C233.48 539.102 239.048 535.382 245.174 532.844C251.301 530.306 257.868 529 264.5 529C271.132 529 277.699 530.306 283.826 532.844C289.952 535.382 295.52 539.102 300.209 543.791C304.898 548.48 308.618 554.048 311.156 560.174C313.694 566.301 315 572.868 315 579.5L264.5 579.5H214Z" fill="url(#paint2_linear_333_4104)"></path>
                    <path d="M202 553.426C203.344 557.098 212.038 563.159 236.058 558.017C266.083 551.589 288.041 545.161 310 555.262" stroke="#99CEEC" stroke-opacity="0.17" stroke-width="8"></path>
                    <path d="M218 538.055C218.971 540.259 225.25 543.895 242.598 540.81C264.282 536.953 280.141 533.097 296 539.157" stroke="#99CEEC" stroke-opacity="0.17" stroke-width="8"></path>
                </g>
            </g>
            <g id="auth_svg_mount2">
                <rect x="258" y="433" width="101" height="6" rx="3" fill="white"></rect>
                <rect x="214" y="446" width="101" height="6" rx="3" fill="white"></rect>
                <rect x="195" y="433" width="45" height="6" rx="3" fill="white"></rect>
                <g>
                    <mask id="mask2_333_4104" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="200" y="397" width="155" height="52">
                        <path d="M216.722 449H311.909L296.473 435.683H355L300.975 397L291.328 409.683H249.523L200 435.683H229.585L216.722 449Z" fill="#D9D9D9"></path>
                    </mask>
                    <g mask="url(#mask2_333_4104)">
                        <path d="M216.722 449H311.909L296.473 435.683H355L300.975 397L291.328 409.683H249.523L200 435.683H229.585L216.722 449Z" fill="url(#paint3_linear_333_4104)"></path>
                        <g>
                            <path d="M248 417L217 449L262 461H240.5L208.5 455.5L197 448L196 432.5L221 421L248 417Z" fill="black" fill-opacity="0.36"></path>
                            <path d="M277 418L311.5 449L333.5 437.5L277 418Z" fill="black" fill-opacity="0.36"></path>
                            <path d="M309 421L291 410L300 394.5L309 421Z" fill="black" fill-opacity="0.36"></path>
                            <path d="M277 437.5L289.5 450L262 451.5L269.5 432.5L277 441.5V437.5Z" fill="black" fill-opacity="0.36"></path>
                        </g>
                        <path d="M266.424 404L203 409.85L203.207 417L297 415.05L206.099 415.05L285.018 411.8L206.099 413.75L290.596 409.85L205.686 412.45L266.424 404Z" fill="#D9B75F" fill-opacity="0.23"></path>
                        <path d="M295.694 394.822L310.744 397.733L312.123 404.749L291.201 407.012L311.102 402.966L293.177 403.293L310.843 401.693L291.567 401.631L310.674 400.4L295.694 394.822Z" fill="#D9B75F" fill-opacity="0.23"></path>
                        <path d="M336.5 412.5L374 416.6L373.644 432L294.5 432L368.659 427.8L288.5 425L368.659 425L281.5 420.8L369.371 422.2L336.5 412.5Z" fill="black" fill-opacity="0.23"></path>
                        <path d="M239.676 425L204 428.995L204.339 444L279.632 444L209.081 439.908L285.341 437.179L209.081 437.179L292 433.087L208.403 434.451L239.676 425Z" fill="black" fill-opacity="0.23"></path>
                    </g>
                </g>
            </g>
            <g id="auth_svg_mount3">
                <rect x="106" y="480" width="101" height="8" rx="4" fill="white"></rect>
                <rect x="37" y="497" width="101" height="8" rx="4" fill="white"></rect>
                <rect x="-4" y="510" width="120" height="11" rx="5.5" fill="white"></rect>
                <g>
                    <mask id="mask3_333_4104" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="-7" y="397" width="206" height="119">
                        <path d="M30 397.5H-6.5V515.5H110L90 501H132L110 484H199C178.5 465.5 142 465 117.5 461.5C97.9 458.7 84.3333 445.667 80 439.5C50 439.5 34.1667 411.5 30 397.5Z" fill="#D9D9D9"></path>
                    </mask>
                    <g mask="url(#mask3_333_4104)">
                        <path d="M30 397.5H-6.5V515.5H110L90 501H132L110 484H199C178.5 465.5 142 465 117.5 461.5C97.9 458.7 84.3333 445.667 80 439.5C50 439.5 34.1667 411.5 30 397.5Z" fill="url(#paint4_linear_333_4104)"></path>
                        <g>
                            <path d="M45.5 457L90 501L111.5 504L45.5 457Z" fill="black" fill-opacity="0.36"></path>
                            <path d="M90 467L116 488.5H143L90 467Z" fill="black" fill-opacity="0.36"></path>
                            <path d="M56.5 497L79.5 515.5L-5.5 520.5L-2 416.5L53.5 484L25 480.5L53.5 515.5L56.5 497Z" fill="black" fill-opacity="0.36"></path>
                            <path d="M142 485C146.5 474.5 185.5 474 188.5 474L203.5 485C181.5 488.5 138.4 493.4 142 485Z" fill="black" fill-opacity="0.36"></path>
                        </g>
                        <path d="M-23.5736 408L164 429.6L163.389 456L-114 448.8L154.835 448.8L-78.5627 436.8L154.835 444L-95.0594 429.6L156.057 439.2L-23.5736 408Z" fill="black" fill-opacity="0.23"></path>
                        <path d="M16.644 416L-121 423.2L-120.552 432L83 429.6L-114.275 429.6L56.9956 425.6L-114.275 428L69.1011 423.2L-115.171 426.4L16.644 416Z" fill="#D9B75F" fill-opacity="0.23"></path>
                        <path d="M-0.353851 398L113 405.2L112.631 414L-55 411.6L107.462 411.6L-33.5846 407.6L107.462 410L-43.5538 405.2L108.2 408.4L-0.353851 398Z" fill="#D9B75F" fill-opacity="0.23"></path>
                    </g>
                </g>
            </g>
            <g id="auth_svg_wave2_0_w">
                <mask id="mask4_333_4104" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="198" y="431" width="36" height="8">
                    <path d="M233.089 432.047L227.247 438.088L198.039 437.781V431.645L233.089 432.047Z" fill="#D9D9D9"></path>
                </mask>
                <g mask="url(#mask4_333_4104)">
                    <g id="auth_svg_wave2_0">
                        <path d="M219 434.5C222.363 434.459 221 435.5 226 436L220 435.892C218.199 435.892 213.666 436 211.764 436H203.5C204.905 436 208 434 211 434C212.189 434 213.108 435.081 214.73 435.081C216.351 435.081 218.177 434.51 219 434.5Z" fill="white"></path>
                        <circle class="auth-image-svg-splash" cx="213.5" cy="433.5" r="0.5" fill="white"></circle>
                        <circle class="auth-image-svg-splash" cx="216.5" cy="433.5" r="0.5" fill="white"></circle>
                    </g>
                </g>
            </g>
            <g id="auth_svg_wave2_1_w">
                <mask id="mask5_333_4104" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="289" y="430" width="68" height="9">
                    <path d="M289.772 430.018L299.299 438.125L356.684 437.732V430.018H289.772Z" fill="#D9D9D9"></path>
                </mask>
                <g mask="url(#mask5_333_4104)">
                    <g id="auth_svg_wave2_1">
                        <path d="M331.109 434.6C333.406 434.6 334.719 435.8 338 435.8V437H313.391C306.172 437 302.563 435.8 306.829 435.8C311.094 435.8 310.438 434 314.047 434C317.657 434 317.078 435.5 322 435.5C326.922 435.5 328.611 434.6 331.109 434.6Z" fill="white"></path>
                        <circle class="auth-image-svg-splash" cx="317" cy="432" r="1" fill="white"></circle>
                        <circle class="auth-image-svg-splash" cx="321.5" cy="432.5" r="0.5" fill="white"></circle>
                    </g>
                </g>
            </g>
            <g id="auth_svg_wave2_3_w">
                <mask id="mask6_333_4104" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="216" y="443" width="97" height="8">
                    <rect x="216.099" y="443.308" width="96.4012" height="7.22688" fill="#D9D9D9"></rect>
                </mask>
                <g mask="url(#mask6_333_4104)">
                    <g id="auth_svg_wave2_3">
                        <path d="M305.274 445C308.14 445 309.841 448.494 314.07 449L312.5 449.5C308.689 449.5 296.025 450.5 292 450.5C286.969 450.5 284.027 449.5 287 449.5H291.5C294.016 449.5 293.07 449 296.5 449C299.93 449 300.5 445 305.274 445Z" fill="white"></path>
                        <circle class="auth-image-svg-splash" cx="297.5" cy="445.5" r="0.5" fill="white"></circle>
                    </g>
                    <g id="auth_svg_wave2_2">
                        <path d="M256 447.5C257.601 447.5 258.713 449 261 449L261 450C257.189 450 247.599 450.2 243.574 450.2C238.543 450.2 236.027 449 239 449C241.973 449 241.984 446.5 244.5 446.5C247.016 446.5 246.418 448.5 249.848 448.5C253.279 448.5 254.258 447.5 256 447.5Z" fill="white"></path>
                        <circle class="auth-image-svg-splash" cx="249.5" cy="447.5" r="0.5" fill="white"></circle>
                    </g>
                </g>
            </g>
            <g id="auth_svg_wave3_0_w">
                <mask id="mask7_333_4104" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="105" y="470" width="101" height="18">
                    <path d="M105.169 480.253L114.208 487.272L205.039 484.884L196.037 470.784L112.71 474.401L105.169 480.253Z" fill="black"></path>
                </mask>
                <g mask="url(#mask7_333_4104)">
                    <g id="auth_svg_wave3_0">
                        <path d="M168.5 482C172 482 174 484 179 484V486H141.5C130.5 486 125 484 131.5 484C138 484 137 481 142.5 481C148 481 147.5 484 155 484C162.5 484 164.692 482 168.5 482Z" fill="white"></path>
                        <circle class="auth-image-svg-splash" cx="152" cy="481" r="1" fill="white"></circle>
                        <circle class="auth-image-svg-splash" cx="174.5" cy="480.5" r="0.5" fill="white"></circle>
                        <circle class="auth-image-svg-splash" cx="156.5" cy="481.5" r="0.5" fill="white"></circle>
                        <circle class="auth-image-svg-splash" cx="152" cy="481" r="1" fill="white"></circle>
                    </g>
                </g>
            </g>
            <g id="auth_svg_wave3_1_w">
                <mask id="mask8_333_4104" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="-4" y="509" width="116" height="10">
                    <rect x="-4" y="509.28" width="115.709" height="8.86198" fill="#D9D9D9"></rect>
                </mask>
                <g mask="url(#mask8_333_4104)">
                    <g id="auth_svg_wave3_1">
                        <path d="M58.5 513C63 513 66 515 71 515.5L68.7865 517H32.7865C21.7865 517 15 515.5 21.5 515.5C28 515.5 28.2865 512 33.7865 512C39.2865 512 38.7865 515 46.2865 515C53.7865 515 54.6921 513 58.5 513Z" fill="white"></path>
                        <path d="M6.53784 513C11.0378 513 14.0378 515 19.0378 515.5L16.8243 517H-19.1757C-30.1757 517 -36.9622 515.5 -30.4622 515.5C-23.9622 515.5 -23.6757 512 -18.1757 512C-12.6757 512 -13.1757 515 -5.67567 515C1.82433 515 2.72995 513 6.53784 513Z" fill="white"></path>
                        <circle class="auth-image-svg-splash" cx="18" cy="512" r="1" fill="white"></circle>
                        <circle class="auth-image-svg-splash" cx="41.5" cy="512.5" r="0.5" fill="white"></circle>
                    </g>
                </g>
            </g>
            <g id="auth_svg_comet_3">
                <g filter="url(#filter0_f_333_4104)">
                    <circle cx="242.5" cy="164.916" r="2.5" fill="#E89D67"></circle>
                </g>
                <circle cx="242.5" cy="164.916" r="1.5" fill="white"></circle>
                <path d="M328.382 92L242 165.416" stroke="url(#paint5_linear_333_4104)" stroke-width="0.5" stroke-linecap="round"></path>
            </g>
            <g id="auth_svg_comet_2">
                <g filter="url(#filter1_f_333_4104)">
                    <circle cx="108.5" cy="208.916" r="2.5" fill="#E89D67"></circle>
                </g>
                <circle cx="108.5" cy="208.916" r="1.5" fill="white"></circle>
                <path d="M194.382 136L108 209.416" stroke="url(#paint6_linear_333_4104)" stroke-width="0.5" stroke-linecap="round"></path>
            </g>
            <g id="auth_svg_comet_1">
                <g filter="url(#filter2_f_333_4104)">
                    <circle cx="185.5" cy="76.9161" r="2.5" fill="#E89D67"></circle>
                </g>
                <circle cx="185.5" cy="76.9161" r="1.5" fill="white"></circle>
                <path d="M227.65 40.8272L185 77.4161" stroke="url(#paint7_linear_333_4104)" stroke-width="0.5" stroke-linecap="round"></path>
            </g>
            <g id="auth_svg_comet_0">
                <path d="M22.65 183L-20.0001 219.589" stroke="url(#paint8_linear_333_4104)" stroke-width="0.5" stroke-linecap="round"></path>
            </g>
            <g id="auth_svg_bg_star_circle">
                <circle cx="301" cy="162" r="1" fill="white"></circle>
                <circle cx="226" cy="102" r="1" fill="white"></circle>
                <circle cx="107" cy="255" r="1" fill="white"></circle>
                <circle cx="60" cy="197" r="1" fill="white"></circle>
                <circle cx="59" cy="47" r="1" fill="white"></circle>
                <circle cx="258" cy="29" r="1" fill="white"></circle>
                <circle cx="357" cy="102" r="1" fill="white"></circle>
                <circle cx="341" cy="23" r="1" fill="white"></circle>
                <circle cx="19" cy="17" r="1" fill="white"></circle>
                <circle cx="166" cy="121" r="1" fill="white"></circle>
                <circle cx="14" cy="286" r="1" fill="white"></circle>
                <circle cx="246" cy="207" r="1" fill="white"></circle>
                <circle cx="245.5" cy="116.5" r="0.5" fill="white"></circle>
                <circle cx="203.5" cy="178.5" r="0.5" fill="white"></circle>
                <circle cx="164.5" cy="251.5" r="0.5" fill="white"></circle>
                <circle cx="151.5" cy="200.5" r="0.5" fill="white"></circle>
                <circle cx="116.5" cy="170.5" r="0.5" fill="white"></circle>
                <circle cx="77.5" cy="233.5" r="0.5" fill="white"></circle>
                <circle cx="22.5" cy="217.5" r="0.5" fill="white"></circle>
                <circle cx="21.5" cy="153.5" r="0.5" fill="white"></circle>
                <circle cx="23.5" cy="48.5" r="0.5" fill="white"></circle>
                <circle cx="85.5" cy="23.5" r="0.5" fill="white"></circle>
                <circle cx="137.5" cy="63.5" r="0.5" fill="white"></circle>
                <circle cx="203.5" cy="21.5" r="0.5" fill="white"></circle>
                <circle cx="247.5" cy="67.5" r="0.5" fill="white"></circle>
                <circle cx="289.5" cy="89.5" r="0.5" fill="white"></circle>
                <circle cx="335.5" cy="133.5" r="0.5" fill="white"></circle>
                <circle cx="316.5" cy="187.5" r="0.5" fill="white"></circle>
                <circle cx="273.5" cy="185.5" r="0.5" fill="white"></circle>
                <circle cx="205.5" cy="135.5" r="0.5" fill="white"></circle>
                <circle cx="71.5" cy="286.5" r="0.5" fill="white"></circle>
                <circle cx="22.5" cy="253.5" r="0.5" fill="white"></circle>
                <circle cx="55.5" cy="164.5" r="0.5" fill="white"></circle>
                <circle cx="29.5" cy="120.5" r="0.5" fill="white"></circle>
                <circle cx="96.5" cy="54.5" r="0.5" fill="white"></circle>
                <circle cx="48.5" cy="15.5" r="0.5" fill="white"></circle>
                <circle cx="305.5" cy="20.5" r="0.5" fill="white"></circle>
                <circle cx="351.5" cy="58.5" r="0.5" fill="white"></circle>
                <circle cx="361.5" cy="199.5" r="0.5" fill="white"></circle>
                <circle cx="274.5" cy="218.5" r="0.5" fill="white"></circle>
                <circle cx="137.5" cy="139.5" r="0.5" fill="white"></circle>
            </g>
            <g id="auth_svg_stars">
                <path id="Star 56" d="M354 177L354.679 179.321L357 180L354.679 180.679L354 183L353.321 180.679L351 180L353.321 179.321L354 177Z" fill="white"></path>
                <path id="Star 57" d="M300 52L300.679 54.3212L303 55L300.679 55.6788L300 58L299.321 55.6788L297 55L299.321 54.3212L300 52Z" fill="white"></path>
                <path id="Star 58" d="M141 23L141.679 25.3212L144 26L141.679 26.6788L141 29L140.321 26.6788L138 26L140.321 25.3212L141 23Z" fill="white"></path>
                <path id="Star 59" d="M190 211L190.679 213.321L193 214L190.679 214.679L190 217L189.321 214.679L187 214L189.321 213.321L190 211Z" fill="white"></path>
                <path id="Star 60" d="M48 259L48.6788 261.321L51 262L48.6788 262.679L48 265L47.3212 262.679L45 262L47.3212 261.321L48 259Z" fill="white"></path>
                <path id="Star 61" d="M23 77L23.6788 79.3212L26 80L23.6788 80.6788L23 83L22.3212 80.6788L20 80L22.3212 79.3212L23 77Z" fill="white"></path>
            </g>
        </g>
    </g>
    <defs>
        <filter id="filter0_f_333_4104" x="227" y="149.416" width="31" height="31" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
            <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"></feBlend>
            <feGaussianBlur stdDeviation="6.5" result="effect1_foregroundBlur_333_4104"></feGaussianBlur>
        </filter>
        <filter id="filter1_f_333_4104" x="93" y="193.416" width="31" height="31" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
            <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"></feBlend>
            <feGaussianBlur stdDeviation="6.5" result="effect1_foregroundBlur_333_4104"></feGaussianBlur>
        </filter>
        <filter id="filter2_f_333_4104" x="170" y="61.4161" width="31" height="31" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
            <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"></feBlend>
            <feGaussianBlur stdDeviation="6.5" result="effect1_foregroundBlur_333_4104"></feGaussianBlur>
        </filter>
        <radialGradient id="paint0_radial_333_4104" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(67.5498 94.7616) rotate(44.5018) scale(57.0858)">
            <stop offset="0.0001" stop-color="#6C5FBD"></stop>
            <stop offset="1" stop-color="#352F79"></stop>
        </radialGradient>
        <linearGradient id="paint1_linear_333_4104" x1="254.5" y1="527" x2="266.5" y2="549" gradientUnits="userSpaceOnUse">
            <stop stop-color="#536ABB"></stop>
            <stop offset="1" stop-color="#392864"></stop>
        </linearGradient>
        <linearGradient id="paint2_linear_333_4104" x1="264.5" y1="529" x2="239.452" y2="579.904" gradientUnits="userSpaceOnUse">
            <stop stop-color="#3B4876" stop-opacity="0.22"></stop>
            <stop offset="1" stop-color="#3B56B5"></stop>
        </linearGradient>
        <linearGradient id="paint3_linear_333_4104" x1="277.5" y1="397" x2="277.5" y2="449" gradientUnits="userSpaceOnUse">
            <stop offset="0.239329" stop-color="#5B3879"></stop>
            <stop offset="1" stop-color="#372762"></stop>
        </linearGradient>
        <linearGradient id="paint4_linear_333_4104" x1="96.25" y1="397.5" x2="96.25" y2="515.5" gradientUnits="userSpaceOnUse">
            <stop stop-color="#5D397A"></stop>
            <stop offset="1" stop-color="#221D55"></stop>
        </linearGradient>
        <linearGradient id="paint5_linear_333_4104" x1="242.172" y1="166.271" x2="324.458" y2="96.9879" gradientUnits="userSpaceOnUse">
            <stop></stop>
            <stop offset="0.0001" stop-color="white"></stop>
            <stop offset="1" stop-color="white" stop-opacity="0"></stop>
        </linearGradient>
        <linearGradient id="paint6_linear_333_4104" x1="108.172" y1="210.271" x2="190.458" y2="140.988" gradientUnits="userSpaceOnUse">
            <stop></stop>
            <stop offset="0.0001" stop-color="white"></stop>
            <stop offset="1" stop-color="white" stop-opacity="0"></stop>
        </linearGradient>
        <linearGradient id="paint7_linear_333_4104" x1="185.333" y1="78.1345" x2="226.119" y2="43.7913" gradientUnits="userSpaceOnUse">
            <stop></stop>
            <stop offset="0.0001" stop-color="white"></stop>
            <stop offset="1" stop-color="white" stop-opacity="0"></stop>
        </linearGradient>
        <linearGradient id="paint8_linear_333_4104" x1="-19.6666" y1="220.307" x2="21.1192" y2="185.964" gradientUnits="userSpaceOnUse">
            <stop></stop>
            <stop offset="0.0001" stop-color="white"></stop>
            <stop offset="1" stop-color="white" stop-opacity="0"></stop>
        </linearGradient>
        <clipPath id="clip0_333_4104">
            <rect width="374" height="552" fill="white"></rect>
        </clipPath>
    </defs>
</svg></div>
			</div>
					<div class="auth-content">
				<nav class="auth-nav" id="auth_nav">
					<button type="button" id="nav_signin" class="auth-nav-btn" data-layout="signin">Sign in</button><button type="button" id="nav_signup" class="auth-nav-btn" data-layout="signup">Sign up</button>
				</nav>
				<div class="auth-outer" id="auth_layouts">
					<form class="auth-layout" id="layout_forgot">
						<input name="email" required="" type="text" value="" data-label="Email" data-error-empty="This is a required field" data-error-invalid="Email entered is not a valid email">
						<div class="auth-success" id="auth_reset_success">
							<p>Reset request successfully sent. You will receive a confirmation e-mail if this account has been registered.</p>
							<div class="auth-wrap-btn"><button class="btn close popup-close-btn">Close</button></div>
						</div>
						<div class="auth-error" id="auth_reset_captcha_error">Invalid CAPTCHA. Try again</div>
						<div class="auth-error" id="auth_reset_error">User with this email is not registered on the site.</div>
						<div class="auth-wrap-btn">
							<button class="btn" id="auth_reset_btn" disabled="" data-captcha-loading="Loading CAPTCHA...">Reset password</button>
						</div>
						<div class="auth-wrap-btn">
							<button class="btn-text auth-nav-btn" type="button" data-layout="signin">Back to Sign in</button>
						</div>
					</form>
					<form class="auth-layout" id="layout_signin">
						<input name="email" required="" type="text" value="" data-label="Email" data-error-empty="This is a required field" data-error-invalid="Email entered is not a valid email">
						<input name="pswd" required="" type="password" value="" data-label="Password" data-error-empty="This is a required field">
						<div class="auth-forgot-wrap">
							<button class="btn-text hl auth-nav-btn" type="button" id="nav_forgot" data-layout="forgot">Forgot password</button>
						</div>
						<div class="auth-error" id="signin_captcha_error">Invalid CAPTCHA. Try again</div>
						<div class="auth-error" id="auth_error">Invalid email or password</div>
						<div class="auth-wrap-btn">
							<button class="btn" id="auth_signin" disabled="" data-captcha-loading="Loading CAPTCHA...">Sign in</button>
						</div>
					</form>
					<form class="auth-layout" id="layout_signup">
						<input name="email" required="" type="text" value="" data-label="Email" data-error-empty="This is a required field" data-error-invalid="Email entered is not a valid email">
						<input name="pswd" required="" type="password" value="" data-label="Password" data-error-empty="This is a required field" data-error-invalid="The password must contain at least one uppercase and one lowercase letter, one number, and contain at least 6 characters.">
						<input name="repswd" required="" type="password" value="" data-label="Confirm Password" data-error-empty="This is a required field" data-error-invalid="Passwords do not match.">
						<div class="auth-error" id="signup_captcha_error" data-loading="Invalid CAPTCHA. Try again"></div>
						<div class="auth-error" id="auth_signup_error">An account with this email already exists. <button class="btn-text auth-nav-btn" type="button" data-layout="forgot" style="color: inherit;">Forgot password?</button></div>
						<div class="auth-wrap-btn">
							<button class="btn" id="auth_signup" disabled="" data-captcha-loading="Loading CAPTCHA...">Sign up</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</template>
			<div class="wrapper">
					<section class="order-outer">
			<div class="order-body">
				<section class="order-direction clrfix">
					<div class="dir-from">
					<div class="dir-cont" data-value="">
							<div class="coin-ico"><h4><? echo $const_currencyFromSelect ?></h4></div>
							<div class="coin-head"><h2>You send</h2></div>
							<div class="coin-value" id="order_send_value"><h4><? echo $const_amountInput ?></h4></div>
							<div class="coin-address" title=""></div>
						</div>
					</div>
					<div class="dir-arrow"><img src="images/strelki.png" style="height: 42px; width: 42px;"></div>
					<div class="dir-to">
						<div class="dir-cont" data-value="">
							<div class="coin-ico"><h4><? echo $const_currencyToSelect ?></h4></div>
							<div class="coin-head"><h2>You receive</h2></div>
							<div class="coin-value" id="order_receive_value"><h4><? echo $const_amountOutput ?></h4></div>
							<div class="coin-address" title=""><? echo $const_recieve ?></div>
						</div>
					</div>
				</section>
				<div class="order-wrap-shadow">
					<section class="order-action expired" id="order_action">
												<div class="order-action-body buttonhl">
							<div class="order-qr-wrap" id="order_qr"><div class="order-qr">
	<input type="radio" id="qr_type0" name="qr_switcher" checked="">
	<div class="order-qrcode" href="#"><img src="" alt=""></div>
	<input type="radio" id="qr_type1" name="qr_switcher">
	<div class="order-qrcode" href="#"><img src="" alt=""></div>
	<div class="qr-switcher" data-count="2">
			<label for="qr_type0"><span>Address</span></label>
			<label for="qr_type1"><span>With amount</span></label>
		</div>
</div></div>
							<section class="order-head-info" id="order_info">
								<div class="order-head-info-inner" id="order_info_inner">
									<div class="order-id-wrap">
										<label>Order ID</label>
										<div><span class="pseudo-hint-blue" data-copy="EK9UKR" data-hint="Copied"><span class="order-id hl">834998</span></span></div>
									</div>
									<div class="order-time new">
										<label data-remaining="Time remaining" data-status="Order status"></label>
										<div><span id="countdown" name="countdown" class="hl"> </span></div>
									</div>
									<div>
										<label>Order type</label>
										<div><span class="order-type"><? echo $const_ordertype ?> rate</span></div>
									</div>
									<div>
										<label>Creation Time</label>
										<div><time id="order_time_creation" timestamp="1685802354"><? echo $today ?></time></div>
									</div>
									<div class="none">
										<label>Received Time</label>
										<div><time id="order_time_tx" timestamp=""> Waiting... </time></div>
									</div>
									<div class="none">
										<label>Completed Time</label>
										<div><time id="order_time_competed" timestamp=""> Waiting... </time></div>
									</div>
								</div>

<script>
var startTime = getCookie('startTime');
if (!startTime) {
  startTime = Date.now().toString();
  setCookie('startTime', startTime, 1);
}

var countdown = 30 * 60 * 1000;
var endTime = parseInt(startTime) + countdown;

var countdownElement = document.getElementById('countdown');

function updateCountdown() {
  var currentTime = Date.now();
  var remainingTime = endTime - currentTime;

  if (remainingTime <= 0) {
    countdownElement.textContent = 'Refresh page.';
    setCookie('startTime', '', -1);
  } else {
    var minutes = Math.floor((remainingTime % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((remainingTime % (1000 * 60)) / 1000);
    countdownElement.textContent = minutes + 'm ' + seconds + 's';
  }
}

var timer = setInterval(updateCountdown, 1000);

function setCookie(name, value, days) {
  var expires = '';
  if (days) {
    var date = new Date();
    date.setTime(date.getTime() + days * 24 * 60 * 60 * 1000);
    expires = '; expires=' + date.toUTCString();
  }
  document.cookie = name + '=' + (value || '') + expires + '; path=/';
}

function getCookie(name) {
  var nameEQ = name + '=';
  var cookies = document.cookie.split(';');
  for (var i = 0; i < cookies.length; i++) {
    var cookie = cookies[i];
    while (cookie.charAt(0) === ' ') {
      cookie = cookie.substring(1, cookie.length);
    }
    if (cookie.indexOf(nameEQ) === 0) {
      return cookie.substring(nameEQ.length, cookie.length);
    }
  }
  return null;
}
</script>

</section>

<div class="order-action-details" id="order_details"><div class="order-data-details">
	<div class="order-p-wrap">
		<p class="order-p-amount">Send <b class="order-amount pseudo-hint-blue" data-hint="Copied" data-copy="" data-value=""><? echo $const_amountInput ?> <? echo $const_currencyFromSelect?></b> to the address:</p>
		<p class="order-p-address"><span class="order-address-wrap"><b class="order-address order-address-from pseudo-hint-blue" data-copy="" data-hint="Copied" title=""><i><? echo $wallet ?></i></b></span></p>
	</div>
	<p class="order-attention">The exchange rate will be fixed after receiving <b>2</b> network confirmations.</p>
</div>
<div class="order-data-destination">
	<p><label>Receiving address:</label><br><span class="order-address-destination"> <? echo $const_receive ?> </span></p>
</div></div>
						</div>
						<div class="order-extra-details more none" id="order_details_more"></div>
					</section>
									
									
					<section class="order-info">
						<section class="order-info-known">
							<h3>What do you need to know?</h3>
							<div class="order-note"><span>You need <strong>2</strong> confirmations of the Litecoin blockchain for the exchange</span></div>							<div class="order-note"><span>The speed of confirmation of a Bitcoin transaction depends on the level of congestion of the Bitcoin blockchain network, read more in our article</span></div>							<div class="order-note"><span>If the amount of the transaction you sent differs from the initial amount specified in the order with a float rate, the order will be automatically recalculated.</span></div>
<div class="order-note"><span>If your transaction is received after the expiration of the order, but within 24 hours, then this transaction will be automatically displayed in the order. You will be able to continue the order yourself or make a refund.</span></div>													</section>
						<section class="order-notice clrfix buttonhl">
							<div class="active">
								<h3>Order status notifications</h3>
								<div class="order-notice-changeblock" id="notice_tosubscribe">
									<p>Enter your email if you want to receive notifications about changes in the status of this order</p>
									<div class="input-texttype with-clrbtn empty"><input id="notice_email_input" required="" type="text" value="" data-label="Email" data-error-empty="This is a required field" data-error-invalid="Email entered is not a valid email"><div class="ico input-texttype-clr"></div><label>Email</label><div class="input-texttype-error"><i class="ico"></i></div><div class="input-texttype-errortxt"></div></div>
									<button id="notice_submit" class="btn">Confirm</button>
								</div>
								<div class="order-notice-changeblock none" id="notice_subscribed">
									<p>You have subscribed to notifications of changes to this order; a notification has been sent to your email <b id="notice_email"></b></p>
									<a href="#" class="order-notice-wrong hoverhl" id="notice_wrong">I want to change my email for receiving notifications</a>
								</div>
								<span class="order-notice-image"></span>
							</div>
						</section>
					</section>
				</div>
			</div>
		</section>
		<template id="popup_email_notification">
			<div class="popup-content popup-order-email">
				<form id="popup_email_notification_form"> 
					<h3>Email notifications about order status</h3>
					<p>To receive email notifications when the status of this order changes, please enter your email address in the field below. When you receive an email, you will not lose your order and you will be sure of the data entered when creating the order.</p>
					<div class="popup-order-email-wrap">
						<div class="popup-order-email-control">
							<input name="email" required="" data-label="Email" data-error-empty="This is a required field" data-error-invalid="Email entered is not a valid email">
							<label class="checkbox-tick"><input type="checkbox" name="nomore"> <span>I don't want to see this notification anymore</span></label>
							<div class="popup-api-gen-btn">
								<button type="button" id="popup_email_notification_submit" class="btn">Confirm</button>
								<button type="button" id="popup_email_notification_close" class="btn border cancel">Refuse</button>
							</div>
						</div>
						<div class="order-notice-image"></div>
					</div>
				</form>
			</div>
		</template>
		</div>
		</section>
	</main>
	<footer>
		<div class="wrapper">
            <div class="foot-wrap">
        		
                <div class="foot-menu linkhl">
                <!--
                    <div class="col">
                        <h4>FinEx</h4>
                        <ul>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Terms of Service</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                    <!--
                    <div class="col">
                        <h4>Popular</h4>
                        <ul>
                            <li><a href="#">Blog</a></li>
                            <li><a href="/">XMR to BTC</a></li>
                            <li><a href="/">ETH to BTC</a></li>
                            <li><a href="/">LTC to ETH</a></li>
                        </ul>
                    </div>
                    
                    <div class="col">
                        <h4>Support</h4>
                        <ul>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Support</a></li>
                        </ul>
                    </div>
                    -->
        		</div>
            </div>
		</div>
        
	</footer>    
	<link rel="stylesheet" type="text/css" href="css/svg_min.css">
</body>
</html>

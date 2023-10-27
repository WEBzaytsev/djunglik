<?php
/**
 * Template Name: 3D тур | техническая
 *
 * @package djun
 */
?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<title>Малыш Джунглик</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" id="metaViewport" content="user-scalable=no, initial-scale=1, width=device-width, viewport-fit=cover" data-tdv-general-scale="0.5"/>
	<meta name="apple-mobile-web-app-capable" content="yes"/>
	<meta name="apple-mobile-web-app-status-bar-style" content="default">
	<script src="<?php echo get_template_directory_uri() . '/3d-tour/'; ?>lib/tdvplayer.js?v=1696232979983"></script>
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri() . '/3d-tour/'; ?>favicon.ico?v=1696232979983">
	<link rel="icon" sizes="48x48 32x32 16x16" href="<?php echo get_template_directory_uri() . '/3d-tour/'; ?>favicon.ico?v=1696232979983">
	<link rel="apple-touch-icon" type="image/png" sizes="180x180" href="<?php echo get_template_directory_uri() . '/3d-tour/'; ?>misc/icon180.png?v=1696232979983">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri() . '/3d-tour/'; ?>misc/icon16.png?v=1696232979983">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri() . '/3d-tour/'; ?>misc/icon32.png?v=1696232979983">
	<link rel="icon" type="image/png" sizes="192x192" href="<?php echo get_template_directory_uri() . '/3d-tour/'; ?>misc/icon192.png?v=1696232979983">
	<link rel="manifest" href="<?php echo get_template_directory_uri() . '/3d-tour/'; ?>manifest.json?v=1696232979983">
	<meta name="msapplication-TileColor" content="#E0AF52">
	<meta name="msapplication-config" content="<?php echo get_template_directory_uri() . '/3d-tour/'; ?>browserconfig.xml">
	<link rel="preload" href="<?php echo get_template_directory_uri() . '/3d-tour/'; ?>locale/ru.txt?v=1696232979983" as="fetch" crossorigin="anonymous"/>
	<link rel="preload" href="<?php echo get_template_directory_uri() . '/3d-tour/'; ?>script.js?v=1696232979983" as="script"/>
	<link rel="preload" href="<?php echo get_template_directory_uri() . '/3d-tour/'; ?>media/panorama_DB87C0CF_D6F5_F505_41C9_02BC63A4A592_0/r/4/0_0.jpg?v=1696232979983" as="image"/>
	<link rel="preload" href="<?php echo get_template_directory_uri() . '/3d-tour/'; ?>media/panorama_DB87C0CF_D6F5_F505_41C9_02BC63A4A592_0/l/4/0_0.jpg?v=1696232979983" as="image"/>
	<link rel="preload" href="<?php echo get_template_directory_uri() . '/3d-tour/'; ?>media/panorama_DB87C0CF_D6F5_F505_41C9_02BC63A4A592_0/u/4/0_0.jpg?v=1696232979983" as="image"/>
	<link rel="preload" href="<?php echo get_template_directory_uri() . '/3d-tour/'; ?>media/panorama_DB87C0CF_D6F5_F505_41C9_02BC63A4A592_0/d/4/0_0.jpg?v=1696232979983" as="image"/>
	<link rel="preload" href="<?php echo get_template_directory_uri() . '/3d-tour/'; ?>media/panorama_DB87C0CF_D6F5_F505_41C9_02BC63A4A592_0/f/4/0_0.jpg?v=1696232979983" as="image"/>
	<link rel="preload" href="<?php echo get_template_directory_uri() . '/3d-tour/'; ?>media/panorama_DB87C0CF_D6F5_F505_41C9_02BC63A4A592_0/b/4/0_0.jpg?v=1696232979983" as="image"/>
	<meta name="description" content="Virtual Tour"/>
	<meta name="theme-color" content="#E0AF52"/>
	<script src="<?php echo get_template_directory_uri() . '/3d-tour/'; ?>script.js?v=1696232979983"></script>
	<script type="text/javascript">
		var tour;
		var devicesUrl = {"mobile":"<?php echo get_template_directory_uri() . '/3d-tour/'; ?>script_mobile.js?v=1696232979983","general":"<?php echo get_template_directory_uri() . '/3d-tour/'; ?>script_general.js?v=1696232979983"};

		(function()
		{
			var deviceType = ['general'];
			if(TDV.PlayerAPI.mobile)
				deviceType.unshift('mobile');
			if(TDV.PlayerAPI.device == TDV.PlayerAPI.DEVICE_IPAD)
				deviceType.unshift('ipad');
			var url;
			for(var i=0; i<deviceType.length; ++i) {
				var d = deviceType[i];
				if(d in devicesUrl) {
					url = devicesUrl[d];
					break;
				}
			}
			if(typeof url == "object") {
				var orient = TDV.PlayerAPI.getOrientation();
				if(orient in url) {
					url = url[orient];
				}
			}
			var link = document.createElement('link');
			link.rel = 'preload';
			link.href = url;
			link.as = 'script';
			var el = document.getElementsByTagName('script')[0];
			el.parentNode.insertBefore(link, el);
		})();

		function loadTour()
		{
			if(tour) return;

			if (/AppleWebKit/.test(navigator.userAgent) && /Mobile\/\w+/.test(navigator.userAgent)) {
				var preloadContainer = document.getElementById('preloadContainer');
				if(preloadContainer)
					document.body.style.backgroundColor = window.getComputedStyle(preloadContainer).backgroundColor;
			}

			var settings = new TDV.PlayerSettings();
			settings.set(TDV.PlayerSettings.CONTAINER, document.getElementById('viewer'));
			settings.set(TDV.PlayerSettings.WEBVR_POLYFILL_URL, '<?php echo get_template_directory_uri() . '/3d-tour/'; ?>lib/WebVRPolyfill.js?v=1696232979983');
			settings.set(TDV.PlayerSettings.HLS_URL, '<?php echo get_template_directory_uri() . '/3d-tour/'; ?>lib/Hls.js?v=1696232979983');
			settings.set(TDV.PlayerSettings.QUERY_STRING_PARAMETERS, 'v=1696232979983');

			tour = new TDV.Tour(settings, devicesUrl);
			tour.bind(TDV.Tour.EVENT_TOUR_INITIALIZED, onVirtualTourInit);
			tour.bind(TDV.Tour.EVENT_TOUR_LOADED, onVirtualTourLoaded);
			tour.bind(TDV.Tour.EVENT_TOUR_ENDED, onVirtualTourEnded);
			tour.load();
		}

		function pauseTour()
		{
			if(!tour)
				return;

			tour.pause();
		}

		function resumeTour()
		{
			if(!tour)
				return;

			tour.resume();
		}

		function onVirtualTourInit()
		{
			var updateTexts = function() {
				document.title = this.trans("tour.name")
			};

			tour.locManager.bind(TDV.Tour.LocaleManager.EVENT_LOCALE_CHANGED, updateTexts.bind(tour.locManager));

			if (tour.player.cookiesEnabled)
				enableCookies();
			else
				tour.player.bind('enableCookies', enableCookies);
		}

		function onVirtualTourLoaded()
		{
			disposePreloader();
		}

		function onVirtualTourEnded()
		{

		}

		function enableCookies()
		{

		}

		function setMediaByIndex(index) {
			if(!tour)
				return;

			tour.setMediaByIndex(index);
		}

		function setMediaByName(name)
		{
			if(!tour)
				return;

			tour.setMediaByName(name);
		}

		function showPreloader()
		{
			var preloadContainer = document.getElementById('preloadContainer');
			if(preloadContainer != undefined)
				preloadContainer.style.opacity = 1;
		}

		function disposePreloader()
		{
			var preloadContainer = document.getElementById('preloadContainer');
			if(preloadContainer == undefined)
				return;

			var transitionEndName = transitionEndEventName();
			if(transitionEndName)
			{
				preloadContainer.addEventListener(transitionEndName, hide, false);
				preloadContainer.style.opacity = 0;
				setTimeout(hide, 500); //Force hide. Some cases the transitionend event isn't dispatched with an iFrame.
			}
			else
			{
				hide();
			}

			function hide()
			{

				document.body.style.backgroundColor = window.getComputedStyle(preloadContainer).backgroundColor;
				preloadContainer.style.visibility = 'hidden';
				preloadContainer.style.display = 'none';
				var videoList = preloadContainer.getElementsByTagName("video");
				for(var i=0; i<videoList.length; ++i)
				{
					var video = videoList[i];
					video.pause();
					while (video.children.length)
						video.removeChild(video.children[0]);
				}
			}

			function transitionEndEventName () {
				var el = document.createElement('div');
				var transitions = {
					'transition':'transitionend',
					'OTransition':'otransitionend',
					'MozTransition':'transitionend',
					'WebkitTransition':'webkitTransitionEnd'
				};

				var t;
				for (t in transitions) {
					if (el.style[t] !== undefined) {
						return transitions[t];
					}
				}

				return undefined;
			}
		}

		function onBodyClick(){
			document.body.removeEventListener("click", onBodyClick);
			document.body.removeEventListener("touchend", onBodyClick);

		}

		function onLoad() {
			if (/AppleWebKit/.test(navigator.userAgent) && /Mobile\/\w+/.test(navigator.userAgent))
			{
				var onOrientationChange = function()
				{
					document.documentElement.style.height = 'initial';
					Array.from(document.querySelectorAll('.fill-viewport')).forEach(function(element)
					{
						element.classList.toggle('landscape-right', window.orientation == -90);
						element.classList.toggle('landscape-left', window.orientation == 90);
					});
					setTimeout(function()
					{
						document.documentElement.style.height = '100%';
					}, 500);
				};
				window.addEventListener('orientationchange', onOrientationChange);
				onOrientationChange();
			}

			var params = getParams(location.search.substr(1));
			if(params.hasOwnProperty("skip-loading"))
			{
				loadTour();
				disposePreloader();
				return;
			}

			if (isOVRWeb()){
				showPreloader();
				loadTour();
				return;
			}

			showPreloader();
			loadTour();
		}



		function playVideo(video, autoplayMuted, clickComponent) {
			function hasAudio (video) {
				return video.mozHasAudio ||
					Boolean(video.webkitAudioDecodedByteCount) ||
					Boolean(video.audioTracks && video.audioTracks.length);
			}

			function detectUserAction() {
				var component = clickComponent || document.getElementById('preloadContainer');
				var onVideoClick = function(e) {
					if(video.paused) {
						video.play();
					}
					video.muted = false;
					if(hasAudio(video))
					{
						e.stopPropagation();
						e.stopImmediatePropagation();
						e.preventDefault();
					}

					component.removeEventListener('click', onVideoClick);
					component.removeEventListener('touchend', onVideoClick);

					if(component == clickComponent) {
						setComponentVisibility(false);
					}
				};
				component.addEventListener("click", onVideoClick);
				component.addEventListener("touchend", onVideoClick);
			}

			function setComponentVisibility(visible) {
				clickComponent.style.visibility = visible ? 'visible' : 'hidden';
			}

			var canPlay = true;
			var promise = video.play();
			if (promise) {
				promise.catch(function() {
					if(clickComponent)
						setComponentVisibility(true);
					canPlay = false;
					if(autoplayMuted) {
						video.muted = true;
						video.play();
					}
					detectUserAction();
				});
			} else {
				canPlay = false;
			}

			if (!canPlay || video.muted) {
				detectUserAction();
			} else if(clickComponent) {
				setComponentVisibility(false);
			}
		}

		function isOVRWeb(){
			return window.location.hash.substring(1).split('&').indexOf('ovrweb') > -1;
		}

		function getParams(params) {
			var queryDict = {}; params.split("&").forEach(function(item) {var k = item.split("=")[0], v = decodeURIComponent(item.split("=")[1]);queryDict[k.toLowerCase()] = v});
			return queryDict;
		}

		document.addEventListener('DOMContentLoaded', onLoad);
	</script>
	<style type="text/css">
		html, body { height:100%; width:100%; height:100vh; width:100vw; margin:0; padding:0; overflow:hidden; }
		.fill-viewport { position:fixed; top:0; left:0; right:0; bottom:0; padding:0; margin:0; overflow: hidden; }
		.fill-viewport.landscape-left { left: env(safe-area-inset-left); }
		.fill-viewport.landscape-right { right: env(safe-area-inset-right); }
		#viewer { z-index:1; }
		#preloadContainer { z-index:2; opacity:0; background-color:rgba(224,175,82,1); transition: opacity 0.5s; -webkit-transition: opacity 0.5s; -moz-transition: opacity 0.5s; -o-transition: opacity 0.5s;}
	</style>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/3d-tour/'; ?>fonts.css?v=1696232979983">
</head>
<body>
<div id="preloadContainer" class="fill-viewport"><div style="z-index: 4; position: absolute; overflow: hidden; background-size: contain; background-image: url('<?php echo get_template_directory_uri() . '/3d-tour/'; ?>loading/HTMLImage_D87C1AF2_D6F2_B51C_41CA_2D470095C6AB.png'); background-repeat: no-repeat; background-position: center center; overflow: hidden; right: 0%; top: 0%; width: 100.00%; height: 100.00%" ></div><div style="z-index: 5; position: absolute; overflow: hidden; background-size: contain; background-image: url('<?php echo get_template_directory_uri() . '/3d-tour/'; ?>loading/HTMLImage_D8E70277_D6F2_D504_41CC_06850B0AAA4D.png'); background-repeat: no-repeat; background-position: center center; overflow: hidden; right: 0%; bottom: 24.68%; width: 100.00%; height: 57.74%" ></div><div style="z-index: 6; position: absolute; overflow: hidden; background-size: contain; background-image: url('<?php echo get_template_directory_uri() . '/3d-tour/'; ?>loading/HTMLImage_C5B9EA68_D6F3_D50B_41E5_9F492845DBD9.png'); background-repeat: no-repeat; background-position: center center; overflow: hidden; right: 0%; bottom: 0%; width: 52.45%; height: 53.17%" ></div><div style="z-index: 7; position: absolute; overflow: hidden; left: 0%; top: 92.62%; width: 100.00%; height: 7.25%" ><div style="text-align:left; color:#000; "><DIV STYLE="text-align:center;font-size:1.9145802650957287vmin;"><SPAN STYLE="display:inline-block; letter-spacing:0vmin; white-space:pre-wrap;color:#777777;font-family:Arial, Helvetica, sans-serif;"><SPAN STYLE="color:#ffffff;font-size:1.91vmin;font-family:'Open Sans Light';"><B>Виртуальный тур загружается...</B></SPAN></SPAN></DIV></div></div></div>
<div id="viewer" class="fill-viewport"></div>
</body>
</html>

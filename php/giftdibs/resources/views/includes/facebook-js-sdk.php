<div id="fb-root"></div>
<script>
	window.fbAsyncInit = function () {
		FB.init({
			appId: "<?php echo $app->config('facebook','appId'); ?>",
			channelUrl: "<?php echo $app->config('facebook','channel'); ?>",
			status: true,
			cookie: true,
			version: "v2.0"
		});
	};
	
	(function (d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) {
			return;
		}
		js = d.createElement(s); 
		js.id = id;
		js.src = "//connect.facebook.net/en_US/sdk.js";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
</script>
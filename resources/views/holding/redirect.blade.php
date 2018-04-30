<!DOCTYPE html>
<!--

FACILITATES OAuth 1,1a,2 AUTHENTICATION

To link to this page in HelloJS define the redirect_uri.

This page is used for authentication as well as POST using the Iframe+form+hash communication hack.


-->
<html>
<head>
	<title>Hello, redirecting...</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />
	<style>
		html{background:#eee;height:100%}body{text-align:center;display:-webkit-flex;display:flex;height:100%;-webkit-flex-flow:column wrap;flex-flow:column wrap;-webkit-justify-content:center;justify-content:center;margin:0;padding:10px}.loading{font-size:50px;height:1em;-webkit-animation:fadeout .5s 5s;animation:fadeout .5s 5s;-webkit-animation-fill-mode:forwards;animation-fill-mode:forwards}.loading span{-webkit-animation:fadein .5s .5s alternate infinite;animation:fadein .5s .5s alternate infinite}.loading span:nth-child(2){-webkit-animation-delay:.75s;animation-delay:.75s}.loading span:nth-child(3){-webkit-animation-delay:1s;animation-delay:1s}p,h2{text-align:center;font-family:helvetica;opacity:0;-webkit-animation:fadein .5s 3s;animation:fadein .5s 3s;-webkit-animation-fill-mode:forwards;animation-fill-mode:forwards}p{font-size:smaller;word-break:break-word;-webkit-animation-delay:5s;animation-delay:5s}.overflow{background:#000;color:#fff;max-width:100%;text-align:left}@-webkit-keyframes fadein{from{opacity:0;-webkit-transform:scale(.2)}to{opacity:1;-webkit-transform:scale(1)}}@-webkit-keyframes fadeout{to{opacity:0;height:0}}@keyframes fadein{from{opacity:0;transform:scale(.2)}to{opacity:1;transform:scale(1)}}@keyframes fadeout{to{opacity:0;height:0}}
	</style>
</head>
<body>

<div class="loading"><span>&bull;</span><span>&bull;</span><span>&bull;</span></div>

<h2>Please close this window to continue.</h2>
<script>
	window.onbeforeunload = function(){
		document.getElementsByTagName('h2')[0].innerHTML="Redirecting, please wait";
	}
</script>
<script src="/js/redirect.js"></script>
</body>
</html>

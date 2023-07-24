<?php

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

$destination = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
require_once('helper.php');
?>

<HTML>
  <HEAD>
    <title>Christian Nationalism is Anti-Democratic</title>
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>html,body{background:black;margin:0;padding:0;}</style>
  </HEAD>
  <BODY>
    <video controls autoplay loop
      type="video/webm"
      src="/video.webm"
      poster="/enter.jpg"
      style="width:100%;height:100%;text-align:center;"
    >
    </video>
  </BODY>
</HTML>

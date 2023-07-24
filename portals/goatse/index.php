<?php

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

$destination = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
require_once('helper.php');

?>

<HTML>
  <HEAD>
    <title>Get fucked</title>
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style type="text/css">
      @keyframes getfucked {
        10% {
          color: red;
          text-shadow: -8px -8px 0px violet;
        }
        20% {
          color: orange;
          text-shadow: -6px -6px 0px indigo;
        }
        30% {
          color: yellow;
          text-shadow: -4px -4px 0px blue;
        }
        40% {
          color: green;
          text-shadow: -2px -2px 0px green;
        }
        50% {
          color: blue;
          text-shadow: 0px 0px 0px yellow;
        }
        60% {
          color: indigo;
          text-shadow: 2px 2px 0px orange;
        }
        70% {
          color: violet;
          text-shadow: 4px 4px 0px red;
        }
        80% {
          color: white;
          text-shadow: 6px 6px 0px black;
        }
        90% {
          color: black;
          text-shadow: 8px 8px 0px white;
        }
      }
      body {
        background-image:url('/hello.jpg');
      }
      h1 {
        animation: getfucked .3s linear infinite;
        font-size: 40vh;
        text-align: center;
        margin: 0;
      }
    </style>
  </HEAD>
  <BODY>
    <h1>GET FUCKED</h1>
  </BODY>
</HTML>
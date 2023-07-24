<?php

function getClientMac($clientIP) {
  return trim(exec("grep " . escapeshellarg($clientIP) . " /tmp/dhcp.leases | awk '{print $2}'"));
}

function getClientSSID($clientIP) {
  if (file_exists("/tmp/log.db"))  {
    $mac = strtoupper(getClientMac($clientIP));

    $db = new SQLite3("/tmp/log.db");
    $results = $db->query("select ssid from log WHERE mac = '{$mac}' AND log_type = 0 ORDER BY updated_at DESC LIMIT 1;");
    $ssid = '';
    while($row = $results->fetchArray()) {
      $ssid = $row['ssid'];
      break;
    }
    $db->close();
    return $ssid;
  }

  return '';
}

function getClientHostName($clientIP) {
  return trim(exec("grep " . escapeshellarg($clientIP) . " /tmp/dhcp.leases | awk '{print $4}'"));
}

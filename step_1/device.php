<?php 
require_once('config.php');
// Incoming user agent from form? Use that; else use the requesting browser's UA
$user_agent = (isset($_POST['useragent'])) ? $_POST['useragent'] : $_SERVER['HTTP_USER_AGENT'];
$device = $wurflManager->getDeviceForUserAgent($user_agent);
if ($device) {
  $groups = $wurflManager->getListOfGroups();
  $grouped_capabilities = array();
  foreach($groups as $a_group) {
    $grouped_capabilities[$a_group] = array();
    $capabilities = $wurflManager->getCapabilitiesNameForGroup($a_group);
    foreach ($capabilities as $cap) {
      $grouped_capabilities[$a_group][$cap] = $device->getCapability($cap);
    }
  }
}
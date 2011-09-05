<?php
require_once('config.php');
$user_agent = $_SERVER['HTTP_USER_AGENT'];
// Create WURFL Configuration from an XML config file
$wurflConfig = new WURFL_Configuration_XmlConfig($wurflConfigFile);
// Create a WURFL Manager Factory from the WURFL Configuration
$wurflManagerFactory = new WURFL_WURFLManagerFactory($wurflConfig);
// Create a WURFL Manager ($wurflManager is a WURFL_WURFLManager object)
$wurflManager = $wurflManagerFactory->create();

// Incoming user agent from form? Use that; else use the requesting browser's UA

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
<?php
require_once('config.php');
$wurflConfig = new WURFL_Configuration_XmlConfig($wurflConfigFile);
$wurflManagerFactory = new WURFL_WURFLManagerFactory($wurflConfig);
$wurflManager = $wurflManagerFactory->create();
$device = $wurflManager->getDeviceForHttpRequest($_SERVER);

$has_radio    = $device->getCapability('has_cellular_radio');
$phone_string = $device->getCapability('xhtml_make_phone_call_string');
$is_phone     = false;
if ($has_radio === 'true' && $phone_string && $phone_string !== 'none') {
  $is_phone = true;
}
?>

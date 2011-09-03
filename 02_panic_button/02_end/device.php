<?php
require_once('config.php');
$wurflConfig = new WURFL_Configuration_XmlConfig($wurflConfigFile);
$wurflManagerFactory = new WURFL_WURFLManagerFactory($wurflConfig);
$wurflManager = $wurflManagerFactory->create();
$device = $wurflManager->getDeviceForHttpRequest($_SERVER);

$is_mobile = ($device->getCapability('is_wireless_device') === 'true') ? true : false;
$phone_string = $device->getCapability('xhtml_make_phone_call_string');
$is_phone = false;
if ($is_mobile && $phone_string && $phone_string !== 'none') {
  $is_phone = true;
} 
?>

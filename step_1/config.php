<?php
ini_set('display_errors', 'on');
error_reporting(E_ALL);

define("WURFL_DIR", dirname(__FILE__) . '/../../../wurfl/WURFL/'); // VARIES
define("RESOURCES_DIR", dirname(__FILE__) . '/../../../wurfl/examples/resources/');

$app_path         = WURFL_DIR . 'Application.php';
$wurflConfigFile  = RESOURCES_DIR . 'wurfl-config.xml';

if (!file_exists($app_path)) {
  print '<h2>Oh, dear</h2> <p>WURFL is looking for the "Application.php" file here:<br /><code>' . $app_path
    . '"</code><br />Sadly, it is not finding it. Check the path set for "WURFL_DIR" in config.php</p>';
}
if (!file_exists($wurflConfigFile)) {
  print '<h2>Oh, dear</h2> <p>WURFL is looking for the "wurfl-config.xml" file here:<br /><code>' . $wurflConfigFile
    . '"</code><br />Sadly, it is not finding it. Check the path set for "RESOURCES_DIR" in config.php</p>';
}

require_once($app_path);
// Create WURFL Configuration from an XML config file
$wurflConfig = new WURFL_Configuration_XmlConfig($wurflConfigFile);
// Create a WURFL Manager Factory from the WURFL Configuration
$wurflManagerFactory = new WURFL_WURFLManagerFactory($wurflConfig);
// Create a WURFL Manager ($wurflManager is a WURFL_WURFLManager object)
$wurflManager = $wurflManagerFactory->create();
// Get information on the loaded WURFL ($wurflInfo is a WURFL_Xml_Info object)
$wurflInfo = $wurflManager->getWURFLInfo();
?>

<?php require_once('device.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>WURFL Device Inspection</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
<h1>WURFL Tester!</h1>
<div id="testform">
  <form method="post" action="<?php print $_SERVER['PHP_SELF']; ?>" id="useragentform">
    <p>Test this user agent string:</p>
    <input type="text" name="useragent" id="useragent_field" value="<?php print $user_agent; ?>" /><br />
    <input type="submit" name="submit" value="Test User Agent" id="submit" />
  </form>
</div>
<div id="devicedata">
  <h2>Device Data</h2>
  <p>Device data for <?php print $user_agent; ?></p>
  <p><strong>WURFL Device ID: <?php print $device->id; ?></strong></p>
  <p><strong>Is specific: <?php print $device->isSpecific(); ?></strong></p>
  <p><strong>Fall back: <?php print $device->fallBack; ?></strong></p>
  <p><strong>Actual Device Root: <?php print $device->actualDeviceRoot; ?></strong></p>
  <?php foreach($grouped_capabilities as $group_name => $my_caps): ?>
    <h3 class="group"><?php print $group_name; ?></h3>
    <dl>
      <?php foreach($my_caps as $cap_name => $cap): ?>
        <dt><?php print $cap_name; ?></dt>
        <dd><?php print ($cap) ? $cap : '[no value]'; ?></dd>
      <?php endforeach; ?>
      </dl>
  <?php endforeach; ?>
</div>
</body>
</html>
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

</div>
<div id="devicedata">
  <h2>Device Data</h2>
  <p>Device data for <?php print $user_agent; ?></p>
  <p><strong>WURFL Device ID: <?php print $device->id; ?></strong></p>
  <?php foreach($grouped_capabilities as $group_name => $my_caps): ?>
    <h3 class="group"><?php print $group_name; ?></h3>
    <dl>
      <?php
        $rowcount = 0;
        foreach($my_caps as $cap_name => $cap): 
          $evenodd = ($rowcount % 2 == 0) ? 'even' : 'odd';
          $isnone  = ($cap) ? '' : 'none';
          $classes = "$evenodd $isnone";
          $rowcount++;
      ?>
        <dt class="<?php print $classes; ?>"><?php print $cap_name; ?></dt>
        <dd class="<?php print $classes; ?>"><?php print ($cap) ? $cap : '[no value]'; ?></dd>
      <?php endforeach; ?>
      </dl>
  <?php endforeach; ?>
</div>
</body>
</html>
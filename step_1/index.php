<!DOCTYPE html>
<html>
<head>
  <title>WURFL Device Inspection</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <link rel="stylesheet" type="text/stylesheet" href="styles.css" />
</head>
<body>
<h1>WURFL Tester!</h1>
<?php require_once('device.php'); ?>
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
        <dd class="<?php print $classes; ?>"><?php print ($cap) ? $cap : '[none]'; ?></dd>
      <?php endforeach; ?>
      </dl>
  <?php endforeach; ?>
</div>
</body>
</html>
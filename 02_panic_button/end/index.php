<?php require_once('config.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>I'm Freaking Out! : AcedIt! Test Prep Services</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <link rel="stylesheet" type="text/stylesheet" href="../assets/styles.css" />
</head>
<body>
<div id="content">
  <h1>I'm Freaking Out!</h1>
  <?php if($is_phone): ?>
    <div id="panic_button">
      <a href="<?php print $phone_string; ?>503-555-2939"><img src="button.png" alt="HELP!" /></a>
    </div>
  <?php else: ?>
    <h2>Help is only a phone call away.</h2>
    <div id="big_number">
    503-555-2939
    </div>
  <?php endif; ?>
  <p>Pre-test late-night jitters? A math problem that just won't budge? Our expert on-call tutors are standing by to help you through tough moments.</p>
</div>
</body>
</html>
#!/bin/bash

mkdir -p reader
cd reader
cp -LR ../01_wurfl_explore/01_begin explore
cp -LR ../02_panic_button/01_begin panic_button
mkdir -p device_classes
cp -LR ../03_device_class_test/01_begin device_classes/test_classes
cp -LR ../04_device_class_content/01_begin device_classes/adapt_content
cp ../04_device_class_content/02_end/index.php device_classes/adapt_content/index_solution.php
find . -name config.php | xargs rm
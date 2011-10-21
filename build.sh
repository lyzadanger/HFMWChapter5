#!/bin/bash

mkdir -p chapter5
cd chapter5
cp -LR ../01_wurfl_explore/01_begin explore
cp -LR ../02_panic_button/01_begin panic_button
mkdir -p device_classes
cp -LR ../03_device_class_test/01_begin device_classes/test_classes .
cp -LR ../04_device_class_content/01_begin device_classes/adapt_content .
cp ../04_device_class_content/03_end/index.php device_classes/adapt_content/index_solution.php .
cp ../shared/useful_user_agents.txt .
find . -name config.php | xargs rm
cd ..
zip -qr chapter5.zip chapter5
#!/usr/bin/env bash

TEST_PATH=/home/work/repos/fis_2.0_pc_diff/test/util/diff
cd  ${TEST_PATH}
if [ -f "result/report.xml" ];then
   rm "result/report.xml"
fi
sh product_code.sh
sh new_fis_ready.sh
chmod +x old_fis_ready.sh
./old_fis_ready.sh
rm -rf result/*.html
php -f diffall.class.php

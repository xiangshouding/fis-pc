#!/usr/bin/env bash

TEST_PATH=/home/work/repos/fis2_pc_diff/test/util/diff
FISP_PATH=/home/work/repos/fis2_pc_diff/
cd ${FISP_PATH}                                                                                                                                npm install
npm install
npm install fis-preprocessor-inline
sh ${TEST_PATH}/release.sh new

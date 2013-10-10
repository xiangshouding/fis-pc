#!/usr/bin/env bash

TEST_PATH=/home/work/repos/fis2.0_pc/test/util/diff
FISP_PATH=/home/work/repos/fis2.0_pc/
cd ${FISP_PATH}                                                                                                                                npm install
npm install
npm install fis-preprocessor-inline
npm install fis-preprocessor-image-set
sh ${TEST_PATH}/release.sh new

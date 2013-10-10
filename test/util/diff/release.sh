#!/usr/bin/env bash

TEST_PATH=/home/work/repos/fis_2.0_pc_diff/test/util/diff
FISP_PATH=/home/work/repos/fis_2.0_pc_diff/
cd ${TEST_PATH}
WENKU_CODE_PATH=${TEST_PATH}/product_code/wenku
WENKU_OUTPUT_PATH=${TEST_PATH}/product_output/wenku

TIEBA_CODE_PATH=${TEST_PATH}/product_code/tieba
TIEBA_OUTPUT_PATH=${TEST_PATH}/product_output/tieba

BATMAN_CODE_PATH=${TEST_PATH}/product_code/batman
BATMAN_OUTPUT_PATH=${TEST_PATH}/product_output/batman
BATMAN_MODULES=(transit place common index addr feedback drive walk)

PLACE_CODE_PATH=${TEST_PATH}/product_code/place
PLACE_OUTPUT_PATH=${TEST_PATH}/product_output/place
PLACE_MODULES=(admin beauty cater common detail hotel movie scope)

#获取fis version
if [ $1 = 'new' ]
then
	version=$(node ${FISP_PATH}/bin/fis-pc -v --no-color)
else
	version=$(fisp -v --no-color)
fi

OLD_IFS="$IFS" 
IFS=" " 
arr=($version) 
IFS="$OLD_IFS" 
v=${arr[1]}

# 执行release
if [ $1 = 'new' ]
then
	#wenku
	rm -rf ${WENKU_OUTPUT_PATH}/output_new
	cd ${WENKU_CODE_PATH} 
	node ${FISP_PATH}/bin/fis-pc release -md ${WENKU_OUTPUT_PATH}/output_new --no-color
	echo $v > ${WENKU_OUTPUT_PATH}/output_new/fis_version.txt
    chmod 777 ${WENKU_OUTPUT_PATH}	
	
	#tieba
#	rm -rf ${TIEBA_OUTPUT_PATH}/output_new
#	cd ${TIEBA_CODE_PATH} 
#	node ${FISP_PATH}/bin/fis-pc release -md ${TIEBA_OUTPUT_PATH}/output_new
#	echo $v > ${TIEBA_OUTPUT_PATH}/output_new/fis_version.txt
#    chmod 777 ${TIEBA_OUTPUT_PATH}	
	
	#batman
	rm -rf ${BATMAN_OUTPUT_PATH}/output_new
	for module in ${BATMAN_MODULES[@]} 
	do
	    cd ${BATMAN_CODE_PATH}/$module 
	    node ${FISP_PATH}/bin/fis-pc release -md ${BATMAN_OUTPUT_PATH}/output_new --no-color
	done
	echo $v > ${BATMAN_OUTPUT_PATH}/output_new/fis_version.txt
    chmod 777 ${BATMAN_OUTPUT_PATH}	
	
	#place
#	rm -rf ${PLACE_OUTPUT_PATH}/output_new
#	for module in ${PLACE_MODULES[@]} 
#	do
#	    cd ${PLACE_CODE_PATH}/$module 
#	    node ${FISP_PATH}/bin/fis-pc release -md ${PLACE_OUTPUT_PATH}/output_new --no-color
#	done
#	echo $v > ${PLACE_OUTPUT_PATH}/output_new/fis_version.txt
#    chmod 777 ${PLACE_OUTPUT_PATH}	
else
	#wenku
	rm -rf ${WENKU_OUTPUT_PATH}/output_old
	cd ${WENKU_CODE_PATH}
	fisp release -md ${WENKU_OUTPUT_PATH}/output_old --no-color
	echo $v > ${WENKU_OUTPUT_PATH}/output_old/fis_version.txt
    chmod 777 -R ${WENKU_OUTPUT_PATH}/output_old	
	
	#tieba
#	rm -rf ${TIEBA_OUTPUT_PATH}/output_old
#	cd ${TIEBA_CODE_PATH}
#	fisp release -md ${TIEBA_OUTPUT_PATH}/output_old
#	echo $v > ${TIEBA_OUTPUT_PATH}/output_old/fis_version.txt
#   chmod 777 -R ${TIEBA_OUTPUT_PATH}/output_old	
	
    #batman
	rm -rf ${BATMAN_OUTPUT_PATH}/output_old
	for module in ${BATMAN_MODULES[@]}
	do
		cd ${BATMAN_CODE_PATH}/$module
		fisp release -md ${BATMAN_OUTPUT_PATH}/output_old --no-color
	done
	echo $v > ${BATMAN_OUTPUT_PATH}/output_old/fis_version.txt
    chmod 777 -R ${BATMAN_OUTPUT_PATH}/output_old	
    
	#place
#	rm -rf ${PLACE_OUTPUT_PATH}/output_old
#	for module in ${PLACE_MODULES[@]}
#	do
#		cd ${PLACE_CODE_PATH}/$module
#		fisp release -md ${PLACE_OUTPUT_PATH}/output_old --no-color
#	done
#	echo $v > ${PLACE_OUTPUT_PATH}/output_old/fis_version.txt
#   chmod 777 -R ${PLACE_OUTPUT_PATH}/output_old	
fi

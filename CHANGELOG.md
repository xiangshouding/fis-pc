## 0.3.1

	升级fis至 [v1.2.1](https://github.com/fis-dev/fis/blob/master/CHANGELOG.md#121)

## 0.3.0

    升级fis-optimizer-smarty-xss至0.0.7
    升级fis-parser-bdtmpl至0.0.3

* 修复XSS修复BUG，有重复变量名时可能出现漏修复的情况
* 增加对前端模板的处理方式，以JS类型进行处理
* 修复baiduTemplate在linux下的文件加载失败bug，以及一些语法错误

##0.2.9
    升级fis至v1.1.9
    修复小于1k的png图片压缩bug
## 0.2.8
    再次修复页面插入静态资源require的BUG
## 0.2.7
    修复页面插入静态资源require的BUG
## 0.2.6
    升级fis至v1.1.9
## 0.2.5
    升级fis至v1.1.7
    增加对smarty.conf文件的路径配置
## 0.2.4
    升级fis至v1.1.6
## 0.2.3
    升级fis至v1.1.5
## 0.2.2
    升级fis至v1.1.5
## 0.2.1
    升级fis至v1.0.8
## 0.2.0
    build.sh不产出
## 0.1.9
    fisp -v版本显示读取package.json中的版本
## 0.1.8
    升级fis-optimizer-html-compress至0.0.5
    升级fis-optimizer-smarty-xss至0.0.6

## 0.1.7

    升级fis至v1.0.6
    升级fis-optimizer-html-compress至0.0.4
    升级fis-optimizer-smarty-xss至0.0.5

## 0.1.6 
    
    升级fis-preprocessor-extlang至v0.0.5
    升级fis-postprocessor-require-async至v0.0.4

## 0.1.5 

    升级fis至v1.0.5
    升级fis-parser-bdtmpl至v0.0.2
    修复ap.path，对widget、page目录下的非tpl、js、css资源产出位置错误bug

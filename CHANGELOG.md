## 0.4.5

> 升级fis-optimizer-smarty-xss到v0.0.8，修复对script插件内JS代码XSS修复BUG
## 0.4.4

> 升级fis-preprocessor-widget-inline到v0.0.6，支持exclude

## 0.4.3

> 升级fis至[v1.4.12](https://github.com/fis-dev/fis/blob/master/CHANGELOG.md#1412)

## 0.4.2

> 升级fis至[v1.4.4](https://github.com/fis-dev/fis/blob/master/CHANGELOG.md#144)

> 升级fis-preprocessor-extlang至v0.0.6，添加{%style%}函数的支持

## 0.4.1

> 增加widget inline功能

> 添加对fis-preprocessor-widget-inline@0.0.3的依赖

## 0.4.0

> 升级fis至 [v1.3.6](https://github.com/fis-dev/fis/blob/master/CHANGELOG.md#136)

## 0.3.9

> 升级fis至 [v1.3.1](https://github.com/fis-dev/fis/blob/master/CHANGELOG.md#131)

## 0.3.8

> 升级fis至 [v1.2.9](https://github.com/fis-dev/fis/blob/master/CHANGELOG.md#129)

## 0.3.7

> 升级fis至 [v1.2.7](https://github.com/fis-dev/fis/blob/master/CHANGELOG.md#127)

## 0.3.6

> 升级fis至 [v1.2.6](https://github.com/fis-dev/fis/blob/master/CHANGELOG.md#126)

## 0.3.5
    
> 升级fis至 [v1.2.5](https://github.com/fis-dev/fis/blob/master/CHANGELOG.md#125)

* 默认支持csssprite

## 0.3.4

> 升级fis至 [v1.2.4](https://github.com/fis-dev/fis/blob/master/CHANGELOG.md#124)

## 0.3.3

> 升级fis至 [v1.2.3](https://github.com/fis-dev/fis/blob/master/CHANGELOG.md#123)

## 0.3.2

> 升级fis至 [v1.2.2](https://github.com/fis-dev/fis/blob/master/CHANGELOG.md#122)
>
> 升级fis-optimizer-htmll-compress至0.0.7

* 修改tpl压缩对script插件中的JS不进行压缩

## 0.3.1

> 升级fis至 [v1.2.1](https://github.com/fis-dev/fis/blob/master/CHANGELOG.md#121)

## 0.3.0

> 升级fis-optimizer-smarty-xss至0.0.7
>
> 升级fis-parser-bdtmpl至0.0.3

* 修复XSS修复BUG，有重复变量名时可能出现漏修复的情况
* 增加对前端模板的处理方式，以JS类型进行处理
* 修复baiduTemplate在linux下的文件加载失败bug，以及一些语法错误

##0.2.9

> 升级fis至v1.1.9

* 修复小于1k的png图片压缩bug

## 0.2.8

* 再次修复页面插入静态资源require的BUG

## 0.2.7

* 修复页面插入静态资源require的BUG

## 0.2.6

> 升级fis至v1.1.9

## 0.2.5

> 升级fis至v1.1.7

* 增加对smarty.conf文件的路径配置

## 0.2.4

> 升级fis至v1.1.6

## 0.2.3

> 升级fis至v1.1.5

## 0.2.2

> 升级fis至v1.1.5

## 0.2.1

> 升级fis至v1.0.8

## 0.2.0

* build.sh不产出

## 0.1.9

* fisp -v版本显示读取package.json中的版本

## 0.1.8

> 升级fis-optimizer-html-compress至0.0.5
>
> 升级fis-optimizer-smarty-xss至0.0.6

## 0.1.7

> 升级fis至v1.0.6
> 升级fis-optimizer-html-compress至0.0.4
>
> 升级fis-optimizer-smarty-xss至0.0.5

## 0.1.6

> 升级fis-preprocessor-extlang至v0.0.5
>
> 升级fis-postprocessor-require-async至v0.0.4

## 0.1.5

> 升级fis至v1.0.5
>
> 升级fis-parser-bdtmpl至v0.0.2

* 修复ap.path，对widget、page目录下的非tpl、js、css资源产出位置错误bug

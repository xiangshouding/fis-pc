# Front End Integrated Solution.

*Unfinished until version 1.0.0*

## Quick start
    
    # install fis-pc
    $ npm install -g fis-pc
    
    # start local server
    $ fis-pc server start
    
* [fis-pc-demo](https://github.com/xiangshouding/fis-pc-demo)


## Commands

    Usage: fis-pc <command>
    
    Commands:
    
      release     build and deploy your project
      install     install components and demos
      server      launch a php-cgi server
    
    Options:
    
      -h, --help     output usage information
      -v, --version  output the version number
      --no-color     disable colored output

more information:

* [fis release --help](https://github.com/fis-dev/fis-command-release "fis-command-release")
* [fis install --help](https://github.com/fis-dev/fis-command-install "fis-command-install")
* [fis server --help](https://github.com/fis-dev/fis-command-server "fis-command-server")

## Configure fis

    # create fis config file
    $ vim path/to/project/fis-conf.js

```javascript
fis.config.merge({    //merge user settings
    //using namespace, it can be omitted.
    namespace : 'photo',
    //configure directory and release specification.
    deploy : {
        'rd-test' : { //a deploy example
            //remote receiver
            receiver : 'http://zhangyunlong.fe.baidu.com/receiver.php',
            //post all the released files to the reciever
            //and save them to "/home/zhangyunlong/public_html/"
            to : '/home/zhangyunlong/public_html/'
        }
    }
});
```

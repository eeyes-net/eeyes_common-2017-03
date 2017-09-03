# e瞳网公用页脚

<http://img.eeyes.net/eeyes_common/eeyes_common_footer.js>

* 2017-03-01 随<https://github.com/eeyes-net/www-2017-02>一起完成（纯绝对定位）
* 2017-04-02 iLibrary场地预约项目需要使用，页脚重构为响应式布局
* 2017-09-02 重构为js document.write方式

## 部署

1. 修改`compile.php`文件中的`BASE_URL`常量

2. 运行`php compile.php`，将文件编译成js文件。

3. 与css和images文件夹一同放在静态服务器上即可。

## 使用方法

### 方法1：嵌入到模板或html之中（最好使用此方法）

### 方法2：使用js脚本（不利于SEO）

在页面结尾插入以下代码

```javascript
<script src="//img.eeyes.net/eeyes_common/eeyes_common_footer.js"></script>
```

## LICENSE

    The MIT License (MIT)

    Copyright (c) 2017 eeyes.net

    Permission is hereby granted, free of charge, to any person obtaining a copy
    of this software and associated documentation files (the "Software"), to deal
    in the Software without restriction, including without limitation the rights
    to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
    copies of the Software, and to permit persons to whom the Software is
    furnished to do so, subject to the following conditions:

    The above copyright notice and this permission notice shall be included in
    all copies or substantial portions of the Software.

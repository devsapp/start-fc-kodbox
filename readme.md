# start-fc-kodbox 帮助文档

<p align="center" class="flex justify-center">
    <a href="https://www.serverless-devs.com" class="ml-1">
    <img src="http://editor.devsapp.cn/icon?package=start-fc-kodbox&type=packageType">
  </a>
  <a href="http://www.devsapp.cn/details.html?name=start-fc-kodbox" class="ml-1">
    <img src="http://editor.devsapp.cn/icon?package=start-fc-kodbox&type=packageVersion">
  </a>
  <a href="http://www.devsapp.cn/details.html?name=start-fc-kodbox" class="ml-1">
    <img src="http://editor.devsapp.cn/icon?package=start-fc-kodbox&type=packageDownload">
  </a>
</p>

<description>

> ***快速部署一个 NAS+OSS UI文件管理系统到阿里云函数计算***

</description>

<table>

## 前期准备
使用该项目，推荐您拥有以下的产品权限 / 策略：

| 服务/业务 | 函数计算 |  硬盘挂载 |  VPC |  其它 |     
| --- |  --- |   --- |   --- |   --- |   
| 权限/策略 | AliyunFCFullAccess |  AliyunNASFullAccess |  AliyunVPCFullAccess |  AliyunECSFullAccess |     


</table>

<codepre id="codepre">

</codepre>

<deploy>

## 部署 & 体验

<appcenter>

- 🔥 通过 [Serverless 应用中心](https://fcnext.console.aliyun.com/applications/create?template=start-fc-kodbox) ，
[![Deploy with Severless Devs](https://img.alicdn.com/imgextra/i1/O1CN01w5RFbX1v45s8TIXPz_!!6000000006118-55-tps-95-28.svg)](https://fcnext.console.aliyun.com/applications/create?template=start-fc-kodbox)  该应用。 

</appcenter>

- 通过 [Serverless Devs Cli](https://www.serverless-devs.com/serverless-devs/install) 进行部署：
    - [安装 Serverless Devs Cli 开发者工具](https://www.serverless-devs.com/serverless-devs/install) ，并进行[授权信息配置](https://www.serverless-devs.com/fc/config) ；
    - 初始化项目：\`s init start-fc-kodbox -d start-fc-kodbox\`   
    - 进入项目，并进行项目部署：\`cd start-fc-kodbox && s deploy -y\`

</deploy>

<appdetail id="flushContent">


## 项目使用注意事项

1. 项目Yaml中，声明了`actions`，并且将 Web UI FileManager 工程上传到 NAS，执行函数的时候， nginx 配置 `root /mnt/auto/.fc-nas-filemgr;` 指定了 web 的目录在 NAS 上。
2. 该示例中默认使用 sqlite 数据库 (位于 NAS)

## 应用详情

本项目是将世界上最好用的 UI FileManager 项目部署到阿里云 Serverless 平台（函数计算 FC）。

通过 Serverless Devs 开发者工具，您只需要几步，就可以体验 Serverless 架构，带来的降本提效的技术红利。

部署完成之后，您可以看到系统返回给您的案例地址，例如：

![图片alt](https://img.alicdn.com/imgextra/i1/O1CN01FbMHNY1PvcSGTBzmB_!!6000000001903-2-tps-2520-920.png)

此时，打开案例地址， 使用 admin/admin 登录:

![](https://img.alicdn.com/imgextra/i3/O1CN01WRjMv428OKNAu7gjq_!!6000000007922-2-tps-1733-1007.png)

添加 OSS Bucket 管理：
![](https://img.alicdn.com/imgextra/i2/O1CN01e6dygX1znDLioRfQe_!!6000000006758-2-tps-1210-756.png)

# 参考
使用开源的 UI 文件管理系统: [https://github.com/kalcaddle/kodbox](https://github.com/kalcaddle/kodbox)

</appdetail>

<devgroup>

## 开发者社区

您如果有关于错误的反馈或者未来的期待，您可以在 [Serverless Devs repo Issues](https://github.com/serverless-devs/serverless-devs/issues) 中进行反馈和交流。如果您想要加入我们的讨论组或者了解 FC 组件的最新动态，您可以通过以下渠道进行：

<p align="center">

| <img src="https://serverless-article-picture.oss-cn-hangzhou.aliyuncs.com/1635407298906_20211028074819117230.png" width="130px" > | <img src="https://serverless-article-picture.oss-cn-hangzhou.aliyuncs.com/1635407044136_20211028074404326599.png" width="130px" > | <img src="https://serverless-article-picture.oss-cn-hangzhou.aliyuncs.com/1635407252200_20211028074732517533.png" width="130px" > |
|--- | --- | --- |
| <center>微信公众号：\`serverless\`</center> | <center>微信小助手：\`xiaojiangwh\`</center> | <center>钉钉交流群：\`33947367\`</center> | 

</p>

</devgroup>
# Serverless NAS+OSS UI文件管理系统案例

> 快速部署和体验Serverless架构下的 UI FileManager 项目

- [Serverless NAS+OSS UI文件管理系统案例](#serverless-nasoss-ui文件管理系统案例)
  - [体验前准备](#体验前准备)
  - [代码与预览](#代码与预览)
  - [快速部署和体验](#快速部署和体验)
    - [在线快速体验](#在线快速体验)
    - [在本地部署体验](#在本地部署体验)
  - [项目使用注意事项](#项目使用注意事项)
  - [应用详情](#应用详情)
  - [参考](#参考)

## 体验前准备

该应用案例，需要您开通:

- [阿里云函数计算](https://fcnext.console.aliyun.com/) 产品；并建议您当前的账号有一下权限存在`FCDefaultRole`。
- [阿里云文件存储](https://nasnext.console.aliyun.com/) 产品

## 代码与预览

- [:octocat: 源代码](https://github.com/devsapp/start-fc-kodbox/tree/main/src)
- [:earth_africa: 效果预览](https://img.alicdn.com/imgextra/i3/O1CN01WRjMv428OKNAu7gjq_!!6000000007922-2-tps-1733-1007.png)

## 快速部署和体验
### 在线快速体验

- 通过阿里云 **Serverless 应用中心**： 可以点击 [【🚀 部署】](https://fcnext.console.aliyun.com/applications/create?template=start-fc-kodbox) ，按照引导填入参数，快速进行部署和体验。

### 在本地部署体验

1. 下载安装 Serverless Devs：`npm install @serverless-devs/s` 
    > 详细文档可以参考 [Serverless Devs 安装文档](https://github.com/Serverless-Devs/Serverless-Devs/blob/master/docs/zh/install.md)
2. 配置密钥信息：`s config add`
    > 详细文档可以参考 [阿里云密钥配置文档](https://github.com/devsapp/fc/blob/main/docs/zh/config.md)
3. 初始化项目：`s init start-fc-kodbox -d start-fc-kodbox`
4. 进入项目后部署：`s deploy`
5. 部署过程中可能需要阿里云密钥的支持，部署完成之后会获得到临时域名可供测试

> 浏览器打开域名登录，默认初始化账号和密码是 admin/admin， 您可以登录后， 就得到一个 web 版 windows 用户体验的文件管理系统

![](https://img.alicdn.com/imgextra/i3/O1CN01WRjMv428OKNAu7gjq_!!6000000007922-2-tps-1733-1007.png)

> 在本地使用该项目时，不仅可以部署，还可以进行更多的操作，例如查看日志，查看指标，进行多种模式的调试等，这些操作详情可以参考[函数计算组件命令文档](https://github.com/devsapp/fc#%E6%96%87%E6%A1%A3%E7%9B%B8%E5%85%B3) ;

## 项目使用注意事项

1. 项目Yaml中，声明了`actions`，并且将 Web UI FileManager 工程上传到 NAS，执行函数的时候， nginx 配置 `root /mnt/nas/.fc-nas-filemgr;` 指定了 web 的目录在 NAS 上。
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

## 参考
使用开源的 UI 文件管理系统: [https://github.com/kalcaddle/kodbox](https://github.com/kalcaddle/kodbox)

-----

> - Serverless Devs 项目：https://www.github.com/serverless-devs/serverless-devs   
> - Serverless Devs 文档：https://www.github.com/serverless-devs/docs   
> - Serverless Devs 钉钉交流群：33947367    

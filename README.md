Totem 1.0 - for php framework
===============

[![StyleCI](https://styleci.io/repos/48530411/shield?style=flat&branch=master)](https://styleci.io/repos/48530411)
[![Build Status](https://travis-ci.org/top-think/framework.svg?branch=master)](https://travis-ci.org/top-think/framework)
[![codecov.io](http://codecov.io/github/top-think/framework/coverage.svg?branch=master)](http://codecov.io/github/github/top-think/framework?branch=master)
[![Total Downloads](https://poser.pugx.org/topthink/framework/downloads)](https://packagist.org/packages/topthink/framework)
[![Latest Stable Version](https://poser.pugx.org/topthink/framework/v/stable)](https://packagist.org/packages/topthink/framework)
[![Latest Unstable Version](https://poser.pugx.org/topthink/framework/v/unstable)](https://packagist.org/packages/topthink/framework)
[![License](https://poser.pugx.org/topthink/framework/license)](https://packagist.org/packages/topthink/framework)

## 框架要求 > 大于php7.0
> 框架 配置
  + 路由注解 (路由传值参数) /:id
  + 权限注解 (分权限注解和头注解)
  + 接口验证注解 (传参不符规则直接返回,注意减少加载文件)
  + 支持工具类处理(Helper类)
  + 支持消息队列支持 (redis 、rabbitMQ 、workman 、swoole)
  + 支持API接口
  + 支持自动API document
  + 支持模板输出
  + 支持多模块多业务可分离部署
  + 多语言支持 (一个语言包来注解 | 默认为英文)
  + 支持DEBUG调式
  + 时间机制选择

> 数据库模块配置 (PostgreSql、Mysql)
  + 数据库自动打包
  + 自动生成 DateBase 和 table
  + 多DB数据自动部署
  + 表字段类型自动配置
  + 数据库字段自动映射
  + 支持数据库读写分离
  + 支持数据库分布式环境部署环境
  + 自动支持事务回滚机制

> 其他要求配置
  + redis、cache、log、session、cookie
  + 第三方业务逻辑处理机制 (aliPay 、wechat)
  + 异常处理机制、缓存机制、头部接口处理、接口缓存
  + 需要业务逻辑权限的控制、可以对模块、控制器进行控制
  + 需要进行单元测试的方法
  + 提供访问信息查询、业务执行时间查询、加载文件数量查询、接口访问量统计、pv、消耗的内存等数据统计
#目标
 最少的访问文件,最高的效率处理业务的逻辑

业务执行----->解析Router---->执行逻辑---->执行结果---->返回执行结果

版权所有Copyright © 2006-2017 by Start Chat

All rights reserved。

Totem Framework® 商标和著作权所有者为深圳市尼尔科技文化有限公司
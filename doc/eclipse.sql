-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2015-06-06 08:57:37
-- 服务器版本： 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `eclipse`
--
CREATE DATABASE IF NOT EXISTS `eclipse` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `eclipse`;

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
`id` int(11) NOT NULL,
  `uid` varchar(20) NOT NULL,
  `name` varchar(20) DEFAULT NULL COMMENT '名称',
  `pwd` varchar(32) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `gid` int(11) DEFAULT NULL COMMENT '用户组',
  `status` int(11) NOT NULL,
  `description` varchar(1020) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
`id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `type` int(11) DEFAULT NULL COMMENT '所属菜单栏目',
  `author` varchar(32) DEFAULT NULL,
  `time_publish` date DEFAULT NULL,
  `time_update` date DEFAULT NULL,
  `content` blob,
  `summary` varchar(1024) DEFAULT NULL,
  `source` varchar(32) DEFAULT NULL COMMENT '来源:0-原创,1-转载,3-翻译',
  `k` varchar(50) DEFAULT NULL,
  `attachment` varchar(1024) DEFAULT NULL,
  `model` int(11) DEFAULT NULL COMMENT '所属模型,0-文章,1-图片,2-下载,3-广告'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `dict`
--

DROP TABLE IF EXISTS `dict`;
CREATE TABLE IF NOT EXISTS `dict` (
`id` int(11) NOT NULL,
  `tid` varchar(10) NOT NULL COMMENT '表名',
  `key` varchar(25) NOT NULL,
  `value` varchar(100) DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `group`
--

DROP TABLE IF EXISTS `group`;
CREATE TABLE IF NOT EXISTS `group` (
`id` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `description` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `menu`
--

DROP TABLE IF EXISTS `menu`;
CREATE TABLE IF NOT EXISTS `menu` (
`id` int(11) NOT NULL,
  `mid` varchar(25) NOT NULL COMMENT '栏目ID',
  `name` varchar(25) NOT NULL COMMENT '栏目名',
  `type` int(11) DEFAULT NULL COMMENT '0-dir,1-url',
  `level` int(11) DEFAULT NULL COMMENT '第几级菜单',
  `privilege` int(11) DEFAULT '0' COMMENT '权重，同级目录显示顺序',
  `pid` int(11) DEFAULT NULL COMMENT '上级菜单',
  `status` int(11) DEFAULT NULL COMMENT '0-显示，1-隐藏',
  `directory` varchar(255) DEFAULT NULL COMMENT '目录或者URL',
  `description` varchar(200) DEFAULT NULL COMMENT '备注',
  `keyid` int(11) NOT NULL COMMENT '菜单直接查找ID'
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `site`
--

DROP TABLE IF EXISTS `site`;
CREATE TABLE IF NOT EXISTS `site` (
`id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `value` varchar(250) NOT NULL,
  `description` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `uid` varchar(20) NOT NULL,
  `name` varchar(32) DEFAULT NULL COMMENT '用户自定义名称',
  `pwd` varchar(32) NOT NULL,
  `sex` int(11) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `type` int(11) DEFAULT NULL COMMENT '用户类型',
  `status` int(11) DEFAULT NULL,
  `date_regist` date DEFAULT NULL,
  `date_change` date DEFAULT NULL,
  `ip_join` varchar(16) DEFAULT NULL,
  `date_login` date DEFAULT NULL,
  `ip_login` varchar(16) DEFAULT NULL,
  `qq` varchar(15) DEFAULT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `school` varchar(30) DEFAULT NULL,
  `department` varchar(25) DEFAULT NULL,
  `login_times` int(11) DEFAULT '0',
  `fax` varchar(15) DEFAULT NULL,
  `company` varchar(50) DEFAULT NULL,
  `note` varchar(250) DEFAULT NULL COMMENT '备注'
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COMMENT='普通用户表';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `uid` (`uid`);

--
-- Indexes for table `article`
--
ALTER TABLE `article`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dict`
--
ALTER TABLE `dict`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `group`
--
ALTER TABLE `group`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `mid` (`mid`), ADD UNIQUE KEY `mid_2` (`mid`);

--
-- Indexes for table `site`
--
ALTER TABLE `site`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `uid` (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dict`
--
ALTER TABLE `dict`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `group`
--
ALTER TABLE `group`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `site`
--
ALTER TABLE `site`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

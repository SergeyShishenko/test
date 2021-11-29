<?php
/**
 * Знания MySQL + оптимизировать запросы

 * Имеется 3 таблицы: info, data, link, есть запрос для получения данных:

 * select * from data,link,info where link.info_id = info.id and link.data_id = data.id

 * предложить варианты оптимизации:
 * таблиц
 * запроса.
 * Запросы для создания таблиц:

 * CREATE TABLE `info` (
 *        `id` int(11) NOT NULL auto_increment,
 *        `name` varchar(255) default NULL,
 *         `desc` text default NULL,
 *  ) ENGINE=MyISAM DEFAULT CHARSET=cp1251;
 *  
 *  CREATE TABLE `data` (
 *         `id` int(11) NOT NULL auto_increment,
 *         `date` date default NULL,
 *         `value` INT(11) default NULL,
 *         PRIMARY KEY (`id`)
 *         ) ENGINE=MyISAM DEFAULT CHARSET=cp1251;
 *         
 *         CREATE TABLE `link` (
 *             `data_id` int(11) NOT NULL,
 *             PRIMARY KEY (`id`)
 *         `info_id` int(11) NOT NULL
 * ) ENGINE=MyISAM DEFAULT CHARSET=cp1251;
 */

$query = "CREATE TABLE `info` (
    `id` int(11) NOT NULL auto_increment,
   `name` varchar(255) default NULL,
    `desc` text default NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8";

$query = "CREATE TABLE `data` (
    `id` int(11) NOT NULL auto_increment,
    `date` date default NULL,
    `value` INT(11) default NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8";

$query = "CREATE TABLE `link` (
    `id` int(11) NOT NULL auto_increment, --!
    `data_id` int(11) NOT NULL,
    `info_id` int(11) NOT NULL,
    PRIMARY KEY (`id`)                   --!
) ENGINE=InnoDB DEFAULT CHARSET=utf8";




$query = "select info.name,info.desc,data.date,data.value from data,link,info where link.info_id = info.id and link.data_id = data.id limit 1";
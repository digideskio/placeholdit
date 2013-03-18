-- ********************************************************
-- *                                                      *
-- * IMPORTANT NOTE                                       *
-- *                                                      *
-- * Do not import this file manually but use the Contao  *
-- * install tool to create and maintain database tables! *
-- *                                                      *
-- ********************************************************

--
-- Table `tl_content`
--

CREATE TABLE `tl_content` (
  `phit_text` varchar(255) NOT NULL default '',
  `phit_width` varchar(64) NOT NULL default '',
  `phit_height` varchar(64) NOT NULL default '',
  `phit_colors` char(1) NOT NULL default '',
  `phit_foreground` varchar(6) NOT NULL default '',
  `phit_background` varchar(6) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
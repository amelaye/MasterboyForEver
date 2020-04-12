CREATE TABLE membres (
  id varchar(20) default NULL,
  username varchar(20) NOT NULL default '',
  password varchar(10) NOT NULL default '',
  email varchar(100) NOT NULL default '',
  url varchar(150) default NULL,
  photo varchar(100) default NULL,
  bouton varchar(100) default NULL,
  date_reg int(11) NOT NULL default '0',
  clicks int(11) NOT NULL default '0'
username varchar(220) NOT NULL default '',
) TYPE=MyISAM;

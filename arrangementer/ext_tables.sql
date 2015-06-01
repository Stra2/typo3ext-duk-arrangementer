#
# Table structure for table 'tx_arrangementer_domain_model_arrangement'
#
CREATE TABLE tx_arrangementer_domain_model_arrangement (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	titel varchar(255) DEFAULT '' NOT NULL,
	beskrivelse text NOT NULL,
	start_dato date DEFAULT '0000-00-00',
	slut_dato date DEFAULT '0000-00-00',
	pris varchar(255) DEFAULT '' NOT NULL,
	open_for_participants tinyint(1) unsigned DEFAULT '0' NOT NULL,
	tilmeldingstekst varchar(255) DEFAULT '' NOT NULL,
	maalgruppe varchar(255) DEFAULT '' NOT NULL,
	registrerings_dato date DEFAULT '0000-00-00',
	sted int(11) unsigned DEFAULT '0',

	tstamp int(11) unsigned DEFAULT '0' NOT NULL,
	crdate int(11) unsigned DEFAULT '0' NOT NULL,
	cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
	deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
	hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
	starttime int(11) unsigned DEFAULT '0' NOT NULL,
	endtime int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid),
	KEY parent (pid),

);

#
# Table structure for table 'tx_arrangementer_domain_model_sted'
#
CREATE TABLE tx_arrangementer_domain_model_sted (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	navn varchar(255) DEFAULT '' NOT NULL,
	gadenavn_og_nummer varchar(255) DEFAULT '' NOT NULL,
	post_nummer varchar(255) DEFAULT '' NOT NULL,
	bynavn varchar(255) DEFAULT '' NOT NULL,
	url varchar(255) DEFAULT '' NOT NULL,

	tstamp int(11) unsigned DEFAULT '0' NOT NULL,
	crdate int(11) unsigned DEFAULT '0' NOT NULL,
	cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
	deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
	hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
	starttime int(11) unsigned DEFAULT '0' NOT NULL,
	endtime int(11) unsigned DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid),
	KEY parent (pid),

);

#
# Table structure for table 'tx_arrangementer_domain_model_arrangement'
#
CREATE TABLE tx_arrangementer_domain_model_arrangement (
	categories int(11) unsigned DEFAULT '0' NOT NULL,
);

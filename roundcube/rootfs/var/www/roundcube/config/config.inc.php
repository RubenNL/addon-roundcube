<?php

/* Local configuration for Roundcube Webmail */

$config['db_dsnw'] =

$config['log_driver'] = 'syslog';

$config['syslog_facility'] = LOG_MAIL;

$config['smtp_log'] = false;

$config['imap_host'] = ['32b8266a-mailserver:143', 'ssl://hilton.zapto.org:993'];

$config['support_url'] = '';

$config['auto_create_user'] = true;

$config['des_key'] = 'MUU5FK7QJejl2Ng3Wg0z1pLd';

$config['plugins'] = ['archive', 'managesieve', 'zipdownload'];

$config['managesieve_host'] = 'hilton.zapto.org';

$config['managesieve_auth_type'] = 'PLAIN';

$config['managesieve_usetls'] = true;

$config['managesieve_mbox_encoding'] = 'UTF-8';

$config['prefer_html'] = false;

// Log successful/failed logins to <log_dir>/userlogins.log or to syslog
$config['log_logins'] = true;

// Log session debug information/authentication errors to <log_dir>/session.log or to syslog
$config['session_debug'] = true;

// Log SQL queries to <log_dir>/sql.log or to syslog
$config['sql_debug'] = true;

// Log IMAP conversation to <log_dir>/imap.log or to syslog
$config['imap_debug'] = true;

$config['managesieve_debug'] = true;

$config['enable_installer'] = false;


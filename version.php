<?php
defined('MOODLE_INTERNAL') || die();
require(dirname(dirname(__FILE__)).'/ldap_syncplus/version.php');

$plugin->component = 'auth_ldap_instances';
$plugin->dependencies = ['auth_ldap_syncplus' => 2016032000];
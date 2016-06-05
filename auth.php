<?php
defined('MOODLE_INTERNAL') || die;
global $CFG;

require_once(dirname(dirname(__FILE__)).'/ldap_syncplus/auth.php');

class auth_plugin_ldap_instances extends auth_plugin_ldap_syncplus {
    static $instancename = 'ldap_instances';

    public function __construct() {
        $this->authtype = self::$instancename;
        $this->roleauth = self::$instancename;
        $this->errorlogtag = '[AUTH LDAP instances]';
        $this->init_plugin($this->authtype);
    }
}
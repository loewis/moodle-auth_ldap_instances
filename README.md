Moodle LDAP Instances
=====================

In some installations, it is desirable to support multiple configurations of the LDAP plugin. Two particular use cases are

1. You are using multiple LDAP servers for managing accounts. Create a second instance of the LDAP auth plugin, and configure it independently. To Moodle, these two LDAP servers will appear as separate authentication methods.

2. You want certain settings to apply only to selected user. For example, you might want automatically to import all students into Moodle, but create staff accounts only manually, or only when they login first.

This plugin uses auth_ldap_syncplus as its basis. It should be straight-forward to adjust to the standard LDAP plugin.

Installation
------------

1. Create a git clone of this repository (https://github.com/loewis/moodle-auth_ldap_instances.git). Clone it into the auth subdirectory, giving it a name of your choice (eg. ldap_external, or ldap_students). We assume 'ldap_students' for further discussion.

2. Change into the ldap_students directory.

2. In version.php and auth.php, replace 'auth_ldap_instances' with 'auth_ldap_students', in the component name variable, the class name, and the instancename variable

3. Copy lang/en/auth_ldap_instances.php to lang/en/auth_ldap_students.php. You might want to edit the strings in it as well.

4. Log into Moodle as an administrator, and activate the authentication method.

5. If you want to have existing accounts LDAP accounts moved to the new method, you need to perform an update in the database, or convert each account manually. To convert ALL LDAP accounts automatically, do

   update mdl_user set auth='ldap_students' where auth='ldap';

Support
-------

Please submit bug reports to https://github.com/loewis/moodle-auth_ldap_instances/issues

Author
------

This code was written by Martin v. Löwis <loewis@beuth-hochschule.de>. See COPYING.txt for license conditions.
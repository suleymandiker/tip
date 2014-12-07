<?php

// LDAP variables
$ldaphost = "192.168.143.37";  // your ldap servers
$ldapport = 5389;                 // your ldap server's port number

// Connecting to LDAP
$ldapconn = ldap_connect($ldaphost, $ldapport)
          or die("Could not connect to $ldaphost");

?>
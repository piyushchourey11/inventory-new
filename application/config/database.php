<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
/*

| -------------------------------------------------------------------

| DATABASE CONNECTIVITY SETTINGS

| -------------------------------------------------------------------

| This file will contain the settings needed to access your database.

|

| For complete instructions please consult the 'Database Connection'

| page of the User Guide.

|

| -------------------------------------------------------------------

| EXPLANATION OF VARIABLES

| -------------------------------------------------------------------

|

|	['hostname'] The hostname of your database server.

|	['username'] The username used to connect to the database

|	['password'] The password used to connect to the database

|	['database'] The name of the database you want to connect to

|	['dbdriver'] The database type. ie: mysql.  Currently supported:

				 mysql, mysqli, postgre, odbc, mssql, sqlite, oci8

|	['dbprefix'] You can add an optional prefix, which will be added

|				 to the table name when using the  Active Record class

|	['pconnect'] TRUE/FALSE - Whether to use a persistent connection

|	['db_debug'] TRUE/FALSE - Whether database errors should be displayed.

|	['cache_on'] TRUE/FALSE - Enables/disables query caching

|	['cachedir'] The path to the folder where cache files should be stored

|	['char_set'] The character set used in communicating with the database

|	['dbcollat'] The character collation used in communicating with the database

|				 NOTE: For MySQL and MySQLi databases, this setting is only used

| 				 as a backup if your server is running PHP < 5.2.3 or MySQL < 5.0.7

|				 (and in table creation queries made with DB Forge).

| 				 There is an incompatibility in PHP with mysql_real_escape_string() which

| 				 can make your site vulnerable to SQL injection if you are using a

| 				 multi-byte character set and are running versions lower than these.

| 				 Sites using Latin-1 or UTF-8 database character set and collation are unaffected.

|	['swap_pre'] A localhost table prefix that should be swapped with the dbprefix

|	['autoinit'] Whether or not to automatically initialize the database.

|	['stricton'] TRUE/FALSE - forces 'Strict Mode' connections

|							- good for ensuring strict SQL while developing

|

| The $active_group variable lets you choose which connection group to

| make active.  By localhost there is only one group (the 'localhost' group).

|

| The $active_record variables lets you determine whether or not to load

| the active record class

*/

if (isset($_SERVER['HTTP_HOST']) && $_SERVER['HTTP_HOST'] == 'http://goravgroup.in/CI/')
{
    $active_group = 'server';
}
else
{
    $active_group = 'localhost';
}
 
$active_record = TRUE;

$db['localhost']['hostname'] = '127.0.0.1';
$db['localhost']['username'] = 'root';
$db['localhost']['password'] = '';
$db['localhost']['database'] = 'inventory';
$db['localhost']['dbdriver'] = 'mysql';
$db['localhost']['dbprefix'] = '';
$db['localhost']['pconnect'] = TRUE;
$db['localhost']['db_debug'] = TRUE;
$db['localhost']['cache_on'] = FALSE;
$db['localhost']['cachedir'] = '';
$db['localhost']['char_set'] = 'utf8';
$db['localhost']['dbcollat'] = 'utf8_general_ci';
$db['localhost']['swap_pre'] = '';
$db['localhost']['autoinit'] = TRUE;
$db['localhost']['stricton'] = FALSE;

$db['server']['hostname'] = 'localhost';
$db['server']['username'] = '';
$db['server']['password'] = '';
$db['server']['database'] = '';
$db['server']['dbdriver'] = 'mysql';
$db['server']['dbprefix'] = '';
$db['server']['pconnect'] = TRUE;
$db['server']['db_debug'] = TRUE;
$db['server']['cache_on'] = FALSE;
$db['server']['cachedir'] = '';
$db['server']['char_set'] = 'utf8';
$db['server']['dbcollat'] = 'utf8_general_ci';
$db['server']['swap_pre'] = '';
$db['server']['autoinit'] = TRUE;
$db['server']['stricton'] = FALSE;





/* End of file database.php */

/* Location: ./application/config/database.php */

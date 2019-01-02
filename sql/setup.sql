/* These are the commands I used to set up my database */
create database facebooklogins;
use facebooklogins;
/* email: 64 char for local, 1 for @, 255 for domain name */
/* password: after hashing, will use 64 chars. */
create table basics (email varchar(320) primary key not null, password varchar( 64) not null, lastseen timestamp not null on update current_timestamp);
create table details (id int unsigned auto_increment primary key, email varchar(320) not null, ipaddress int unsigned, logtime timestamp not null on update current_timestamp);
 
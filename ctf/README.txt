The first part is trivial, just browse to `robots.txt`. This is a txt file, that disallows certain directories from being indexed. 

First vulnerability is a basic HTTP auth bypass by a vulnerability, called "HTTP Verb Tampering". 
This vulnerability is about trying different http methods while requesting a resource, hoping in bypassing the filters.

In this scenario, .htaccess uses <Limit>, which is from security perspective bad. For secure reasons, it's recommended to use <LimitExcept>.


The second vulnerability is SQL truncation attack.
https://linuxhint.com/sql-truncation-attack/
https://resources.infosecinstitute.com/topic/sql-truncation-attack/

After getting access to a dashboard as an admin, you'll have a flag. 

The flag is not complete though, you need to use ROT cipher in order decipher it (ROT-1).


1. # socialConnect
2. It is a full fledged social networking site equipped with chat system, avatar loading, 
3. photo loading and much more implemented in PHP and database used Mysql. Created by rahulmehra.

1. Notes from ScottDonor:
2. This script does not currently support password salting etc, use at your own risk. It seems like rahulmehra was implenting it but has not fully done so yet so that is on my to do list once I get more confortable with the script and it's coding. The main reason for my fork was to fix the status issues. This script has a lot of potential tho.

1. Done so far:
2. Edited tablecreator.php file to add a DEFAULT value in the status table, osid field. Status commenting should now work.
3. Removed user level from user profile.
4. Moved top menu to it's own file in /templates/.
5. Removed login2.php file.
6. Removed a php echo to verify user is logged in and verified on their profile.
7. Removed top right LINK when user is not logged in.
8. Moved templates.php files to /templates/ folder.
9. Added DEFAULT value to osid field in the status table.


1. Scotts TO DO list:
2. See if I can get salting to work.
3. Add mysql error handling to all querys.
4. Fix forgot password page and edit the link on login.php.
5. Make the code more NEWBIE friendly. (Since I'm a NEWB!)

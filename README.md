# socialConnect
It is a full fledged social networking site equipped with chat system, avatar loading, photo loading and much more implemented in PHP and database used Mysql. Created by rahulmehra. His master can be found here: https://github.com/rahulmehra1994/socialConnect

Notes from ScottDonor:

This script does not currently support password salting etc, use at your own risk.  
It seems like rahulmehra was implenting it but has not fully done so yet so that is on my to do list once I get more confortable with the script and it's coding.  
The main reason for my fork was to fix the status issues and a general tidyup.  
My goal it to just clean it up a little and make it more user friendly for those who wish to use it.

To setup the script:

Create a MySql database.  
Edit php_includes/db_conx.php to reflect your database credentials.  
Run /one time use scripts/tablecreator.php.  
Delete /one time use scripts/tablecreator.php if all tables were created successfully.
Load webpage and create your first user.

Done so far:


Moved the country list for the signup form into /templates/.  
Assigned gender specific default avatars to index.php and user profiles.  
Edited friend_request_ok and friend_request_rejected messages to be more user friendly.  
Edited status post, delete and reply messages.  
Edited menu links to show Home, Notifications with notification count, and Profile.  
Added header and footer template to message.php.  
Put template bottom back onto login.php.  
Removed pentester.php.  
Moved the Terms of Service to the /templates/ folder for easier editing.  
Edited signup_success message in signup.php.  
Edited tablecreator.php file to add a DEFAULT value in the status table, osid field. Status commenting should now work.  
Removed user level from user profile.  
Moved top menu to it's own file in /templates/.  
Removed login2.php file.  
Removed a php echo to verify user is logged in and verified on their profile.  
Removed top right LINK when user is not logged in.  
Moved templates.php files to /templates/ folder.  
Added DEFAULT value to osid field in the status table.  


Scotts TO DO list:

Add some type of Admin Panel.  
Add "mark as read" on notifications page for status posts.  
Reload user profile after a successful status post.  
See if I can get salting to work.  
Add mysql error handling to all querys.  
Fix forgot password page and edit the link on login.php.  
Make the code more NEWBIE friendly. (Since I'm a NEWB!)  

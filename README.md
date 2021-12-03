# IT Asset Management WebApp
It assists in sending IT asset installation reports of an organisation to main server from any device connected to organisation's intra-net 

## To-do
- [ ] Styling intro pages
- [ ] Adding "Add/Remove input field rows dynamically" functionality
- [ ] Insert/Retrieve data values from response sheet to DB (MySQL) and vice versa
- [ ] Considering basic scenarios & reflecting the changes + saving response sheet structure by storing it on DB
- [ ] Migration from PHP/MySQL-DB to PHP/Oracle-11g-DB
- [ ] Final polish

## Few Constraints/Steps to consider for setup
1. In upper table structure admins can add max. of 35 rows
2. In lower table structure admins can add max. of 20 rows
3. Default value for every field is defined for a purpose, user should not leave any field empty (either '-' OR some non-null string)
4. Import "queries.sql" file onto your DB (specifically MySQL DB) & default user type is in non-admin mode so if you want to change it to admin mode then do it directly via DB changes
5. Turn off php error reporting functionality by configuring in "php.ini" file
  - find display_errors=On
  - set as display_errors=0
6. Start with "login.php" in your browser

## Visuals 

![](img/localhost_test_login.php.png "Visual 1")

![](https://github.com/parthvyas7/IT-Asset-Management-WebApp/blob/master/img/localhost_test_welcome.php%20(1).png "Visual 2")

![](https://github.com/parthvyas7/IT-Asset-Management-WebApp/blob/master/img/localhost_test_welcome.php.png "Visual 3")

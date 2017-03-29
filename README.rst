###################
Setting up on your own computer
###################
#. Download XAMPP or any other PHP and MySQL/MariaDB distribution.
#. Create a project folder and copy all of the files to that folder.
#. Make changes to application/config/config.php to set up your base url and database.
#. Default database is 'ci_test.' Create a table in your database which matches the schema below.
#. Table 'students':
 ============  ===========  ===============  =============  =============  ============
 student_id    full_name    address          gender         passing_year   hobbies
 ============  ===========  ===============  =============  =============  ============
  int(11)       char(30)    varchar(100)     char(6)        int(4)         varchar(80)
 ============  ===========  ===============  =============  =============  ============

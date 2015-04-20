# PHP-Change-MySQL-Table-Engine
Use PHP code to Alter MySQL Database Tables Engine simoultanously

# How To Use
1. Open "source.php" using your favorite code editor.
2. Change database credential variables:
    * $db_host='your-database-host'; // e.g. localhost
    * $db_name='your-database-name';
    * $db_user='your-database-user';
    * $db_password='your-database-password';  
   
3. Change your target engine variables:  
    * $old_db_engine='your-tables-old-engine'; // e.g. INNODB
    * $new_db_engine='your-tables-new-engine'; // e.g. MyISAM  
    
4. Upload "source.php" to your website directory (e.g. http://example.org/source.php) and try visit it's URL.  
5. Check your Database Table using your favorite RDMS (e.g. using PhpMyAdmin, etc) and see table engine already changed.  
6. All's done! 
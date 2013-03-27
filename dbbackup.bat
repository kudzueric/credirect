@echo off 
echo Running dump... 
"C:\Program Files\MySQL\MySQL Server 5.5\bin\mysqldump" -uroot -pcQ95UVyqxhJMvP --result-file="backup.%DATE:~10,4%%DATE:~7,2%%DATE:~4,2%.sql" --add-drop-database --add-drop-table campaignredirect 
echo Done!
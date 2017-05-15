# Weather Website 
# Description:  
A MySQL database-driven website written in PHP.  The main purpose of the website is to reflect data from a database.  The data is updated by a local python script which parses Dark Sky weather JSON data.  The script is hosted on a Raspberry Pi 3 running Raspbian.  Currently, this script executes via cron job every hour, and utilizes three API Key's so as to not exceed the daily query limit imposed by Dark Sky.

A secondary purpose of the website is the maintenance of a list of data.  Items on this list may be added or removed on the fly via the website, with changes (made via the website or manually via a database administration tool) will immediately change the content of the website.  

Priority was given to performance rather than appearance.  

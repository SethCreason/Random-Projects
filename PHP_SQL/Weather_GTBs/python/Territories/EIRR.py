import func
import API
#
#
# EIRR
table = 'EIRR'
#
city = 'Twin Falls, ID'
GPS = '42.5704,-114.4603'
key = '1'
func.temp(API.API1, GPS, table, key, city)
#
city = 'Rupert, ID (Northside)'
GPS = '42.6191,-113.6772'
key = '2'
func.temp(API.API1, GPS, table, key, city)
#
city = 'Hatch, UT (Raft River)'
GPS = '41.1416,-112.0833'
key = '3'
func.temp(API.API1, GPS, table, key, city)
#
city = 'Burley, ID (Oakley)'
GPS = '42.5357,-113.7928'
key = '4'
func.temp(API.API1, GPS, table, key, city)
#
city = 'Rexburg, ID (Yellowstone)'
GPS = '43.8235,-111.787'
key = '5'
func.temp(API.API1, GPS, table, key, city)
#
city = 'Parker, ID (St Anthony)'
GPS = '43.9593,-111.758'
key = '6'
func.temp(API.API1, GPS, table, key, city)
#
city = 'Ammon, ID (Goshen)'
GPS = '43.4697,-111.9684'
key = '7'
func.temp(API.API1, GPS, table, key, city)
#
city = 'Ririe, ID (East Belt)'
GPS = '43.6313,-111.7736'
key = '8'
func.temp(API.API1, GPS, table, key, city)
#
city = 'Ucon, ID (West Belt)'
GPS = '43.592,-111.9638'
key = '9'
func.temp(API.API1, GPS, table, key, city)
#
city = 'Idaho Falls, ID (Old Butte)'
GPS = '43.4935,-112.0401'
key = '10'
func.temp(API.API1, GPS, table, key, city)
#
#
# End, clear variables
table = None
city = None
GPS = None
key = None

import func
import API
#
#
# LBWR
table = 'LBWR'
#
city = 'Whiteface, TX'
GPS = '33.6001,-102.6138'
key = '1'
func.temp(API.API2, GPS, table, key, city)
#
city = 'Broadview, NM'
GPS = '34.8202,-103.2141'
key = '2'
func.temp(API.API2, GPS, table, key, city)
#
city = 'Seagraves, TX'
GPS = '32.9443,-102.5649'
key = '3'
func.temp(API.API2, GPS, table, key, city)
#
city = 'Dimmitt, TX'
GPS = '34.5508,-102.3123'
key = '4'
func.temp(API.API2, GPS, table, key, city)
#
#
# End, clear variables
table = None
city = None
GPS = None
key = None


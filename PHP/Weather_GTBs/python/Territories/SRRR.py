import func
import API
#
#
# SRRR
table = 'SRRR'
#
city = 'Cheyenne, WY'
GPS = '41.14,-104.8202'
key = '1'
func.temp(API.API3, GPS, table, key, city)
#
#
# End, clear variables
table = None
city = None
GPS = None
key = None

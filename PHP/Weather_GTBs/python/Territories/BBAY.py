import func
import API
#
#
# BBAY
table = 'BBAY'
#
city = 'Bogalusa, LA'
GPS = '30.7887,-89.8601'
key = '1'
func.temp(API.API1, GPS, table, key, city)
#
#
# End, clear variables
table = None
city = None
GPS = None
key = None

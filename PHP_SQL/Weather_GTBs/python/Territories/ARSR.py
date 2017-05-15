import func
import API
#
#
# ARSR
table = 'ARSR'
#
city = 'Nashville, AR'
GPS = '33.9457,-93.8471'
key = '1'
func.temp(API.API1, GPS, table, key, city)
#
city = 'Waldron, AR'
GPS = '34.8984,-94.0908'
key = '2'
func.temp(API.API1, GPS, table, key, city)
#
#
# End, clear variables
table = None
city = None
GPS = None
key = None

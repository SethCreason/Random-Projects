import func
import API
#
#
# HERR
table = 'HERR'
#
city = 'Duke, OK'
GPS = '34.6615,-99.5701'
key = '1'
func.temp(API.API2, GPS, table, key, city)
#
#
# End, clear variables
table = None
city = None
GPS = None
key = None

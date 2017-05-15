import func
import API
#
#
# AUTR
table = 'AUTR'
#
city = 'Prattville, AL'
GPS = '32.464,-86.4597'
key = '1'
func.temp(API.API1, GPS, table, key, city)
#
#
# End, clear variables
table = None
city = None
GPS = None
key = None

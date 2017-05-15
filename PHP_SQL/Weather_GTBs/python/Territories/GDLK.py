import func
import API
#
#
# GDLK
table = 'GDLK'
#
city = 'Kalamazoo, MI'
GPS = '42.2917,-85.5872'
key = '1'
func.temp(API.API2, GPS, table, key, city)
#
#
# End, clear variables
table = None
city = None
GPS = None
key = None

import func
import API
#
#
# PVSR
table = 'PVSR'
#
city = 'Pecos, TX'
GPS = '31.4245,-103.4935'
key = '1'
func.temp(API.API3, GPS, table, key, city)
#
#
# End, clear variables
table = None
city = None
GPS = None
key = None

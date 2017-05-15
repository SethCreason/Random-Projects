import func
import API
#
#
# VSOR
table = 'VSOR'
#
city = 'Vicksburg, MS'
GPS = '32.3528,-90.8777'
key = '1'
func.temp(API.API3, GPS, table, key, city)
#
#
# End, clear variables
table = None
city = None
GPS = None
key = None


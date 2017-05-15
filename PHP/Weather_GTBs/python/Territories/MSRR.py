import func
import API
#
#
# MSRR
table = 'MSRR'
#
city = 'Bay Springs, MS'
GPS = '31.979,-89.2873'
key = '1'
func.temp(API.API2, GPS, table, key, city)
#
#
# End, clear variables
table = None
city = None
GPS = None
key = None


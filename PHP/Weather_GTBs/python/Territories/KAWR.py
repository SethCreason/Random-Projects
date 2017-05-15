import func
import API
#
#
# KAWR
table = 'KAWR'
#
city = 'Kearney, MO'
GPS = '40.6995,-99.0819'
key = '1'
func.temp(API.API2, GPS, table, key, city)
#
#
# End, clear variables
table = None
city = None
GPS = None
key = None


import func
import API
#
#
# PSRR
table = 'PSRR'
#
city = 'Camp Pendelton, CA (Miramar)'
GPS = '37.2502,-119.7513'
key = '1'
func.temp(API.API2, GPS, table, key, city)
#
city = 'Escondido, CA'
GPS = '33.1217,-117.0815'
key = '2'
func.temp(API.API2, GPS, table, key, city)
#
#
# End, clear variables
table = None
city = None
GPS = None
key = None


import func
import API
#
#
# MMTR
table = 'MMTR'
#
city = 'Columbia Falls, MT (Kalispell)'
GPS = '48.3697,-114.1916'
key = '1'
func.temp(API.API2, GPS, table, key, city)
#
city = 'Eureka, MT'
GPS = '48.88,-115.0535'
key = '2'
func.temp(API.API2, GPS, table, key, city)
#
#
# End, clear variables
table = None
city = None
GPS = None
key = None


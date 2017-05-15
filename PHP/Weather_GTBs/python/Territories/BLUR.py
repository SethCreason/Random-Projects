import func
import API
#
#
# BLUR
table = 'BLUR'
#
city = 'Waynesville, NC'
GPS = '35.4887,-82.9889'
key = '1'
func.temp(API.API1, GPS, table, key, city)
#
city = 'Naples, NC'
GPS = '35.3926,-82.5007'
key = '2'
func.temp(API.API1, GPS, table, key, city)
#
#
# End, clear variables
table = None
city = None
GPS = None
key = None

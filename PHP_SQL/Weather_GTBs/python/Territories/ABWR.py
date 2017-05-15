import func
import API
#
#
# ABWR
table = 'ABWR'
#
city = 'Birmingham, AL'
GPS = '33.5207,-86.8024'
key = '1'
func.temp(API.API1, GPS, table, key, city)
#
#
# End, clear variables
table = None
city = None
GPS = None
key = None

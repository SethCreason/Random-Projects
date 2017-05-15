import func
import API
#
#
# TIBR
table = 'TIBR'
#
city = 'Deridder, LA'
GPS = '30.8462,-93.2893'
key = '1'
func.temp(API.API3, GPS, table, key, city)
#
#
# End, clear variables
table = None
city = None
GPS = None
key = None

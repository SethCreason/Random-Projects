import func
import API
#
#
# GRNW
table = 'GRNW'
#
city = 'Kooskia, ID'
GPS = '46.1449,-115.9779'
key = '1'
func.temp(API.API2, GPS, table, key, city)
#
city = 'Lewiston, ID'
GPS = '46.4166,-117.0177'
key = '2'
func.temp(API.API2, GPS, table, key, city)
#
#
# End, clear variables
table = None
city = None
GPS = None
key = None

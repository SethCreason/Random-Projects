import func
import API
#
#
# BVRR
table = 'BVRR'
#
city = 'Boise, ID'
GPS = '43.6166,-116.2008'
key = '1'
func.temp(API.API1, GPS, table, key, city)
#
city = 'Wilder, ID'
GPS = '43.6765,-116.9118'
key = '2'
func.temp(API.API1, GPS, table, key, city)
#
#
# End, clear variables
table = None
city = None
GPS = None
key = None

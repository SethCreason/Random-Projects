import func
import API
#
#
# LASR
table = 'LASR'
#
city = 'Minden, LA (Hope)'
GPS = '32.6154,-93.2868'
key = '1'
func.temp(API.API2, GPS, table, key, city)
#
city = 'Princeton, LA'
GPS = '32.5893,-93.5152'
key = '2'
func.temp(API.API2, GPS, table, key, city)
#
city = 'Hodge, LA'
GPS = '32.2768,-92.7235'
key = '3'
func.temp(API.API2, GPS, table, key, city)
#
#
# End, clear variables
table = None
city = None
GPS = None
key = None


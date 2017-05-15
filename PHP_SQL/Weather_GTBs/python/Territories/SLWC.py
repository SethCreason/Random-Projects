import func
import API
#
#
# SLWC
table = 'SLWC'
#
city = 'Stillwater, OK'
GPS = '36.1156,-97.0586'
key = '1'
func.temp(API.API3, GPS, table, key, city)
#
city = 'Oklahoma City, OK'
GPS = '35.473,-97.5171'
key = '2'
func.temp(API.API3, GPS, table, key, city)
#
city = 'Lawton, OK'
GPS = '34.6087,-98.3903'
key = '3'
func.temp(API.API3, GPS, table, key, city)
#
#
# End, clear variables
table = None
city = None
GPS = None
key = None

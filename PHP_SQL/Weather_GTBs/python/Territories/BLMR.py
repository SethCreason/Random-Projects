import func
import API
#
#
# BLMR
table = 'BLMR'
#
city = 'Hooper Junction, WA'
GPS = '46.7749,-118.1486'
key = '1'
func.temp(API.API1, GPS, table, key, city)
#
city = 'Colfax, WA'
GPS = '46.8802,-117.3643'
key = '2'
func.temp(API.API1, GPS, table, key, city)
#
city = 'Thornton, WA'
GPS = '47.1208,-117.3898'
key = '3'
func.temp(API.API1, GPS, table, key, city)
#
city = 'Wallula, WA'
GPS = '46.0854,-118.9053'
key = '4'
func.temp(API.API1, GPS, table, key, city)
#
city = 'Milton, WA'
GPS = '47.2481,-122.3128'
key = '5'
func.temp(API.API1, GPS, table, key, city)
#
city = 'Walla Walla, WA'
GPS = '46.065,-118.3303'
key = '6'
func.temp(API.API1, GPS, table, key, city)
#
city = 'Arlington, WA'
GPS = '48.1811,-122.139'
key = '7'
func.temp(API.API1, GPS, table, key, city)
#
#
# End, clear variables
table = None
city = None
GPS = None
key = None

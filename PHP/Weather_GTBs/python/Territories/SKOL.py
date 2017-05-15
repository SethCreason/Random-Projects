import func
import API
#
#
# SKOL
table = 'SKOL'
#
city = 'Moline, KS'
GPS = '37.3604,-96.304'
key = '1'
func.temp(API.API3, GPS, table, key, city)
#
city = 'Neodesha, KS'
GPS = '37.4184,-95.6803'
key = '2'
func.temp(API.API3, GPS, table, key, city)
#
city = 'Chanute, KS'
GPS = '37.6792,-95.4572'
key = '3'
func.temp(API.API3, GPS, table, key, city)
#
city = 'Tulsa, OK'
GPS = '36.1557,-95.9929'
key = '4'
func.temp(API.API3, GPS, table, key, city)
#
city = 'Coffeyville, KS'
GPS = '37.0373,-95.6164'
key = '5'
func.temp(API.API3, GPS, table, key, city)
#
city = 'Pittsburg, KS'
GPS = '37.4109,-94.705'
key = '6'
func.temp(API.API3, GPS, table, key, city)
#
#
# End, clear variables
table = None
city = None
GPS = None
key = None

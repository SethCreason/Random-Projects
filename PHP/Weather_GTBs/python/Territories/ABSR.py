import func
import API
#
#
# ABSR
table = 'ABSR'
#
city = 'Tuscaloosa, AL'
GPS = '33.2668,-87.4862'
key = '1'
func.temp(API.API1, GPS, table, key, city)
#
city = 'Warrior, AL'
GPS = '33.8143,-86.8094'
key = '2'
func.temp(API.API1, GPS, table, key, city)
#
city = 'Brookwood, AL'
GPS = '33.2557,-87.3208'
key = '3'
func.temp(API.API1, GPS, table, key, city)
#
#
# End, clear variables
table = None
city = None
GPS = None
key = None

import func
import API
#
#
# KNWA
table = 'KNWA'
#
city = 'Glouster, OH (Kanawha)'
GPS = '39.5031,-82.0846'
key = '1'
func.temp(API.API2, GPS, table, key, city)
#
city = 'Mullens, WV'
GPS = '37.5833,-81.3805'
key = '2'
func.temp(API.API2, GPS, table, key, city)
#
#
# End, clear variables
table = None
city = None
GPS = None
key = None


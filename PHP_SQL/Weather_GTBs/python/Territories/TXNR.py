import func
import API
#
#
# TXNR
table = 'TXNR'
#
city = 'Lovington, NM'
GPS = '32.944,-103.3486'
key = '1'
func.temp(API.API3, GPS, table, key, city)
#
#
# End, clear variables
table = None
city = None
GPS = None
key = None

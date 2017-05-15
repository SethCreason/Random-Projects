#!/usr/bin/env python3
from datetime import datetime
from phue import Bridge
import logging

logging.basicConfig() # allows output to monitor/log file

b = Bridge('192.168.0.202') #assign hue bridge
b.connect() #connect to bridge
b.get_api()
lights = b.lights
b.get_group()

##
## brightness (bri) range: 0-254 ... 127=50%
##

def pon():
    
    global lights
        
    if b.get_light('Porch', 'on') == False:

        #Turn on the porch light
        arguments =  {'transitiontime' : 1, 'on' : True, 'bri' : 160}
        b.set_light('Porch', arguments)

        #Write to console and log file
        print ("%s | It is getting bright out and the porch light is off. Turning it on now.\n" % (datetime.now().strftime('%Y-%m-%d %H:%M:%S')))
        with open('/home/pi/Desktop/py/porch/log.log', 'a') as f:
            f.write("%s | It is getting bright out and the porch light is off. Turning it on now.\n" % (datetime.now().strftime('%Y-%m-%d %H:%M:%S')))
    else:
        print ("%s | It is getting bright out and the porch light is already on.  Doing nothing.\n" % (datetime.now().strftime('%Y-%m-%d %H:%M:%S')))
        with open('/home/pi/Desktop/py/porch/log.log', 'a') as f:
            f.write("%s | It is getting bright out and the porch light is already on . Doing nothing.\n" % (datetime.now().strftime('%Y-%m-%d %H:%M:%S')))

pon()

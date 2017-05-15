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

def poff():
    
    global lights
        
    if b.get_light('Porch', 'on') == True:

        #Turn on the porch light
        b.set_light('Porch', 'on', False, transitiontime=1)

        #Write to console and log file
        print ("%s | It is getting dark and the porch light is on. Turning it off now.\n" % (datetime.now().strftime('%Y-%m-%d %H:%M:%S')))
        with open('/home/pi/Desktop/py/porch/log.log', 'a') as f:
            f.write("%s | It is getting dark and the porch light is on. Turning it off now.\n" % (datetime.now().strftime('%Y-%m-%d %H:%M:%S')))
    else:
        print ("%s | It is getting dark and the porch light is already off.  Doing nothing.\n" % (datetime.now().strftime('%Y-%m-%d %H:%M:%S')))
        with open('/home/pi/Desktop/py/porch/log.log', 'a') as f:
            f.write("%s | It is getting dark and the porch light is already off . Doing nothing.\n" % (datetime.now().strftime('%Y-%m-%d %H:%M:%S')))

poff()

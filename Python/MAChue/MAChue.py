#!/usr/bin/env python3
from subprocess import Popen, PIPE
from datetime import datetime
from phue import Bridge
import logging
import nmap
import time
import re

logging.basicConfig() # allows output to monitor/log file
IPcheck = -1 # starting position for loop
update = 0 # starting position for parsing results
myList = ''
b = Bridge('192.168.0.113') # assign hue bridge
b.connect() # connect to bridge
b.get_api()
lights = b.lights
b.get_group()
run_time = time.time() + 60 * 15 # 60 * <desired minutes to run the program>

def scan():
    
    global myList
    nm = nmap.PortScanner() # assign scan function
    nm.scan(hosts='192.168.0.*/24', arguments='-n -sn -PE') # scan settings
    myList = nm.all_hosts() # scan results array

def ring():

    # turn on/off the lights in a fun fashion. unnecessary
    b.set_light('Dining Room 1', 'on', True, transitiontime=1)
    time.sleep(.1)
    b.set_light('Dining Room 1', 'on', False, transitiontime=1)
    b.set_light('Dining Room 2', 'on', True, transitiontime=1)
    time.sleep(.1)
    b.set_light('Dining Room 2', 'on', False, transitiontime=1)
    b.set_light('Dining Room 3', 'on', True, transitiontime=1)
    time.sleep(.1)
    b.set_light('Dining Room 3', 'on', False, transitiontime=1)
    time.sleep(.1)

def ipFunc():
    
    global running
    global update
    global IPcheck
    global lights
    global run_time
        
    IP = myList[update] # to parse array, ++ as necessary
    Popen(["ping", "-c 1", "-w 1", IP], stdout = PIPE)
    pid = Popen(["/usr/sbin/arp", "-n", IP], stdout = PIPE)
    s = pid.communicate()[0]
    mac = re.search(r"(([a-f\d]{1,2}\:){5}[a-f\d]{1,2})", s).groups()[0]

    if mac == "d8:1d:72:0b:e6:ee": # if MAC address matches desired device
        
        if b.get_light('Dining Room 1', 'on') == True:
            # if lights are turned on already, say so and do nothing and add (non)event to log
            print ("%s | Device detected on network. Keeping Dining Room lights on.  ***** MAC: %s\n" % (datetime.now().strftime('%Y-%m-%d %H:%M:%S'), mac))
            with open('/home/pi/Desktop/py/ping/log.log', 'a') as f:
                f.write('%s | Device detected on network. Keeping Dining Room lights on.  ***** MAC: %s\n' % (datetime.now().strftime('%Y-%m-%d %H:%M:%S'), mac))
        else:
            # if lights are turned off, turn lights on and add event to log
            print ("%s | Device detected on network. Turning on Dining Room lights.  ***** MAC: %s\n" % (datetime.now().strftime('%Y-%m-%d %H:%M:%S'), mac))
            with open('/home/pi/Desktop/py/ping/log.log', 'a') as f:
                f.write('%s | Device detected on network. Turning on Dining Room lights.  ***** MAC: %s\n' % (datetime.now().strftime('%Y-%m-%d %H:%M:%S'), mac))
            ring()
            ring()
            b.set_light('Dining Room 2', 'on', True, transitiontime=1)
            b.set_light('Dining Room 3', 'on', True, transitiontime=1)
            b.set_light('Dining Room 1', 'on', True, transitiontime=1)

            ## alternatively, use groups of lights if so named:
            #b.set_group('Dining Room', 'on', True, transitiontime=1)
                
        IPcheck = -1 # resetting the loop
        update = 0 # resetting the parse
        time.sleep(5000) # after 5 second delay, run program again
        while time.time() < run_time:
            start()
        
    elif mac != "d8:1d:72:0b:e6:ee" and update <= (len(myList) -2): # if MAC address does NOT match the desired device
        
        if update < (len(myList) - 2):
            # continuing through the scan
            IPcheck += 1 # move on to the next IP found on the network
            update += 1 # next element in array
            
        elif update == (len(myList) - 2):
            # end of the scan.  check results.
            if b.get_light('Dining Room 1', 'on') == True:
                # if lights are currently turned on, turn them off and add event to log
                print ("%s | Device not detected on network. MAC: %s\n" % (datetime.now().strftime('%Y-%m-%d %H:%M:%S'), mac))
                with open('/home/pi/Desktop/py/ping/log.log', 'a') as f:
                    f.write('%s | Device not detected on network. MAC: %s\n' % (datetime.now().strftime('%Y-%m-%d %H:%M:%S'), mac))
            elif b.get_light('Dining Room 1', 'on') == False:
                # if lights are already off, say so and do nothing and add (non)event to log
                print ("%s | Device not detected on network. MAC: %s\n" % (datetime.now().strftime('%Y-%m-%d %H:%M:%S'), mac))
                with open('/home/pi/Desktop/py/ping/log.log', 'a') as f:
                    f.write('%s | Device not detected on network. MAC: %s\n' % (datetime.now().strftime('%Y-%m-%d %H:%M:%S'), mac))
                    
            IPcheck = -1 # resetting the loop
            update = 0 # resetting the parse
            time.sleep(5) # after 5 second delay, run program again
            while time.time() < run_time:
                start() 

def start():    
    scan() # scan the network for IP addresses
    for IP in myList: # for every IP found in the network scan's results
        ipFunc() # convert each IP address to its MAC address, check if MAC address matches the desired MAC

start()

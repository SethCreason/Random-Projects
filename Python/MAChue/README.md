# Philips Hue automation with MAC Address recognition
# Description:
Scan the network for a known MAC Address, my phone.  When my phone is detected as having joined the network, turn on my dining room lights.

# Required:
 * Static IP address for the Philips Hue bridge.  
 * phue, a library for Philips Hue.  
	Install via *sudo easy_install phue* or *pip install phue*.  
	
# Notes:  
I run this program on a Rasberry Pi 3 running Rasbian, via a cron job, for a fifteen minute window only, at the approximate time I should be returning home from work.  If it were to run all day, the dining room lights would turn themselves on at seemingly random times, when the phone wakes up and re-enables Wi-Fi.

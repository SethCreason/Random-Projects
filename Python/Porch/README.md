# Philips Hue automation
# Description:
Turn on/off my porch light at dawn/dusk.

# Required:
 * Static IP address for the Philips Hue bridge.  
 * phue, a library for Philips Hue.  
	Install via *sudo easy_install phue* or *pip install phue*.  
	github.com/studioimaginaire/phue
	
# Notes:  
Both scripts execute on a Rasberry Pi 3 running Rasbian, via cron job.  The first, porch_off, executes at dawn.  The second, porch_on, executes at dusk.  Adjustments can be made to the cron job as the times for dawn and dusk change throughout the year.  Ultimately, I'd like to add sensors outside to detect daylight, then execute either script accordingly. 

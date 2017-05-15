import urllib2, json, mysql.connector
#
# Define temperature function
def temp(API, GPS, table, key, city):
    try:
        url = 'https://api.darksky.net/forecast/' + API + '/' + GPS
        response = urllib2.urlopen(url)
        array = json.loads(response.read())
        temp = (array['currently']['temperature']) 
        conditions = (array['currently']['summary'])
        time = (array['currently']['time'])
        try:
            warning = (array['alerts'][0]['title'])
        except:
            warning = None
            warning_text = None
            warning_link = None
        else:
            warning = (array['alerts'][0]['title'])
            warning_text = (array['alerts'][0]['description'])
            warning_link = '<a href="' + (array['alerts'][0]['uri']) + '" target="_blank">Link</a>'
    except:
        pass
    else:
        #
        # Set up connection to MySQL
        cnx = mysql.connector.connect(user='<myUsername>',
                                      password='<myPassword>',
                                      host='localhost',
                                      database='weather_results')
        cursor = cnx.cursor()
        #
        # Prepare SQL injection
        add_temp = ("UPDATE `" + table + "` SET "
                "`Temperature` = %s, "
                "`Conditions` = %s, "
                "`Warned` = %s, "
                "`Warning_Text`= %s, "
                "`Warning_Link`= %s, "
                "`Time`= %s "
                "WHERE `KEY` = %s")
        results = (temp, conditions, warning, warning_text, warning_link, time, key)
        #
        # Inject
        cursor.execute(add_temp, results)
        cnx.commit()
        #
        # Close connection
        cursor.close()
        cnx.close()
    print("Data successfully retrieved and commited to the database for " + city)
#
#
# End

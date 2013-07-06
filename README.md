rsmb-mqtt-php
=============

Implementation of MQTT Protocol With PHP Using RSMB in Windows xp/7/8

=============

Step by step Guide to implement MQTT Protocol with php using "Really Small Message Broker"

------------------
Setup PHP: 
------------------
1- Install wamp or xampp

2- Enable a php extension called "php_sockets"


------------------
Setup RSMB:
------------------

1- Download Latest RSMB Setup files from IBM website  

(https://www.ibm.com/developerworks/community/groups/service/html/communityview?communityUuid=d5bedadd-e46f-4c97-af89-22d65ffee070)

2- After download, go to RSMB's downloaded folder and run the broker.exe

3- Now, the MQTT Server is started

4- You will see a console, this will display each activity on the server

5- Dont close this console, otherwise MQTT Server will be stoped


------------------
Setup Publisher/Subscriber
------------------

1- Create new folder named "mqtt_test" in root directory (in case of wamp, root directory would be "C:\wamp\www\")

2- Download phpMQTT.php and palce it in mqtt_test folder

3- Download publisher.php and palce it in mqtt_test folder

4- Download subscriber.php and palce it in mqtt_test folder

5- Open the web browser

6- Open two empty tabs in web browser

7- In first tab, open this url http://localhost/mqtt_test/subscriber.php

8- In second tab, open this url http://localhost/mqtt_test/publisher.php

------------------
Final Results
------------------

When you open subscriber.php, it means, you subscribe to server for a topic.

And then, when you open publisher.php,it means, you publish a topic with a message.

RSMB will publish your topic/message to all subscribers who subscribed for this topic.

In our case, we subscribed the subscriber.php, so, subscriber.php will continue loading until it receives a message from RSMB.

If you open publisher.php with a long delay, you will not see any result, because subscriber.php will stop execution after completing the excution of $mqtt->proc();.

If you open publisher.php immediatley, then you will be able to see the result on subscriber.php

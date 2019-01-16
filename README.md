# iSpecs Reimagined 👓


iSpecs is the real time object detection specs based on YOLO with Raspberry pi.

It's like regular specs but with real time object detection

This is the Client side repository of iSpecs in which request is sent and recieved to server by client via rasberrypi.

##### New Features!
  - Real Time object detection.
  - Better accuracy 

#### Checkout the server repository [here](https://github.com/Shritesh99/iSpecs-Reimagined_Server)
#### Checkout the manual version [here](https://github.com/Shritesh99/iSpecs)
### components used : 
 - Picamera - 8mp camera for vision
 - Rasberrypi - model B+
 - Headphone - for audio output

![workflow diagram here](https://raw.githubusercontent.com/Shritesh99/iSpecs-Reimagined_Server/master/images/iSpecs-Arch.png)
In iSpecs the client raspberry pi sends the images obtain by picamera as a POST request and get the response of object detection in json format which will be spoken via tts engine in client.
### Tech
Server mainly uses YOLO system for object detection:
* [Yolo v3](https://pjreddie.com/darknet/yolo/) - real-time object detection system
* Django -  handling client request

### Development
In this repo the both files client.py and ispecs.php is kept inside the /var/www/html/ispecs folder in Raspberry Pi integrated with Apache 2.0 Server.

### Installation

For runnning the python script call :

```sh
http://{ip address of raspberry pi}/ispecs/ispecs.php?ip={ip address where iSpecs server is running with port}
```

#### Contributors
  - [Shritesh](https://github.com/Shritesh99)
  - [Siddharth](https://github.com/siddharthshah3030)
  
If you find any problem feel free to create issue.
 Suggestions and feedbacks are always welcomed!





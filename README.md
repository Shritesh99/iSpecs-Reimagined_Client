# iSpecs Reimagined 👓


iSpecs is the real time object detection specs based on YOLO with Raspberry pi.
It's like regular specs but with object detection

This is the Client side repository of iSpecs in which request is sent and recieved to server by client via rasberrypi.

##### New Features!
  - separate client and server repos 
  - better accuracy 

#### checkout the server repo [here](https://github.com/Shritesh99/iSpecs-Reimagined_Server)
#### Checkout the manual version [here](https://github.com/Shritesh99/iSpecs)
### components used : 
 - picamera - 8mp camera for vision
 - rasberrypi - model B+
 - headphone - for audio output



![workflow diagram here](https://raw.githubusercontent.com/Shritesh99/iSpecs-Reimagined_Server/master/images/iSpecs-Arch.png)
In iSpecs the client raspberry pi sends the images obtain by picamera as a POST request and get the response of object detection in json format which will be spoken via tts engine in client.
### Tech
server mainly uses YOLO system for object detection:
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

if you find any problem feel free to create issue.
 Suggestions and feedbacks are always welcomed!
### Todos

 - suppport better fps
 - add more features






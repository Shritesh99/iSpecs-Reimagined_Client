# iSpecs Reimagined 👓

### iSpecs is the real time object detection specs based on YOLO with Raspberry pi.

### This is the client side repository of iSpecs in which detection occurs on each and every frame send by client side of iSpecs.

### Check out the manual version [here](https://github.com/Shritesh99/iSpecs)

<p align="center">
  <img src="https://github.com/Shritesh99/iSpecs-Reimagined_Server/blob/master/images/iSpecs-Arch.png" />
</p>

In iSpecs the client raspberry pi send the images obtain by picamera as a POST request and get the response of object detection in json format which will be spoken via tts engine in client.

In this repo the both files `client.py` and `ispecs.php` is kept inside the `/var/www/html/ispecs` folder in raspberry pi integrated with apache 2.0 server.

For runnning the script call :

`http://{ip address of raspberry pi}/ispecs/ispecs.php?ip={ip address where iSpecs's server is running with port}`.

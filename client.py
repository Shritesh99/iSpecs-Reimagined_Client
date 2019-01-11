import io
import sys
import time
import picamera
import requests
from PIL import Image


url = "http://{}/detect/".fromat(str(sys.argv[0]))
camera = picamera.PiCamera()
pic = io.BytesIO()
try:
    while True:
        t1 = time.time()
        camera.start_preview(fullscreen=False, window=(400,400,400,400))
        time.sleep(2)
        camera.capture(pic, 'jpeg')
        pic.seek(0)
        image = Image.open(pic)
        data = {'frame': ('temp.jpeg', pic, 'image/jpeg')}
        r = requests.post(url, files=data)
        print(r.text)
        t2 = time.time()
        print("{:.1f}".format(1/(t2-t1)))
except KeyboardInterrupt:
    pass    
finally:
    pic.flush()
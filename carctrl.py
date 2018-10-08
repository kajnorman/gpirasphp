import time
import RPi.GPIO as GPIO
GPIO.setmode(GPIO.BOARD)
GPIO.setup(11, GPIO.OUT)
p = GPIO.PWM(11, 50)  # channel=11 frequency=50Hz
p.start(0)

f=open("/tmp/carctrl", "r")
while True:
	time.sleep(0.6)
	contents =f.read()
	if (contents == 'F\n'):
		p.ChangeDutyCycle(50)
		print('Forwards')
	if (contents == 'FF\n'):
		p.ChangeDutyCycle(100)
		print('Fast Forwards')
	if (contents == 'Sn'):
		p.ChangeDutyCycle(0)
		print('Stop')
	print(contents);
	f.seek(0,0)


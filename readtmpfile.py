import time
f=open("/tmp/carctrl", "r")
while True:
	time.sleep(0.6)
	contents =f.read()
	print(contents);
	f.seek(0,0)

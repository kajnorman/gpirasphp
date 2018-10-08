import time
f=open("/tmp/carctrl", "r")
while True:
	time.sleep(0.6)
	contents =f.read()
	if (contents == 'F\n'):
		print('Forwards')
	if (contents == 'FF\n'):
		print('Fast Forwards')
	if (contents == 'S'):
		print('Stop\n')
	print(contents);
	f.seek(0,0)

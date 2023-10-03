import psutil

# https://unix.stackexchange.com/a/686425
print('{}'.format(psutil.cpu_percent(interval=0.5)))

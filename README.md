# dwm v6.4
## Compilar e instalar
	sh make

## Configurações
	nano config.h

## Scroll

https://wiki.gentoo.org/wiki/Libinput

## pegar o nome certo dos programas (config.h):

```
xprop WM_CLASS
```

## .profile

```bash
# DWM AQUI:

# resolve o bug de apps java
export _JAVA_AWT_WM_NONREPARENTING=1 

# aviso de bateria descarregando
while true; do
    BATT=$( acpi -b | awk '{ split($5,a,":"); print substr($4,0,2)}')
    STATUS=$( acpi -b | awk '{ split($5,a,":"); print substr($3,0,2)}')
    if [ $BATT -le 50 ] && [ $STATUS == 'Di' ]; then
        notify-send "⚡ $BATT% de bateria"
    fi
    sleep 10s
done &

# bateria, cpu, memória, calendário e relógio
while true; do
    bat="$(acpi -b)"
    mem="$(free -h --si | awk '(NR==2){ print $3 }')"
    data="$(php '/home/gaucho/Downloads/dwm64/data.php')"
    status="$(echo "$bat, Mem: $mem ~ $data")"
    xsetroot -name " $(echo $status | xargs) "
    sleep 1s
done &

# programas
setsid alarm-clock-applet &
setsid chromium &
setsid xfce4-volumed &
setsid rhythmbox &
setsid pavucontrol &
setsid nitrogen --restore &
```

# dwm v6.4
## Compilar e instalar
	sh make

## Configurações
	nano config.h

## .profile

```bash
# resolve o bug de apps java
export _JAVA_AWT_WM_NONREPARENTING=1 

# aviso de bateria descarregando
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
    data="$(php '/home/gaucho/Área de Trabalho/www/dwm/data.php')"
    cpu="$(python3 '/home/gaucho/Área de Trabalho/www/dwm/cpu.py')"
    status="$(echo "$bat, CPU: $cpu%, Mem: $mem ~ $data")"
    xsetroot -name " $(echo $status | xargs) "
    sleep 1s
done &

# programas
setsid alarm-clock-applet &
setsid sensible-browser &
setsid nitrogen --restore &
```

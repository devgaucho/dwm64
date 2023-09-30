#!/bin/bash
clear
sudo apt remove dwm -y
sudo apt install acpi alarm-clock-applet build-essential libx11-dev libxft-dev libxinerama-dev lxtask nitrogen pcmanfm php sakura suckless-tools sysstat -y
sudo make clean install
sudo cp dwm.desktop /usr/share/xsessions/dwm.desktop

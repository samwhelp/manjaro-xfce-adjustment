<?php

	$list = array();




/*
	$item = array();
	$item['Keybind'] = "Alt + Shift + o";
	$item['Action'] = "Open this cheatsheet";
	$list[] = $item;
*/

	$item = array();
	$item['Keybind'] = "Alt + Shift + x";
	$item['Action'] = "Logout";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Alt + Shift + z";
	$item['Action'] = "Leave";
	$list[] = $item;

/*
	$item = array();
	$item['Keybind'] = "Alt + Shift + c";
	$item['Action'] = "Xfce Reload";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Alt + Ctrl + c";
	$item['Action'] = "Xfce Restart";
	$list[] = $item;
*/

	$item = array();
	$item['Keybind'] = "Alt + F1";
	$item['Action'] = "Main Menu";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Alt + F2";
	$item['Action'] = "Runner";
	$list[] = $item;

/*
	$item = array();
	$item['Keybind'] = "Alt + F3";
	$item['Action'] = "Window List";
	$list[] = $item;
*/

	$item = array();
	$item['Keybind'] = "Win + c";
	$item['Action'] = "Workspace List/ Window List";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Win + Space";
	$item['Action'] = "Desktop Menu";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Alt + Space";
	$item['Action'] = "Window Menu";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Alt + Shift + d";
	$item['Action'] = "Rofi Show Drun";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Alt + Shift + r";
	$item['Action'] = "Rofi Show Run";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Alt + Shift + w";
	$item['Action'] = "Rofi Show Window";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Alt + Shift + f";
	$item['Action'] = "Launch File Manager (thunar)";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Alt + Shift + g";
	$item['Action'] = "Launch File Manager (pcmanfm-qt)";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Alt + Shift + e";
	$item['Action'] = "Launch Text Editor (mousepad)";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Alt + Shift + b";
	$item['Action'] = "Launch Web Browser (firefox)";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Alt + Shift + s";
	$item['Action'] = "Launch System Settings (xfce4-settings-manager)";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Alt + Ctrl + s";
	$item['Action'] = "Launch System Settings Editor (xfce4-settings-editor)";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Win + Shift + s";
	$item['Action'] = "Launch xfwm4 Settings (xfwm4-settings)";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Win + Ctrl + s";
	$item['Action'] = "Launch Appearance Settings (xfce4-appearance-settings)";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Ctrl + Esc";
	$item['Action'] = "Launch Task Manager (xfce4-taskmanager)";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Win + p";
	$item['Action'] = "Launch Display Settings (xfce4-display-settings --minimal)";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Alt + Enter";
	$item['Action'] = "Launch Terminal (xfce4-terminal)";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Alt + Shift + a";
	$item['Action'] = "Launch Terminal (xfce4-terminal)";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Alt + Ctrl + a";
	$item['Action'] = "Launch Terminal (sakura)";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Alt + Shift + t";
	$item['Action'] = "Launch Terminal (xterm)";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Alt + Ctrl + t";
	$item['Action'] = "Launch Terminal (urxvt)";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Win + q";
	$item['Action'] = "Window Close";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Win + f";
	$item['Action'] = "Window Fullscreen";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Win + w";
	$item['Action'] = "Window Maximize";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Win + x";
	$item['Action'] = "Window Minimize";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Win + d";
	$item['Action'] = "Toggle Show Desktop";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Win + e";
	$item['Action'] = "Window Begin Move";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Win + r";
	$item['Action'] = "Window Begin Resize";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Win + t";
	$item['Action'] = "Window Always on Top";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Win + y";
	$item['Action'] = "Window Toggle Shade";
	$list[] = $item;

/*
	$item = array();
	$item['Keybind'] = "Win + Esc";
	$item['Action'] = "Window Switch Previous";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Alt + Esc";
	$item['Action'] = "Window Switch Next";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Win + grave";
	$item['Action'] = "Overview (Workspace List)";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Win + Tab";
	$item['Action'] = "Expose (Window List)";
	$list[] = $item;
*/

	$item = array();
	$item['Keybind'] = "Win + Mouse Left Drag";
	$item['Action'] = "Window Move";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Win + Mouse Right Drag";
	$item['Action'] = "Window Resize";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Win + a";
	$item['Action'] = "Window Switch Previous";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Win + s";
	$item['Action'] = "Window Switch Next";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Alt + a";
	$item['Action'] = "Workspace Switch Previous";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Alt + s";
	$item['Action'] = "Workspace Switch Next";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Alt + Ctrl + 1-9";
	$item['Action'] = "Workspace Switch to 1-9";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Alt + Shift + 1-9";
	$item['Action'] = "Window Send to 1-9";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Print";
	$item['Action'] = "Screenshot";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Win + Print";
	$item['Action'] = "Screenshot Current Window";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Ctrl + Print";
	$item['Action'] = "Screenshot Selected Area";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Fn + F5 (XF86MonBrightnessDown)";
	$item['Action'] = "Brightness Decrease";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Fn + F6 (XF86MonBrightnessUp)";
	$item['Action'] = "Brightness Increase";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Alt + Shift + [";
	$item['Action'] = "Brightness Decrease";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Alt + Shift + ]";
	$item['Action'] = "Brightness Increase";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Alt + Shift + v";
	$item['Action'] = "Launch Volume Control (pavucontrol)";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Fn + F10 (XF86AudioMute)";
	$item['Action'] = "Volume Toggle Mute";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Fn + F11 (XF86AudioLowerVolume)";
	$item['Action'] = "Volume Decrease";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Fn + F12 (XF86AudioRaiseVolume)";
	$item['Action'] = "Volume Increase";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Alt + m";
	$item['Action'] = "Volume Toggle Mute";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Alt + Shift + ,";
	$item['Action'] = "Volume Decrease";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Alt + Shift + .";
	$item['Action'] = "Volume Increase";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Alt + Ctrl + ,";
	$item['Action'] = "Volume Decrease Slowly";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Alt + Ctrl + .";
	$item['Action'] = "Volume Increase Slowly";
	$list[] = $item;




	return $list;

#!/bin/python
#coding: utf-8

import smbus
import time
import sys

bus = smbus.SMBus(1)
address = 0x12



#device = int(sys.argv[1])
#value = int(sys.argv[2])

def search_device(device):
	return { 'jet_j' : '1', 'air_j' : '2', 'fil_j' : '3', 'cha_j' : '4', 'lum_j' : '5', 'cas_p' : '6', 'ncc_p' : '7', 'fil_p' : '8', 'cha_p' : '9', 'lum_p' : '10' }.get(device) 

def search_value(value):
	return { 'true' : '1', 'false' : '0' }.get(value) 
	
device = int(search_device(sys.argv[1]))
value =  int(search_value(sys.argv[2]))

print device
print value

bus.write_i2c_block_data(address,0x00,[device, value])

# Pause de 1 seconde pour laisser le temps au traitement de se faire
time.sleep(1)
data = bus.read_i2c_block_data(address,0x00,3)
print "retour arduino"
fil_p = data[0]
cha_p = data[1]
lum_j = data[2]
print "sortie  8:", fil_p
print "sortie  9:",cha_p
print "sortie 10:",lum_j


#print "La reponse de l'arduino : ", reponse1

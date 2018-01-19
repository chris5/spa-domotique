#!/bin/python
#coding: utf-8

import smbus
import time
import sys

bus = smbus.SMBus(1)
address = 0x12



device = int(sys.argv[1])
value = int(sys.argv[2])
bus.write_i2c_block_data(address,0x00,[device, value])

# Pause de 1 seconde pour laisser le temps au traitement de se faire
time.sleep(1)
data = bus.read_i2c_block_data(address,0x00,13)
print "retour arduino"
on_p = data[0]
jet_j = data[1]
air_j = data[2]
fil_j = data[3]
cha_j = data[4]
lum_j = data[5]
cas_p = data[6]
ncc_p = data[7]
fil_p = data[8]
cha_p = data[9]
lum_p = data[10]
off_p = data[11]
eta_s = data[12]

print "switch  1:", on_p
print "switch  2:",jet_j
print "switch  3:",air_j
print "switch  4:", fil_j
print "switch  5:",cha_j
print "switch  6:",cas_p
print "switch  7:", ncc_p
print "switch  8:",fil_p
print "switch  9:",cha_p
print "switch  10:", lum_p
print "switch  11:",off_p
print "switch  12:",eta_s


#print "La reponse de l'arduino : ", reponse1
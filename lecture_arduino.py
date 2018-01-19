#!/bin/python
#coding: utf-8

import smbus
import time
import sys

bus = smbus.SMBus(1)
address = 0x12


# Pause de 1 seconde pour laisser le temps au traitement de se faire
time.sleep(1)
data = bus.read_i2c_block_data(address,0x00,12)
print "retour arduino"

jet_j = data[0]
air_j = data[1]
fil_j = data[2]
cha_j = data[3]
lum_j = data[4]
cas_p = data[5]
ncc_p = data[6]
fil_p = data[7]
cha_p = data[8]
lum_p = data[9]
off_p = data[10]
eta_s = data[11]


print "état arduino jet_j:", jet_j #1
print "état arduino air_j:",air_j  #2
print "état arduino fil_j:",fil_j  #3
print "état arduino cha_j:",cha_j  #4
print "état arduino lum_j:",lum_j  #5
print "état arduino cas_p:",cas_p  #6
print "état arduino ncc_p:",ncc_p  #7
print "état arduino fil_p:",fil_p  #8
print "état arduino cha_p:",cha_p  #9
print "état arduino lum_p:",lum_p  #10
print "état arduino off_p:",off_p  #11
print "état arduino eta_s:",eta_s  #12


#print "La reponse de l'arduino : ", reponse1


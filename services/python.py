#/usr/local/bin/python
# coding: utf-8
import sys
 
argument1 = sys.argv[1]
argument2 = sys.argv[2]

F = open('output','w') 
F.write(argument1)
F.write(argument2)
F.close()
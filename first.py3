#!/usr/bin/env python3
from PIL import Image
import pytesseract
import argparse
import cv2
import os
import sys
name_of_file=sys.argv[1]
image = cv2.imread("uploads/"+name_of_file)
gray = cv2.cvtColor(image, cv2.COLOR_BGR2GRAY)
filename = "{}.png".format(os.getpid())
cv2.imwrite(filename, gray)
text = pytesseract.image_to_string(Image.open(filename))
os.remove(filename)
print(text)
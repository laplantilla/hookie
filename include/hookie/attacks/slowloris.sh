#!/bin/bash

ip="127.0.0.1"
nmap --script http-slowloris --max-parallelism 400  $ip
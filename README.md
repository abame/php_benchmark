# php_benchmark
This repository is created for the purpose of having a performance benchmark on different versions of php

***
In order to use this you need docker and make use of different docker-compose files which run on different ports and 
check the execution time of the script which is using a bubble sort algorithm on an array of 10000 random generated numbers.
 
 ***
 I got the following times on a machine with 16Gb of RAM, Intel Core I7 CPU 5gen - 2.6Ghz and 250Gb SSD Hard Drive:
 
 ### *PHP 5.6 - execution time of 26.221591949463 seconds* 
 ### *PHP 7.4 - execution time of 4.8909549713135 seconds* 
 ### *PHP 8.0.0-dev - execution time of 4.498034954071 seconds* 
 ### *PHP 8.0.0-dev with JIT - execution time of 4.3799331188202 seconds* 
 

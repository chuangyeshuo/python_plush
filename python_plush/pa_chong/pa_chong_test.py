#!D:\mysoft\mypython\python
#coding=utf-8
import urllib.request

response = urllib.request.urlopen('http://www.baidu.com')
print(response.read().decode('utf-8'))
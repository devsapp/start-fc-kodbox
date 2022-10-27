# coding=utf-8
import requests
import os
import time

isFirst = True


def handler(event, context):
    global isFirst
    if isFirst:
        print("first sleep 3s")
        time.sleep(3)
        isFirst = False
    url = os.environ['KODBOX_URL']
    res = requests.head(url)
    print(res.status_code)

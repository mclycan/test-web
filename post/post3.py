#!/usr/bin/env python
import urllib, httplib

httpClient = None
try:
    params = urllib.urlencode({'monitor_notify_content': '{\"tx_hash\": \"testtxhash2\", \"address\": \"testaddress2\", \"amount\": \"50000000\", \"complete\": 1, \"block_no\": 366111}'})
    headers = {'Content-type': 'application/x-www-form-urlencoded', 'Accept': 'text/plain'}
    httpClient = httplib.HTTPConnection('45.79.79.147', 80, timeout=10)
    httpClient.request('POST', '/testweb/add/3/', params, headers)
    response = httpClient.getresponse()
#print response.status
#print response.reason
    print response.read()
#print response.getheaders()
except Exception, e:
	print e
finally:
	if httpClient:
		 httpClient.close()


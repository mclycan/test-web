#!/usr/bin/env python
import urllib, httplib

httpClient = None
try:

	params = urllib.urlencode({'tx_hash': 'testtxhash',  'complete': 1, 'block_no': 123456, 'tx_tag': 'testtxtag'})
	headers = {'Content-type': 'application/x-www-form-urlencoded', 'Accept': 'text/plain'}
	httpClient = httplib.HTTPConnection('45.79.79.147', 80, timeout=10)
	httpClient.request('POST', '/testweb/add/2/', params, headers)
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


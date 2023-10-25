import requests

url = 'https://www.api.ringo.ng/api/agent/p2'

headers = {
    'Content-Type': 'application/json',
    'email': 'otpforall7@gmail.com',
    'password': 'book12345'
}

data = {
    'serviceCode': 'BDP',
    'type': 'BET',
    'biller': 'BangBet',
    'customerId': '08136323311',
    'request_id': '66yhh98nn8udu87888669866',
    'amount': 1000
}

response = requests.post(url, headers=headers, json=data)

if response.status_code == 200:
    print('Request was successful')
    print('Response:', response.json())
else:
    print('Request failed with status code:', response.status_code)
    print('Response:', response.text)

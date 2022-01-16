# curl

You need use openssl to make pem.

node 8555

openssl rsa -in private_full_node.key -out pkey.pem

openssl x509 -in private_full_node.crt -out pcrt.pem

wallet 9256

openssl rsa -in private_wallet.key -out pkey.pem

openssl x509 -in private_wallet.crt -out pcrt.pem

light wallet 9257

openssl rsa -in private_full_node.key -out pkey.pem

openssl x509 -in private_full_node.crt -out pcrt.pem

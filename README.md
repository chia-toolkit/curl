# curl

You need use openssl to make pem.

openssl rsa -in private_full_node.key -out pkey.pem

openssl x509 -in private_full_node.crt -out pcrt.pem

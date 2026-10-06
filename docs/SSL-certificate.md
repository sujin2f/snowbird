= Install SSL Certificate via cPanel =

When you issue the certificate, the issuer will give you a private key (.key). If you don't have a key, please follow from the begining.

1. Move to SSL/TSL under Security section
1. Click "Generate, view, or delete SSL certificate signing requests"
1. Generate a New Certificate Signing Request using the form
1. Fill Domains like

```
snowbirdmls.com
*.snowbirdmls.com
```

1. Generate
1. You will get two strings (1) Certificate Signing Request (2) Private Key
1. Copy both and keep them safe

== Generate certs using CSR ==

1. Move to Certificate section under "My Products" -- not a cPanel
1. Open "Re-Key your certificate," and paste the CSR
1. Go to My Certificates
1. Click Not Installed
1. Download cPanel format
1. It contains five files -- certificate.crt, certificate.pem, cross.pem, intermediate.pem, root.pem

== Update SSL certificate ==

1. Move to SSL/TSL under Security section
1. Click "Manage SSL Hosts"
1. Select a domain
1. Fill the form - (1) CRT from certificate.crt (2) Key from Private Key
1. for (3) CABUNDLE, paste Intermediate + Cross + c:

```
-----BEGIN CERTIFICATE-----
... (Intermediate cert) ...
-----END CERTIFICATE-----
-----BEGIN CERTIFICATE-----
... (Cross cert) ...
-----END CERTIFICATE-----
-----BEGIN CERTIFICATE-----
... (Root cert) ...
-----END CERTIFICATE-----
```

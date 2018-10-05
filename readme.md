## Example JWT-AUTH, Documentation SWAGGER, MPDF

-- JWT AUTH
Masih menggunakan database untuk mencobanya, migration and seeding data untuk contohnya.
## http://localhost:8000/api/auth/login
method POST
email ahmaddjunaedi92@gmail.com
password secret
## http://localhost:8000/api/auth/me
method get
header 
content-type = application/json
Authorization Bearer {access_token}

-- Documentation SWAGGER
http://localhost:8000/api/documentation

-- MDPF
http://localhost:8000/example-pdf

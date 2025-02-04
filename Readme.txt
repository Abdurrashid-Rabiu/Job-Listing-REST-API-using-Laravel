Note: This laravel application is running the Laravel 9.52.19 version
The admin credential is : email (abdurrashidrabiu@gmail.com) password (12345678)
The user credential is : email (abdulrahmanrabiu@gmail.com) password (12345678)
Note that the column role_as at the user table was added recently manually using the phpmyadmin so, it is not migrated and added to the userController file, so trying to register a new user might provide an error. Therefore it is advisable to use the already registered credentials for test use.
Also note that this project was rushly done as I saw the email two days ago so I was not able to check the figma design for the application, but I tried to create the project accomodating the route links as in the documents.
Also note that I was not able to do the development of the following route link:
GET /jobs
GET /jobs/{job_id}
POST /jobs/{job_id}/apply
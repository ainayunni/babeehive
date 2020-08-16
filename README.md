Name and Matric No of the group members
Amira Sufiya binti Muhammad Radzi 1712890
Nor Ain Ayunni Binti Muhammad Subandi 1627096
Zaiton Binti Ahmad Maideen 1523388

Title of the web application.
Taska Babeehive

Introduction of web application.
	This web application is all about the reporting system applied by kindergarten or nursery.

Objective of the enhancement.
The objective of the enhancement are to: 
* Protect our website from being attacked by the attackers
* Ensure the confidentiality, integrity and availability of our website
* Avoid data breach which can result in lawsuits and heavy fines

Web Application Security Enhancement which includes:
i. **Input Validation** – What are the input elements that you have validated? Client and server side. Technique of validation performed.
Validation function
The input elements that are being validated are email and name at the server side. 
ii. **Authentication** – Refer to the authentication best practices. What are the methods used or implemented for the enhancement?
Hashed password: by default, Laravel provides secure Bcrypt hashing for storing the user passwords

iii. **Authorization** – Refer to the authorization best practices. What are the methods used or implemented for the enhancement?
Role-based system: There are 3 roles for this system which are admin, teacher and parents. And each role will have a different view on the dashboard, which their privilege is limited to the task that they can do. 
Encrypted cookie: As the cookie is unsecure, the cookie will be encrypted on the web client and will be compared to the server-side to check the authentication to avoid from being tempered or stolen. 
Log out function: The user can log out with a single click

iv. **XSS and CSRF Prevention** – Refer to the recommended solutions to prevent XSS and CSRF. What are the methods used or implemented for enhancement?	
Sanitize input by using "curly" braces {{ }} which display data passed to the Blade views by wrapping the variable in it. This is to prevent XSS attacks for from the input
CSRF token: Laravel automatically generates a CSRF "token" for each active user session that the application manages to check that the authenticated user is actually making requests to the application or not. HTML form will include a hidden CSRF token field in the form so that the CSRF protection middleware can validate the request.

v. **Database Security Principles** – How to prevent SQL injection. What are the methods used to enhance your database server?
Receive input as string instead of SQL queries as the input



vi. **File Security Principles** – How do I prevent file leaks? What settings and configurations of the web server that you used to enhance your web server files?
Disable directory listing
By using indexing
	
References
Sullivan, B., & Liu, V. (2011). *Web application security: A beginner’s guide (1st ed.).* USA: McGraw Hill.
Sucuri (n.d) *Website Security*. Retrieved from:  https://sucuri.net/guides/website-security/ 
Laravel documentation. Retrieved from: https://laravel.com/docs/5.1/blade#displaying-data 
https://laravel.com/docs/7.x/csrf 



For formatting and styling of your proposal via README.md file refer to Markdown syntax. https://guides.github.com/features/mastering-markdown/ 
Submit the URL of your GitHub README.md file to iTaleem and respect the deadline.
You will be penalized (marks reduction) if the report does NOT reflect the project files.


# _Address Book_

#### _Add a contact to your address book and see all contacts, 02/10/2017_

#### By _**Philip Putnam**_

## Description

_This is an address book website written primarily in PHP, it utilizes cookies to keep data that the user has input persistent despite route changes (as long as the server remains active). It has the ability to view all contacts currently in the address book, add a new contact, and delete all contacts._

## Setup/Installation Requirements

### Method 1:
* _Using a web browser or terminal, clone the repository at https://github.com/philip-putnam/php-address-book to your desktop_
* _Navigate to the directory within the project named 'web' using your terminal_
* _Using MAMP or similar software, run a server in the 'web' folder (in terminal, i.e. php -S localhost:8000)_
* _In a compatible Internet browser, navigate to the 'localhost:' port you began your server at (i.e. localhost:8000)_
* _Navigate website utilizing provided buttons, fill out the 'add contact' form_

### Method 2:
* _Using a compatible web browser, navigate to https://philip-putnam.github.io/php-address-book/_
* _Fill in the form on the webpage and hit submit!_

## Known Bugs

_No known bugs at this time_

## Support and contact details

_Please e-mail Philip Putnam, at staplehead989@gmail.com for support with the webpage_

## Technologies Used

* _HTML_
* _CSS_
* _PHP_
* _Bootstrap_
* _Composer_
* _Silex_
* _Twig_
* _Atom_
* _Git_
* _GitHub_

### Specifications

|Behaviors|Input|Output|
|---------|-----|------|
|User navigates to home route ('/') in web browser|Navigate to home URL|Display contacts|
|User clicks submit at home route ('/')|User clicks submit|User routed to /create_contact route|
|User fills in form at home route ('/')|User types text in form, clicks submit|User routed to /create_contact route, displays new contact information|
|User fills in form at home route ('/')|User types text in form, clicks submit|User routed to /create_contact route, displays new contact information & home link to return to home route ('/')|
|User fills in form at home route ('/'), returns to home route|User types text in form, clicks submit, then clicks 'home' link/button|User routed to /create_contact route, displays new contact information & home link to return to home route ('/'), displays contacts (including newly added) and button to delete contacts|
|User fills in form at home route ('/'), returns to home route, clicks delete|User types text in form, clicks submit, then clicks 'home' link/button, then clicks 'delete contacts' button|User routed to /create_contact route, displays new contact information & home link to return to home route ('/'), displays contacts (including newly added) and button to delete contacts, user directed to '/delete_contacts' confirming deletion of contact list|



### License

*This webpage is licensed under the MIT license*

Copyright (c) 2017 **_Philip Putnam_**

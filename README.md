// Objective :
  - to make an Address Book with the specific instruction :

//  In Silex, make an address book where you can store contact information for people you know. Use Twig to display each page.

 - You will need to declare a Contact class. This class should include properties to store the person's name, phone number and address.

 - Just like other classes we've been making, this one should include private properties, a getter and setter for each property, and a constructor to set the properties.

 -  Since we will be saving Contacts, your object will need methods to save a Contact, get all existing Contact objects, and delete all existing contact objects.

 - The first page of your app at the root path (localhost:8000) should display any existing Contact objects. It should also present the user with a form they can fill out to create a Contact.

 - After the form is submitted, the new Contact object should be saved into the session under the key $_SESSION['list_of_contacts'] and the user should be taken to a different page at the URL /create_contact. This page should tell them "You created a contact!" and display the name, phone number and address of that new contact. It should also have a link back to the home page at the root path (the URL "/"), so that they can view the list of all saved contacts, including the new one they just made.

 - Add a form with only a clear button at the bottom of the home page at the root path. When this is pressed, all Contacts should be deleted, and the user should be taken to a confirmation page at /delete_contacts. On this page they should be shown a confirmation message saying "Address book cleared!". There should also be a link back to the home page at the root path.

 - Don't worry about deleting only a single Contact yet, and don't worry about graphics. The point of the exercise is to show a list of contacts at the root path, with a form to create a new contact, and a button to clear contacts.


 // Your teachers will evaluate your project based on the following criteria:

 - Does your Contact object have all our ingredients? It should have a constructor, private properties, getters, setters, a save method, a getAll method and a deleteAll method.

 - Were Twig template files used for all pages?
 - Are Contacts being saved into the session and cleared correctly?
 - Is your logic easy to understand?
 - Did you use descriptive variable names?
 - Does your code have proper indentation and spacing?
 - Did you include a README with a description of the program, setup instructions, a copyright, a license, and your name?
 - Is the project tracked in Git, and did you regularly make commits with clear messages that finish the phrase "This commit will…"?

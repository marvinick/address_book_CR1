<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/contact.php";

    session_start();
    if (empty($_SESSION['list_of_contacts'])) {
      $_SESSION['list_of_contacts'] = array();
    }

    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider(), array(
      'twig.path' => __DIR__.'/../views'
    ));

    //path to display all contacts
    $app->get("/", function() use ($app) {
      return $app['twig']->render('contacts.html.twig', array('contacts' => Contact::getAll()));
    });

    //path to display confirmation contact is created
    $app->post("/contacts", function() use ($app) {
      $contact = new Contact($_POST['name'], $_POST['number'], $_POST['address']);
      $contact->save();
      return $app['twig']->render('create_contact.html.twig', array('newcontact' => $contact));
    });

    //path to display confirmation all contacts are deleted
    $app->post("/delete_contacts", function() use ($app) {
      Contact::deleteAll();
      return $app['twig']->render('delete_contacts.html.twig');
    });

    return $app;
?>
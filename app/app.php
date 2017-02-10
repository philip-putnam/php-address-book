<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/Contact.php';


    session_start();

    if (empty($_SESSION['list_of_contacts'])) {
        $_SESSION['list_of_contacts'] = array();
    }

    $app = new Silex\Application();

    $app['debug'] = true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

    $app->get('/', function() use ($app) {
        $newContact = new Contact("Bob Smith", "503-988-3434", "800 NW Northrup");
        $newContact->save();
        return $app['twig']->render('home.html.twig', array('contacts' => Contact::getAll()));
    });


    return $app;
?>

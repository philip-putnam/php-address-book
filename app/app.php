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
        return $app['twig']->render('home.html.twig', array('contacts' => Contact::getAll()));
    });

    $app->post('/create_contact', function() use ($app) {
        if ($_POST['contact_name']) {
          $newContact = new Contact($_POST['contact_name'], $_POST['contact_phone'], $_POST['contact_address']);
          $newContact->save();
          return $app['twig']->render('create_contact.html.twig', array('new_contact' => $newContact));
        }
        else
        {
              return $app['twig']->render('error.html.twig');
        }

    });


    return $app;
?>

<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/rps_functions.php";

    $app = new Silex\Application();

    $app-> register(new Silex\Provider\TwigServiceProvider(), array(
      'twig.path' =>__DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
      return $app['twig']->render('play_form.html.twig';
    });

    $app->post("/player_wins", function( use ($app)
    {
      $newGame = new RPS;
      $results = $newGame->playRps($_POST[''],$_POST[''])
    }));

      return $app;
 ?>

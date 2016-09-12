<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/QueenAttack.php";

    $app = new Silex\Application();
    $app['debug'] = true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('form.html.twig');
    });

    $app->get("/result", function() use($app){
        $my_queen = new Queen();
        $queen_result = $my_queen->canAttack($_GET['queenX'], $_GET['queenY'], $_GET['pieceX'], $_GET['pieceY']);
        return $app['twig']->render('result.html.twig', array('result' => $queen_result));
    });

    return $app;
?>

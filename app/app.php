<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RepeatCounter.php";

    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('index.html.twig', array(
            "head" => true,
            "form" => true
        ));
    });

    $app->get("/results", function() use ($app) {
        $my_repeatCounter = new RepeatCounter;
        $word = $_GET['word'];
        $sentence = $_GET['sentence'];
        $result = $my_repeatCounter->countRepeats($word, $sentence);
        return $app['twig']->render('results.html.twig', array(
            'results' => $result,
            'word'=> $word,
            'sentence' => $sentence
        ));
    });

    return $app;
?>

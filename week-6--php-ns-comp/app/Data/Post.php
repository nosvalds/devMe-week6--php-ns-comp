<?php

namespace App\Data;

use Twig\Loader\FilesystemLoader;
use Twig\Environment;

class Post
{
    private static $twig;

    public static function setup()
    {
        if (!static::$twig) {
            $loader = new FilesystemLoader(__DIR__ . "/templates/");
            static::$twig = new Environment($loader, [
                "cache" => __DIR__ . "/cache/",
            ]);
        }
    }

    // properties
    private $title;
    private $article;

    // constructor
    public function __construct(string $title)
    {
        static::setup();
        $this->title = $title;
    }

    // setArticle
    public function setArticle(string $article) : Post
    {
        $this->article = $article;
        return $this;
    }

    // render
    public function render()
    {
        // $loader = new \Twig\Loader\FilesystemLoader(__DIR__ . "/templates/");
        // $twig = new \Twig\Environment($loader, [
        //     'cache' => __DIR__ . "/cache/",
        // ]);
        
        return static::$twig->render("template.html", [
            'title' => $this->title, 
            'article' => $this->article
        ]);
    }
}
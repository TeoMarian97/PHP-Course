<?php

class Article
{
    private $published = false;
    public $title;
    public $content;

    public  function __construct($title, $content)
    {
        $this->title = $title;
        $this->content = $content;
    }

    public function publish()
    {
        $this->published = true;
    }

    public function isPublished()
    {
        return $this->published;
    }
}

$article1 = new Article('My First Post', 'This is the first post.');
$article2 = new Article('My Second Post', 'This is the second post.');

$article1->publish();

echo var_dump($article1->isPublished());
echo var_dump($article2->isPublished());

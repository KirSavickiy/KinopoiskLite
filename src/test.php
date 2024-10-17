<?php

abstract class Tag
{
    public string $name;
    private string $parentTag;

    public function __construct(string $name)
    {
        $this->name = $name;
        $this->parentTag = "";
    }
    public function attr(string $atribute, string $value):void
    {
        $this->parentTag  = $this->parentTag  . ' ' . $atribute . '="' . $value . '"';
    }

    public function appenChield (Tag $tag){
        $tag = $tag->getFullTag();
        $this->parentTag = $this->parentTag . " " . $tag;
    }

    public function getName():string{
        return $this->name;
    }
    public function getFullTag():string{
        return "<$this->name". $this->parentTag .">";
    }
    public function render(): void{
        print_r($this->getFullTag());
    }

}

$tag = new SingleTag('img');
$a = new SingleTag('a');


$tag->attr('href',"www.helloworld.com" );
$tag->attr('href',"www.helloworld.com" );

$hr = new SingleTag('hr');
$hr->attr('href', 'www.yahoo.com');
$tag->attr('href','www.helloworld.com' );
$a->attr('href', 'www.google.com');
$a->appenChield($tag);
$a->appenChield($hr);
$a->render();


class SingleTag extends Tag
{

}

class PairTag extends Tag
{

}
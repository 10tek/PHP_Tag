<?php

use ItStep\PHP\BaseTag;
use ItStep\PHP\Tag;

require_once "autoload.php";

$div = Tag::div();

(new Tag('a'))
    ->appendBody('Google')
    ->href('//google.com')
    ->target('_blank')
    ->appendTo($div);
echo $div->addClass('content');
/*trait HasName
{
    private $name;

    public function getName()
    {
        $name = $this->name;
        if (method_exists($this, 'nameMutator')) {
            $name = $this->nameMutator($this->name);
        }
        return $name;
    }


    public function setName($name): void
    {
        $this->name = $name;
    }
}

class Person
{
    use HasName;

    function nameMutator($name)
    {
        return strtoupper($name);
    }
}

$person = new Person;
$person->setName('John');
echo $person->getName();
*/
//$collection = new Collection();
//$collection['one'] = 'Hello';
//
//echo json_encode($collection);
//$div = new Tag('div');
//$div->setBody('Hello');
//
//
//echo $div->toString();
//$div = (new Tag('div'))
//    ->prependBody('Hello')
//    ->appendBody(' world!');
//
//echo $div->toString();
//$link = new Tag('a');
//$link->attributes()
//    ->set('href', '//google.com')
//    ->set('target', '_blank');
//$link->appendBody('Google');
//echo $link;
//$container = new Tag('div');
//$container->setAttr('class', 'container');
//
//$link = new Tag('a');
//$link->setAttr('href', '//google.com')
//    ->appendBody('Google');
//$container->appendBody($link);
//
//$container->setAttr('target', '_blank');
//echo $container;

//$link = new Tag('a');
//$link->href = '//google.com';
//$link = new Tag('input');
//$link->type = 'password';
//
//echo $link;
//class One {
//    static $name = 'John';
//
//    function name(){
//        return self::$name;
//    }
//
//}
//echo (new One)->name();
// Namespace
//use Tag\Name;
//require_once "autoload.php";
//$container = Tag::div()
//    ->class('container');
//require_once "autoload.php";
//class One{
//    public $name = 'Bob';
//}
//
//class Two extends One{
//
//}
//
//echo (new Two)->name;
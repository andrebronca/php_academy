<?php
class Foo {
    var $bar = 'I am bar.';
}

$foo = new Foo();
$bar = 'bar';
$baz = array('foo','bar','baz','quux');
echo "{$foo->$bar} <br>";
echo "{$foo->{$baz[1]}} <br>";
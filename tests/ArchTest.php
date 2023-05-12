<?php

it('will not use debugging functions', function () {
    $debugFunctions = ['dd', 'dump', 'ray'];
    $values = ['foo', 'bar', 'baz'];
    
    foreach ($values as $value) {
        expect($debugFunctions)->not->toContain($value);
    }
});

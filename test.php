<?php

class helloName
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function say_hello()
    {
        echo "$this->name\n";

        return 'Hello, ' . $this->name . '!';
    }
}

$text = new helloName(
    'Lucemila'
);

echo $text->say_hello();







// These example test cases are editable, feel free to add
// your own tests to debug your code.

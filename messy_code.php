<?php
declare(strict_types=1);

namespace Demo\Messy;

class Greeter {
    private string $name;
    public function __construct( string $name = 'Fixed World' )
    {
        $this->name = $name;  
    }
    
    public function greet(): string
    {
        $time = (new \DateTimeImmutable())  ->format('H:i');
        return  sprintf(  "Hello, %s! It is %s.",	 $this->name ,  $time );
    }
}

function messy_array(): array
{
    return [
        'tabs'	=>	"\t",
        'spaces'  =>  '   ',
        'mix'  =>  "\t   ",
    ];
}

?>

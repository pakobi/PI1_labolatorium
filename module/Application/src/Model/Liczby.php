<?php

namespace Application\Model;

class Liczby
{
    public function generuj()
    {
        $wylosowaneLiczby = array(
            'parzyste' => array(),
            'nieparzyste' => array()
        );
        for ($i = 0; $i < 100; $i++)
        {
            $liczba = rand(0, 1000);
            if($liczba % 2 == 0){
                $wylosowaneLiczby['parzyste'][] = $liczba;
            }
            else
            {
                $wylosowaneLiczby['nieparzyste'][] = $liczba;
            }
        }
        sort($wylosowaneLiczby['parzyste']);
        sort($wylosowaneLiczby['nieparzyste']);

        return $wylosowaneLiczby;
    }
}
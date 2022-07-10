<?php

namespace Application\Model;

class Miesiace
{
    public function pobierzWszystkie(): array
    {
        return [
            'Blue' => 'Styczeń',
            'Yellow' => 'Luty',
            'Green' => 'Marzec',
            'Red' => 'Kwiecień',
            'Orange' => 'Maj',
            'Brown' => 'Czerwiec',
            'Black' => 'Lipiec',
            'Pink' => 'Sierpień',
            'Violet' => 'Październik',
            'Gray' => 'Listopad',
            'Silver' => 'Grudzień',
        ];
    }
}
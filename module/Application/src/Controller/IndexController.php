<?php

declare(strict_types=1);

namespace Application\Controller;

use Application\Model\Data;
use Application\Model\Miesiace;
use Application\Model\Liczby;
use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel();
    }
	
    public function dataAction()
    {
	$data = new \Application\Model\Data();

	return new ViewModel([
		'dzisiaj' => $data->dzisiaj(),
		'dni_tygodnia' => $data->dniTygodnia(),
	]);
    }
    
    public function miesiaceAction(): array
    {
        $miesiace = new Miesiace();
        return ['wszystkie_miesiace' => $miesiace->pobierzWszystkie()];
    }

    public function liczbyAction()
    {
        $generowanie = new Liczby();
        return ['wygenerowane' => $generowanie->generuj()];
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: mael
 * Date: 28/03/2018
 * Time: 22:56
 */

namespace App\Controller\Restaurant;

use App\Controller\AppController;
use Cake\View\Helper\FlashHelper;
use Cake\Mailer\Email;

class RestaurantController extends AppController
{

    public function index(){
        $title = 'Au fil de l\'eau';
        $this->set('title', $title);
    }

    public function carte(){
        $title = 'Carte - Au fil de l\'eau';
        $this->set('title', $title);
    }

    public function contact(){
        $title = 'Contact - Au fil de l\'eau';
        $this->set('title', $title);
    }

    public function galerie(){
        $title = 'Galerie - Au fil de l\'eau';
        $this->set('title', $title);
    }

    public function formAddReservation(){
        $title = 'Reservation - Au fil de l\'eau';
        $this->set('title', $title);

        debug($this->request->data);

        die();
    }
}

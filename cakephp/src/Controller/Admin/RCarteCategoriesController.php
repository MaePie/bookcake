<?php
namespace App\Controller\Admin;

use App\Controller\Admin\AppController;
use Cake\Validation\Validator;

class RCarteCategoriesController extends AppController
{

    public function initialize()
    {
        parent::initialize();
    }

    public function liste()
    {
        $title = 'Admin | Liste Catégories Carte';
        $this->set('title', $title);

        $categories = $this->RCarteCategories->find()
                               ->contain('RCarteSCategories');
        $this->set('categories', $categories);
    }

    public function add()
    {
        $title = 'Admin | Ajout Réservation';
        $this->set('title', $title);
    }

    public function view($id = null)
    {
        $title = 'Admin | Réservation ' . $id;
        $this->set('title', $title);
    }

    public function edit($id = null)
    {
        $title = 'Admin | Modifier Réservation ' . $id;
        $this->set('title', $title);
    }

    public function delete($id = null)
    {
        
    }
}

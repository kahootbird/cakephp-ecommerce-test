<?php

namespace App\Controller;

class StoresController extends AppController
{

    public function index()
    {
	  //$stores->loadModel("store");
      $stores = $this->Stores->find('all');
      $this->set(compact('stores'));
    }
    public function view($id = null)
    {
        $store = $this->Stores->get($id);
        $this->set(compact('stores'));
    }
}

?>
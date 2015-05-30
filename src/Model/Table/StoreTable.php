<?php
namespace App\Model\Table;

use Cake\ORM\Table;

class StoreTable extends Table
{
    public function initialize(array $config)
    {
        $this->addBehavior('Timestamp');
    }
}
	?>
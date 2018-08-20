<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
//use Cake\Auth;
use Cake\Validation\Validator;

class RequestLogsTable extends Table
{

    public function initialize(array $config)
    {
        parent::initialize($config);
        $this->setTable('request_logs');
        $this->setPrimaryKey('id');
        $this->addBehavior('Timestamp');
    }
}
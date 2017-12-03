<?php

namespace App\Controller\Component;
use Cake\Controller\Component;
use Cake\I18n\Time;

/**
 * Created by PhpStorm.
 * User: vagna
 * Date: 02/12/2017
 * Time: 21:44
 */
class DataComponent extends Component
{
    function DateTimeSql($data)
    {
        $dt = new Time();
        $now = $dt->createFromFormat('d/m/Y H:i', $data);
        return $now->format('Y-m-d H:i:s');
    }
}
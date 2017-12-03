<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Core\Configure;
use Cake\I18n\Time;
use Cake\Network\Exception\ForbiddenException;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;

/**
 * Static content controller
 *
 * This controller will render views from Template/Pages/
 *
 * @link http://book.cakephp.org/3.0/en/controllers/pages-controller.html
 */
class IndexController extends AppController
{
    public function index()
    {
        $this->loadModel('Doacao');

        $doacoes = $this->Doacao->find('all')->where(['Doacao.doacao_status_id' => 1]);
    }

    public function saveHoraRetirada($hora)
    {
        $time = new Time('08:00');
        $hora_retirada = date('Y-m-d '.$time->format('H:i:s'));

        /*$user_id = $this->Auth->user('user_id');
        $this->Comidas->get($user_id);*/

        $json = json_encode($hora_retirada);
        $response = $this->response->withType('json')->withStringBody($json);
        return $response;
    }
}

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

        $doacoes = $this->Doacao->find('all')->contain(['Doador'])->where(['Doacao.doacao_status_id' => 1]);
        $this->set(compact('doacoes'));
    }

    public function saveHoraRetirada()
    {
        $this->loadModel('Doacao');
        $time = new Time($this->request->getData('hora'));
        $hora_reservada = date('Y-m-d '.$time->format('H:i:s'));
        $res = [];

        $voluntario_id = $this->Auth->user('voluntario_id');
        $doacao = $this->Doacao->get($this->request->getData('doacao_id'));
        $doacao->voluntario_id = $voluntario_id;
        $doacao->doacao_status_id = 2; // Reservado
        $doacao->data_saida = $hora_reservada;
        if($this->Doacao->save($doacao)){
            $res = ['erro' => 0, 'msg' => 'Reserva foi salva com sucesso!'];
        }
        $json = json_encode($res);
        $response = $this->response->withType('json')->withStringBody($json);
        return $response;
    }
}

<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * Doacao Controller
 *
 * @property \App\Model\Table\DoacaoTable $Doacao
 *
 * @method \App\Model\Entity\Doacao[] paginate($object = null, array $settings = [])
 */
class DoacaoController extends AppController
{
    public $components = ['Data'];

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $query = $this->Doacao->find('all')
            ->contain(['Doador', 'DoacaoTipo', 'DoacaoStatus', 'Voluntario'])
            ->where(['Doacao.doador_id' => $this->Auth->user('doador_id')]);

        $doacao = $this->paginate($query);

        $this->set(compact('doacao'));
        $this->set('_serialize', ['doacao']);
    }

    /**
     * View method
     *
     * @param string|null $id Doacao id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $doacao = $this->Doacao->get($id, [
            'contain' => ['Doador', 'DoacaoTipo', 'DoacaoStatus', 'Voluntario']
        ]);

        $this->set('doacao', $doacao);
        $this->set('_serialize', ['doacao']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $doacao = $this->Doacao->newEntity();
        if ($this->request->is('post')) {
            $doacao = $this->Doacao->patchEntity($doacao, $this->request->getData());
            $doacao->data_inicio = $this->Data->DateTimeSql($this->request->getData('data_inicio'));
            $doacao->data_fim = $this->Data->DateTimeSql($this->request->getData('data_fim'));
            $doacao->doacao_status_id = 1;
            $doacao->doador_id = $this->Auth->user('doador_id');

            if ($this->Doacao->save($doacao)) {
                $this->Flash->success(__('Doação cadastrada com sucesso!'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Sua doação não foi cadastrada, tente novamente!'));
            }
        }
        $doador = $this->Doacao->Doador->find('list', ['limit' => 200]);
        $doacaoTipo = $this->Doacao->DoacaoTipo->find('list', ['limit' => 200]);
        $doacaoStatus = $this->Doacao->DoacaoStatus->find('list', ['limit' => 200]);
        $voluntario = $this->Doacao->Voluntario->find('list', ['limit' => 200]);
        $this->set(compact('doacao', 'doador', 'doacaoTipo', 'doacaoStatus', 'voluntario'));
        $this->set('_serialize', ['doacao']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Doacao id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $doacao = $this->Doacao->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $doacao = $this->Doacao->patchEntity($doacao, $this->request->data);
            if ($this->Doacao->save($doacao)) {
                $this->Flash->success(__('The {0} has been saved.', 'Doacao'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Doacao'));
            }
        }
        $doador = $this->Doacao->Doador->find('list', ['limit' => 200]);
        $doacaoTipo = $this->Doacao->DoacaoTipo->find('list', ['limit' => 200]);
        $doacaoStatus = $this->Doacao->DoacaoStatus->find('list', ['limit' => 200]);
        $voluntario = $this->Doacao->Voluntario->find('list', ['limit' => 200]);
        $this->set(compact('doacao', 'doador', 'doacaoTipo', 'doacaoStatus', 'voluntario'));
        $this->set('_serialize', ['doacao']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Doacao id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $doacao = $this->Doacao->get($id);
        if ($this->Doacao->delete($doacao)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Doacao'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Doacao'));
        }
        return $this->redirect(['action' => 'index']);
    }
}

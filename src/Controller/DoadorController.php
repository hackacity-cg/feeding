<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Doador Controller
 *
 * @property \App\Model\Table\DoadorTable $Doador
 *
 * @method \App\Model\Entity\Doador[] paginate($object = null, array $settings = [])
 */
class DoadorController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['SituacaoCadastro']
        ];
        $doador = $this->paginate($this->Doador);

        $this->set(compact('doador'));
        $this->set('_serialize', ['doador']);
    }

    /**
     * View method
     *
     * @param string|null $id Doador id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $doador = $this->Doador->get($id, [
            'contain' => ['SituacaoCadastro', 'Doacao', 'Users']
        ]);

        $this->set('doador', $doador);
        $this->set('_serialize', ['doador']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $doador = $this->Doador->newEntity();
        if ($this->request->is('post')) {
            $doador = $this->Doador->patchEntity($doador, $this->request->data);
            if ($this->Doador->save($doador)) {
                $this->Flash->success(__('The {0} has been saved.', 'Doador'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Doador'));
            }
        }
        $situacaoCadastro = $this->Doador->SituacaoCadastro->find('list', ['limit' => 200]);
        $this->set(compact('doador', 'situacaoCadastro'));
        $this->set('_serialize', ['doador']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Doador id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $doador = $this->Doador->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $doador = $this->Doador->patchEntity($doador, $this->request->data);
            if ($this->Doador->save($doador)) {
                $this->Flash->success(__('The {0} has been saved.', 'Doador'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Doador'));
            }
        }
        $situacaoCadastro = $this->Doador->SituacaoCadastro->find('list', ['limit' => 200]);
        $this->set(compact('doador', 'situacaoCadastro'));
        $this->set('_serialize', ['doador']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Doador id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $doador = $this->Doador->get($id);
        if ($this->Doador->delete($doador)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Doador'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Doador'));
        }
        return $this->redirect(['action' => 'index']);
    }
}

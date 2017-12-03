<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * SituacaoCadastro Controller
 *
 * @property \App\Model\Table\SituacaoCadastroTable $SituacaoCadastro
 *
 * @method \App\Model\Entity\SituacaoCadastro[] paginate($object = null, array $settings = [])
 */
class SituacaoCadastroController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $situacaoCadastro = $this->paginate($this->SituacaoCadastro);

        $this->set(compact('situacaoCadastro'));
        $this->set('_serialize', ['situacaoCadastro']);
    }

    /**
     * View method
     *
     * @param string|null $id Situacao Cadastro id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $situacaoCadastro = $this->SituacaoCadastro->get($id, [
            'contain' => []
        ]);

        $this->set('situacaoCadastro', $situacaoCadastro);
        $this->set('_serialize', ['situacaoCadastro']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $situacaoCadastro = $this->SituacaoCadastro->newEntity();
        if ($this->request->is('post')) {
            $situacaoCadastro = $this->SituacaoCadastro->patchEntity($situacaoCadastro, $this->request->data);
            if ($this->SituacaoCadastro->save($situacaoCadastro)) {
                $this->Flash->success(__('The {0} has been saved.', 'Situacao Cadastro'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Situacao Cadastro'));
            }
        }
        $this->set(compact('situacaoCadastro'));
        $this->set('_serialize', ['situacaoCadastro']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Situacao Cadastro id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $situacaoCadastro = $this->SituacaoCadastro->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $situacaoCadastro = $this->SituacaoCadastro->patchEntity($situacaoCadastro, $this->request->data);
            if ($this->SituacaoCadastro->save($situacaoCadastro)) {
                $this->Flash->success(__('The {0} has been saved.', 'Situacao Cadastro'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Situacao Cadastro'));
            }
        }
        $this->set(compact('situacaoCadastro'));
        $this->set('_serialize', ['situacaoCadastro']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Situacao Cadastro id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $situacaoCadastro = $this->SituacaoCadastro->get($id);
        if ($this->SituacaoCadastro->delete($situacaoCadastro)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Situacao Cadastro'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Situacao Cadastro'));
        }
        return $this->redirect(['action' => 'index']);
    }
}

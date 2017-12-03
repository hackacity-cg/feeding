<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Voluntario Controller
 *
 * @property \App\Model\Table\VoluntarioTable $Voluntario
 *
 * @method \App\Model\Entity\Voluntario[] paginate($object = null, array $settings = [])
 */
class VoluntarioController extends AppController
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
        $voluntario = $this->paginate($this->Voluntario);

        $this->set(compact('voluntario'));
        $this->set('_serialize', ['voluntario']);
    }

    /**
     * View method
     *
     * @param string|null $id Voluntario id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $voluntario = $this->Voluntario->get($id, [
            'contain' => ['SituacaoCadastro', 'Doacao', 'Users']
        ]);

        $this->set('voluntario', $voluntario);
        $this->set('_serialize', ['voluntario']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $voluntario = $this->Voluntario->newEntity();
        if ($this->request->is('post')) {
            $voluntario = $this->Voluntario->patchEntity($voluntario, $this->request->data);
            if ($this->Voluntario->save($voluntario)) {
                $this->Flash->success(__('The {0} has been saved.', 'Voluntario'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Voluntario'));
            }
        }
        $situacaoCadastro = $this->Voluntario->SituacaoCadastro->find('list', ['limit' => 200]);
        $this->set(compact('voluntario', 'situacaoCadastro'));
        $this->set('_serialize', ['voluntario']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Voluntario id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $voluntario = $this->Voluntario->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $voluntario = $this->Voluntario->patchEntity($voluntario, $this->request->data);
            if ($this->Voluntario->save($voluntario)) {
                $this->Flash->success(__('The {0} has been saved.', 'Voluntario'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Voluntario'));
            }
        }
        $situacaoCadastro = $this->Voluntario->SituacaoCadastro->find('list', ['limit' => 200]);
        $this->set(compact('voluntario', 'situacaoCadastro'));
        $this->set('_serialize', ['voluntario']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Voluntario id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $voluntario = $this->Voluntario->get($id);
        if ($this->Voluntario->delete($voluntario)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Voluntario'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Voluntario'));
        }
        return $this->redirect(['action' => 'index']);
    }
}

<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * DoacaoTipo Controller
 *
 * @property \App\Model\Table\DoacaoTipoTable $DoacaoTipo
 *
 * @method \App\Model\Entity\DoacaoTipo[] paginate($object = null, array $settings = [])
 */
class DoacaoTipoController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $doacaoTipo = $this->paginate($this->DoacaoTipo);

        $this->set(compact('doacaoTipo'));
        $this->set('_serialize', ['doacaoTipo']);
    }

    /**
     * View method
     *
     * @param string|null $id Doacao Tipo id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $doacaoTipo = $this->DoacaoTipo->get($id, [
            'contain' => []
        ]);

        $this->set('doacaoTipo', $doacaoTipo);
        $this->set('_serialize', ['doacaoTipo']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $doacaoTipo = $this->DoacaoTipo->newEntity();
        if ($this->request->is('post')) {
            $doacaoTipo = $this->DoacaoTipo->patchEntity($doacaoTipo, $this->request->data);
            if ($this->DoacaoTipo->save($doacaoTipo)) {
                $this->Flash->success(__('The {0} has been saved.', 'Doacao Tipo'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Doacao Tipo'));
            }
        }
        $this->set(compact('doacaoTipo'));
        $this->set('_serialize', ['doacaoTipo']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Doacao Tipo id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $doacaoTipo = $this->DoacaoTipo->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $doacaoTipo = $this->DoacaoTipo->patchEntity($doacaoTipo, $this->request->data);
            if ($this->DoacaoTipo->save($doacaoTipo)) {
                $this->Flash->success(__('The {0} has been saved.', 'Doacao Tipo'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Doacao Tipo'));
            }
        }
        $this->set(compact('doacaoTipo'));
        $this->set('_serialize', ['doacaoTipo']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Doacao Tipo id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $doacaoTipo = $this->DoacaoTipo->get($id);
        if ($this->DoacaoTipo->delete($doacaoTipo)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Doacao Tipo'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Doacao Tipo'));
        }
        return $this->redirect(['action' => 'index']);
    }
}

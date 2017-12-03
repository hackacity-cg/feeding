<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * DoacaoStatus Controller
 *
 * @property \App\Model\Table\DoacaoStatusTable $DoacaoStatus
 *
 * @method \App\Model\Entity\DoacaoStatus[] paginate($object = null, array $settings = [])
 */
class DoacaoStatusController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $doacaoStatus = $this->paginate($this->DoacaoStatus);

        $this->set(compact('doacaoStatus'));
        $this->set('_serialize', ['doacaoStatus']);
    }

    /**
     * View method
     *
     * @param string|null $id Doacao Status id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $doacaoStatus = $this->DoacaoStatus->get($id, [
            'contain' => ['Doacao']
        ]);

        $this->set('doacaoStatus', $doacaoStatus);
        $this->set('_serialize', ['doacaoStatus']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $doacaoStatus = $this->DoacaoStatus->newEntity();
        if ($this->request->is('post')) {
            $doacaoStatus = $this->DoacaoStatus->patchEntity($doacaoStatus, $this->request->data);
            if ($this->DoacaoStatus->save($doacaoStatus)) {
                $this->Flash->success(__('The {0} has been saved.', 'Doacao Status'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Doacao Status'));
            }
        }
        $this->set(compact('doacaoStatus'));
        $this->set('_serialize', ['doacaoStatus']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Doacao Status id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $doacaoStatus = $this->DoacaoStatus->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $doacaoStatus = $this->DoacaoStatus->patchEntity($doacaoStatus, $this->request->data);
            if ($this->DoacaoStatus->save($doacaoStatus)) {
                $this->Flash->success(__('The {0} has been saved.', 'Doacao Status'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Doacao Status'));
            }
        }
        $this->set(compact('doacaoStatus'));
        $this->set('_serialize', ['doacaoStatus']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Doacao Status id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $doacaoStatus = $this->DoacaoStatus->get($id);
        if ($this->DoacaoStatus->delete($doacaoStatus)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Doacao Status'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Doacao Status'));
        }
        return $this->redirect(['action' => 'index']);
    }
}

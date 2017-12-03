<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[] paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->Auth->allow(['add']);
    }


    public function login()
    {
        $this->viewBuilder()->setLayout('AdminLTE.login');
        if ($this->request->is('post')) {
            $usuarios = $this->Auth->identify();

            if ($usuarios) {
                $this->Auth->setUser($usuarios);
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error('Seu usuário ou senha estão incorretos!');
        }
    }

    public function logout()
    {
        $this->Flash->success('Você foi desconectado com sucesso!');
        return $this->redirect($this->Auth->logout());
    }


    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Voluntario', 'Doador', 'SituacaoCadastro']
        ];
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
        $this->set('_serialize', ['users']);
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Voluntario', 'Doador', 'SituacaoCadastro']
        ]);

        $this->set('user', $user);
        $this->set('_serialize', ['user']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            if ($this->request->getData('perfil_usuario') == 'doador') {
                $this->loadModel('Doador');
                $doador = $this->Doador->newEntity();
                $doador->nome = $this->request->getData('doador_nome');
                $doador->cpf = $this->request->getData('doador_cpf');
                $doador->cnpj = $this->request->getData('doador_cnpj');
                $doador->telefone = $this->request->getData('doador_telefone');
                $doador->endereco = $this->request->getData('doador_endereco');
                $doador->numero = $this->request->getData('doador_numero');
                $doador->situacao_id = 1;
                $this->Doador->save($doador);
                $tipo_usuario = $doador->id;
            } else if ($this->request->getData('perfil_usuario') == 'voluntario') {
                $this->loadModel('Voluntario');
                $voluntario = $this->Voluntario->newEntity();
                $voluntario->nome = $this->request->getData('voluntario_nome');
                $voluntario->cnpj = $this->request->getData('voluntario_cnpj');
                $voluntario->telefone = $this->request->getData('voluntario_telefone');
                $voluntario->endereco = $this->request->getData('voluntario_endereco');
                $voluntario->numero = $this->request->getData('voluntario_numero');
                $voluntario->situacao_id = 1;
                $this->Voluntario->save($voluntario);
                $tipo_usuario = $voluntario->id;
            }

            if (!empty($tipo_usuario)) {
                $user = $this->Users->patchEntity($user, $this->request->getData());
                $this->request->getData('perfil_usuario') == 'doador' ? $user->doador_id = $tipo_usuario: $user->voluntario_id = $tipo_usuario;
                $user->situacao_id = 1;
                if ($this->Users->save($user)) {
                    $this->Flash->success(__('Usuário criado com sucesso!'));
                    return $this->redirect(['action' => 'index']);
                } else {
                    $this->Flash->error(__('Não foi possível cadastrar seu usuário. Tente novamente!'));
                }
            } else {
                $this->Flash->error(__('Não foi possível cadastrar seu usuário. Tente novamente!'));
            }
        }
        $voluntario = $this->Users->Voluntario->find('list', ['limit' => 200]);
        $doador = $this->Users->Doador->find('list', ['limit' => 200]);
        $situacaoCadastro = $this->Users->SituacaoCadastro->find('list', ['limit' => 200]);
        $this->set(compact('user', 'voluntario', 'doador', 'situacaoCadastro'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The {0} has been saved.', 'User'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'User'));
            }
        }
        $voluntario = $this->Users->Voluntario->find('list', ['limit' => 200]);
        $doador = $this->Users->Doador->find('list', ['limit' => 200]);
        $situacaoCadastro = $this->Users->SituacaoCadastro->find('list', ['limit' => 200]);
        $this->set(compact('user', 'voluntario', 'doador', 'situacaoCadastro'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The {0} has been deleted.', 'User'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'User'));
        }
        return $this->redirect(['action' => 'index']);
    }
}

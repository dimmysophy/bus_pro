<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Moved Controller
 *
 * @property \App\Model\Table\MovedTable $Moved
 *
 * @method \App\Model\Entity\Moved[] paginate($object = null, array $settings = [])
 */
class MovedController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'BookingDetails', 'OldRoutes', 'NewRoutes']
        ];
        $moved = $this->paginate($this->Moved);

        $this->set(compact('moved'));
        $this->set('_serialize', ['moved']);
    }

    /**
     * View method
     *
     * @param string|null $id Moved id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $moved = $this->Moved->get($id, [
            'contain' => ['Users', 'BookingDetails', 'OldRoutes', 'NewRoutes']
        ]);

        $this->set('moved', $moved);
        $this->set('_serialize', ['moved']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $moved = $this->Moved->newEntity();
        if ($this->request->is('post')) {
            $moved = $this->Moved->patchEntity($moved, $this->request->getData());
            if ($this->Moved->save($moved)) {
                $this->Flash->success(__('The moved has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The moved could not be saved. Please, try again.'));
        }
        $users = $this->Moved->Users->find('list', ['limit' => 200]);
        $bookingDetails = $this->Moved->BookingDetails->find('list', ['limit' => 200]);
        $oldRoutes = $this->Moved->OldRoutes->find('list', ['limit' => 200]);
        $newRoutes = $this->Moved->NewRoutes->find('list', ['limit' => 200]);
        $this->set(compact('moved', 'users', 'bookingDetails', 'oldRoutes', 'newRoutes'));
        $this->set('_serialize', ['moved']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Moved id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $moved = $this->Moved->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $moved = $this->Moved->patchEntity($moved, $this->request->getData());
            if ($this->Moved->save($moved)) {
                $this->Flash->success(__('The moved has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The moved could not be saved. Please, try again.'));
        }
        $users = $this->Moved->Users->find('list', ['limit' => 200]);
        $bookingDetails = $this->Moved->BookingDetails->find('list', ['limit' => 200]);
        $oldRoutes = $this->Moved->OldRoutes->find('list', ['limit' => 200]);
        $newRoutes = $this->Moved->NewRoutes->find('list', ['limit' => 200]);
        $this->set(compact('moved', 'users', 'bookingDetails', 'oldRoutes', 'newRoutes'));
        $this->set('_serialize', ['moved']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Moved id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $moved = $this->Moved->get($id);
        if ($this->Moved->delete($moved)) {
            $this->Flash->success(__('The moved has been deleted.'));
        } else {
            $this->Flash->error(__('The moved could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

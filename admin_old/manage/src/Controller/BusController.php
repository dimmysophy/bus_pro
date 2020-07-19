<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Bus Controller
 *
 * @property \App\Model\Table\BusTable $Bus
 *
 * @method \App\Model\Entity\Bus[] paginate($object = null, array $settings = [])
 */
class BusController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['BusTypes', 'Amenities']
        ];
        $bus = $this->paginate($this->Bus);

        $this->set(compact('bus'));
        $this->set('_serialize', ['bus']);
    }

    /**
     * View method
     *
     * @param string|null $id Bus id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $bus = $this->Bus->get($id, [
            'contain' => ['BusTypes', 'Amenities', 'BoardPoints', 'BookBus', 'BookingDetails', 'BusGallery', 'BusState', 'Cancellation', 'DropPoints', 'Rating', 'Route', 'SeatLayout']
        ]);

        $this->set('bus', $bus);
        $this->set('_serialize', ['bus']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $bus = $this->Bus->newEntity();
        if ($this->request->is('post')) {
            $bus = $this->Bus->patchEntity($bus, $this->request->getData());
            if ($this->Bus->save($bus)) {
                $this->Flash->success(__('The bus has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bus could not be saved. Please, try again.'));
        }
        $busTypes = $this->Bus->BusTypes->find('list', ['limit' => 200]);
        $amenities = $this->Bus->Amenities->find('list', ['limit' => 200]);
        $this->set(compact('bus', 'busTypes', 'amenities'));
        $this->set('_serialize', ['bus']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Bus id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $bus = $this->Bus->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $bus = $this->Bus->patchEntity($bus, $this->request->getData());
            if ($this->Bus->save($bus)) {
                $this->Flash->success(__('The bus has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bus could not be saved. Please, try again.'));
        }
        $busTypes = $this->Bus->BusTypes->find('list', ['limit' => 200]);
        $amenities = $this->Bus->Amenities->find('list', ['limit' => 200]);
        $this->set(compact('bus', 'busTypes', 'amenities'));
        $this->set('_serialize', ['bus']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Bus id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $bus = $this->Bus->get($id);
        if ($this->Bus->delete($bus)) {
            $this->Flash->success(__('The bus has been deleted.'));
        } else {
            $this->Flash->error(__('The bus could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

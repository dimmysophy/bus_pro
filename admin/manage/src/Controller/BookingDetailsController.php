<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * BookingDetails Controller
 *
 * @property \App\Model\Table\BookingDetailsTable $BookingDetails
 *
 * @method \App\Model\Entity\BookingDetail[] paginate($object = null, array $settings = [])
 */
class BookingDetailsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Bookings', 'Buses', 'Routs', 'BoardingPoints', 'Users']
        ];
        $bookingDetails = $this->paginate($this->BookingDetails);

        $this->set(compact('bookingDetails'));
        $this->set('_serialize', ['bookingDetails']);
    }

    /**
     * View method
     *
     * @param string|null $id Booking Detail id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $bookingDetail = $this->BookingDetails->get($id, [
            'contain' => ['Bookings', 'Buses', 'Routs', 'BoardingPoints', 'Users']
        ]);

        $this->set('bookingDetail', $bookingDetail);
        $this->set('_serialize', ['bookingDetail']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $bookingDetail = $this->BookingDetails->newEntity();
        if ($this->request->is('post')) {
            $bookingDetail = $this->BookingDetails->patchEntity($bookingDetail, $this->request->getData());
            if ($this->BookingDetails->save($bookingDetail)) {
                $this->Flash->success(__('The booking detail has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The booking detail could not be saved. Please, try again.'));
        }
        $bookings = $this->BookingDetails->Bookings->find('list', ['limit' => 200]);
        $buses = $this->BookingDetails->Buses->find('list', ['limit' => 200]);
        $routs = $this->BookingDetails->Routs->find('list', ['limit' => 200]);
        $boardingPoints = $this->BookingDetails->BoardingPoints->find('list', ['limit' => 200]);
        $users = $this->BookingDetails->Users->find('list', ['limit' => 200]);
        $this->set(compact('bookingDetail', 'bookings', 'buses', 'routs', 'boardingPoints', 'users'));
        $this->set('_serialize', ['bookingDetail']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Booking Detail id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $bookingDetail = $this->BookingDetails->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $bookingDetail = $this->BookingDetails->patchEntity($bookingDetail, $this->request->getData());
            if ($this->BookingDetails->save($bookingDetail)) {
                $this->Flash->success(__('The booking detail has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The booking detail could not be saved. Please, try again.'));
        }
        $bookings = $this->BookingDetails->Bookings->find('list', ['limit' => 200]);
        $buses = $this->BookingDetails->Buses->find('list', ['limit' => 200]);
        $routs = $this->BookingDetails->Routs->find('list', ['limit' => 200]);
        $boardingPoints = $this->BookingDetails->BoardingPoints->find('list', ['limit' => 200]);
        $users = $this->BookingDetails->Users->find('list', ['limit' => 200]);
        $this->set(compact('bookingDetail', 'bookings', 'buses', 'routs', 'boardingPoints', 'users'));
        $this->set('_serialize', ['bookingDetail']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Booking Detail id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $bookingDetail = $this->BookingDetails->get($id);
        if ($this->BookingDetails->delete($bookingDetail)) {
            $this->Flash->success(__('The booking detail has been deleted.'));
        } else {
            $this->Flash->error(__('The booking detail could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

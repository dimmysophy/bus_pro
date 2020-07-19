<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * BusCount Controller
 *
 * @property \App\Model\Table\BusCountTable $BusCount
 *
 * @method \App\Model\Entity\BusCount[] paginate($object = null, array $settings = [])
 */
class BusCountController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Terminals']
        ];
        $busCount = $this->paginate($this->BusCount);

        $this->set(compact('busCount'));
        $this->set('_serialize', ['busCount']);
    }

    /**
     * View method
     *
     * @param string|null $id Bus Count id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $busCount = $this->BusCount->get($id, [
            'contain' => ['Terminals']
        ]);

        $this->set('busCount', $busCount);
        $this->set('_serialize', ['busCount']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $busCount = $this->BusCount->newEntity();
        if ($this->request->is('post')) {
            $busCount = $this->BusCount->patchEntity($busCount, $this->request->getData());
            if ($this->BusCount->save($busCount)) {
                $this->Flash->success(__('The bus count has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bus count could not be saved. Please, try again.'));
        }
        $terminals = $this->BusCount->Terminals->find('list', ['limit' => 200]);
        $this->set(compact('busCount', 'terminals'));
        $this->set('_serialize', ['busCount']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Bus Count id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $busCount = $this->BusCount->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $busCount = $this->BusCount->patchEntity($busCount, $this->request->getData());
            if ($this->BusCount->save($busCount)) {
                $this->Flash->success(__('The bus count has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bus count could not be saved. Please, try again.'));
        }
        $terminals = $this->BusCount->Terminals->find('list', ['limit' => 200]);
        $this->set(compact('busCount', 'terminals'));
        $this->set('_serialize', ['busCount']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Bus Count id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $busCount = $this->BusCount->get($id);
        if ($this->BusCount->delete($busCount)) {
            $this->Flash->success(__('The bus count has been deleted.'));
        } else {
            $this->Flash->error(__('The bus count could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

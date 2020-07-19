<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Route Controller
 *
 * @property \App\Model\Table\RouteTable $Route
 *
 * @method \App\Model\Entity\Route[] paginate($object = null, array $settings = [])
 */
class RouteController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Bus']
        ];
        $route = $this->paginate($this->Route);

        $this->set(compact('route'));
        $this->set('_serialize', ['route']);
    }

    /**
     * View method
     *
     * @param string|null $id Route id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $route = $this->Route->get($id, [
            'contain' => ['Bus']
        ]);

        $this->set('route', $route);
        $this->set('_serialize', ['route']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $route = $this->Route->newEntity();
        if ($this->request->is('post')) {
            $route = $this->Route->patchEntity($route, $this->request->getData());
            if ($this->Route->save($route)) {
                $this->Flash->success(__('The route has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The route could not be saved. Please, try again.'));
        }
        $bus = $this->Route->Bus->find('list', ['limit' => 200]);
        $this->set(compact('route', 'bus'));
        $this->set('_serialize', ['route']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Route id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $route = $this->Route->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $route = $this->Route->patchEntity($route, $this->request->getData());
            if ($this->Route->save($route)) {
                $this->Flash->success(__('The route has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The route could not be saved. Please, try again.'));
        }
        $bus = $this->Route->Bus->find('list', ['limit' => 200]);
        $this->set(compact('route', 'bus'));
        $this->set('_serialize', ['route']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Route id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $route = $this->Route->get($id);
        if ($this->Route->delete($route)) {
            $this->Flash->success(__('The route has been deleted.'));
        } else {
            $this->Flash->error(__('The route could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

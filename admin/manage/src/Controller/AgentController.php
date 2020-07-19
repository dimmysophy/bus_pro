<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Agent Controller
 *
 * @property \App\Model\Table\AgentTable $Agent
 *
 * @method \App\Model\Entity\Agent[] paginate($object = null, array $settings = [])
 */
class AgentController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $agent = $this->paginate($this->Agent);

        $this->set(compact('agent'));
        $this->set('_serialize', ['agent']);
    }

    /**
     * View method
     *
     * @param string|null $id Agent id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $agent = $this->Agent->get($id, [
            'contain' => ['AgentTerminal']
        ]);

        $this->set('agent', $agent);
        $this->set('_serialize', ['agent']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $agent = $this->Agent->newEntity();
        if ($this->request->is('post')) {
            $agent = $this->Agent->patchEntity($agent, $this->request->getData());
            if ($this->Agent->save($agent)) {
                $this->Flash->success(__('The agent has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The agent could not be saved. Please, try again.'));
        }
        $this->set(compact('agent'));
        $this->set('_serialize', ['agent']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Agent id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $agent = $this->Agent->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $agent = $this->Agent->patchEntity($agent, $this->request->getData());
            if ($this->Agent->save($agent)) {
                $this->Flash->success(__('The agent has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The agent could not be saved. Please, try again.'));
        }
        $this->set(compact('agent'));
        $this->set('_serialize', ['agent']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Agent id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $agent = $this->Agent->get($id);
        if ($this->Agent->delete($agent)) {
            $this->Flash->success(__('The agent has been deleted.'));
        } else {
            $this->Flash->error(__('The agent could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

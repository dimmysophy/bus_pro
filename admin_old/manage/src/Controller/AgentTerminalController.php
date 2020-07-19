<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * AgentTerminal Controller
 *
 * @property \App\Model\Table\AgentTerminalTable $AgentTerminal
 *
 * @method \App\Model\Entity\AgentTerminal[] paginate($object = null, array $settings = [])
 */
class AgentTerminalController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Agent', 'Terminals']
        ];
        $agentTerminal = $this->paginate($this->AgentTerminal);

        $this->set(compact('agentTerminal'));
        $this->set('_serialize', ['agentTerminal']);
    }

    /**
     * View method
     *
     * @param string|null $id Agent Terminal id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $agentTerminal = $this->AgentTerminal->get($id, [
            'contain' => ['Agent', 'Terminals']
        ]);

        $this->set('agentTerminal', $agentTerminal);
        $this->set('_serialize', ['agentTerminal']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $agentTerminal = $this->AgentTerminal->newEntity();
        if ($this->request->is('post')) {
            $agentTerminal = $this->AgentTerminal->patchEntity($agentTerminal, $this->request->getData());
            if ($this->AgentTerminal->save($agentTerminal)) {
                $this->Flash->success(__('The agent terminal has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The agent terminal could not be saved. Please, try again.'));
        }
        $agents = $this->AgentTerminal->Agent->find('list', ['limit' => 200]);
        $terminals = $this->AgentTerminal->Terminals->find('list', ['limit' => 200]);
        $this->set(compact('agentTerminal', 'agents', 'terminals'));
        $this->set('_serialize', ['agentTerminal']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Agent Terminal id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $agentTerminal = $this->AgentTerminal->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $agentTerminal = $this->AgentTerminal->patchEntity($agentTerminal, $this->request->getData());
            if ($this->AgentTerminal->save($agentTerminal)) {
                $this->Flash->success(__('The agent terminal has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The agent terminal could not be saved. Please, try again.'));
        }
        $agents = $this->AgentTerminal->Agents->find('list', ['limit' => 200]);
        $terminals = $this->AgentTerminal->Terminals->find('list', ['limit' => 200]);
        $this->set(compact('agentTerminal', 'agents', 'terminals'));
        $this->set('_serialize', ['agentTerminal']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Agent Terminal id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $agentTerminal = $this->AgentTerminal->get($id);
        if ($this->AgentTerminal->delete($agentTerminal)) {
            $this->Flash->success(__('The agent terminal has been deleted.'));
        } else {
            $this->Flash->error(__('The agent terminal could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

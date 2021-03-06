<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Terminals Controller
 *
 * @property \App\Model\Table\TerminalsTable $Terminals
 *
 * @method \App\Model\Entity\Terminal[] paginate($object = null, array $settings = [])
 */
class TerminalsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $terminals = $this->paginate($this->Terminals);

        $this->set(compact('terminals'));
        $this->set('_serialize', ['terminals']);
    }

    /**
     * View method
     *
     * @param string|null $id Terminal id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $terminal = $this->Terminals->get($id, [
            'contain' => ['AgentTerminal', 'BusCount', 'BusState', 'Excess']
        ]);

        $this->set('terminal', $terminal);
        $this->set('_serialize', ['terminal']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $terminal = $this->Terminals->newEntity();
        if ($this->request->is('post')) {
            $terminal = $this->Terminals->patchEntity($terminal, $this->request->getData());
            if ($this->Terminals->save($terminal)) {
                $this->Flash->success(__('The terminal has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The terminal could not be saved. Please, try again.'));
        }
		
		
		
        $this->set(compact('terminal'));
        $this->set('_serialize', ['terminal']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Terminal id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $terminal = $this->Terminals->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $terminal = $this->Terminals->patchEntity($terminal, $this->request->getData());
            if ($this->Terminals->save($terminal)) {
                $this->Flash->success(__('The terminal has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The terminal could not be saved. Please, try again.'));
        }
        $this->set(compact('terminal'));
        $this->set('_serialize', ['terminal']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Terminal id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $terminal = $this->Terminals->get($id);
        if ($this->Terminals->delete($terminal)) {
            $this->Flash->success(__('The terminal has been deleted.'));
        } else {
            $this->Flash->error(__('The terminal could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

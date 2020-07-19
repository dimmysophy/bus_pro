<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * BusState Controller
 *
 * @property \App\Model\Table\BusStateTable $BusState
 *
 * @method \App\Model\Entity\BusState[] paginate($object = null, array $settings = [])
 */
class BusStateController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Bus', 'Terminals']
        ];
        $busStates = $this->paginate($this->BusState);
		$terminals = $terminalNames = $this->terminals->find('list')->toArray();
				$terminal_ids = array_keys($terminalNames);
				$buses = $busNames = $this->buses->find('list')->toArray();
				$bus_ids = array_keys($busNames);

foreach ($busStates as $request){
				
			if(in_array($request->destination_terminal_id, $terminal_ids)){
				//$request->destination_terminals_id =  $request->destination_terminal_id;
				$request->destination_terminal_name = $terminals[$request->destination_terminal_id];
				$request->terminal->destination_terminal_name = $terminals[$request->destination_terminal_id];
			}
			if(in_array($request->bus_id, $bus_ids)){
				$request->bus->id =  $request->bus_id;
				$request->bus->name = $buses[$request->bus_id];
			}
			$busState[] = $request;
				
		}

        $this->set(compact('busState', 'terminals'));
        $this->set('_serialize', ['busState']);
    }

    /**
     * View method
     *
     * @param string|null $id Bus State id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $busState = $this->BusState->get($id, [
            'contain' => ['Bus', 'Terminals']
        ]);

        $this->set('busState', $busState);
        $this->set('_serialize', ['busState']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $busState = $this->BusState->newEntity();
        if ($this->request->is('post')) {
            $busState = $this->BusState->patchEntity($busState, $this->request->getData());
            if ($this->BusState->save($busState)) {
                $this->Flash->success(__('The bus state has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bus state could not be saved. Please, try again.'));
        }
        $buses = $this->BusState->Bus->find('list', ['limit' => 200]);
        $terminals = $this->BusState->Terminals->find('list', ['limit' => 200]);
        $this->set(compact('busState', 'buses', 'terminals'));
        $this->set('_serialize', ['busState']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Bus State id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $busState = $this->BusState->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $busState = $this->BusState->patchEntity($busState, $this->request->getData());
            if ($this->BusState->save($busState)) {
                $this->Flash->success(__('The bus state has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bus state could not be saved. Please, try again.'));
        }
        $buses = $this->BusState->Buses->find('list', ['limit' => 200]);
        $terminals = $this->BusState->Terminals->find('list', ['limit' => 200]);
        $this->set(compact('busState', 'bus', 'terminals'));
        $this->set('_serialize', ['busState']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Bus State id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $busState = $this->BusState->get($id);
        if ($this->BusState->delete($busState)) {
            $this->Flash->success(__('The bus state has been deleted.'));
        } else {
            $this->Flash->error(__('The bus state could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

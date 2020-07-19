<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * LocationGraph Controller
 *
 * @property \App\Model\Table\LocationGraphTable $LocationGraph
 *
 * @method \App\Model\Entity\LocationGraph[] paginate($object = null, array $settings = [])
 */
class LocationGraphController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $Graph = $this->paginate($this->LocationGraph);
		
				$terminals = $terminalNames = $this->terminals->find('list')->toArray();
				$terminal_ids = array_keys($terminalNames);

foreach ($Graph as $request){
				
			if(in_array($request->terminal_1, $terminal_ids)){
				$request->terminal_1_id =  $request->terminal_1;
				$request->terminal_1 = $terminals[$request->terminal_1];
			}
			if(in_array($request->terminal_2, $terminal_ids)){
				$request->terminal_2_id =  $request->terminal_2;
				$request->terminal_2 = $terminals[$request->terminal_2];
			}
			$locationGraph[] = $request;
				
		}
        $this->set(compact('locationGraph'));
        $this->set('_serialize', ['locationGraph']);
    }

    /**
     * View method
     *
     * @param string|null $id Location Graph id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $locationGraph = $this->LocationGraph->get($id, [
            'contain' => []
        ]);

        $this->set('locationGraph', $locationGraph);
        $this->set('_serialize', ['locationGraph']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $locationGraph = $this->LocationGraph->newEntity();
        if ($this->request->is('post')) {
            $locationGraph = $this->LocationGraph->patchEntity($locationGraph, $this->request->getData());
            if ($this->LocationGraph->save($locationGraph)) {
                $this->Flash->success(__('The location graph has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The location graph could not be saved. Please, try again.'));
        }
		
		$terminals = $this->terminals->find('list');
		
        $this->set(compact(['locationGraph', 'terminals']));
        $this->set('_serialize', ['locationGraph']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Location Graph id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $locationGraph = $this->LocationGraph->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $locationGraph = $this->LocationGraph->patchEntity($locationGraph, $this->request->getData());
            if ($this->LocationGraph->save($locationGraph)) {
                $this->Flash->success(__('The location graph has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The location graph could not be saved. Please, try again.'));
        }
        $this->set(compact('locationGraph'));
        $this->set('_serialize', ['locationGraph']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Location Graph id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $locationGraph = $this->LocationGraph->get($id);
        if ($this->LocationGraph->delete($locationGraph)) {
            $this->Flash->success(__('The location graph has been deleted.'));
        } else {
            $this->Flash->error(__('The location graph could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

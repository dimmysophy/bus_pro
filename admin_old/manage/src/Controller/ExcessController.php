<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Excess Controller
 *
 * @property \App\Model\Table\ExcessTable $Excess
 *
 * @method \App\Model\Entity\Exces[] paginate($object = null, array $settings = [])
 */
class ExcessController extends AppController
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
        $excess = $this->paginate($this->Excess);

        $this->set(compact('excess'));
        $this->set('_serialize', ['excess']);
    }

    /**
     * View method
     *
     * @param string|null $id Exces id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $exces = $this->Excess->get($id, [
            'contain' => ['Terminals']
        ]);

        $this->set('exces', $exces);
        $this->set('_serialize', ['exces']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $exces = $this->Excess->newEntity();
        if ($this->request->is('post')) {
            $exces = $this->Excess->patchEntity($exces, $this->request->getData());
            if ($this->Excess->save($exces)) {
                $this->Flash->success(__('The exces has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The exces could not be saved. Please, try again.'));
        }
        $terminals = $this->Excess->Terminals->find('list', ['limit' => 200]);
        $this->set(compact('exces', 'terminals'));
        $this->set('_serialize', ['exces']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Exces id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $exces = $this->Excess->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $exces = $this->Excess->patchEntity($exces, $this->request->getData());
            if ($this->Excess->save($exces)) {
                $this->Flash->success(__('The exces has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The exces could not be saved. Please, try again.'));
        }
        $terminals = $this->Excess->Terminals->find('list', ['limit' => 200]);
        $this->set(compact('exces', 'terminals'));
        $this->set('_serialize', ['exces']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Exces id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $exces = $this->Excess->get($id);
        if ($this->Excess->delete($exces)) {
            $this->Flash->success(__('The exces has been deleted.'));
        } else {
            $this->Flash->error(__('The exces could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
	
	public function request_buses($id = null)
    {
        $exces = $this->Excess->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $exces = $this->Excess->patchEntity($exces, $this->request->getData());
            if ($this->Excess->save($exces)) {
                $this->Flash->success(__('The exces has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The exces could not be saved. Please, try again.'));
        }
        $terminals = $this->Excess->Terminals->find('list', ['limit' => 200]);
        $this->set(compact('exces', 'terminals'));
        $this->set('_serialize', ['exces']);
    }
	
	public function dijkstra($graph, $source, $destination){
		$_distArr = $graph;
		//the start and the end
		$a = $source;
		$b = $destination;

		//initialize the array for storing
		$S = array();//the nearest path with its parent and weight
		$Q = array();//the left nodes without the nearest path
		foreach(array_keys($_distArr) as $val) $Q[$val] = 99999;
		$Q[$a] = 0;

		//start calculating
		while(!empty($Q)){
			$min = array_search(min($Q), $Q);//the most min weight
			if($min == $b) break;
			foreach($_distArr[$min] as $key=>$val) if(!empty($Q[$key]) && $Q[$min] + $val < $Q[$key]) {
				$Q[$key] = $Q[$min] + $val;
				$S[$key] = array($min, $Q[$key]);
			}
			unset($Q[$min]);
		}

		//list the path
		$path = array();
		$pos = $b;
		while($pos != $a){
			$path[] = $pos;
			$pos = $S[$pos][0];
		}
		$path[] = $a;
		$path = array_reverse($path);
		
		//echo "<br />The length is ".$S[$b][$a];
		//echo "<br />Path is ".implode('->', $path);
		return ['path' => implode(' to ', $path), 'distance' => $S[$b][$a]];

		
	}
	public function transformGraph($locations){
		$graph = [];
		foreach($locations as $location){
			$graph[$location->terminal_1][$location->terminal_2] = $location->distance;
			$graph[$location->terminal_2][$location->terminal_1] = $location->distance;
		}
		return $graph;
	}

}

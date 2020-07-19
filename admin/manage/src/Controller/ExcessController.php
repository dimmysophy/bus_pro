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
        $terminals = $this->Excess->Terminals->find('list', ['limit' => 200]);
        $this->set(compact('excess','terminals'));
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
	
	public function requestBuses($id = null)
    {
        $this->paginate = [
            'contain' => ['Terminals']
        ];
		// fetches all terminals with excess and number 
        $excess = $this->paginate($this->Excess);
		
        if ($this->request->is(['patch', 'post', 'put'])) {
            $requestingTerminalId = (int) $this->request->data('requesting_terminal');
		
		$allTerminals = $this->location_graph->find()->all();
		/* ->join([
            'excess' => [
                'table' => 'excess',
                'type' => 'INNER',
                'conditions' => 'excess.terminal_id = location_graph.terminal_1'
				]])
				*/
		
		$terminalsGraph = $this->transformGraph($allTerminals);
		//var_dump($terminalsGraph);
		
		//find distances to from source terminal to all terminals with the exception of the source
		$all_excess = $this->Excess->find()->toArray();
		
		foreach($terminalsGraph as $key=>$graphItem){
			if($requestingTerminalId == $key){
				// do  nothing
			}
			
			//echo "from $requestingTerminalId to $key";
			//var_dump($this->dijkstra($terminalsGraph, $requestingTerminalId, $key));
			//echo '<br>';
			
			$return = $this->dijkstra($terminalsGraph, $key, $requestingTerminalId );
			if(null!= $return)
			$dijkstraGraph[] = $return;
		}
		
		//sort the dijkstra result based on distances
		usort($dijkstraGraph, function($a, $b) {
			return $a['distance'] <=> $b['distance'];
		});
		
				//var_dump($all_excess);

		
		//get the terminals so we can have their human readble form
		$terminalNames = $this->terminals->find('list')->toArray();
		//var_dump($terminalNames);
		$terminals = $terminalNames;
		$terminal_ids =  array_keys($terminals);
		
		foreach($dijkstraGraph as $G){
			foreach ($G['path'] as $key=> $value){
				
				if(in_array($value, $terminal_ids)){
					$G['path'][$key] = ['id'=> $value, 'name' => $terminals[$value]];
				}
				
			}
			
			
			if(in_array($G['path'][0]['id'], array_column($all_excess,'terminal_id'))){
				//$filtered[] = $G;
				$G['no_of_excess_buses'] = $all_excess[array_search($G['path'][0]['id'], array_column($all_excess,'terminal_id'))]['no_of_excess_buses'];
				$G['path_string'] = implode( ' to ', array_column($G['path'], 'name') );
				$filtered_imploded[] = $G;


			}

			//echo 'path as array';
			//echo '<br>';
			//$G['path_string'] = implode( ' to ', array_column($G['path'], 'name') );
			
			
			$namesGraph[] = $G;
			$G['path'] = implode( ' to ', array_column($G['path'], 'name') );
			
			//echo 'path as string';

			//var_dump($G);
			//echo '<br>';

			$imploded[] = $G;
			
			
		}
		//var_dump($namesGraph);
		//var_dump($filtered_imploded);
		//var_dump($imploded);
		
		
		
		/*$exces = $this->Excess->patchEntity($exces, $this->request->getData());
            if ($this->Excess->save($exces)) {
                $this->Flash->success(__('The exces has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The exces could not be saved. Please, try again.'));*/
        }
        $terminals = $this->Excess->Terminals->find('list', ['limit' => 200]);
        $this->set(compact('excess', 'terminals', 'filtered_imploded'));
        $this->set('_serialize', ['excess']);
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
		if(!array_key_exists($b, $S)){
			//echo 'Found no way';
			return;
		}
		while($pos != $a){
			$path[] = $pos;
			$pos = $S[$pos][0];
		}
		$path[] = $a;
		$path = array_reverse($path);
		
		
		//echo "<br />The length is ".$S[$b][1];
		//echo "<br />Path is ".implode('->', $path);
		return ['path' => $path, 'distance' => $S[$b][1]];
		//return ['path' => implode('->', $path), 'distance' => $S[$b][1]];

		
	}
	public function transformGraph($locations){
		$graph = [];
		foreach($locations as $location){
			$graph[$location->terminal_1][$location->terminal_2] = $location->distance;
			$graph[$location->terminal_2][$location->terminal_1] = $location->distance;
		}
		return $graph;
	}
	
	
	/*transform terminal names into  (id=>name)key value pairs
	public function transformTerminal($terminalNames){
		var_dump($terminalNames->toArray());
		$terminals = [];
		foreach($terminalNames as $names){
			var_dump($names);
			$terminals[$names->id] = $names->name;
		}
		return $terminals;
	}*/

}

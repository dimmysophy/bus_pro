<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Exces[]|\Cake\Collection\CollectionInterface $excess
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Exces'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Terminals'), ['controller' => 'Terminals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Terminal'), ['controller' => 'Terminals', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="excess index large-9 medium-8 columns content">
    <h3><?= __('Excess') ?></h3>
	
	<form action="<?= $this->Url->build('/excess/request-buses')?>" method="post">
	<?php
		echo $this->Form->control('requesting_terminal', ['options' => $terminals]);
		echo $this->Form->button('Request Buses');
		
		?>
	
	</form>
	
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col">Terminal</th>
                <th scope="col"><?= $this->Paginator->sort('no_of_excess_buses') ?></th>
                <th scope="col"><?= $this->Paginator->sort('distance') ?></th>
                <th scope="col">Path</th>
                <th scope="col">Number Needed</th>
				
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($filtered_imploded as $exces): ?>
            <tr>
			<form action="<?= $this->Url->build('/requests/add')?>" method="post">
		<?php echo $this->Form->control('requesting_terminal', ['options' => $terminals, 'label' => false, 'hidden']); ?>
                <td>
					
				<input name="source" value="request_buses" hidden >
				<?= $this->Form->input('terminal_from', ['type' => 'number', 'value' => $exces['path'][0]['id'], 'label' => false, 'hidden' => true]). $exces['path'][0]['name']?></td>
                <td><?= $this->Number->format($exces['no_of_excess_buses']) ?></td>
                <td><?= $this->Number->format($exces['distance']) ?></td>
                <td><?= $exces['path_string'] ?></td>
				 <td><?= $this->Form->input('number_needed', ['type' => 'number', 'label' => false])?></td>

                <td class="actions">
				
                    <?= $this->Form->button(__('submit')) ?>
   
                </td><input type="text" name="cancelled" required="required" maxlength="5" id="cancelled" hidden value="false">
				<input type="text" name="serviced" required="required" maxlength="5" id="serviced" hidden value="false">
				</form>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>

<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\BusCount[]|\Cake\Collection\CollectionInterface $busCount
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Bus Count'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Terminals'), ['controller' => 'Terminals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Terminal'), ['controller' => 'Terminals', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="busCount index large-9 medium-8 columns content">
    <h3><?= __('Bus Count') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('terminal_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('no_of_buses') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php
			$count = 0;
			foreach ($busCount as $busCount): ?>
            <tr>
                <td><?= $this->Number->format($busCount->id) ?></td>
                <td><?= $busCount->has('terminal') ? $this->Html->link($busCount->terminal->name, ['controller' => 'Terminals', 'action' => 'view', $busCount->terminal->id]) : '' ?></td>
                <td><?= $this->Number->format($busCount->no_of_buses) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $busCount->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $busCount->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $busCount->id], ['confirm' => __('Are you sure you want to delete # {0}?', $busCount->id)]) ?>
                </td>
            </tr>
            <?php
			$count = $count+ $busCount->no_of_buses;

			endforeach; ?>
			<tr><td>Total Buses</td><td><?= $count?></td></tr>
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

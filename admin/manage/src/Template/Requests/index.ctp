<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Request[]|\Cake\Collection\CollectionInterface $requests
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Request'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="requests index large-9 medium-8 columns content">
    <h3><?= __('Requests') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('requesting_terminal') ?></th>
                <th scope="col"><?= $this->Paginator->sort('terminal_from') ?></th>
                <th scope="col"><?= $this->Paginator->sort('number_needed') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('serviced') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cancelled') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($requests as $request): ?>
            <tr>
                <td><?= $this->Number->format($request->id) ?></td>
                <td><?= $request->requesting_terminal ?></td>
                <td><?= $request->terminal_from ?></td>
                <td><?= $request->number_needed ?></td>
                <td><?= h($request->created) ?></td>
                <td><?= h($request->modified) ?></td>
                <td><?= ($request->serviced == 'true')?'<span class="label label-success">'.$request->serviced.'</span>': '<span class="label label-danger">'.$request->serviced.'</span>'?></td>
                <td><?= ($request->cancelled == 'true')?'<span class="label label-success">'.$request->cancelled.'</span>': '<span class="label label-danger">'.$request->cancelled.'</span>'?> </td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $request->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $request->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $request->id], ['confirm' => __('Are you sure you want to delete # {0}?', $request->id)]) ?>
                </td>
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

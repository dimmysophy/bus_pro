<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Agent[]|\Cake\Collection\CollectionInterface $agent
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Agent'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Agent Terminal'), ['controller' => 'AgentTerminal', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Agent Terminal'), ['controller' => 'AgentTerminal', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="agent index large-9 medium-8 columns content">
    <h3><?= __('Agent') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('username') ?></th>
                <th scope="col"><?= $this->Paginator->sort('first_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('last_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('password') ?></th>
                <th scope="col"><?= $this->Paginator->sort('company_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('address') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('phone_number') ?></th>
                <th scope="col"><?= $this->Paginator->sort('city') ?></th>
                <th scope="col"><?= $this->Paginator->sort('country') ?></th>
                <th scope="col"><?= $this->Paginator->sort('profile_picture') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created_by') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($agent as $agent): ?>
            <tr>
                <td><?= $this->Number->format($agent->id) ?></td>
                <td><?= h($agent->username) ?></td>
                <td><?= h($agent->first_name) ?></td>
                <td><?= h($agent->last_name) ?></td>
                <td><?= h($agent->password) ?></td>
                <td><?= h($agent->company_name) ?></td>
                <td><?= h($agent->address) ?></td>
                <td><?= h($agent->email) ?></td>
                <td><?= h($agent->phone_number) ?></td>
                <td><?= h($agent->city) ?></td>
                <td><?= h($agent->country) ?></td>
                <td><?= h($agent->profile_picture) ?></td>
                <td><?= h($agent->status) ?></td>
                <td><?= h($agent->created_by) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $agent->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $agent->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $agent->id], ['confirm' => __('Are you sure you want to delete # {0}?', $agent->id)]) ?>
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

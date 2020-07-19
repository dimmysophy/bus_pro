<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\AgentTerminal[]|\Cake\Collection\CollectionInterface $agentTerminal
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Agent Terminal'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Terminals'), ['controller' => 'Terminals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Terminal'), ['controller' => 'Terminals', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="agentTerminal index large-9 medium-8 columns content">
    <h3><?= __('Agent Terminal') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('agent_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('terminal_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($agentTerminal as $agentTerminal): ?>
            <tr>
                <td><?= $this->Number->format($agentTerminal->id) ?></td>
                <td><?= $this->Number->format($agentTerminal->agent_id) ?></td>
                <td><?= $agentTerminal->has('terminal') ? $this->Html->link($agentTerminal->terminal->id, ['controller' => 'Terminals', 'action' => 'view', $agentTerminal->terminal->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $agentTerminal->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $agentTerminal->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $agentTerminal->id], ['confirm' => __('Are you sure you want to delete # {0}?', $agentTerminal->id)]) ?>
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

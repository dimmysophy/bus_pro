<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Terminal $terminal
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Terminal'), ['action' => 'edit', $terminal->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Terminal'), ['action' => 'delete', $terminal->id], ['confirm' => __('Are you sure you want to delete # {0}?', $terminal->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Terminals'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Terminal'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Agent Terminal'), ['controller' => 'AgentTerminal', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Agent Terminal'), ['controller' => 'AgentTerminal', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Bus Count'), ['controller' => 'BusCount', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bus Count'), ['controller' => 'BusCount', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Bus State'), ['controller' => 'BusState', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bus State'), ['controller' => 'BusState', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Excess'), ['controller' => 'Excess', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Exces'), ['controller' => 'Excess', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="terminals view large-9 medium-8 columns content">
    <h3><?= h($terminal->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Street') ?></th>
            <td><?= h($terminal->street) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('City') ?></th>
            <td><?= h($terminal->city) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('State') ?></th>
            <td><?= h($terminal->state) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($terminal->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($terminal->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($terminal->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($terminal->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Agent Terminal') ?></h4>
        <?php if (!empty($terminal->agent_terminal)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Agent Id') ?></th>
                <th scope="col"><?= __('Terminal Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($terminal->agent_terminal as $agentTerminal): ?>
            <tr>
                <td><?= h($agentTerminal->id) ?></td>
                <td><?= h($agentTerminal->agent_id) ?></td>
                <td><?= h($agentTerminal->terminal_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'AgentTerminal', 'action' => 'view', $agentTerminal->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'AgentTerminal', 'action' => 'edit', $agentTerminal->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'AgentTerminal', 'action' => 'delete', $agentTerminal->id], ['confirm' => __('Are you sure you want to delete # {0}?', $agentTerminal->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Bus Count') ?></h4>
        <?php if (!empty($terminal->bus_count)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Terminal Id') ?></th>
                <th scope="col"><?= __('No Of Buses') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($terminal->bus_count as $busCount): ?>
            <tr>
                <td><?= h($busCount->id) ?></td>
                <td><?= h($busCount->terminal_id) ?></td>
                <td><?= h($busCount->no_of_buses) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'BusCount', 'action' => 'view', $busCount->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'BusCount', 'action' => 'edit', $busCount->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'BusCount', 'action' => 'delete', $busCount->id], ['confirm' => __('Are you sure you want to delete # {0}?', $busCount->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Bus State') ?></h4>
        <?php if (!empty($terminal->bus_state)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Bus Id') ?></th>
                <th scope="col"><?= __('Terminal Id') ?></th>
                <th scope="col"><?= __('Take Off Time') ?></th>
                <th scope="col"><?= __('Arrival Time') ?></th>
                <th scope="col"><?= __('Destination Terminal Id') ?></th>
                <th scope="col"><?= __('State') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($terminal->bus_state as $busState): ?>
            <tr>
                <td><?= h($busState->id) ?></td>
                <td><?= h($busState->bus_id) ?></td>
                <td><?= h($busState->terminal_id) ?></td>
                <td><?= h($busState->take_off_time) ?></td>
                <td><?= h($busState->arrival_time) ?></td>
                <td><?= h($busState->destination_terminal_id) ?></td>
                <td><?= h($busState->state) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'BusState', 'action' => 'view', $busState->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'BusState', 'action' => 'edit', $busState->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'BusState', 'action' => 'delete', $busState->id], ['confirm' => __('Are you sure you want to delete # {0}?', $busState->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Excess') ?></h4>
        <?php if (!empty($terminal->excess)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Terminal Id') ?></th>
                <th scope="col"><?= __('No Of Excess Buses') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($terminal->excess as $excess): ?>
            <tr>
                <td><?= h($excess->id) ?></td>
                <td><?= h($excess->terminal_id) ?></td>
                <td><?= h($excess->no_of_excess_buses) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Excess', 'action' => 'view', $excess->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Excess', 'action' => 'edit', $excess->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Excess', 'action' => 'delete', $excess->id], ['confirm' => __('Are you sure you want to delete # {0}?', $excess->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>

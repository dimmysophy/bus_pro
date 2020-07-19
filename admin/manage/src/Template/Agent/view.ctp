<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Agent $agent
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Agent'), ['action' => 'edit', $agent->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Agent'), ['action' => 'delete', $agent->id], ['confirm' => __('Are you sure you want to delete # {0}?', $agent->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Agent'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Agent'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Agent Terminal'), ['controller' => 'AgentTerminal', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Agent Terminal'), ['controller' => 'AgentTerminal', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="agent view large-9 medium-8 columns content">
    <h3><?= h($agent->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Username') ?></th>
            <td><?= h($agent->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('First Name') ?></th>
            <td><?= h($agent->first_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Last Name') ?></th>
            <td><?= h($agent->last_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($agent->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Company Name') ?></th>
            <td><?= h($agent->company_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address') ?></th>
            <td><?= h($agent->address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($agent->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone Number') ?></th>
            <td><?= h($agent->phone_number) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('City') ?></th>
            <td><?= h($agent->city) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Country') ?></th>
            <td><?= h($agent->country) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Profile Picture') ?></th>
            <td><?= h($agent->profile_picture) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= h($agent->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created By') ?></th>
            <td><?= h($agent->created_by) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($agent->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Agent Terminal') ?></h4>
        <?php if (!empty($agent->agent_terminal)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Agent Id') ?></th>
                <th scope="col"><?= __('Terminal Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($agent->agent_terminal as $agentTerminal): ?>
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
</div>

<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\UserType> $userType
 */
?>
<div class="userType index content">
    <?= $this->Html->link(__('New User Type'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('User Type') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('code') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($userType as $userType): ?>
                <tr>
                    <td><?= $this->Number->format($userType->id) ?></td>
                    <td><?= h($userType->name) ?></td>
                    <td><?= h($userType->code) ?></td>
                    <td><?= h($userType->created) ?></td>
                    <td><?= h($userType->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $userType->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $userType->id]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $userType->id],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $userType->id),
                            ]
                        ) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
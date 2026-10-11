<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\SchoolYear> $schoolYears
 */
?>
<div class="schoolYears index content">
    <?= $this->Html->link(__('New School Year'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('School Years') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('school_year_name') ?></th>
                    <th><?= $this->Paginator->sort('school_year_status') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($schoolYears as $schoolYear): ?>
                <tr>
                    <td><?= $this->Number->format($schoolYear->id) ?></td>
                    <td><?= h($schoolYear->school_year_name) ?></td>
                    <td><?= h($schoolYear->school_year_status) ?></td>
                    <td><?= h($schoolYear->created) ?></td>
                    <td><?= h($schoolYear->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $schoolYear->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $schoolYear->id]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $schoolYear->id],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $schoolYear->id),
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
<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Region $region
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Region'), ['action' => 'edit', $region->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Region'), ['action' => 'delete', $region->id], ['confirm' => __('Are you sure you want to delete # {0}?', $region->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Regions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Region'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="regions view content">
            <h3><?= h($region->french_region_name) ?></h3>
            <table>
                <tr>
                    <th><?= __('French Region Name') ?></th>
                    <td><?= h($region->french_region_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('English Region Name') ?></th>
                    <td><?= h($region->english_region_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($region->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($region->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($region->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Departments') ?></h4>
                <?php if (!empty($region->departments)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('French Department Name') ?></th>
                            <th><?= __('English Department Name') ?></th>
                            <th><?= __('Region Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($region->departments as $department) : ?>
                        <tr>
                            <td><?= h($department->id) ?></td>
                            <td><?= h($department->french_department_name) ?></td>
                            <td><?= h($department->english_department_name) ?></td>
                            <td><?= h($department->region_id) ?></td>
                            <td><?= h($department->created) ?></td>
                            <td><?= h($department->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Departments', 'action' => 'view', $department->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Departments', 'action' => 'edit', $department->id]) ?>
                                <?= $this->Form->postLink(
                                    __('Delete'),
                                    ['controller' => 'Departments', 'action' => 'delete', $department->id],
                                    [
                                        'method' => 'delete',
                                        'confirm' => __('Are you sure you want to delete # {0}?', $department->id),
                                    ]
                                ) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
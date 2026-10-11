<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Department $department
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Department'), ['action' => 'edit', $department->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Department'), ['action' => 'delete', $department->id], ['confirm' => __('Are you sure you want to delete # {0}?', $department->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Departments'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Department'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="departments view content">
            <h3><?= h($department->french_department_name) ?></h3>
            <table>
                <tr>
                    <th><?= __('French Department Name') ?></th>
                    <td><?= h($department->french_department_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('English Department Name') ?></th>
                    <td><?= h($department->english_department_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Region') ?></th>
                    <td><?= $department->hasValue('region') ? $this->Html->link($department->region->french_region_name, ['controller' => 'Regions', 'action' => 'view', $department->region->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($department->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($department->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($department->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
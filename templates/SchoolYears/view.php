<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SchoolYear $schoolYear
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit School Year'), ['action' => 'edit', $schoolYear->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete School Year'), ['action' => 'delete', $schoolYear->id], ['confirm' => __('Are you sure you want to delete # {0}?', $schoolYear->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List School Years'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New School Year'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="schoolYears view content">
            <h3><?= h($schoolYear->school_year_name) ?></h3>
            <table>
                <tr>
                    <th><?= __('School Year Name') ?></th>
                    <td><?= h($schoolYear->school_year_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('School Year Status') ?></th>
                    <td><?= h($schoolYear->school_year_status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($schoolYear->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($schoolYear->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($schoolYear->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
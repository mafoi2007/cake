<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SchoolName $schoolName
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit School Name'), ['action' => 'edit', $schoolName->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete School Name'), ['action' => 'delete', $schoolName->id], ['confirm' => __('Are you sure you want to delete # {0}?', $schoolName->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List School Names'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New School Name'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="schoolNames view content">
            <h3><?= h($schoolName->school_name) ?></h3>
            <table>
                <tr>
                    <th><?= __('School Name') ?></th>
                    <td><?= h($schoolName->school_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($schoolName->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($schoolName->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($schoolName->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
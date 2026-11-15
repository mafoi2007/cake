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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $schoolName->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $schoolName->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List School Names'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="schoolNames form content">
            <?= $this->Form->create($schoolName) ?>
            <fieldset>
                <legend><?= __('Edit School Name') ?></legend>
                <?php
                    echo $this->Form->control('school_name');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

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
            <?= $this->Html->link(__('List School Years'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="schoolYears form content">
            <?= $this->Form->create($schoolYear) ?>
            <fieldset>
                <legend><?= __('Add School Year') ?></legend>
                <?php
                    echo $this->Form->control('school_year_name');
                    echo $this->Form->control('school_year_status');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

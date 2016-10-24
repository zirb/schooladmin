<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Horarios'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="horarios form large-9 medium-8 columns content">
    <?= $this->Form->create($horario) ?>
    <fieldset>
        <legend><?= __('Add Horario') ?></legend>
        <?php
            echo $this->Form->input('dias');
            echo $this->Form->input('horas');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

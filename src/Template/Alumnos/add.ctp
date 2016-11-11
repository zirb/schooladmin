<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Alumnos'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="alumnos form large-9 medium-8 columns content">
    <?= $this->Form->create($alumno) ?>
    <fieldset>
        <legend><?= __('Add Alumno') ?></legend>
        <?php
            echo $this->Form->input('id_user', ['options' => $users]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

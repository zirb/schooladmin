<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Alumno Materia'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="alumnoMateria form large-9 medium-8 columns content">
    <?= $this->Form->create($alumnoMaterium) ?>
    <fieldset>
        <legend><?= __('Add Alumno Materium') ?></legend>
        <?php
            echo $this->Form->input('id_alumno');
            echo $this->Form->input('id_materia');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

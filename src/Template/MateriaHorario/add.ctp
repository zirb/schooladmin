<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Materia Horario'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="materiaHorario form large-9 medium-8 columns content">
    <?= $this->Form->create($materiaHorario) ?>
    <fieldset>
        <legend><?= __('Add Materia Horario') ?></legend>
        <?php
            echo $this->Form->input('id_materia');
            echo $this->Form->input('id_horario');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

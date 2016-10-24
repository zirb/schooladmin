<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Carrera Materia'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="carreraMateria form large-9 medium-8 columns content">
    <?= $this->Form->create($carreraMaterium) ?>
    <fieldset>
        <legend><?= __('Add Carrera Materium') ?></legend>
        <?php
            echo $this->Form->input('id_carrera');
            echo $this->Form->input('id_materia');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Docente Materia'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="docenteMateria form large-9 medium-8 columns content">
    <?= $this->Form->create($docenteMaterium) ?>
    <fieldset>
        <legend><?= __('Add Docente Materium') ?></legend>
        <?php
            echo $this->Form->input('id_docentes');
            echo $this->Form->input('id_materias');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

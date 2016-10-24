<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Grupo Materia'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="grupoMateria form large-9 medium-8 columns content">
    <?= $this->Form->create($grupoMaterium) ?>
    <fieldset>
        <legend><?= __('Add Grupo Materium') ?></legend>
        <?php
            echo $this->Form->input('id_grupo');
            echo $this->Form->input('id_materia');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

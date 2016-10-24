<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $materia->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $materia->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Materias'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="materias form large-9 medium-8 columns content">
    <?= $this->Form->create($materia) ?>
    <fieldset>
        <legend><?= __('Edit Materia') ?></legend>
        <?php
            echo $this->Form->input('materia');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

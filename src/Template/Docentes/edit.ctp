<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $docente->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $docente->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Docentes'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="docentes form large-9 medium-8 columns content">
    <?= $this->Form->create($docente) ?>
    <fieldset>
        <legend><?= __('Edit Docente') ?></legend>
        <?php
            echo $this->Form->input('id_user');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

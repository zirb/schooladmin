<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Docente'), ['action' => 'edit', $docente->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Docente'), ['action' => 'delete', $docente->id], ['confirm' => __('Are you sure you want to delete # {0}?', $docente->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Docentes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Docente'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="docentes view large-9 medium-8 columns content">
    <h3><?= h($docente->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($docente->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id User') ?></th>
            <td><?= $this->Number->format($docente->id_user) ?></td>
        </tr>
    </table>
</div>

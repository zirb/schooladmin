<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Grupo Materium'), ['action' => 'edit', $grupoMaterium->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Grupo Materium'), ['action' => 'delete', $grupoMaterium->id], ['confirm' => __('Are you sure you want to delete # {0}?', $grupoMaterium->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Grupo Materia'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Grupo Materium'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="grupoMateria view large-9 medium-8 columns content">
    <h3><?= h($grupoMaterium->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($grupoMaterium->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Grupo') ?></th>
            <td><?= $this->Number->format($grupoMaterium->id_grupo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Materia') ?></th>
            <td><?= $this->Number->format($grupoMaterium->id_materia) ?></td>
        </tr>
    </table>
</div>

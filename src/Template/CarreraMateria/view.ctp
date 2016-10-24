<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Carrera Materium'), ['action' => 'edit', $carreraMaterium->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Carrera Materium'), ['action' => 'delete', $carreraMaterium->id], ['confirm' => __('Are you sure you want to delete # {0}?', $carreraMaterium->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Carrera Materia'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Carrera Materium'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="carreraMateria view large-9 medium-8 columns content">
    <h3><?= h($carreraMaterium->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($carreraMaterium->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Carrera') ?></th>
            <td><?= $this->Number->format($carreraMaterium->id_carrera) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Materia') ?></th>
            <td><?= $this->Number->format($carreraMaterium->id_materia) ?></td>
        </tr>
    </table>
</div>

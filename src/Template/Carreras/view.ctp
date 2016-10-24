<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Carrera'), ['action' => 'edit', $carrera->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Carrera'), ['action' => 'delete', $carrera->id], ['confirm' => __('Are you sure you want to delete # {0}?', $carrera->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Carreras'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Carrera'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="carreras view large-9 medium-8 columns content">
    <h3><?= h($carrera->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($carrera->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($carrera->id) ?></td>
        </tr>
    </table>
</div>

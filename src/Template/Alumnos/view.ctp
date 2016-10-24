<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Alumno'), ['action' => 'edit', $alumno->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Alumno'), ['action' => 'delete', $alumno->id], ['confirm' => __('Are you sure you want to delete # {0}?', $alumno->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Alumnos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Alumno'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="alumnos view large-9 medium-8 columns content">
    <h3><?= h($alumno->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($alumno->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id User') ?></th>
            <td><?= $this->Number->format($alumno->id_user) ?></td>
        </tr>
    </table>
</div>

<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Alumno Materium'), ['action' => 'edit', $alumnoMaterium->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Alumno Materium'), ['action' => 'delete', $alumnoMaterium->id], ['confirm' => __('Are you sure you want to delete # {0}?', $alumnoMaterium->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Alumno Materia'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Alumno Materium'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="alumnoMateria view large-9 medium-8 columns content">
    <h3><?= h($alumnoMaterium->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($alumnoMaterium->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Alumno') ?></th>
            <td><?= $this->Number->format($alumnoMaterium->id_alumno) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Materia') ?></th>
            <td><?= $this->Number->format($alumnoMaterium->id_materia) ?></td>
        </tr>
    </table>
</div>

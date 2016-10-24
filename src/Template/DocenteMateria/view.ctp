<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Docente Materium'), ['action' => 'edit', $docenteMaterium->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Docente Materium'), ['action' => 'delete', $docenteMaterium->id], ['confirm' => __('Are you sure you want to delete # {0}?', $docenteMaterium->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Docente Materia'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Docente Materium'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="docenteMateria view large-9 medium-8 columns content">
    <h3><?= h($docenteMaterium->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($docenteMaterium->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Docentes') ?></th>
            <td><?= $this->Number->format($docenteMaterium->id_docentes) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Materias') ?></th>
            <td><?= $this->Number->format($docenteMaterium->id_materias) ?></td>
        </tr>
    </table>
</div>

<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Materia Horario'), ['action' => 'edit', $materiaHorario->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Materia Horario'), ['action' => 'delete', $materiaHorario->id], ['confirm' => __('Are you sure you want to delete # {0}?', $materiaHorario->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Materia Horario'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Materia Horario'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="materiaHorario view large-9 medium-8 columns content">
    <h3><?= h($materiaHorario->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($materiaHorario->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Materia') ?></th>
            <td><?= $this->Number->format($materiaHorario->id_materia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Horario') ?></th>
            <td><?= $this->Number->format($materiaHorario->id_horario) ?></td>
        </tr>
    </table>
</div>

<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Materia Horario'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="materiaHorario index large-9 medium-8 columns content">
    <h3><?= __('Materia Horario') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_materia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_horario') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($materiaHorario as $materiaHorario): ?>
            <tr>
                <td><?= $this->Number->format($materiaHorario->id) ?></td>
                <td><?= $this->Number->format($materiaHorario->id_materia) ?></td>
                <td><?= $this->Number->format($materiaHorario->id_horario) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $materiaHorario->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $materiaHorario->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $materiaHorario->id], ['confirm' => __('Are you sure you want to delete # {0}?', $materiaHorario->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>

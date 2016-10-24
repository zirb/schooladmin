<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Alumno Materium'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="alumnoMateria index large-9 medium-8 columns content">
    <h3><?= __('Alumno Materia') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_alumno') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_materia') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($alumnoMateria as $alumnoMaterium): ?>
            <tr>
                <td><?= $this->Number->format($alumnoMaterium->id) ?></td>
                <td><?= $this->Number->format($alumnoMaterium->id_alumno) ?></td>
                <td><?= $this->Number->format($alumnoMaterium->id_materia) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $alumnoMaterium->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $alumnoMaterium->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $alumnoMaterium->id], ['confirm' => __('Are you sure you want to delete # {0}?', $alumnoMaterium->id)]) ?>
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

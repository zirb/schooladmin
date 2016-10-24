<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Docente Materium'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="docenteMateria index large-9 medium-8 columns content">
    <h3><?= __('Docente Materia') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_docentes') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_materias') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($docenteMateria as $docenteMaterium): ?>
            <tr>
                <td><?= $this->Number->format($docenteMaterium->id) ?></td>
                <td><?= $this->Number->format($docenteMaterium->id_docentes) ?></td>
                <td><?= $this->Number->format($docenteMaterium->id_materias) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $docenteMaterium->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $docenteMaterium->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $docenteMaterium->id], ['confirm' => __('Are you sure you want to delete # {0}?', $docenteMaterium->id)]) ?>
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

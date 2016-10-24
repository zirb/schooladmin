<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Grupo Materium'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="grupoMateria index large-9 medium-8 columns content">
    <h3><?= __('Grupo Materia') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_grupo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_materia') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($grupoMateria as $grupoMaterium): ?>
            <tr>
                <td><?= $this->Number->format($grupoMaterium->id) ?></td>
                <td><?= $this->Number->format($grupoMaterium->id_grupo) ?></td>
                <td><?= $this->Number->format($grupoMaterium->id_materia) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $grupoMaterium->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $grupoMaterium->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $grupoMaterium->id], ['confirm' => __('Are you sure you want to delete # {0}?', $grupoMaterium->id)]) ?>
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

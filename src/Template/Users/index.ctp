<div class="row">
	<div class="col-md-12">
		<div class="page-header">
			<h2>Usuarios</h2>
		</div>
	<div class="table-responsive">
	<table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email',['Correo electrónico']) ?></th>
           	<th scope="col"><?= $this->Paginator->sort('created',['Creado']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified',['Modificado']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('matricula') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombres') ?></th>
                <th scope="col"><?= $this->Paginator->sort('apellido_paterno') ?></th>
                <th scope="col"><?= $this->Paginator->sort('apellido_materno') ?></th>
                <th scope="col"><?= $this->Paginator->sort('acceso') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $this->Number->format($user->id) ?></td>
                <td><?= h($user->email) ?></td>
                <td><?= h($user->created) ?></td>
                <td><?= h($user->modified) ?></td>
                <td><?= h($user->matricula) ?></td>
                <td><?= h($user->nombres) ?></td>
                <td><?= h($user->apellido_paterno) ?></td>
                <td><?= h($user->apellido_materno) ?></td>
                <td><?= $this->Number->format($user->acceso) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $user->id],['class'=>'btn btn-sm btn-info']) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $user->id],['class'=>'btn btn-sm btn-info']) ?>
                    <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $user->id],['class'=>'btn btn-sm btn-danger'],['confirm' => __('¿Desea eliminar usuario # {0}?', $user->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('anterior')) ?>
            <?= $this->Paginator->numbers(['before'=>'','after'=>'']) ?>
            <?= $this->Paginator->next(__('siguiente') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>

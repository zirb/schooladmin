<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Añadir Usuario') ?></legend>
        <?php
            echo $this->Form->input('email');
            echo $this->Form->input('password');
            echo $this->Form->input('matricula');
            echo $this->Form->input('nombres');
            echo $this->Form->input('apellido_paterno');
            echo $this->Form->input('apellido_materno');
            echo $this->Form->input('acceso',['options'=>['0'=>'Usuario','1'=>'Docente','2'=>'Administrador']]);
        ?>
         <?php 
           echo $this->Form->select('alumno.id_user',[$user->id=>'Alumno', 2=>2, 3, 4, 5],['default' => [$user->id]]); ?>
    </fieldset>
    <?= $this->Form->button(__('Añadir'),['class'=>'btn btn-sm btn-info']) ?>
    <?= $this->Form->end() ?>
</div>

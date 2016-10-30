<?= $this->Html->css('login.css') ?>
<div class="principalContainer" style="position: fixed;
top: 50%;
left: 50%;
margin-top: -260px;
margin-left: -228px;
padding: 0;
width: 455px;">
<div class="innerContainer" style="background: rgba(255,255,255,0.7);
padding: 20px 40px;
box-shadow: 0 6px 6px rgba(0,0,0,0.3);
border-radius: 3px;
overflow: hidden;">
<div class="row">

        <div class="col-sm-12 m-bot15 text-center">
            <img id="ctl00_cphContenido_imgEscudo" src="/img/beaa1bf1_b61e_456c_b760_d3a1984cf92a2.png">
        </div>
<div class="form-group col-sm-12">
<fieldset>
<?= $this->Form->create() ?>
<?= $this->Form->input('email',['class'=>'form-control input-lg t14']) ?>
<?= $this->Form->input('password',['class'=>'form-control input-lg t14']) ?>
</fieldset>   
<?= $this->Form->button('Login',['class'=>'btn btn-shadow btn-teal btn-block btn-lg t14 btn-info']) ?>
<?= $this->Form->end() ?>
      </div>	
    </div>
  </div>
</div>      



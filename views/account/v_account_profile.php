<br/><?if($errors):?>
<?foreach ($errors as $error):?>
<div class="error">
<?php 
if(is_array($error))
    {    
    foreach ($error as $err){
        echo $err;}
    }
    else{
       echo $error; 
    }?>
</div>
<?endforeach?>
<?endif?>

<?=html::anchor(Kohana::$config->load('conf_route.account') ,'назад',array('class' => 'redactor_personal_info'));?>
<h2>Редактирование личных данных</h2>
<div id="tabs-2">
    


<?=Form::open('account/profile',array('enctype'=>'multipart/form-data'))?>
<table width="350" cellspacing="5">
    <tr>
        <td ><?=Form::label('username', 'Ник')?>:</td>
        <td><?=Form::input('username',$user->username, array('size' => 20))?></td>
    </tr>
    <tr>
        <td ><?=Form::label('email', 'Логин/Email')?>:</td>
        <td><?=Form::input('email',  $user->email, array('size' => 20))?></td>
    </tr>
    <tr>
        <td ><?=Form::label('password', 'Пароль')?>:</td>
        <td><?=Form::password('password',  '', array('size' => 20))?></td>
    </tr>
    <tr>
        <td ><?=Form::label('password_confirm', 'Повторить пароль')?>:</td>
        <td><?=Form::password('password_confirm', '', array('size' => 20))?></td>
    </tr>  
    <tr>
        <td><?=Form::label('private_info', 'Скрыть личные данные')?>:</td>
        <td align="right"><?=Form::checkbox('private_info',1, $bool)?></td>
    </tr>
    <tr>
        <td><?=Form::label('private_wall', 'Скрыть записи на стене')?>:</td>
        <td align="right"><?=Form::checkbox('private_wall')?></td>
    </tr>
     <tr>
        <td colspan="2" align="right"><?=Form::submit('submit', 'Изменить данные')?></td>
        <td></td>
    </tr>
</table>
    <?=Form::close()?>
</div>
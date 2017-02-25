
<?if($errors):?>
<?foreach($errors as $error):?>
<div class="error"><?=$error?></div>
<?endforeach?>
<?endif?>

<?=Form::open(Kohana::$config->load('conf_route.account'))?>
<h2>Выбор клуба в который необходимо перейти::</h2>
<?foreach($clubs as $clubs):?>
<?=$clubs->club_name?>
<?=Form::radio('club_id', $clubs->id);?>
<hr>
<?endforeach?>

<?=Form::label('ok', "Подтвердить");?>:
<?=Form::submit('chandeclub','Измеить', array("id"=>'$user_array[$i]->id', "class"=>"ok_button"));?>
</tr>
<?=Form::close()?>
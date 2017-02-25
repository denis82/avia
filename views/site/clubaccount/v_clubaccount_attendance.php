
<h2>Участники клуба::</h2>
<?foreach($users as $users):?>

<?=HTML::anchor(Kohana::$config->load('conf_route.clubmenu_attendance_us').$users->id,$users->username)?>
 
<hr>
<? endforeach; ?>
<div>
    <div>Сообщеия</div>
    <div><?=Form::open(Kohana::$config->load('conf_route.clubmenu_attendance'));?>
       <?=Form::textarea('text','',array('size' => 20,'rows'=>10, 'cols'=>80));?></br>
        <?=Form::submit('massage','Отправить');?>
        <?=Form::close();?>
    </div>
    <div>
        <?foreach($users as $users):?>
            
            <hr>
            <? endforeach; ?>
    </div>
</div>
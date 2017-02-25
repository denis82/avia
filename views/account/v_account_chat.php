<h2>Личная переписка.</h2>
<div>
    <div>Сообщения</div>
    <div><?=Form::open(Kohana::$config->load('conf_route.menu_chat_us').$id_user);?>
       <?=Form::textarea('text','',array('size' => 20,'rows'=>10, 'cols'=>80));?></br>
        <?=Form::submit('massage','Отправить');?>
        <?=Form::close();?>
    </div>
</div>
<div class="massage_window"> 
    <div>
        <?foreach($massages as $massage):?>
           
            <p><?=$massage->user->username;?>:  <?=$massage->text;?></p>
           <p> <?=$massage->date;?></p>
            <hr>
            <? endforeach; ?>
    </div>
</div>


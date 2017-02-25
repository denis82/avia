<h2>
    Резерв день
</h2>
<?if(isset($massage_save_reserv)):?>
<p class="checkbox_dayreserv" id="save_massage"><?=$massage_save_reserv;?></p>
<?endif?>
<?=Form::open(Kohana::$config->load('conf_route.menu_dayreserv')) ?>
<table class="tabletime" border="2">
 
        <tr>
            <td class="th" width="300"></td>
            <td width="300"><?=Form::input("dayreserv", $select_date, array('class' => 'simple_datepicker', 'style'=>'border:0;')) ?></td>
        </tr>
        <tr>
            <td width="300"></td>
            <td width="300">
                <SELECT NAME="plane_dayreserv" >
                     <OPTION VALUE=""><?=$select_resourse;?>
                     <?foreach($planeArray as $planeArray):?>
                     <OPTION VALUE="<?=$planeArray->id?>"><?=$planeArray->plane?>
                     <?endforeach?>
                     <?= Form::submit("find_resourse", "Найти") ?>
                     <?= Form::close() ?>
           </td>
        </tr>

</table>
<div id="write_massage_switch">Написать</div>
<div id="write_massage">
<div>Сообщения</div>
        <div><?=Form::open(Kohana::$config->load('conf_route.menu_dayreserv'));?>
             <?=Form::textarea('text','',array('size' => 20,'rows'=>10, 'cols'=>80));?></br>
             <?=Form::submit('massage','Отправить');?>
             <?=Form::close();?>
        </div>
</div>
<div class="massage_window"> 
    <div>
        <?foreach($massages as $massage):?>
           
            <p><?php 
            if($massage->user->category == 0)
            {
               echo HTML::anchor('#',$massage->user->username,array('class'=>'admin_color')); 
            }
            else 
            {
                echo HTML::anchor('#',$massage->user->username,array('class'=>'user_color'));
            }
            ?>:  <?=$massage->text;?></p>
           <p> <?=$massage->date;?></p>
            <hr>
            <? endforeach; ?>
    </div>
</div>
<?if($link):?>
<?=HTML::anchor(Kohana::$config->load('conf_route.account_page'),'История сообщений')?> 
<?endif?>
<?=$pagination;?>




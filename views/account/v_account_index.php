
<?//=HTML::anchor(Kohana::$config->load('conf_route.menu_profile'), 'ред', array("class" => "redactor_personal_info"))?>
<h2>Личный кабинает</h2> 


<?//=Form::open (Kohana::$config->load('conf_route.account'),array('enctype'=>'multipart/form-data'))?>

    <table width="630">
       
        
            <tr >
                <td rowspan=4 width="100"> <div id="space_admin_image"><?//=HTML::image(Kohana::$config->load('foto_route.foto_ava').$personal_info->img)?></div></td>
                <td>
                    <div class="admin_panel"><?//=Form::label('username', 'Ник')?></div>
                    </br>
                    <div><?//=Form::input('username',$personal_info->username, array('size' => 30))?></div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="admin_panel"><?//=Form::label('email', 'Email')?></div>
                    </br>
                    <div><?//=Form::input('email',$personal_info->email, array('size' => 30))?></div></td>
            </tr>
             <tr>
                 <td>
                     <div class="admin_panel"><?//=Form::label('telephone', 'Телефон')?></div>
                    </br>
                    <div><?//=Form::input('telephone',$personal_info->telephone, array('size' => 30))?></div>
                 </td>
            </tr>
             <tr>
                <td></td>
            </tr>
        
    </table>
<p id="account_info_action_switch">Подробенее...</p>
 <div id="account_info_action">   
    <div class="admin_panel"><?//=Form::label('name', 'Имя')?></div>
    </br>
    <div><?//=Form::input('name',$info['name'], array('size' => 30))?></div>
    </br>
     <div class="admin_panel"><?//=Form::label('sur_name', 'Фамилия')?></div>
    
    </br>
    <div><?///=Form::input('sur_name',$info['sur_name'], array('size' => 30))?></div>
    
    </br>
    <div class="admin_panel"><?//=Form::label('born_date', 'Дата рождения')?></div>
    </br>
    <div><?//=Form::input('born_date', $info['born_date'] , array('size' => 30,'class'=>'simple_datepicker'))?></div>
    
    </br>
    <div class="admin_panel"><?//=Form::label('fly_since', 'Летаю с')?></div>
    </br>
    <div>
    <SELECT NAME="fly_since" VALUE="<?//=$info['fly_since']?>">
                               
                                    <?php (int)$date = date("Y");
                                    $x = ($date*1)-50;
                                    while($x <= $date)
                                    {
                                        echo '<OPTION VALUE="'.$x.'">'.$x;
                                        $x++;
                                    }?>
                             </SELECT> </div>
    
    </br>
    <div class="admin_panel"><?//=Form::label('favorite_type', 'Любимые типы')?></div>
    </br>
    <div><?//=Form::input('favorite_type',$info['favorite_type'], array('size' => 30))?></div>
    
    </br>
    <div class="admin_panel"><?//=Form::label('city', 'Город')?></div>
    </br>
    <div><?//=Form::input('city', $info['city'], array('size' => 30))?></div>
    
    </br>
    <div class="admin_panel"><?//=Form::label('adress', 'Адрес')?></div>
    </br>
    <div><?//=Form::input('adress', $info['adress'] , array('size' => 30))?></div>
    
    </br>
    <div class="admin_panel"><?//=Form::label('marker_bc', 'Класс и тип')?></div>
    </br>
    <div><SELECT NAME="marker_bc">
    <OPTION VALUE="<?//=$info['marker_bc'] ?>" selected><?//=$info['marker_bc']?>
    <OPTION VALUE="С одним двигателем, сухопутный">С одним двигателем, сухопутный
    <OPTION VALUE="С одним двигателем, гидросамолет">С одним двигателем, гидросамолет
    <OPTION VALUE="Многодвигательный, сухопутный" >Многодвигательный, сухопутный
    <OPTION VALUE="Многодвигательный, гидросамолет">Многодвигательный, гидросамолет
</SELECT></div>
    
    </br>
    <div class="admin_panel"><?//=Form::label('type_license', 'Тип лиензии')?></div>
    </br>
    <div><SELECT NAME="type_license">
    <OPTION VALUE="<?//=$info['type_license']?>" selected><?//=$info['type_license']?> 
    <OPTION VALUE="Свидетельство частного пилота" >Свидетельство частного пилота
    <OPTION VALUE="Свидетельство коммерческиго пилота">Свидетельство коммерческиго пилота
    <OPTION VALUE="Свидетельство линейного пилота" >Свидетельство линейного пилота
    <OPTION VALUE="Свидетельство пилота СЛА">Свидетельство пилота СЛА
    <OPTION VALUE="Свидетельство пилота планера">Свидетельство пилота планера
</SELECT></div>
    
    </br>
    <div class="admin_panel"><?//=Form::label('another_marks', 'Другие отметки')?></div>
    </br>
    <div><SELECT NAME="another_marks">
    <OPTION VALUE="<?//=$info['another_marks']?>" selected><?//=$info['another_marks']?>            
    <OPTION VALUE="Право выполнения ночных полетов" >Право выполнения ночных полетов
    <OPTION VALUE="Право полетов по приборам">Право полетов по приборам
    <OPTION VALUE="Право работы инструктором" >Право работы инструктором
</SELECT></div>
    
    </br>
    <div class="admin_panel"><?//=Form::label('license_till', 'Срок действия лиензии')?></div>
    </br>
    <div><?//=Form::input('license_till',$info['license_till'], array('size' => 30,'class' => 'simple_datepicker'))?></div>
    
    </br>
    <div class="admin_panel"><?//=Form::label('graph', 'Графа')?></div>
    </br>
    <div><?//=Form::input('graph',$info['graph'], array('size' => 30))?></div>
    
    </br>
    <div class="admin_panel"><?//=Form::label('graph_till', 'Срок действия')?></div>
    </br>
    <div><?//=Form::input('graph_till',$info['graph_till'], array('size' => 30,'class' => 'simple_datepicker'))?></div>
    
    </br>
    <div class="admin_panel"><?//=Form::label('about_me', 'Обо мне')?></div>
    </br>
    <div><?//=Form::textarea('about_me',$info['about_me'], array('size' => 20,'rows'=>10, 'cols'=>35))?></div>
    </br>
    
    <div class="admin_panel"><?//=Form::label('images', 'Загрузить изображения')?>:</div>
    </br>
    <div><?//=Form::file('images[]', array('id' => 'multi'))?></div>
    </br>
 </div>
<?//=Form::hidden('csrf', Security::token())?>
<?//=Form::submit('infouser', 'Изменить данные')?>
<?//=Form::close()?>


<div class="massage_window"> 
    
        <?//foreach($massages as $massage):?>
        <?php 
        /*if($massage->status == 1)
        {
           echo '<div id="'.$massage->id.'" class="signal_one_massage">'; 
        }
        else 
        {
            echo '<div>'; 
        }*/
        ?>
           
            <p><?php 
            //if($massage->user->category == 0)
            //{
               //echo HTML::anchor('#',$massage->user->username,array('class'=>'admin_color')); 
           // }
            //else 
           // {
                //echo HTML::anchor('#',$massage->user->username,array('class'=>'user_color'));
           // }
            ?>:  <?//=$massage->text;?></p>
           <p> <?//=$massage->date;?></p>
            <hr>
            </div>

            <?// endforeach; ?>

</div>
<?//if($link):?>
<?//=HTML::anchor(Kohana::$config->load('conf_route.account_page'),'История сообщений')?> 
<?//endif?>
<?//=$pagination;?>
<div id="write_massage_switch">Написать</div>
<div id="write_massage">
<div>Сообщения</div>
        <div><?//=Form::open(Kohana::$config->load('conf_route.account'));?>
             <?//=Form::textarea('text','',array('size' => 20,'rows'=>10, 'cols'=>80));?></br>
             <?//=Form::submit('massage','Отправить');?>
             <?//=Form::close();?>
        </div>
</div>
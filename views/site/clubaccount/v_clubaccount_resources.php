
<h2>
    Ресурсы
</h2>

    <div id="opros">
 
        <div id="radio1">
            <?=Form::open(Kohana::$config->load('conf_route.clubmenu_plane'))?>
            <?=Form::button('create', 'Завести новый ресурс')?>
            <?=Form::close()?>
        </div>
       </br>
        <div id="progressbar"></div>
    </div>



<table width="630" bordercollapse="collapse" border="1" class="table_resourse">
    <thead>
        <tr>
            <th class="table_resourse_th">Название самолета</th>
            <th class="table_resourse_th" width="16" colspan="2"></th>
            
        </tr>
    </thead>
    <tbody>
        <?foreach($plane as $plane):?>
        <tr >
            <td><?=HTML::image(Kohana::$config->load('foto_route.foto_plane_small').$plane->plane_img,array('id'=>$plane->id,'class'=>'remove_resource'))?><?=$plane->plane?></td>
            <td width="16" ><?=HTML::anchor(Kohana::$config->load('conf_route.clubmenu_plane_edit').$plane->id, HTML::image("media/img/Edit_16x16.png"))?></td>
            <td width="16"><?=HTML::image("media/img/Remove_16x16.png",array('id'=>$plane->id,'class'=>'remove_resource'))?></td>
        </tr>
        <?endforeach?>
    </tbody>
</table>



<!--ВЫВОД КАРТИНКИ------------------------------------------------------------>

<?if (isset($attributes)):?>

<table border="1">
    <thead>
        <tr>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?foreach($attributes as $attr):?>
        <tr>
            <td>Воздушное судно</td>
            <td><?=$attr['resource_id']?></td>
            <td></td>
        </tr>
        <tr>
            <td>Название воздуного судна</td>
            <td><?=$attr['plane']?></td>
            <td></td>
        </tr>
        <tr>
            <td>Cерийный номер</td>
            <td><?=$attr['ser_num']?></td>
            <td></td>
        </tr>
        <tr>
            <td>Дата изготовления</td>
            <td><?=$attr['date_reliased']?></td>
            <td></td>
        </tr>
        <tr>
            <td>Собственник</td>
            <td><?=$attr['property']?></td>
            <td></td>
        </tr>
        <tr>
            <td>Место регистрации(регион РФ)</td>
            <td><?=$attr['register']?></td>
            <td></td>
        </tr>
        <tr>
            <td>Тип самолета</td>
            <td><?=$attr['type']?></td>
            <td></td>
        </tr>
        <tr>
            <td>Мощность двигателей</td>
            <td><?=$attr['power_of_engine']?></td>
            <td></td>
        </tr>
        <tr>
            <td>Тип и количество двигателей</td>
            <td><?=$attr['type_of_engine']?></td>
            <td></td>
        </tr>
        <tr>
            <td>Часовой налёт</td>
            <td><?=$attr['mileage']?></td>
            <td></td>
        </tr>
        <tr>
            <td>Максимальная взлетная масса</td>
            <td><?=$attr['weigth']?></td>
            <td></td>
        </tr>
        <tr>
            <td>Наличие сертификата летной одности</td>
            <td><?=$attr['sertificat']?></td>
            <td></td>
        </tr>
        <?if($attr['sertificat'] == 'on'):?>
        <tr>
            <td>Годен до</td>
            <td><?=$attr['best_to']?></td>
            <td></td>
        </tr>
        <?endif?>
        <tr>
            <td>Наличие страховки</td>
            <td><?=$attr['insurance']?></td>
            <td></td>
        </tr>
        <?if($attr['insurance'] == 'on'):?>
        <tr>
            <td>Тип страховки</td>
            <td><?=$attr['type_insurance']?></td>
            <td></td>
        </tr>
        <?endif?>
        <tr>
            <td>Марка горючего</td>
            <td><?=$attr['fuel']?></td>
        </tr>
        <tr>
            <td>Расход горючего</td>
            <td><?=$attr['fuel_consumption']?></td>
        </tr>
        <tr>
            <td>Записи с бортового журнала</td>
            <td><?=$attr['broken_down']?></td>
        </tr>
        <tr>
            <td>Дополнительно</td>
            <td><?=$attr['else_pl']?></td>
        </tr>
        текущая стоимость гор р за литр
        амортизация р за час
        стоимость 50 - ти часовоо ремота
        и 100 часовоо ремота
        <?endforeach?>
    </tbody>
</table>

<?endif?>
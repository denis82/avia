<?if($errors):?>
<?foreach($errors as $error):?>
<div class="error"><p class="error_text"><?=$error?></p></div>
<?endforeach?>
<?endif?>
<?=HTML::anchor(Kohana::$config->load('conf_route.clubmenu_resources'), 'назад', array("class" => "redactor_personal_info"))?>
<h2>
    Добавление ресурса
</h2>
    
        <?=Form::open (Kohana::$config->load('conf_route.clubmenu_plane'),array('enctype'=>'multipart/form-data'))?>
        
    <table width="640">
                <tr>
                <td><?=Form::label('transport', 'Воздушное судно')?></td>
                <td>
                 <SELECT NAME="transport">
                                <OPTION VALUE="">-
                         <?foreach($resourcesArray as $resourc):?>
                            
                            <OPTION VALUE="<?=$resourc->id?>"><?=$resourc->transport?>
                        <?endforeach?> </SELECT>  
                </td>
                </tr>
            
                <tr>
                    <td><?=Form::label('plane', 'Название воздуного судна')?></td>
                    <td><?=Form::input('plane',$resource['plane']);?></td>
                 </tr>
                 <tr>
                    <td><?=Form::label('ser_num', 'Серийный номер')?></td>
                    <td><?=Form::input('ser_num',$resource['ser_num']);?></td>
                 </tr>
                 <tr>
                    <td><?=Form::label('date_reliased', 'Дата изготовления')?></td>
                    <td><?=Form::input('date_reliased',$resource['date_reliased'],array('type'=>'text','class'=>'simple_datepicker'))?></td>
                 </tr>
                 <tr>
                    <td><?=Form::label('property', 'Собственник')?></td>
                    <td><?=Form::input('property',$resource['property']);?></td>
                 </tr>
                 <tr>
                    <td><?=Form::label('register', 'Место регистрации(регион РФ)')?></td>
                    <td><?=Form::input('register',$resource['register']);?></td>
                 </tr>
                <tr>
                    <td><?=Form::label('type', 'Тип самолета')?></td>
                    <td><?=Form::input('type',$resource['type']);?></td>
                 </tr>
                 <tr>
                    <td><?=Form::label('power_of_engine', 'Мощность двигателей')?></td>
                    <td><?=Form::input('power_of_engine',$resource['power_of_engine']);?></td>
                 </tr>
                 <tr>
                    <td><?=Form::label('type_of_engine', 'Тип и количество двигателей')?></td>
                    <td><?=Form::input('type_of_engine',$resource['type_of_engine']);?></td>
                 </tr>
                 <tr>
                    <td><?=Form::label('mileage', 'Часовой налёт')?></td>
                    <td><?=Form::input('mileage',$resource['mileage']);?></td>
                 </tr>
                 <tr>
                    <td><?=Form::label('weigth', 'Максимальная взлетная масса')?></td>
                    <td><?=Form::input('weigth',$resource['weigth']);?></td>
                 </tr>
                 <tr>
                    <td><?=Form::label('sertificat', 'Наличие сертификата летной одности')?></td>
                    <td><?=Form::checkbox('sertificat');?></td>
                 </tr>
                 <tr>
                    <td><?=Form::label('sertificat_fly_price', 'Стоимость сертификата летной одности')?></td>
                    <td><?=Form::input('sertificat_fly_price',$resource['sertificat_fly_price']);?></td>
                 </tr>
                 <tr>
                    <td><?=Form::label('best_to', 'Годен до')?></td>
                    <td><?=Form::input('best_to',$resource['best_to'],array('type'=>'text','class'=>'simple_datepicker'))?></td>
                 </tr>
                 <tr>
                    <td><?=Form::label('insurance', 'Наличие страховки')?></td>
                    <td><?=Form::checkbox('insurance');?></td>
                 </tr>
                 <tr>
                    <td><?=Form::label('insurance_price', 'Стоимость страховки')?></td>
                    <td><?=Form::input('insurance_price',$resource['insurance_price']);?></td>
                 </tr>
                 <tr>
                    <td><?=Form::label('type_insurance', 'Тип страховки')?></td>
                    <td><?=Form::select('type_insurance',array('khkh','efe'));?></td>
                 </tr>
                 <tr>
                    <td><?=Form::label('fuel', 'Марка горючего')?></td>
                    <td><?=Form::select('fuel',array('khkh','efe'));?></td>
                 </tr>
                 <tr>
                    <td><?=Form::label('fuel_consumption', 'Расход горючего')?></td>
                    <td><?=Form::input('fuel_consumption',$resource['fuel_consumption']);?></td>
                 </tr>
                 <tr>
                    <td><?=Form::label('transprt_nalog', 'Транспортный налог')?></td>
                    <td><?=Form::input('transprt_nalog',$resource['transprt_nalog']);?></td>
                 </tr>
                 <tr>
                    <td><?=Form::label('hour_trafic_fuel', 'Расход часовой')?></td>
                    <td><?=Form::input('hour_trafic_fuel',$resource['hour_trafic_fuel']);?></td>
                 </tr>
                 <tr>
                    <td><?=Form::label('fuel_price', 'Стоимость топлива')?></td>
                    <td><?=Form::input('fuel_price',$resource['fuel_price']);?></td>
                 </tr>
                 <tr>
                    <td><?=Form::label('price_sertificat', 'Стоимость сертификации')?></td>
                    <td><?=Form::input('price_sertificat',$resource['price_sertificat']);?></td>
                 </tr>
                 <tr>
                    <td><?=Form::label('broken_down', 'Записи с бортового журнала')?></td>
                    <td><?=Form::textarea('broken_down',$resource['broken_down'],array('type'=>'text','cols'=>40,'rows'=>6))?></td>
                 </tr>
                 <tr>
                    <td><?=Form::label('else_pl', 'Дополнительно')?></td>
                    <td><?=Form::textarea('else_pl',$resource['else_pl'],array('type'=>'text','cols'=>40,'rows'=>6))?></td>
                 </tr>
                 <tr>
                    <td><?=Form::label('images', 'Загрузить изображения')?>:</td>
                    <td><?=Form::file('images[]', array('id' => 'multi'))?></td>
                 </tr>
                 <tr>
                    <td></td>
                    <td><?=Form::submit('add','Сохранить')?></td>
                 </tr>
                 </table>
            <?=Form::close()?>

	


<div id="cre"></div>
<table border="2" class="cuntwork_table">
    <thead>
        <tr class="cuntwork_table_head">
            <th width="220">Статьи затрат</th>
            <th width="200"><table  class="cuntwork_table_month">      
            <tr >
                
                <td width="160" >
                    <table class="cuntwork_table_month" width="226">
                        <tr>
                            <td width="20" class="cuntwork_table_year_button_min" class="cuntwork_button_up"><</td>
                            <td width="160" class="cuntwork_table_year_button_change"><?=$year_today;?></td>
                            <td width="20" class="cuntwork_table_year_button_max" class="cuntwork_button_up">></td>
                        </tr>
                        <tr>
                            <td width="20" class="cuntwork_table_month_button_min" class="cuntwork_button_down"><</td>
                            <td width="160" class="cuntwork_table_month_button_change"></td>
                            <td width="20" class="cuntwork_table_month_button_max" class="cuntwork_button_down">></td>
                        </tr>
                    </table> </td>
                
            </tr>
        
    </table>
    </th>
            <th width="210">Годовой баланс</th>
        </tr>
    </thead>
    <tbody>
        <tr class="cuntwork_table_sl">
            <td colspan="3">постоянные затраты</td>
            
        </tr>
        <tr>
            <td>Выплата по кредиту</td>
            <td><?=Form::input('credit',$count_info->credit, array('size' => 26,'id'=>'credit','class'=>"blur_save"))?><?=HTML::image("media/img/Save_16x16.png",array('class'=>'save_att_data','abbr'=>'credit'))?></td>
            <td id="credit_year"><?=$count_info_year_arr[0];?></td>
        </tr>
        <tr>
            <td>Реклама</td>
            <td><?=Form::input('advertise',$count_info->advertise, array('size' => 26,'id'=>'advertise','class'=>"blur_save"))?><?=HTML::image("media/img/Save_16x16.png",array('class'=>'save_att_data','abbr'=>'advertise'))?></td>
            <td id="advertise_year"><?=$count_info_year_arr[1];?></td>
        </tr><tr>
            <td><p class="underline">Страховка самолета, руб</p></td>
            <td><h3 id="switch_price">+</h3>
                <div id="price_insurance">
                    <?foreach($plane_info as $plane_info_pr):?>
                    <?=$plane_info_pr->plane?>-
                    <?=$plane_info_pr->price_insurance?></br>
                    <?endforeach?>
                </div>
            </td>
            <td id="insuarence_pl_year"><?=$price['insurance'];?></td>
        </tr><tr>
            <td>Страхование личной ответственности участников</td>
            <td></td>
            <td id="insuarence_hum_year"><?=$count_info_year_arr[3];?></td>
        </tr><tr>
            <td>Аренда ангара, руб</td>
            <td><?=Form::input('rent_garage',$count_info->rent_garage, array('size' => 26,'id'=>'rent_garage','class'=>"blur_save"))?><?=HTML::image("media/img/Save_16x16.png",array('class'=>'save_att_data','abbr'=>'rent_garage'))?></td>
            <td id="rent_garage_year"><?=$count_info_year_arr[4];?></td>
        </tr><tr>
            <td>Аренда офиса, руб</td>
            <td><?=Form::input('rent_office',$count_info->rent_office, array('size' => 26,'id'=>'rent_office','class'=>"blur_save"))?><?=HTML::image("media/img/Save_16x16.png",array('class'=>'save_att_data','abbr'=>'rent_office'))?></td>
            <td id="rent_office_year"><?=$count_info_year_arr[5];?></td>
        </tr><tr>
            <td>Сертификат летной годности</td>
            <td><h3 id="switch_price_fly">+</h3>
                <div id="sertificat_fly_price">
                    <?foreach($plane_info as $plane_info_fly):?>
                    <?=$plane_info_fly->plane?>-
                    <?=$plane_info_fly->sertificat_fly_price?></br>
                    <?endforeach?>
                </div>
            </td>
            <td id="sertif_fly_year"><?=$count_info_year_arr[6];?></td>
        </tr><tr>
            <td>Транспортный налог</td>
            <td><h3 id="switch_price_nalog">+</h3>
                <div id="transprt_nalog">
                    <?foreach($plane_info as $plane_info_nal):?>
                    <?=$plane_info_nal->plane?>-
                    <?=$plane_info_nal->transprt_nalog?></br>
                    <?endforeach?>
                </div>
            </td>
            <td id="transport_bill_year"><?=$count_info_year_arr[7];?></td>
        </tr><tr>
            <td>Администратор и уборщица</td>
            <td><?=Form::input('pay_adm',$count_info->pay_adm, array('size' => 26,'id'=>'pay_adm','class'=>"blur_save"))?><?=HTML::image("media/img/Save_16x16.png",array('class'=>'save_att_data','abbr'=>'pay_adm'))?></td>
            <td id="pay_adm_year"><?=$count_info_year_arr[8];?></td>
        </tr><tr>
            <td>Содержание офиса</td>
            <td><?=Form::input('pay_office',$count_info->pay_office, array('size' => 26,'id'=>'pay_office','class'=>"blur_save"))?><?=HTML::image("media/img/Save_16x16.png",array('class'=>'save_att_data','abbr'=>'pay_office'))?></td>
            <td id="pay_office_year"><?=$count_info_year_arr[9];?></td>
        </tr>
        <tr>
            <td>Праздничные обеды</td>
            <td><?=Form::input('dinner',$count_info->dinner, array('size' => 26,'id'=>'dinner','class'=>"blur_save"))?><?=HTML::image("media/img/Save_16x16.png",array('class'=>'save_att_data','abbr'=>'dinner'))?></td>
            <td id="dinner_year"><?=$count_info_year_arr[10];?></td>
        </tr>
        <tr>
            <td>Летнее барбекю</td>
            <td><?=Form::input('barbequ',$count_info->barbequ, array('size' => 26,'id'=>'barbequ','class'=>"blur_save"))?><?=HTML::image("media/img/Save_16x16.png",array('class'=>'save_att_data','abbr'=>'barbequ'))?></td>
            <td id="barbequ_year"><?=$count_info_year_arr[11];?></td>
        </tr>
        <tr>
            <td>Резерв на страховой день</td>
            <td><?=Form::input('reserv_suar_day',$count_info->reserv_suar_day, array('size' => 26,'id'=>'reserv_suar_day','class'=>"blur_save"))?><?=HTML::image("media/img/Save_16x16.png",array('class'=>'save_att_data','abbr'=>'reserv_suar_day'))?></td>
            <td id="reserv_suar_day_year"><?=$count_info_year_arr[12];?></td>
        </tr>
        <tr>
            <td>Затраты</td>
            <td id="pay_saldo"></td>
            <td id="milk_money_year"></td>
        </tr>
        <tr class="cuntwork_table_sl">
            <td colspan="3">Переменные эксплуатационные затраты</td>
        </tr>
        <tr>
            <td>Прямые операионные затраты</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Сервисное обслуживание по договору</td>
            <td></td>
            <td></td>
        </tr>
        <tr class="cuntwork_table_sl">
            <td colspan="3">Доходы</td>
            
        </tr>
        <tr>
            <td>Вступительный взнос</td>
            <td><?=$club_info->tax?></td>
            <td></td>
        </tr>
        <tr>
            <td>Месячные сборы</td>
            <td><?=Form::input('month_tax','', array('size' => 26,'id'=>'month_tax','class'=>"blur_save"))?><?=HTML::image("media/img/Save_16x16.png",array('class'=>'save_att_data','abbr'=>'month_tax'))?></td>
            <td></td>
        </tr>
        <tr>
            <td>Поступление от эксплуатаии ресурсов</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Доходы от аренды самолета</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Поступление денег</td>
            <td></td>
            <td></td>
        </tr>
        <tr class="cuntwork_table_sl">
            <td colspan="3">Баланс</td>
        </tr>
    </tbody>
</table>
</br>
<?=HTML::image("media/img/Save_24x24.png",array('class'=>'save_att_data','abbr'=>'save_all_change_buh'))?>
<div class="cont_month" id="today"><?=$today?></div>
<div class="cont_month" id="id_club"><?=$id_club?></div>

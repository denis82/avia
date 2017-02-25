
<h2>Поиск аэроклубов</h2>
<p>Вы можете произвести поиск интересующего Вас аэроклуба или лётной школы:</p>
<?=Form::open (Kohana::$config->load('conf_route.menu_clubs'))?>
<table width=630 >
        <tr>
                <td><?=Form::label('transport', 'Город или область обучения:')?></td>
                <td> <SELECT NAME="region" >
                     <OPTION VALUE="">
                     <?foreach($regions as $region):?>
                   
                     <OPTION VALUE="<?=$region->id?>"><?=$region->region?>
                     <?endforeach?>
   
                 </SELECT ></td>
                    
                </tr>
               
                
                <tr>
                <td><?//=Form::label('transport', 'Услуги, деятельность')?></td>
                <td><?//=Form::select('transport','q');?></td>
                    
                </tr>
       
         
        
</table> 
<?=Form::submit('search', 'Поиск')?>
<?=Form::close()?>
<div class="create_new_club"><?=HTML::anchor(Kohana::$config->load('conf_route.menu_addclub'), 'Создать новый клуб');?></div>
<?$uri = Kohana::$config->load('conf_route.menu_infoclub');?>

<?foreach($all_clubs as $all_clubs):?>
<?=HTML::anchor($uri.$all_clubs->id, $all_clubs->club_name);?>

<table  width=630 heigt=100>
        <tr>
            <td rowspan=4 width=200 heigt=150><div class="clubs_img_cont"><?=HTML::image("media/img/foto_clubs_small/".$all_clubs->ava_club);?></div></td>
            <td> из табл  коротко о клубе</td>
            
        </tr>
        <tr>
            <td>типы</td>
        </tr>
         <tr>
            <td>услуги</td>
        </tr>
         <tr>
            <td>контактная инфа </td>
        </tr>
         
        
</table>    

 
<hr>
<?endforeach;?>
<?=$pagination;?>
<h2>Заявки на участие</h2>
<a href = "/dem/clubaccount/myclub" class = "redactor_personal_info">назад</a>
<?if($user_array):?>
<?php 
$i=0;
while(isset($user_array[$i]) and $user_array[$i] != null)
{
    echo '<div id="space_club_image" class="toclub" class="'.$user_array[$i]->id.'">'.HTML::anchor(Kohana::$config->load('conf_route.clubmenu_toclub_rq').$user_array[$i]->id,HTML::image("media/uploads/".$user_array[$i]->img))."</div>";
    echo '<div>'.$user_array[$i]->username."</div>";
    echo "<div>".$user_array[$i]->email."</div>";
    
    
   
    $i++;
    
    echo '<hr>';
}
    ?>

<?endif?>

отобразить сообение от



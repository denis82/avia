<?php

namespace app\controllers;

class AccountController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('v_account_index');
    }
    
//============== ДОКУМЕНТЫ =====================================================


    public function action_orders() {

        $id = $this->user->id;
        $score_number_array = array();
        $i = 0;
        $score_number = ORM::factory('fly')->where('user', '=', $id)->find_all();
        foreach ($score_number as $score_number) 
        {
            $score_number_array[$i] = $score_number->time_uniq;
            $i++;
        }
        $score_number_array = array_unique($score_number_array);

        $content = View::factory(Kohana::$config->load('conf_route.v_menu_orders'));
    }

//============== НАСТРОЙКИ =====================================================


    public function action_settings() {

        $id = $this->user->id;

        if (isset($_POST['create_club'])) {

       $filename =  Text::random("1234567890ABCDEFGHIJKLMOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz", 10) ;

            try 
            {
                $role = ORM::factory('role')->where('name', '=', 'admin')->find(); // новый клуб

                $new_club = ORM::factory('club');
                $new_club->values($_POST, array('club_name','city','time_origin','time_end','tax'));
                $new_club->club_uniq = $filename;
                $new_club->user_id = $this->user->id;
                $new_club->ava_club = 'default.jpg';
                $new_club->save();

                $club_new = ORM::factory('club')->where('user_id', '=', $id)->and_where('club_name', '=','')->find();
                $x = ORM::factory($this->tbl_user)->where('id', '=', $id)->find();
                $x->id_club = $club_new->id;
                $x->save();

                $info = ORM::factory('infoadmin');// анкетные данные на админа
                $info->id_user = $id;
                $info->values($_POST, array('name','sur_name','father_name','born_date',
                                            'adress','marker_bc','type_license','another_marks',
                                             'license_till','graph','graph_till'));
                $info->save();

                $res = Model::factory('Klub')->rolersusers($id);
               // ORM::factory('roles_users')->where('user_id', '=', '$id')->and_where('role_id','>', 1)find();
                
                
                if (!$this->auth->logged_in('admin')) 
                {
                    Model::factory('Klub')->add_role($id, $role);
                }
                header("Location:".$_SERVER["PHP_SELF"]);
                exit;
                $this->request->redirect(Kohana::$config->load('conf_route.account'));
               
            } 
            catch (ORM_Validation_Exception $e) 
            {
                $errors = $e->errors('auth');
            }
        }

        $info = ORM::factory('infoadmin')->where('id_user', '=', $id)->find();
        
        // if ($info->id_user != NULL) {
        //     $content = View::factory(Kohana::$config->load('conf_route.v_menu_settings_s'))
        //         ->bind('user', $this->user)
        //         ->bind('errors', $errors);
        // }
        // else{
         $content = View::factory(Kohana::$config->load('conf_route.v_menu_settings'))
                ->bind('user', $this->user)
                ->bind('errors', $errors);
        // }

        // Выводим в шаблон
        $this->template->page_title = 'Личный кабинет';
        $this->template->block_center = array($content);
    }

    
}

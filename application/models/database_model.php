<?php

class Database_model extends CI_Model {

    public function get_allinformation_user() {
        $table = array();
        $this->db->where('id', '1'); //Aqui vou buscar o utilizador actualmente logado, ou seja buscar o id do utilizador para buscar o nome
        $query = $this->db->get('user');

        $i = 0;
        foreach ($query->result() as $row) {
            $id = $row->id;
            $name = $row->Name;
            $url_image = $row->url_image;
            $table[$i] = array('id' => $id, 'name' => $name, 'url' => $url_image);
            $i++;
            break;
        }
        return $table[0];
    }

    public function get_alluser($id_user) {
        $table = array();
        $this->db->where('id !=', $id_user);
        $query = $this->db->get('user');

        $i = 0;
        foreach ($query->result() as $row) {
            $id = $row->id;
            $name = $row->Name;
            $url_image = $row->url_image;
            $table[$i] = array('id_user' => $id, 'name_user' => $name, 'url_user' => $url_image);
            $i++;
            //// echo $id.$name.$url_image;
        }
        if ($i) {
            return $table;
        } else {
            return false;
        }
    }

    public function count_users($id_user) {

        $this->db->not_like('id', $id_user);
        return $this->db->count_all_results('user');
    }

    public function count_users_friends($id_user) {

        $this->db->where('id_user =', $id_user);
        return $this->db->count_all_results('friends');
    }

    public function get_user_friend($id_user) {
        $table = array();
        $friends = array();
        $i = 0;
        $j = 0;

        $this->db->where('id_user =', $id_user);
        $query = $this->db->get('friends');

        foreach ($query->result() as $row) {
            $id_friend = $row->id_friend;
            $friends[$i] = array('id_friend' => $id_friend);
            $i++;
        }

        for ($index = 0; $index < $i; $index++) {
            $id_user_friend = $friends[$index]['id_friend'];

            $this->db->where('id', $id_user_friend); //Aqui vou buscar o utilizador actualmente logado, ou seja buscar o id do utilizador para buscar o nome
            $query2 = $this->db->get('user');

            foreach ($query2->result() as $row2) {
                $id = $row2->id;
                $name = $row2->Name;
                $url_image = $row2->url_image;
                $table[$j] = array('id' => $id, 'name' => $name, 'url' => $url_image);
                $j++;
                break;
            }
        }


        if ($i && $j) {
            return $table;
        } else {
            return false;
        }
    }

    public function get_user_not_friend($id_user) {
        $table = array();
        $friends[0] = $id_user;
        $i = 1;
        $j = 0;
        $equal_guy = array();
        $k = 0;

        //Get all id_friends of user logged

        $this->db->where('id_user =', $id_user);
        $query = $this->db->get('friends');

        foreach ($query->result() as $row) {
            $id_friend = $row->id_friend;
            $friends[$i] = $id_friend;
            $i++;
        }

        //Get all not friends from user logged

        $this->db->where_not_in('id', $friends);
        $query2 = $this->db->get('user');
        foreach ($query2->result() as $row2) {
            $id = $row2->id;
            $name = $row2->Name;
            $url_image = $row2->url_image;
            $table[$j] = array('id_user' => $id, 'name_user' => $name, 'url_user' => $url_image);
            $j++;
        }
//       for ($index = 0; $index < $j; $index++) {
//           echo $table[$index]['name_user']."<br/>";
//       }

        if ($i && $j) {
            return $table;
        } else {
            return false;
        }
    }

    public function count_users_not_friends($id_user) {
        $table = array();
        $friends[0] = $id_user;
        $i = 1;
        $j = 0;
        $equal_guy = array();
        $k = 0;

        //Get all id_friends of user logged

        $this->db->where('id_user =', $id_user);
        $query = $this->db->get('friends');

        foreach ($query->result() as $row) {
            $id_friend = $row->id_friend;
            $friends[$i] = $id_friend;
            $i++;
        }

        //Get all not friends from user logged

        $this->db->where_not_in('id', $friends);
        return $this->db->count_all_results('user');
    }

    public function add_friend($id_user, $id_friend) {
        $data = array(
            array(
                'id_user' => $id_user,
                'id_friend' => $id_friend
            ),
            array(
                'id_user' => $id_friend,
                'id_friend' => $id_user
            )
        );
        $this->db->insert_batch('friends', $data);
    }

    public function get_all_news($id_user) {

        //Get all news of user logged
        $i = 0;
        $this->db->where('id_user =', $id_user);
        $query = $this->db->get('news');

        foreach ($query->result() as $row) {
            $url_icon = $row->Url_icon;
            $url_site = $row->Url_site;
            $title = $row->title;
            $table[$i] = array('url_icon' => $url_icon, 'url_site' => $url_site, 'title' => $title);
            $i++;
        }
        if ($i) {
            return $table;
        } else {
            return false;
        }
    }

    public function count_users_news($id_user) {

        $this->db->where('id_user =', $id_user);
        return $this->db->count_all_results('news');
    }

    public function get_all_user_videos($id_user) {

        //Get all news of user logged
        $i = 0;
        $this->db->where('id_user =', $id_user);
        $query = $this->db->get('videos');

        foreach ($query->result() as $row) {
            $id_video = $row->id_video;
            $url_video = $row->url_video;
            $canal_video = $row->canal_video;
            $share_option = $row->share_option;
            $thumbail = $row->thumbail;
            $table[$i] = array('id_video' => $id_video, 'url_video' => $url_video, 'canal_video' => $canal_video, 'share_option' => $share_option, 'thumbail' => $thumbail);
            $i++;
        }
        if ($i) {
            return $table;
        } else {
            return false;
        }
    }

    public function count_users_videos($id_user) {

        $this->db->where('id_user =', $id_user);
        return $this->db->count_all_results('videos');
    }

    public function get_video($id_user, $id_video) {
        $this->db->where('id_video', $id_video);
        $this->db->where('id_user', $id_user);
        $query = $this->db->get('videos');
        $i = 0;
        foreach ($query->result() as $row) {
            $id_video = $row->id_video;
            $url_video = $row->url_video;
            $canal_video = $row->canal_video;
            $share_option = $row->share_option;
            $thumbail = $row->thumbail;
            $table[$i] = array('id_video' => $id_video, 'url_video' => $url_video, 'canal_video' => $canal_video, 'share_option' => $share_option, 'thumbail' => $thumbail);
            $i++;
        }
        if ($i) {
            return $table[0];
        } else {
            return false;
        }
    }

    public function add_video($url_video,$canal_video,$id_user) {
        $data = array(
            'url_video' => $url_video,
            'canal_video' => $canal_video,
            'id_user' => $id_user,
            'share_option' => '0'
        );

        $this->db->insert('videos', $data);
    }

}

?>

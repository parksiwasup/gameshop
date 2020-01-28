<?php
defined('BASEPATH') or exit('No direct script access allowed');
class gameshop_model extends CI_Model
{
    

    public function showdata()
    {
        $this->db->select('*');
        $this->db->from('tb_game');
        $this->db->join('tb_group','tb_game.id_group = tb_group.id_group', 'inner');
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }

    public function read($id_game)
    {
        $this->load->library('session');
        $this->load->model('gameshop_model');
        $this->db->select('*');
        $this->db->from('tb_game');
        $this->db->join('tb_group','tb_game.id_group = tb_group.id_group', 'inner');
        $this->db->where('id_game', $id_game);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $data = $query->row();
            return $data;
        }
        return FALSE;
    }

    public function showgroup()
    {
        $this->db->select('*');
        $this->db->from('tb_group');
        $query = $this->db->get();
        $res = $query->result();
        return $res;
    }

    public function readgroup($id_group)
    {
        $this->load->library('session');
        $this->load->model('gameshop_model');
        $this->db->select('*');
        $this->db->from('tb_group');
        $this->db->join('tb_game','tb_group.id_game = tb_game.id_game', 'inner');
        $this->db->where('id_group', $id_group);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $data = $query->row();
            return $data;
        }
        return FALSE;
    }

    
    public function shownews()
    {
        $this->db->select('*');
        $this->db->from('tb_news');
        $query = $this->db->get();
        $res = $query->result();
        return $res;
    }

    public function readnews($id_news)
    {
        $this->load->library('session');
        $this->load->model('gameshop_model');
        $this->db->select('*');
        $this->db->from('tb_news');
        $this->db->where('id_news', $id_news);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $data = $query->row();
            return $data;
        }
        return FALSE;
    }


}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_m extends CI_Model
{
  function insertData($tabel, $data)
  {
    return $this->db->insert($tabel, $data);
  }

  function selectData($tabel, $where = NULL, $data = NULL)
  {
    $this->db->select('*');
    $this->db->from($tabel);
    if ($where != NULL && $data != NULL) {
      $this->db->where($where, $data);
    }
    $query = $this->db->get();
    return $query;
  }

  function updateData($tabel, $data, $where, $where2)
  {
    $this->db->set($data);
    $this->db->where($where, $where2);
    $query = $this->db->update($tabel, $data);
    return $query;
  }

  public function deleteData($tabel, $data)
  {
    return $this->db->delete($tabel, ['id' => $data['id']]);
  }

  public function diagnosis($id = NULL)
  {
    $this->db->select('diagnosis.* ,symptoms.name as s_name, disease.name as d_name');
    $this->db->from('diagnosis');
    $this->db->join('disease', 'disease.id = diagnosis.id_disease');
    $this->db->join('symptoms', 'symptoms.id = diagnosis.id_symptoms');
    if ($id != NULL) {
      $this->db->where('diagnosis.id_disease', $id);
    }
    return $this->db->get();
  }

  public function getDataSymptoms()
  {
    return $this->db->get('symptoms');
  }
}

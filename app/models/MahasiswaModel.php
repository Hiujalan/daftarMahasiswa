<?php
class mahasiswaModel
{
    private $table = 'mahasiswa';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllmahasiswa()
    {
        $this->db->query('SELECT*FROM ' . $this->table);
        return $this->db->resultSet();
    }
    public function getMahasiswaByNIM($nim)
    {
        $this->db->query('SELECT*FROM ' . $this->table . 'WHERE nim= :nim');
        $this->db->stmt->bindParam(':nim', $nim);
        return $this->db->single();
    }
}

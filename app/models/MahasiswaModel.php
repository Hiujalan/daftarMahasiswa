<?php

class MahasiswaModel {
    private $table = 'mahasiswa';
    private $db;

    public function __construct() {
        try {
            $dsn = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';port=' . DB_PORT;
            $this->db = new PDO($dsn, DB_USER, DB_PASS, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // mode error
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]);
        } catch (PDOException $e) {
            die('Koneksi database gagal: ' . $e->getMessage());
        }
    }

    public function getCountAllMahasiswa(){
        $stmt = $this->db->prepare('SELECT COUNT(id) as total FROM ' . $this->table);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getAllMahasiswa() {
        $stmt = $this->db->prepare("SELECT * FROM {$this->table} ORDER BY id DESC");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function tambahDataMahasiswa($data) {
        $query = "INSERT INTO {$this->table} (nim, nama, prodi, semester, status, created_at)
                  VALUES (:nim, :nama, :prodi, :semester, :status, NOW())";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':nim', $data['nim']);
        $stmt->bindParam(':nama', $data['nama']);
        $stmt->bindParam(':prodi', $data['prodi']);
        $stmt->bindParam(':semester', $data['semester']);
        $stmt->bindParam(':status', $data['status']);
        return $stmt->execute();
    }

    public function updateDataMahasiswa($data) {
        $query = "UPDATE {$this->table}
                  SET nim = :nim, nama = :nama, prodi = :prodi, semester = :semester, status = :status
                  WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':nim', $data['nim']);
        $stmt->bindParam(':nama', $data['nama']);
        $stmt->bindParam(':prodi', $data['prodi']);
        $stmt->bindParam(':semester', $data['semester']);
        $stmt->bindParam(':status', $data['status']);
        $stmt->bindParam(':id', $data['id']);
        return $stmt->execute();
    }

    public function deleteDataMahasiswa($id) {
        $stmt = $this->db->prepare("DELETE FROM {$this->table} WHERE id = :id");
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}

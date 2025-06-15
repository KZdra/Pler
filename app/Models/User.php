<?php

namespace App\Models;

class User extends Model
{
    public function findByUsername($username)
    {
        $stmt = $this->db->prepare("SELECT * FROM users WHERE username = ?");
        $stmt->execute([$username]);
        return $stmt->fetch();
    }
    public function insert($data)
    {
        $stmt = $this->db->prepare("INSERT INTO users (nama,username,password) VALUES (?,?,?)");
        return $stmt->execute([$data['nama'], $data['username'], password_hash($data['password'], PASSWORD_DEFAULT)]);
    }
}

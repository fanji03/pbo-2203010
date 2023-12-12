<?php

namespace App\Models;

use App\Core\Model;

class Film extends Model
{

    public function show()
    {
        $query = "SELECT * FROM tb_film";
        $stmt = $this->db->prepare($query);
        $stmt->execute();

        return $this->selects($stmt);
    }

    public function save()
    {
        $nama = $_POST['nama'];
        $negara_asal = $_POST['negara_asal'];
        $genre = $_POST['genre'];

        $sql = "INSERT INTO tb_film
        SET nama=:nama, negara_asal=:negara_asal, genre=:genre";
        $stmt = $this->db->prepare($sql);

        $stmt->bindParam(":nama", $nama);
        $stmt->bindParam(":negara_asal", $negara_asal);
        $stmt->bindParam(":genre", $genre);

        $stmt->execute();
    }

    public function edit($id)
    {
        $query = "SELECT * FROM tb_film WHERE id=:id";
        $stmt = $this->db->prepare($query);

        $stmt->bindParam(":id", $id);
        $stmt->execute();

        return $this->select($stmt);
    }

    public function update()
    {
        $nama = $_POST['nama'];
        $negara_asal = $_POST['negara_asal'];
        $genre = $_POST['genre'];
        $id = $_POST['id'];

        $sql = "UPDATE tb_film
            SET nama=:nama, negara_asal=:negara_asal, genre=:genre
                  WHERE id=:id";
            $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":nama", $nama);
        $stmt->bindParam(":negara_asal", $negara_asal);
        $stmt->bindParam(":genre", $genre);
        $stmt->bindParam(":id", $id);

        $stmt->execute();
    }

    public function delete($id)
    {
        $sql = "DELETE FROM tb_film WHERE id=:id";
        $stmt = $this->db->prepare($sql);

        $stmt->bindParam(":id", $id);
        $stmt->execute();
    }
}
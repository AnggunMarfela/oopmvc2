<?php
class Skp {
    private $conn;
    private $table_name = "form_skp";

    public $id;
    public $nip;
    public $rencana_kerja_diintervensi;
    public $rencana_kerja;
    public $perilaku_kerja;
    public $ktr_perilaku_kerja;
    public $tgl_buat;

    public function __construct($db) {
        $this->conn = $db;
    }

    // Create a new record
    public function create() {
        $query = "INSERT INTO " . $this->table_name . "
                    SET
                        nip=:nip,
                        rencana_kerja_diintervensi=:rencana_kerja_diintervensi,
                        rencana_kerja=:rencana_kerja,
                        perilaku_kerja=:perilaku_kerja,
                        ktr_perilaku_kerja=:ktr_perilaku_kerja,
                        tgl_buat=:tgl_buat";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":nip", $this->nip);
        $stmt->bindParam(":rencana_kerja_diintervensi", $this->rencana_kerja_diintervensi);
        $stmt->bindParam(":rencana_kerja", $this->rencana_kerja);
        $stmt->bindParam(":perilaku_kerja", $this->perilaku_kerja);
        $stmt->bindParam(":ktr_perilaku_kerja", $this->ktr_perilaku_kerja);
        $stmt->bindParam(":tgl_buat", $this->tgl_buat);

        if ($stmt->execute()) {
            return true;
        }

        return false;
    }

    // Read all records
    public function readAll() {
        $query = "SELECT * FROM " . $this->table_name . " ORDER BY tgl_buat DESC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    // Read one record based on ID
    public function readOne() {
        $query = "SELECT * FROM " . $this->table_name . " WHERE id = ? LIMIT 0,1";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $this->id);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        $this->nip = $row['nip'];
        $this->rencana_kerja_diintervensi = $row['rencana_kerja_diintervensi'];
        $this->rencana_kerja = $row['rencana_kerja'];
        $this->perilaku_kerja = $row['perilaku_kerja'];
        $this->ktr_perilaku_kerja = $row['ktr_perilaku_kerja'];
        $this->tgl_buat = $row['tgl_buat'];
    }

    // Update a record
    public function update() {
        $query = "UPDATE " . $this->table_name . "
                    SET
                        nip=:nip,
                        rencana_kerja_diintervensi=:rencana_kerja_diintervensi,
                        rencana_kerja=:rencana_kerja,
                        perilaku_kerja=:perilaku_kerja,
                        ktr_perilaku_kerja=:ktr_perilaku_kerja,
                        tgl_buat=:tgl_buat
                    WHERE
                        id = :id";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":id", $this->id);
        $stmt->bindParam(":nip", $this->nip);
        $stmt->bindParam(":rencana_kerja_diintervensi", $this->rencana_kerja_diintervensi);
        $stmt->bindParam(":rencana_kerja", $this->rencana_kerja);
        $stmt->bindParam(":perilaku_kerja", $this->perilaku_kerja);
        $stmt->bindParam(":ktr_perilaku_kerja", $this->ktr_perilaku_kerja);
        $stmt->bindParam(":tgl_buat", $this->tgl_buat);

        if ($stmt->execute()) {
            return true;
        }

        return false;
    }

    // Delete a record
    public function delete() {
        $query = "DELETE FROM " . $this->table_name . " WHERE id = ?";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $this->id);

        if ($stmt->execute()) {
            return true;
        }

        return false;
    }
}
?>

<?php
    class UserModel
    {
        private $conn;
        public function __construct($conn)
        {
            $this->conn = $conn;
        }

        public function getdata()
        {
            $sql = "SELECT * FROM students";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        public function savedata($data)
        {
            $sql = "INSERT INTO students (name, email, phone, course) VALUES (?,?,?,?)";
            $stmt = $this->conn->prepare($sql);
            return $stmt->execute([$data['name'],$data['email'],$data['phone'],$data['course']]);
        }

        public function updatedata($data)
        {
            $sql = "UPDATE students SET id=?, name=?, email=?, phone=?, course=?";
            $stmt = $this->conn->prepare($sql);
            $update = $stmt->execute([$data['id'],$data['name'],$data['email'],$data['phone'],$data['course']]);
            if($update){
                header('location:index.php');
            }
        }

        public function deletedata($id)
        {
            $sql = "DELETE FROM students WHERE id=?";
            $stmt = $this->conn->prepare($sql);
            $result = $stmt->execute([$id]);
            if($result){
                header('location:index.php');
            }
        }

        public function getupdateUser($id)
        {
            $spl ="SELECT * FROM students WHERE id=?"; 
            $stm = $this->conn->prepare($spl);   
            $stm->execute([$id]);
            return $stm->fetch(PDO::FETCH_ASSOC);
        }
    }
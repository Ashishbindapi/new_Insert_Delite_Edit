<?php
    class UserController
    {
        private $model;
        public function __construct(UserModel $model)
        {
            $this->model = $model;
        }

        public function getUser()
        {
          return  $this->model->getdata();
        }
        
        public function saveUser($data)
        {
            return $this->model->savedata($data);
        }
        
        public function updateUser($data)
        {

            $this->model->updatedata($data);
        }

        public function deleteUser($id)
        {
            $this->model->deletedata($id);
        }

        public function getupdateUser($id)
        {
          return $this->model->getupdateUser($id);
        }
    }
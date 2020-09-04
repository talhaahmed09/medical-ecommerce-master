<?php
    class Admin {
        public $id;
        public $username;
        public $password;
        public $email;


        //Hàm khởi tạo
        public function __construct($id, $username, $password, $email) {
            $this->id = $id;
            $this->username = $username;
            $this->password = $password;
            $this->email = $email;
        }

        //Hàm kiểm tra đăng nhập admin
        public function checkAdmin($remember) {
            $username = $this->username;
            $password = md5($this->password);
            $options = array("where" => "Name='$username' AND password='$password'");
            $result = Selecct_a_record('admin', $options);
            if ($result != NULL) {
                if ($remember == true) {
                    $cookie_name = "user_admin";
                    $cookie_value = $username;
                    $cookie_expiry = time() + (86400*30);
                    setcookie($cookie_name, $cookie_value, $cookie_expiry, '/');
                } else {
                    $_SESSION['user_admin'] = $username;
                }
                return 1;
            } else {
                return 0;
            }
        }


        //Hàm lấy thông tin admin theo username
        public function getAdmin() {
            $username = $this->username;
            $options = array("where" => "username='$username'");
            $result = Selecct_a_record('admin', $options);
            return $result;
        }


        //hàm kiểm tra username đã tồn tại hay chưa
        public function checkUsernameAdmin() {
            $result = $this->getAdmin();
            if ($result != NULL) {
                return true;
            } else {
                return false;
            }
        }


        //hàm kiểm tra password admin có thay đổi khi cập nhật không
        public function checkPasswordAdmin() {
            $admin = $this->getAdmin();
            $password = $this->password;
            if ($password != $admin['password']) {
                return true;
            } else {
                return false;
            }
        }
    }


?>
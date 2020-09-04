<?php
	class User {
		public $id;
		public $username;
		public $password;
		public $email;
		public $fullName;
		public $phone;
		public $address;
		public $dateOfBirth;
		public $gender;
        public $Createtime;


        //hàm khởi tạo User
		public function __construct($id, $username, $password, $email, $fullName, $phone, $address, $dateOfBirth, $gender) {
			$this->id          = $id;
			$this->username    = $username;
			$this->password    = $password;
			$this->email       = $email;
			$this->fullName    = $fullName;
			$this->phone       = $phone;
			$this->address     = $address;
			$this->dateOfBirth = $dateOfBirth;
			$this->gender      = $gender;
            $this->Createtime  = $Createtime;
		}

        //hàm lấy tất cả thông tin user
        public function getAllUser() {
            $options = array(
                            'order_by' => 'Id ASC'
                        );
            $user  = get_all('user', $options);
            return $user;
        }


        //hàm lấy thông tin user theo username
		public function getUser() {
            $username = $this->username;
            $options = array("where" => "username='$username'");
            $result = Selecct_a_record('user', $options);
            return $result;
        }


        //hàm kiểm tra thông tin username và password của user khi đăng nhập
        public function checkLoginUser() {
            $username = $this->username;
            $password = $this->password;
            $options = array("where" => "username='$username' AND password='$password'");
            $result = Selecct_a_record('user', $options);
            if ($result != NULL) {
                return true;
            } else {
                return false;
            }
        }


        //hàm kiểm tra username của User đã tồn tại chưa
        public function checkUsernameUser() {
            $result = $this->getUser();
            if ($result != NULL) {
                return true;
            } else {
                return false;
            }
        }


        //hàm kiểm tra password của user có thay đổi hay không
        public function checkPasswordUser() {
            $user = $this->getUser();
            $password = $this->password;
            if ($password != $user['password']) {
                return true;
            } else {
                return false;
            }
        }


        //hàm đổi mật khẩu của user
        public function changePassword() {
            $id = $this->id;
            $password = $this->password;
            $user = array(
                    'Id' => $id,
                    'password' => $password
                );
            $id = save('user', $user);
            if ($id > 0) {
                return true;
            } else {
                return false;
            }
        }


        //hàm thêm hoặc cập nhật user
        public function saveUser() {
            $var = $this->dateOfBirth;
            $date = str_replace('/', '-', $var);
            $user = array(
                    'Id' => $this->id,
                    'username'      => $this->username,
                    'password'      => md5($this->password),
                    'email'         => $this->email,
                    'full_name'     => $this->fullName,
                    'phone'         => $this->phone,
                    'address'       => $this->address,
                    'date_of_birth' => date('Y-m-d', strtotime($date)),
                    'gender'        => $this->gender,
                    'Createtime'    => $this->Createtime
                    );
            if ($this->id > 0) {
                if ($this->checkPasswordUser() == false) {
                    $user = array(
                    'Id'            => $this->id,
                    'username'      => $this->username,
                    'email'         => $this->email,
                    'full_name'     => $this->fullName,
                    'phone'         => $this->phone,
                    'address'       => $this->address,
                    'date_of_birth' => date('Y-m-d', strtotime($date)),
                    'gender'        => $this->gender,
                    'Createtime'    => $this->Createtime
                    );
                }
            } else {
               if ($this->checkUsernameUser() == true) {
                    return false;
               } 
            }
            $id = save('user', $user); 
            if ($id > 0) {
                return true;
            } else {
                return false;
            }
        }

	}


?>
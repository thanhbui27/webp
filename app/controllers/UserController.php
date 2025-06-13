<?php

use MyApp\Controller;
use MyApp\Database;

/**
 * HomeController Class
 *
 * Represents the controller for the home-related functionality.
 */
class UserController extends Controller
{
    public function __construct()
    {
        $this->db = new Database();
    }

public function login()
{
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['username'] ?? '';
        $password = $_POST['password'] ?? '';

        $this->db->query("SELECT * FROM account WHERE username = :username");
        $this->db->bind(':username', $username);
        $account = $this->db->single();

        if ($account && ($password === $account['password'])) {

            $this->db->query("SELECT * FROM player WHERE account_id = :account_id");
            $this->db->bind(':account_id', $account['id']);
            $player = $this->db->single();

            if (!$player) {
                $data['error'] = "Tài khoản này chưa tạo nhân vật, vui lòng tạo trước khi đăng nhập.";
            } else {
                $_SESSION['user'] = [
                    'id' => $account['id'],
                    'username' => $account['username'],
                    'player_name' => $player['name'],
                    'vnd' => $account['vnd'],
                    'gender' => $player['gender'],
                ];
                header("Location: /diendan");
                exit;
            }
        } else {
            $data['error'] = "Tên đăng nhập hoặc mật khẩu không đúng!";
        }
    }

    $data['title'] = "Đăng nhập";
    $this->template('header', $data);
    $this->view('login', $data);
    $this->template('footer');
}

public function register()
{
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = trim($_POST['username'] ?? '');
        $password = trim($_POST['password'] ?? '');
        $data['error'] = '';

        if (!preg_match('/^[a-zA-Z0-9]+$/', $username)) {
            $data['error'] = "Tên đăng nhập chỉ được chứa chữ và số, không có ký tự đặc biệt!";
        }
        elseif (!preg_match('/^(?=.*[a-zA-Z])(?=.*[0-9])[a-zA-Z0-9]+$/', $password)) {
            $data['error'] = "Mật khẩu phải chứa cả chữ và số, không dùng ký tự đặc biệt!";
        }
        else {
            $this->db->query("SELECT * FROM account WHERE username = :username");
            $this->db->bind(':username', $username);
            if ($this->db->single()) {
                $data['error'] = "Tên đăng nhập đã tồn tại!";
            } else {
                $this->db->query("INSERT INTO account (username, password) VALUES (:username, :password)");
                $this->db->bind(':username', $username);
                $this->db->bind(':password', $password);
                $this->db->execute();
                header("Location: /dangnhap");
                exit;
            }
        }
    }

    $data['title'] = "Đăng ký";
    $this->template('header', $data);
    $this->view('dangky', $data);
    $this->template('footer');
}
    public function logout()
    {
        unset($_SESSION['user']);
        header("Location: /dangnhap");
    }

    public function changePassword()
    {
        if (!isset($_SESSION['user'])) {
            header("Location: /dangnhap");
            exit;
        }
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $currentPassword = $_POST['current_password'] ?? '';
            $newPassword = $_POST['new_password'] ?? '';
            $confirmPassword = $_POST['confirm_password'] ?? '';

            if ($newPassword !== $confirmPassword) {
                $data['error'] = "Mật khẩu mới và xác nhận mật khẩu không khớp!";
            } else {
                $userId = $_SESSION['user']['id'];
                $this->db->query("SELECT * FROM account WHERE id = :id");
                $this->db->bind(':id', $userId);
                $account = $this->db->single();

                if ($account && ($currentPassword === $account['password'])) {
                    $this->db->query("UPDATE account SET password = :new_password WHERE id = :id");
                    $this->db->bind(':new_password', $newPassword);
                    $this->db->bind(':id', $userId);
                    $this->db->execute();
                    header("Location: /diendan");
                    exit;
                } else {
                    $data['error'] = "Mật khẩu hiện tại không đúng!";
                }
            }
        }

        $data['title'] = "Đổi mật khẩu";
        $this->template('header', $data);
        $this->view('change-password', $data);
        $this->template('footer');
    }
}

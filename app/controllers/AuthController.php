<?php
class AuthController extends Controller {

    private function isPasswordValid(string $inputPassword, string $storedPassword): bool {
        // 1) Works for hashed passwords (bcrypt/argon/etc.)
        if (password_verify($inputPassword, $storedPassword)) {
            return true;
        }

        // 2) If stored password is NOT a hash, allow legacy plaintext match
        $info = password_get_info($storedPassword);
        if (($info['algo'] ?? 0) === 0 && hash_equals($storedPassword, $inputPassword)) {
            return true;
        }

        return false;
    }

    public function adminLoginPost(): void {
        $uname = trim($_POST['uname'] ?? '');
        $pass  = (string)($_POST['pass'] ?? '');

        $admin = (new AdminModel())->findByName($uname);

        if ($admin && isset($admin['Password']) && $this->isPasswordValid($pass, (string)$admin['Password'])) {
            $_SESSION['login_user'] = $admin['Name'];
            $_SESSION['admin_id']   = $admin['ID'] ?? null;
            $this->redirect('dashboard.php');
        }

        echo "<script>alert('Invalid Login Details. Please Try Again!');window.location.href='index.php';</script>";
        exit;
    }

    public function userLoginPost(): void {
        $uname = trim($_POST['unamev'] ?? '');
        $pass  = (string)($_POST['passv'] ?? '');

        $user = (new UserModel())->findByUsername($uname);

        if ($user && isset($user['Password']) && $this->isPasswordValid($pass, (string)$user['Password'])) {
            $_SESSION['ID']         = $user['ID'] ?? null;
            $_SESSION['login_user'] = $user['Username'];
            $this->redirect('viewcity.php');
        }

        echo "<script>alert('Invalid Login Details. Please Try Again!');window.location.href='userlogin.php';</script>";
        exit;
    }

    public function userSignupPost(): void {
        $data = [
            'Username' => trim($_POST['uname'] ?? ''),
            'Gender'   => trim($_POST['gender'] ?? ''),
            'City'     => trim($_POST['city'] ?? ''),
            'Email'    => trim($_POST['email'] ?? ''),
            'Password' => password_hash((string)($_POST['pass'] ?? ''), PASSWORD_DEFAULT),
        ];

        $ok = (new UserModel())->create($data);
        if ($ok) {
            echo "<script>alert('User Registered');window.location.href='userlogin.php';</script>";
            exit;
        }
        echo "<script>alert('Signup failed. Try again.');window.location.href='usersignup.php';</script>";
        exit;
    }

    public function adminSignupPost(): void {
        $data = [
            'Name'     => trim($_POST['nm'] ?? ''),
            'Email'    => trim($_POST['em'] ?? ''),
            'Password' => password_hash((string)($_POST['ps'] ?? ''), PASSWORD_DEFAULT),
        ];

        $ok = (new AdminModel())->create($data);
        if ($ok) {
            echo "<script>alert('Admin Registered');window.location.href='index.php';</script>";
            exit;
        }
        echo "<script>alert('Signup failed. Try again.');window.location.href='adminsignup.php';</script>";
        exit;
    }

    public function logout(): void {
        session_destroy();
        $this->redirect('index.php');
    }
}

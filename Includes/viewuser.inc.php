<?php

class ViewUser extends User {

    public function showAllUsers() {
    $datas = $this->getAllUsers();
    foreach ($datas as $data) {
    echo  "User ID is " .$data['id']."<br>";
    echo "Username is " .$data['username']."<br>";
    echo "Password is " .$data['password']."<br><br>";
    }
    }
}
?>
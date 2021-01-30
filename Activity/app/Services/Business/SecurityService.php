<?php
namespace App\Services\Business;
use App\Services\Data\SecurityDAO;
use App\Models\UserModel;
class SecurityService{
    public function login($user){
        return (new SecurityDAO)->findByUser($user);
    }
}
?>

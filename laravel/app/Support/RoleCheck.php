<?php

namespace App\Support;


class RoleCheck
{
    public function __construct()
    {

    }

    public function is($role): bool
    {
        $ur = auth()->user()['role'];
        if (is_array($role)) {
            foreach ($role as $rr) {
                if ($ur == $rr)
                    return true;
            }
            return false;
        } else
            return $ur == $role;
    }
}

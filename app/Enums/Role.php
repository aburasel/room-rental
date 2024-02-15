<?php

namespace App\Enums;

enum Role: int {
    case GENERAL_USER = 1;
    case RENTAL_OWNER = 2;
    case ADMIN = 3;
}

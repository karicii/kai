<?php

function is_valid_email_provider(string $email): bool
{
    $allowed_domains = [
        'gmail.com',
        'hotmail.com',
        'outlook.com',
        'yahoo.com',
        'icloud.com',
        'protonmail.com',
    ];

    $domain = substr(strrchr($email, "@"), 1);

    return in_array($domain, $allowed_domains);
}

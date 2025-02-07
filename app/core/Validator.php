<?php
namespace App\Core;

class Validator
{
    private $errors = [];

    public function validateRequired(array $data, array $fields)
    {
        foreach ($fields as $field) {
            if (empty($data[$field])) {
                $this->errors[$field] = "The $field field is required.";
            }
        }
        return $this;
    }

    public function validateEmail(string $email, string $field = 'email')
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->errors[$field] = "The $field must be a valid email address.";
        }
        return $this;
    }

    public function validatePasswordMatch(string $password, string $confirmPassword, string $field = 'password')
    {
        if ($password !== $confirmPassword) {
            $this->errors[$field] = "The passwords do not match.";
        }
        return $this;
    }

    public function validateMinLength(string $value, int $minLength, string $field)
    {
        if (strlen($value) < $minLength) {
            $this->errors[$field] = "The $field must be at least $minLength characters long.";
        }
        return $this;
    }

    public function validateMaxLength(string $value, int $maxLength, string $field)
    {
        if (strlen($value) > $maxLength) {
            $this->errors[$field] = "The $field must not exceed $maxLength characters.";
        }
        return $this;
    }

    public function passes()
    {
        return empty($this->errors);
    }

    public function errors()
    {
        return $this->errors;
    }

    public function firstError()
    {
        return $this->errors[array_key_first($this->errors)] ?? null;
    }
}

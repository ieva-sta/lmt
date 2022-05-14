<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class MaxWordCount implements Rule
{
    private $maxWords;

    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($maxWords = 5)
    {
        $this->maxWords = $maxWords;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return str_word_count($value) <= $this->maxWords;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Lūdzu ievadi maksimums četrus vārdus';
    }
}

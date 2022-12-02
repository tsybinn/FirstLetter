<?php

namespace App\Validator;

class PostValidator implements ValidatorInterface
{

    private array $arError = [];

    public function getRules(): array
    {

        return $this->rules;

    }

    function validate(array $arField)
    {
        foreach ($arField as $key => $field) {

            if (mb_strlen($field) == 0) {
                $this->setError('пустое поле');
            }
        }
       return $this->arError;
    }
    public function setError($string)
    {

        $this->arError[] = $string;

    }
}

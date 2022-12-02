<?php

namespace App\Validator;
interface ValidatorInterface
{

    function getRules(): array;

    function validate(array $arField);


}
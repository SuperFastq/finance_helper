<?php

class TypeManager extends BaseService
{
    public function __construct()
    {
        parent::__construct("type", Type::class);
    }
}
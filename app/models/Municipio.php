<?php

class Municipio extends Eloquent {
    protected $guarded = array();

    public static $rules = array(
		'coddep' => 'required'
	);
}
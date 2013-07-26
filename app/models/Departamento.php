<?php

class Departamento extends Eloquent {
    protected $guarded = array();

    public static $rules = array(
		'coddep' => 'required',
		'nomdep' => 'required'
	);
}
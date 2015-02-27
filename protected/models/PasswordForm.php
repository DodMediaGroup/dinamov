<?php

class PasswordForm extends CFormModel
{

	public $pass_actual;
	public $nuevo_pass_1;
	public $nuevo_pass_2;
	/**
	 * Declares the validation rules.
	 */
	public function rules()
	{
		return array(
			// name, email, subject and body are required
			array('pass_actual, nuevo_pass_1, nuevo_pass_2', 'required', 'message'=>'Este campo es obligatorio'),
			array('nuevo_pass_1, nuevo_pass_2','length','min'=>8,'message'=>'Debe tener al menos 8 caracteres'),
		);
	}

	/**
	 * Declares customized attribute labels.
	 * If not declared here, an attribute would have a label that is
	 * the same as its name with the first letter in upper case.
	 */
	public function attributeLabels()
	{
		return array(
			'verifyCode'=>'Verification Code',
		);
	}

}
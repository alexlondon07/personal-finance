<?php namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Routing\Route;

class EditUserRequest extends Request {


	public function __construct(Route $route){
		$this->route=$route;
	}

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
						'name' => 'required|max:60',
            'document'  => 'required',
            'email'  => 'required|email|unique:users,email,' .$this->route->getParameter('user'),
						'profile' => 'in:usuario,super_admin,asesor,profesor',
            'enable'=>'in:si,no'
		];
	}

}

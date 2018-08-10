<?php
namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Auth, View;
class UserController extends Controller
{
	public function list_view()
	{
    if (Input::has('field') && Input::has('exp') && Input::has('value') || Input::has('_field') && Input::has('order'))
    {
      $users = new User;
      if (Input::has('field') && Input::has('exp') && Input::has('value'))
        foreach (Input::get('field') as $key => $field)
          if (Input::get('value')[$key]!='')
            $users = $users->where($field, Input::get('exp')[$key], Input::get('value')[$key]);
      if (Input::has('_field') && Input::has('order'))
        $users = $users->orderBy(Input::get('_field'), Input::get('order'));
      $users = $users->get();
      if (isset($users[0]))
        return View::make('user/list', [
          'users' => $users,
        ]);
    }
    $users = User::all();
		return View::make('user/list', [
      'users' => $users,
    ]);
	}
	public function create_delete_api()
	{
    //delete
    if (Input::has('id'))
    {
      foreach (Input::get('id') as $check)
      {
        $user = User::find($check);
        $user->delete();
      }
      return Redirect::back();
    }
    if (Input::has('name') && Input::has('username') && Input::has('address') && Input::has('phone') && Input::has('website') && Input::has('company'))
    {
      $user = new User;
      $user->setAttribute('name', Input::get('name'));
      $user->setAttribute('username', Input::get('username'));
      $user->setAttribute('address', Input::get('address'));
      $user->setAttribute('phone', Input::get('phone'));
      $user->setAttribute('website', Input::get('website'));
      $user->setAttribute('company', Input::get('company'));
      $user->save();
      return Redirect::back();
    }
    throw new NotFoundHttpException;
	}
  public function update_view($id)
  {
    if ($id)
    {
      $user = User::find($id);
      return View::make('user/update', [
        'data' => $user,
      ]);
    }
    throw new NotFoundHttpException;
  }
  public function update_api($id)
  {
    if (Input::has("name") && Input::has("username") && Input::has("address") && Input::has("phone") && Input::has("website") && Input::has("company"))
    {
      $user = User::find($id);
      $user->setAttribute("name", Input::get("name"));
      $user->setAttribute("username", Input::get("username"));
      $user->setAttribute("address", Input::get("address"));
      $user->setAttribute("phone", Input::get("phone"));
      $user->setAttribute("website", Input::get("website"));
      $user->setAttribute("company", Input::get("company"));
      $user->save();
      return Redirect::route('user.list.view');
    }
    throw new NotFoundHttpException;
  }
}

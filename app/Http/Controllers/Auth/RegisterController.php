<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'namalengkap'     => 'required|max:255',
            'username'     => 'alpha_dash|required|max:255|unique:users',
            'jeniskelamin'    => 'required',
            'tempatlahir'    => 'required',
            'tanggallahir' => 'required',
            'alamat' => 'required',
            'notelpon' => 'required|min:6|unique:users',
            'asalsekolah' => 'required|max:255',
            'nisn' => 'required|min:10|max:10|unique:users',
            'niksiswa' => 'required|min:16|max:16',
            'nikayah' => 'required|min:16|max:16',
            'nikibu' => 'required|min:16|max:16'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {   
        $generateRandomString = $this->generateRandomString();
        $password = bcrypt($generateRandomString);
        return User::create([
            'namalengkap'     => $data['namalengkap'],
            'username'     => $data['username'],
            'jeniskelamin'    => $data['jeniskelamin'],
            'tempatlahir'    => $data['tempatlahir'],
            'tanggallahir'    => $data['tanggallahir'],
            'alamat'    => $data['alamat'],
            'notelpon'    => $data['notelpon'],
            'asalsekolah'    => $data['asalsekolah'],
            'nisn'    => $data['nisn'],
            'niksiswa'    => $data['niksiswa'],
            'nikayah'    => $data['nikayah'],
            'nikibu'    => $data['nikibu'],
            'password' => $password,
            'random_string' => $generateRandomString,
            'ijazah' => $data['ijazah'],
            'kartukeluarga' => $data['kartukeluarga'],
        ]);
    }

    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {    
        if ($request->hasFile('kartukeluarga')) {
            $image = $request->file('kartukeluarga');
            $name = str_slug($request->nisn.'_kartukeluarga').'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/kartukeluarga');
            $imagePath = $destinationPath. "/".  $name;
            $image->move($destinationPath, $name);
            $kartukeluarga = $name;
        }
        if ($request->hasFile('ijazah')) {
            $image = $request->file('ijazah');
            $name = str_slug($request->nisn.'_ijazah').'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/ijazah');
            $imagePath = $destinationPath. "/".  $name;
            $image->move($destinationPath, $name);
            $ijazah = $name;
        }
        
        // var_dump('end'); die();
        $this->validator($request->all())->validate();
        $input['kartukeluarga'] = $kartukeluarga;
        $input['ijazah'] = $ijazah;
        $input['namalengkap'] = $request->namalengkap;
        $input['username'] = $request->username;
        $input['jeniskelamin'] = $request->jeniskelamin;
        $input['tanggallahir'] = $request->tanggallahir;
        $input['tempatlahir'] = $request->tempatlahir;
        $input['alamat'] = $request->alamat;
        $input['notelpon'] = $request->notelpon;
        $input['asalsekolah'] = $request->asalsekolah;
        $input['nisn'] = $request->nisn;
        $input['niksiswa'] = $request->niksiswa;
        $input['nikayah'] = $request->nikayah;
        $input['nikibu'] = $request->nikibu;
        $user = $this->create($input);

        // return view('auth.success_register');
        return view('auth.success_register',['user'=>$user]);
    }
}

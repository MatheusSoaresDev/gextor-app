<?php
namespace App\Http\Controllers;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\LoginUserRequest;
use App\Repositories\Contracts\UserRepositoryInterface;
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class CustomAuthController extends Controller
{
    private UserRepositoryInterface $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function dashboard()
    {
        if(Auth::check()){
            return view('dashboard');
        }

        return redirect("login")->withSuccess('You are not allowed to access');
    }

    public function login(LoginUserRequest $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')->withSuccess('Logado!');
        }

        return redirect("login")->withErrors('Email ou senha inválidos.');
    }

    public function logout() {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }

    public function create(CreateUserRequest $request)
    {
        $this->userRepository->create($request->all());
        return redirect("login")->withSuccess('Cadastro efetuado com sucesso. Faça login para acessar!');
    }
}

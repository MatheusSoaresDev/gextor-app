<?php
namespace App\Http\Controllers;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\LoginUserRequest;
use App\Repositories\Contracts\DespesaRecorrenteRepositoryInterface;
use App\Repositories\Contracts\UserRepositoryInterface;
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class CustomAuthController extends Controller
{
    private UserRepositoryInterface $userRepository;
    private DespesaRecorrenteRepositoryInterface $despesaRecorrenteRepository;

    public function __construct(UserRepositoryInterface $userRepository, DespesaRecorrenteRepositoryInterface $despesaRecorrenteRepository)
    {
        $this->userRepository = $userRepository;
        $this->despesaRecorrenteRepository = $despesaRecorrenteRepository;
    }

    public function dashboard(Request $request)
    {
        if(Auth::check()){
            $this->session_date($request);

            $despesasRecorrentes = $this->despesaRecorrenteRepository->all();
            return view('dashboard', compact('despesasRecorrentes'));
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

    private function session_date(Request $request)
    {
        $dados_data = $request->only('mes', 'ano');

        if(!$request->session()->get('data')){
            $request->session()->put('data',
                [
                    "mes" => date("m"),
                    "ano" => date("Y")
                ]
            );
        } else {
            $request->session()->put('data',
                [
                    "mes" => $dados_data["mes"] ?? date("m"),
                    "ano" => $dados_data["ano"] ?? date("Y")
                ]
            );
        }
    }
}

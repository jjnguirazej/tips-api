## Tips API

tips api e' um codigo aberto explicando as boas praticas de programaco na api laravel

## Criacao de Model, Factories e Seeder

Em laravel 10 voce pode criar o model, controller e outros componentes penas com o comando "php artisan make:model" e em seguida clique em enter, e vais escolher os numeros que querias criar o ficheiro,e se quiser criar varios arquivos pode usar o comando "php artisan make:model NomeDoModelo -a

"
podes usar php artisan migrate --seed para fazer migration e seed
## Error no migrate 

se tiver o este erro no migrate "SQLSTATE[42000]: Syntax error or access violation: 1071 Specified key was too long; max key length is 1000 bytes (Connection: mysql, SQL: alter table `users` add unique `users_email_unique`(`email`))"

Actualiza o "/app/Providers/AppServiceProvider.php"
para:
public function boot()
{
    Schema::defaultStringLength(191);
}

## Controller e namespace

quando criamos um controller dentro de uma pasta, devemos mudar o namespace para aquelela pasta

## API Resource

api resorce e' uma forma de transformar o resultado Eloquente para Json respose, e para criar um resource use o comando "php artisan make:resource NomeDoResource",e o ficheiro vai ser criado na pasta http/resources

## InvocakableController
 um controlador invocável (invokable controller) é um tipo especial de controlador que implementa a interface __invoke. Quando um controlador é invocável, isso significa que ele pode ser chamado diretamente como uma função.

Por exemplo, considere um controlador chamado ExampleController:

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function __invoke(Request $request)
    {
        return 'Exemplo de controlador invocável';
    }
}

Neste exemplo, o controlador ExampleController implementa a interface __invoke. Isso significa que ele pode ser invocado diretamente como uma função. Então, em vez de definir várias ações de controlador como métodos separados (index(), show(), store(), etc.), você pode definir toda a lógica do controlador dentro do método __invoke.

Ao chamar este controlador em uma rota, por exemplo:
Route::get('exemplo', 'ExampleController');

O método __invoke() do controlador ExampleController será chamado automaticamente. Isso torna o código mais conciso e direto, especialmente quando você tem controladores que realizam apenas uma única ação.

Os controladores invocáveis são úteis quando você deseja manter sua aplicação mais organizada e orientada a objetos, permitindo que você separe facilmente a lógica do controlador de outras partes da aplicação.

# Laravel Sanctum
O Laravel Sanctum é uma biblioteca oficial do Laravel que oferece autenticação API simples e eficiente. É especialmente útil para aplicativos como Single Page Applications (SPAs) e aplicativos móveis que consomem APIs.

## Recursos Principais:

- Autenticação Baseada em Tokens: Utiliza tokens de acesso para autenticar solicitações de API, tornando-a ideal para aplicativos onde a autenticação de sessão tradicional não é prática.

- Tokens de API Stateful e Stateless: Suporta tokens de API associados a usuários autenticados e armazenados no banco de dados, assim como tokens gerados e validados usando chaves secretas.

- Autenticação via Cookies: Além dos tokens de API, permite autenticação via cookies, útil para autenticar solicitações da API e da web tradicional.

- Integração Perfeita com o Laravel: Se integra facilmente com outras funcionalidades do Laravel, como middlewares e políticas de autorização.

- Configuração Flexível: Oferece configuração flexível para atender às necessidades específicas do aplicativo, incluindo guardas de autenticação, modelos de token e tipos de autenticação suportados.

- Proteção CSRF: Protege contra ataques CSRF gerando automaticamente tokens CSRF para cada sessão de usuário.

## Uso

- Instale o Laravel Sanctum via Composer:
  
```bash composer require laravel/sanctum

```bash php artisan migrate

- Execute as migrações:

```bash composer require laravel/sanctum
 depois temos que criar a sessao no file .env que SESSION_DOMAIN = localhost (se estiver na maquina local)

## Nas versoes actual de LAravel nos apenas devemos descomentar  no karnel api, a linha
\Laravel\Sanctum\Http\Middleware\EnsureFrontendRequestsAreStateful::class,


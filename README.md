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

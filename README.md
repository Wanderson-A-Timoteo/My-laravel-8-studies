<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

-   [Simple, fast routing engine](https://laravel.com/docs/routing).
-   [Powerful dependency injection container](https://laravel.com/docs/container).
-   Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
-   Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
-   Database agnostic [schema migrations](https://laravel.com/docs/migrations).
-   [Robust background job processing](https://laravel.com/docs/queues).
-   [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

-   **[Vehikl](https://vehikl.com/)**
-   **[Tighten Co.](https://tighten.co)**
-   **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
-   **[64 Robots](https://64robots.com)**
-   **[Cubet Techno Labs](https://cubettech.com)**
-   **[Cyber-Duck](https://cyber-duck.co.uk)**
-   **[Many](https://www.many.co.uk)**
-   **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
-   **[DevSquad](https://devsquad.com)**
-   **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
-   **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

# Relat??rio -
## Estudo de Linguagem de Programa????o PHP
## Usando a Framework Laravel

O framework Laravel ?? uma estrutura de aplica????o web. Laravel fornece uma estrutura pronta que serve de ponto de partida para criar aplicativos web. A Laravel combina os melhores pacotes do ecossistema PHP para oferecer a estrutura mais robusta e amig??vel para desenvolvedores.
A Laravel fornece recursos poderosos, como inje????o completa de depend??ncia, uma camada expressiva de abstra????o de banco de dados, filas e trabalhos programados, testes de unidade, integra????o e muito outros recursos.
Em seguida ser?? abordado a estrutura do Laravel, conforme mostra a figura abaixo.

Figura 1 ??? Estrutura dos diret??rios de uma aplica????o Laravel
Estrutura do diret??rio

Diret??rio app
?? o local onde fica armazenado o c??digo principal da aplica????o.
Diret??rio Bootstrap
N??o tem nada a ver com o framework front-end desenvolvido pelo Twitter. Em Laravel Bootstrap cont??m o arquivo usado para o sistema de inicializa????o da estrutura do Laravel, ele tamb??m cont??m arquivos gerados pelo framework para otimiza????o de desempenho, como os arquivos de cache de rotas e servi??os.
Diret??rio Config
Cont??m todos os arquivos de configura????o do aplicativo.
Diret??rio Database
Cont??m todos os arquivos relacionados ao banco de dados da aplica????o, tamb??m cont??m outras pastas, sendo uma das mais importantes a pasta migrations, que ser?? abordada em breve.
Diret??rio Public
Cont??m o arquivo, que ?? o ponto de entrada para todas as solicita????es que entram no aplicativo e configura o carregamento autom??tico. Ele tamb??m cont??m os arquivos, como imagens, JavaScript e CSS.
Diret??rio Resources
Cont??m todos os arquivos n??o compilados, como CSS e JavaScript, tamb??m cont??m os arquivos de linguagens e o principal cont??m os arquivos de modos de exibi????o.
Diret??rio Routes
Cont??m as rotas, ou seja, todas as URLs definidas para acessar o aplicativo web, seja ela est??tica ou din??mica.

Diret??rio Storage
O Storage se relaciona com o diret??rio database, ele pode ser usado para armazenar quaisquer arquivos gerados pelo aplicativo, tamb??m armazena arquivos e caches gerados pela estrutura, al??m de conter os arquivos de registro do aplicativo, como os logs, modelos blade compilados, sess??es baseadas em arquivos, caches de arquivos e outros arquivos gerados pela estrutura. Este tamb??m pode ser usado para armazenar arquivos gerados pelo usu??rio, como avatares de perfil, que devem ser acess??veis publicamente.
Diret??rio Tests
Cont??m os testes automatizados. Nele podemos fazer os testes de unidade e testes de recursos, ou seja, todos os testes que desejamos fazer na aplica????o.
Diret??rio Vendor
Cont??m todas as depend??ncias do composer, ou seja, todas as bibliotecas que podem ser utilizadas pela aplica????o.

Rotas, Controllers e Views
Imagine que temos uma aplica????o web que acessamos ela pelo seu endere??o de dom??nio www.minhaempresa.com.br/
Quando acessamos www. minhaempresa.com.br, estamos utilizando a rota ???/???

Quando acessamos www. minhaempresa/contato estamos utilizando a rota ???/contato???

Quando acessamos www.minhaempresa/empresa estamos utilizando a rota ???/empresa???
Este ?? o conceito de rotas, no Laravel, ao receber uma requisi????o em uma determinada URL o sistema de rotas define o que fazer, como por exemplo redirecionar ou enviar para o controlador (Controller) decidir o que fazer.

As rotas, ou seja, as URLs que os usu??rios poder??o acessar, ficam localizadas no diret??rio routes, nele encontramos quatro arquivos diferentes sendo:
api.php;
channels.php;
console.php e
web.php.
Conforme mostra a figura 2.

Figura 2 ??? Diret??rio Routes e seus arquivos.

Estes arquivos s??o usados em ocasi??es diferentes, sendo os principais e mais utilizados web.php e api.php.
Vamos analisar primeiramente as rotas criadas em web.php que ser??o acessadas pelos browsers.
O arquivo de rotas fica em /routes/web.php, todas as rotas da aplica????o web devem ficar neste arquivo.

Criando Rotas B??sicas no Laravel
O sistema de rotas do Laravel permite registrar m??todo de rotas para todos os verbos http dispon??veis, os tipos de rotas dispon??veis s??o: GET, PUT, POST, DELETE, PATCH e OPTIONS. Sendo as mais utilizadas no desenvolvimento web as quatro primeiras. As rotas s??o carregadas pelo RouteServiceProvider dentro de um grupo que cont??m o grupo de middleware "web".

Figura 3 ??? Tipos de rotas

Rotas do tipo GET ?? para retornar algo, como por exemplo uma listagem de conte??do etc.
Rotas do tipo POST normalmente s??o utilizados para cadastrar algo no sistema.
Rotas do tipo PUT ou PATH s??o para editar algum registro.
Rotas do tipo DELETE s??o para deletar algo.
E por ??ltimo, rotas do tipo OPTIONS.

Rota GET
Conforme mostra o exemplo de rota na figura 4, esta tem o tipo GET que recebe dois par??metros sendo: ??? / ???, que representa a raiz da aplica????o, ou seja, a p??gina inicial e recebe tamb??m uma fun????o, esta por sua vez carrega uma view chamada ???welcome???.

Figura 4 ??? Exemplo de rota do tipo GET

A view ???welcome??? ?? o arquivo que cont??m todo o c??digo da p??gina que ser?? mostrada no browser do usu??rio. Mas, onde fica essa view? Conforme mostra na figura 5, ele est?? no diret??rio Resources.

Figura 5 ??? Diret??rio Resources e seus subdiret??rios

Todas as p??ginas que desejamos criar para serem acessadas na web, devem estar neste diret??rio resources/views e assim criar uma rota no diret??rio routes/web.php, com a fun????o de carregar a view correspondente. Como mostra outro exemplo na figura 6.

Figura 6 ??? Exemplo de rota que retorna uma view.

Neste exemplo foi criada a rota do tipo GET com o primeiro par??metro ??? /teste ???, e a fun????o para carregar a view ??? teste ???, est?? view por sua vez precisa ser criada com o nome teste.blade.php, conforme mostra na figura 7. Em breve ser?? abordado sobre a necessidade de blade no nome da view.

Figura 7 ??? View teste criada

Em Laravel ?? poss??vel criar uma rota, sem precisar criar uma fun????o, um controller etc. Por exemplo uma p??gina de login, que carrega apenas um formul??rio com nome e senha para acessar o sistema, e somente depois de logado ?? que ser?? necess??rio carregar outros processos. A figura 8, mostra um exemplo.

Figura 8 ??? Exemplo de rota

Neste exemplo de rota acima, passamos os dois par??metros direto, sendo o primeiro o nome da rota e o segundo o nome da view que desejamos que seja carregada.
Tamb??m podemos criar rotas e redirecionar o usu??rio para onde desejamos que ele acesse utilizando o m??todo Redirect. Como mostra a figura 9.

Figura 9 ??? Exemplo de rota redirect

Neste exemplo, toda vez que o usu??rio acessar a p??gina raiz ??? / ??? ele ser?? redirecionado para a p??gina de teste. Esta rota n??o cont??m conte??do visual, ela ?? simplesmente um redirecionamento autom??tico.
Estes m??todos de rotas est??ticas s??o criados para as seguintes p??ginas, como exemplo: p??gina de login, de cadastro, p??gina de esqueci minha senha entre outras. Essas p??ginas precisam de uma URL especifica, por isso podem ser criadas com rotas est??ticas. Outras p??ginas precisam de rotas din??micas, veremos sobre elas no subt??pico seguinte.

Criando Rotas Din??micas com Par??metros

Novamente vamos imaginar que um usu??rio esteja acessando a aplica????o web pelo seu endere??o de dom??nio www.minhaempresa.com.br/. Ele est?? procurando uma not??cia como exemplo ???Enchente na Alemanha???.

Figura 10 ??? Rota GET din??mica com par??metro

O usu??rio ent??o digita a URL
https://www.minhaempresa.com.br/noticia/enchentenaalemanha
Neste exemplo, como mostra na figura 10, foi criado uma vari??vel chamada ???slug???, que receber?? o t??tulo da not??cia que o usu??rio est?? procurando, neste caso o t??tulo ???enchentenaalemanha???. Ent??o esta vari??vel ?? passada como par??metro para a fun????o e assim a fun????o retorna o conte??do deste par??metro.

NOTA: Durante os testes de c??digo em Laravel, retornarei apenas um echo e n??o uma view como mostra os exemplos nas figuras 6 e 7, para deixar meus testes mais pr??ticos sem precisar ter que criar v??rias views. Por isso, quando eu descrever que retornaremos uma p??gina, mas no exemplo estiver apenas retornando um echo, lembre-se que ?? necess??rio criar uma view para retornar uma p??gina e que o echo foi apenas um exemplo pr??tico.

Rota POST
Ao acessar http://minhaempresa/usuario com o verbo http POST, vai acessar a rota conforme mostra a figura 11 abaixo.

Figura 11 ??? Rota do tipo POST

Utilizado para inserir um novo registro, normalmente utilizado por requisi????es a partir de formul??rios ou requisi????es externas por API.

Prote????o contra ataques CSRF:

Rotas do tipo POST tem prote????o autom??tica no Laravel contra ataques CSRF. Esse tipo de ataque tem o objetivo de enviar de maneira fake um n??mero muito grande de requisi????es para o sistema. Ataques CSRF se n??o proteger pode inserir uma quantidade ilimitada de registros no banco de dados at?? derrubar o banco de dados.
O Laravel uma sess??o com um token ??nico que sempre que utilizado ?? atualizado para prote????o contra esse tipo de ataque. Sempre que fizer uma requisi????o com o verbo http post precisa enviar este token para validar a requisi????o.
Isso vale para as rotas POST, PUT e DELETE.

Rotas com Regex e Provider
Como podemos criar uma rota, usando express??o regular, ou seja, regex?
Podemos padronizar express??es regulares para utilizar ao criar rotas.
Por exemplo: Imagine que estamos listando na aplica????o web, o ID que ?? o n??mero de identifica????o do usu??rio e seu NOME.
Para isso, precisaremos criar duas rotas sendo uma para o NOME e outra para o ID.
Conforme mostra a figura 12.

Figura 12 ??? Exemplo de rota com par??metro

Por??m, quando criamos duas rotas conforme a figura 12, a primeira rota se sobrep??e, invalidando a segunda rota que buscaria na aplica????o o ID do usu??rio pois elas t??m o mesmo padr??o.
Para que isso n??o ocorra ?? preciso usar express??es regulares para distinguir cada rota, conforme mostra na figura 13.

Figura 13 ??? Rotas com express??es regulares

Desta forma, apesar das duas rotas terem o mesmo padr??o, nenhuma se sobrepor?? a outra pois temos condicionais diferentes.
A express??o regular [a-zA-Z]+, pegar?? qualquer texto e a express??o regular [0-9]+, pegar?? qualquer n??mero digitado.
Agora quando queremos criar uma padroniza????o desses filtros, por exemplo: sempre que usarmos ID nas rotas ela precisa de um padr??o pr??-estabelecido, ?? nestes casos que entra o conceito de Provider. Os Providers est??o localizados em app/Providers, conforme mostra a figura 14.

Figura 14 ??? Diret??rio App e subdiret??rio Providers.

Dentro do subdiret??rio Providers, existem cinco classes Providers pr??-configurados para diferentes ocasi??es, s??o elas:
AppServiceProvider.php,
AuthServiceProvider.php,
BroadcastServiceProvider.php,
EventServiceProvider.php e
RouteServiceProvider.php,
conforme mostra a figura 15.

Figura 15 ??? Classes Providers

Como estamos analisando rotas, vamos verificar o que ?? a classe RouteServiceProvider.php?

Esta classe basicamente faz a coleta de informa????es previas, e ent??o manda estas informa????es para determinado Controller. Por isso, podemos definir todas as nossas express??es regulares nesta classe, dentro da fun????o boot, conforme mostra a figura 16.

Figura 16 ??? Exemplo de regex na classe RouteServiceProvider

Quando definimos os regex no Provider RouteServiceProvider, n??o precisamos us??-las nas rotas web.php, como hav??amos feito antes, desta forma poderemos declarar as rotas com o mesmo padr??o, conforme mostrou a figura 12, pois uma n??o invalidar?? a outra mesmo tendo o mesmo padr??o.
Por isso, podemos definir v??rios tipos de express??es regulares para usarmos dentro da aplica????o e assim, quando o usu??rio buscar uma determinada informa????o, ela somente ser?? mostrada no browser se satisfazer os requisitos definidos.

Rotas com nome e Redirect
Vejamos como podemos nomear as rotas, e como isso facilitar?? a programa????o do desenvolvedor.
Imaginemos que nossa aplica????o tenha uma p??gina de configura????o e que esta p??gina cont??m subdivis??es como, p??ginas de informa????es do usu??rio, p??gina de permiss??es do usu??rio, entre outras. Neste caso teremos rotas como mostra a figura 17.

Figura 17 ??? Exemplo de rotas com nome

N??o precisamos nomear todas as rotas, por??m em alguns casos espec??ficos ?? importante nomearmos pois facilita na programa????o quando precisamos pegar link, redirecionar ou quando precisamos alterar a URL, pois neste caso ser?? alterado apenas em uma parte do c??digo, sem a necessidade de refatorar todo o c??digo para alterar a URL de uma rota.

Grupo de Rotas
Agrupar rotas ?? um recurso muito importante na programa????o de uma aplica????o Laravel, note por exemplo na figura 17 acima que os tr??s exemplos de rotas criadas t??m o mesmo prefixo ???/config???, no come??o, neste caso podemos definir essas rotas em um grupo. Conforme mostra na figura 18.

Figura 18 ??? Grupo de rotas com prefixo ???/config???.

Neste exemplo da figura 18, foi criado um grupo com o prefixo ???/config???, onde a fun????o retorna a p??gina de configura????es, quando acessar ???/???, retorna a p??gina de Informa????es quando acessar ???info??? e retorna a p??gina de permiss??es quando acessar ???permissoes???. Apesar da rota estar apenas com ???/???, ???info??? ou ???permissoes???, parecendo incompleta, quando elas fazem parte de um grupo, ent??o ele faz uma soma do prefixo com o que foi definido na rota.
Uma das vantagens de fazer assim ?? que se tiver que atualizar de ???config??? para ???admin??? basta simplesmente alterar o prefixo no grupo de rotas.

Fallback de Rotas (404)
Precisamos criar rotas para todas as possibilidades poss??veis da nossa aplica????o.
Por??m, se um usu??rio digitar um endere??o que n??o exista no sistema, como podemos ter controle sobre o que ser?? carregado e mostrado ao usu??rio?
Para tal controle o Laravel disp??e de um recurso chamado Fallback, n??o ?? Callback. Fallback ?? basicamente uma alternativa em se tratando de rotas, ou seja, quando definimos todas as poss??veis rotas da aplica????o e o usu??rio digitar uma rota inexistente no sistema, o Laravel percorrer?? todas as possibilidades de rota e se n??o encontrar a requisi????o ele cair?? no Fallback onde podemos definir que ele retorne nossa p??gina 404, a p??gina inicial ou redirecionar para qualquer outra p??gina que desejarmos. Conforme mostra a figura 19.

Figura 19 ??? Fallback para retorna a p??gina 404.

Rotas e Controllers
Talvez voc?? tenha se perguntado, como dar manuten????o em uma aplica????o grande com todos esses exemplos de rotas criadas, pois em cada rota ser?? necess??rio criar todas as a????es, por exemplo, na rota de informa????es, ser?? necess??rio carregar todos os dados do usu??rio que est?? logado ou seja, ser?? preciso montar toda a estrutura para cada tela, para que ela apare??a com as informa????es corretas. Isso deixaria nosso arquivo gigante quase que eleg??vel e de manuten????o horr??vel, pois todo o c??digo do sistema se concentrar?? no arquivo de rotas.
Por isso, a partir de agora vamos subdividir as responsabilidades de cada parte do sistema.
No arquivo de web.php vamos simplesmente definir as rotas e em cada rota ser?? designado um controller e dentro deste controller uma action espec??fica, ou seja, uma fun????o ou m??todo espec??fico para lidar com a rota.  
Os Controllers est??o localizados em app/Http/Controllers, conforme mostra a figura 20.

Figura 20 ??? Localiza????o do subdiret??rio Cotrollers
No subdiret??rio Controllers podemos criar nossos pr??prios controllers. Como criamos um controller?
Podemos criar um arquivo diretamente dentro do subdiret??rio Controller ou podemos criar atrav??s de linha de comando ( php arisan make:controller nomeController ). Para entendermos melhor, vejamos um exemplo, com o grupo de rotas que criamos anteriormente, como mostra a figura 18.
Criaremos um controller espec??fico para configura????es e baseado neste grupo de rotas, ele ter?? tr??s fun????es distintas, uma para ???/??? raiz, outra para ???info??? e uma para ???permissoes???. Vamos criar atrav??s de linha de comando sendo ConfigController o nome dele. Como mostra a figura 21.

Figura 21 ??? Controller ConfigController criado

Veja que dentro do subdiret??rio controllers j?? cont??m um controller pr??-criado sendo Controller.php.
Agora no controller que acabamos de criar precisamos definir as action, ou seja, os m??todos que cada um deve fazer. Conforme mostra a figura 22.

Figura 22 ??? Classe ConfigController e suas fun????es definidas

Ent??o, precisamos ir em web.php onde criamos as rotas e atribuir as actions para cada uma das rotas. Como fazemos isso? Ao inv??s de passarmos uma fun????o para as rotas, como mostra a figura 18, vamos passar o controller e a action correspondente que acabamos de criar em ConfigController. Como mostra a figura 23.

Figura 23 ??? Rotas com o controller e actions definidos.

Nota: O Controller definido ?? o arquivo ConfigController.php e as actions s??o: index, info e permissoes.
Desta forma, dividimos as responsabilidades, definindo que o ConfigController action index ?? respons??vel pela rota ???/??? (Raiz), que o ConfigController action info ?? respons??vel pela rota ???info??? e que o ConfigController action permissoes ?? o respons??vel pela rota ???permissoes???.
Dividindo essas responsabilidades nosso arquivo de rotas n??o ficar?? muito grande e ent??o poderemos controlar o restante dos processos pelo controller.

Request, Blade e Templates

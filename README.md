# teste_magazine_brindes
CRUD de usuários

Esse sistema de CRUD básico foi criado usando Laravel com banco de dados mysql.

1 - Para testar o sistema basta fazer o download do projeto para um local especifico do seu computador.
É necessário que tenha instalado o gerenciador de pacotes chamado composer para fazer o download das dependências.

2 - Depois que tiver baixado e descompactado o projeto basta abrir o comando de prompt e acessar a pasta do projeto.

3 - Digite o comando composer install para fazer o download de todos os pacotes necessários.

4 - agora precisamos criar um banco de dados do sistema para isso é necessário ter um servido web instalado no computador como por exemplo o XAMP que terá instalado o banco de dados MySQL. Basta executar o banco de dados MySQL e depois criar um banco de dados que será usado pelo sistema.

5 - Depois que o banco de dados tiver sido criado precisamos configurar o arquivo .env na pasta do projeto para que o sistema possa saber qual banco de dados vai ser utilizado. Onde tem as configurações do mysql informe no database o nome do banco de dados que você criou e salve o arquivo.

6 - no comando de prompt digite php artisan migrate para fazer a criação das tabelas no banco de dados.

7 - Quando concluir digite o comando php artisan serve que será executando um servidor local indicando qual a porta em que o projeto estará rodando que por padrão é localhost:8000.

Agora a aplicação deverá está rodando e é só fazer os testes.


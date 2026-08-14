# Projeto-Php
Projeto de login em Php - Programação para internet
Professor - Thiago Theiry
Aluno - Paulo Mendes de Sousa Neto
Info - 4M / Data 14-08-2026
01-(Conexão) 
O sistema começa pelo arquivo conexao.php, que é responsável por conectar o PHP ao banco de dados MySQL usando o comando new mysqli(), o connect_error verifica se houve algum erro na conexão e o die() encerra o sistema caso a conexão não seja realizada
02-(Index)
No index.php, acontece o login do usuário, o $_POST recebe o e-mail e a senha, e o código verifica se os campos foram preenchidos, depois, o SELECT procura esses dados no banco, se estiverem corretos, o $_SESSION salva as informações do usuário e o header() direciona para o painel, caso contrário, aparece uma "mensagem de erro"
03-(Logout)
O logout.php é responsável por sair da conta, ele inicia a sessão com session_start(), encerra a sessão usando session_destroy() e utiliza header() para voltar para a página inicial
04-(Painel)
O painel.php é a página que o usuário acessa depois de fazer login. O include('protect.php') verifica se ele está autorizado a entrar, o $_SESSION['nome'] pega o nome que foi salvo durante o login e mostra uma mensagem de boas-vindas. Também existe um link para o logout.php
05-(Proteger)
O protect.php serve para proteger o painel, ele utiliza session_start() para iniciar a sessão e isset($_SESSION['id']) para verificar se existe um usuário logado, caso não exista, o die() bloqueia o acesso e mostra uma mensagem dizendo que é necessário fazer login

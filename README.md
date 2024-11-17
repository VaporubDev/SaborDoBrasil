# Sabor do Brasil

Site de treino para SAEP de uma plataforma para compartilhamento de pratos de restaurantes para a visualização e contemplação dos usuários.

# Entregas

## BackEnd

* Criar DER com BRModelo
* Criar BD com base no modelo
* Criar API Rest para fazer solicitações pelo FrontEnd (Maior Prioridade)
* ou criar scripts para execução de tarefas do banco de dados sobre o frontend (Menor Prioridade

### Criar DER com BRModelo

Tome como base o modelo em anexos e crie tabelas adicionais que forem necessários

Entidades: 
empresas
usuarios (qtd_likes e qtd_deslikes armazenados também)
publicações
comentarios
likes
deslikes

Relacionamentos: Será necessário usar chave estrangeira

empresas realizam publicações (1 ou várias)
usuarios dão like em publicação (0 para 1)
usuários dão deslike em publicação (0 para 1);
usuarios criam comentários em publicações 

### Criar BD com PhpMyAdmin

Crie o BD com base no modelo, se não for necessário escrever sql, mas visualizá-lo depois faça.

### Criar APIRest com PHP puro

Criar APIRest com PHP Puro para solicitar e enviar informações para o BD. 

* Quando o usuário clicar em login e digitar seus dados corretos, deve autenticar o usuário com JWT

* Se o usuário clicar em login e não digitar seus dados corretos, não deve autenticar o usuário (o usuário que não é autenticado não pode dar like ou deslike, nem pode visualizar ou fazer comentários.

* Deve fazer solicitações para números de likes e deslikes do usuário, nome do usuário e foto do usuário no servidor

* Para empresas deve exibir suas publicações, seu nome no lado esquerdo e sua logo

## FrontEnd

* Criar Estrutura Básica da plataforma: para empresas e para usuários
* Criar rodapé da plataforma
* Criar botão que leva a uma tela de login através de um popup

### Criar Estrutura Básica da Plataforma

* Estrutura básica:

* Layout de 3 colunas:

  * 1 Coluna: Perfil do Usuário
  * 2 Coluna: Componente Main (possui as publicações)
  * 3 Coluna: Seção Login, com botão para o usuário entrar

![image](https://github.com/user-attachments/assets/18c6d527-6b4e-4ef2-9906-70efd425ed56)


* Para empresas: deve exibir logo, nome e sobrenome na 1 coluna, bem como suas publicações no componente main

* Para usuários: deve exibir foto de perfil, nome e quantidade de likes e deslikes. No componente main deve aparecer publicações de diferentes empresas.

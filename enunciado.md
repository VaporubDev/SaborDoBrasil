### Contextualização

A empresa culinária **Sabor do Brasil** está iniciando um projeto e deseja criar um sistema web para expandir seus negócios e atrair mais clientes. O objetivo é divulgar fotos de seus pratos e obter feedback dos clientes.

### Desafio

Você, como técnico em informática para internet, deverá desenvolver um sistema web que exiba os pratos gastronômicos cadastrados pelas empresas de culinária, permitindo a interação do público através de avaliações e comentários. Apenas usuários logados poderão interagir.

### Resultados e Entregas Esperados

#### 1. Diagrama Entidade-Relacionamento (DER)

- Crie um diagrama entidade-relacionamento com tabelas, relações, campos e chaves do banco de dados necessários para o projeto. Leve em consideração os arquivos anexos: `usuarios.csv`, `empresa.csv` e `publicacao.csv`.
- Salve o diagrama com seu nome e sobrenome, seguido pela sigla DER, e exporte-o em formato PDF.
- Exemplo de entrega: **NomeSobrenome_DER.pdf**

#### 2. Banco de Dados e Importação de Dados

- Crie a estrutura física do banco de dados conforme o DER desenvolvido.
- Importe os dados dos arquivos anexos para as tabelas do banco.
- Exporte o banco de dados para um arquivo SQL.
- Exemplo de entrega: **NomeSobrenome_NomeBanco.sql**

#### 3. Single Page Application (SPA)

- Implemente uma SPA para listar os pratos disponíveis e permitir interação com os usuários.
- O layout deve ter 3 colunas: perfil, publicações e login.
- Regras:
  - Área de perfil: informações da empresa, número de likes e dislikes.
  - Área principal: lista de publicações com imagem, título e legenda.
  - Área de login: botão "Entrar".
  - Rodapé: texto "Sabor do Brasil" e ícones de redes sociais.

#### 4. Recurso de Login

- Exiba um popup/modal de login ao clicar no botão "Entrar" ou nos ícones de interação sem estar logado.
- Verifique as credenciais do usuário e exiba mensagens de erro ou redirecione para a SPA com informações do usuário logado.

#### 5. Single Page Application - Usuário Logado

- Atualize o componente perfil com informações do usuário logado.
- Permita interações como like e dislike, persistindo os dados no banco de dados.
- Atualize o layout e o texto do botão para "Sair" ao fazer login.

#### 6. Recurso de Interação com Publicação

- Permita que o usuário comente nas publicações ao clicar no ícone de "chat".
- Implemente funcionalidades para edição e exclusão de comentários.
- Persista todas as interações no banco de dados.

### Resumo das Entregas

- **Diagrama Entidade-Relacionamento (PDF)**: NomeSobrenome_DER.pdf
- **Banco de Dados (SQL)**: NomeSobrenome_NomeBanco.sql
- **Código Fonte (ZIP)**: NomeSobrenome_Front, NomeSobrenome_Back, NomeSobrenome_Projeto

### Orientações Gerais

- Utilize a fonte **Inter** para todos os textos.
- As cores disponíveis para uso no layout são conforme especificado nos requisitos.

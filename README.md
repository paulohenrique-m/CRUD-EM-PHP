# CRUD_cadastro_php
Repositório para criação de um cadastro de usuários utilizando PHP e banco SQL


## Como utilizar o sistema de CRUD em php utilizando banco de dados MySQL

### 1. Instalação do XAMPP

- Faça o download e instale o XAMPP a partir do [site oficial](https://www.apachefriends.org/index.html).
- Siga as instruções de instalação para o seu sistema operacional.

### 2. Colocando a Pasta no Diretório do XAMPP

- Após a instalação, coloque a pasta do seu sistema CRUD dentro do diretório `htdocs` do XAMPP. Por padrão, o diretório `htdocs` está localizado em `C:\xampp\htdocs` no Windows e `/Applications/XAMPP/htdocs` no macOS.

### 3. Acessando o Sistema no Navegador

- Abra o seu navegador e digite o seguinte endereço: `http://localhost/nome_da_sua_pasta`, substituindo `nome_da_sua_pasta` pelo nome da pasta onde você colocou o sistema.
- Por exemplo, se você colocou o sistema na pasta `CRUD_cadastro_php`, o endereço será `http://localhost/CRUD_cadastro_php`.

### 4. Banco de dados
- O banco de dados utilizado foi o MySQL e conta com uma tabela chamada tb_usuarios com seguintes atributos: id, nome e email

### 5. Utilizando o Sistema

- Ao acessar o sistema, você verá a página inicial com os formulários de cadastro e a lista de usuários.
- Para adicionar um novo usuário, preencha os campos "Nome" e "Email" no formulário e clique em "Enviar".
- Para editar um usuário, clique no link "Editar" ao lado do usuário que deseja editar. Isso abrirá um modal com os dados do usuário, onde você poderá fazer as alterações e salvar.
- Para excluir um usuário, clique no ícone da lixeira ao lado do usuário que deseja excluir.

### 6. Encerrando o Uso

- Para encerrar o uso, feche o navegador e pare o servidor Apache no painel de controle do XAMPP.

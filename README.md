<h1>Lavarel-API-Test</h1>

<p>Este repositório contém uma API desenvolvida em Laravel que permite realizar operações CRUD (Criar, Ler, Atualizar, Deletar) em um sistema de usuários. A API foi criada para testar e demonstrar conceitos de autenticação, validação e manipulação de dados no Laravel.</p>

<h2>Funcionalidades</h2>
    <ul>
        <li><strong>Listar todos os usuários:</strong> Obtém uma lista de todos os usuários cadastrados.</li>
        <li><strong>Criar novos usuários:</strong> Adiciona um ou mais usuários ao banco de dados.</li>
        <li><strong>Obter usuário por ID:</strong> Busca informações de um usuário específico pelo seu ID.</li>
        <li><strong>Atualizar informações de um usuário:</strong> Atualiza os dados de um usuário específico.</li>
        <li><strong>Deletar usuário:</strong> Remove um usuário do banco de dados pelo seu ID.</li>
    </ul>

<h2>Requisitos</h2>
    <ul>
        <li>PHP &gt;= 8.0</li>
        <li>Laravel 11.38.2</li>
        <li>Composer</li>
        <li>Banco de dados (MySQL)</li>
    </ul>

<h2>Instalação</h2>
    <ol>
        <li>Clone este repositório para o seu ambiente local:
            <pre><code>git clone https://github.com/vikthyr/Laravel-API-Test.git</code></pre>
        </li>
        <li>Acesse o diretório do projeto:
            <pre><code>cd Laravel-API-Test</code></pre>
        </li>
        <li>Instale as dependências do Laravel:
            <pre><code>composer install</code></pre>
        </li>
        <li>Crie o arquivo <code>.env</code> a partir do arquivo <code>.env.example</code>:
            <pre><code>cp .env.example .env</code></pre>
        </li>
        <li>Gere a chave da aplicação:
            <pre><code>php artisan key:generate</code></pre>
        </li>
        <li>Configure o banco de dados no arquivo <code>.env</code>.</li>
        <li>Execute as migrações do banco de dados:
            <pre><code>php artisan migrate</code></pre>
        </li>
    </ol>

<h2>Endpoints</h2>
<h3>Listar todos os usuários</h3>
    <p><code>GET /api/users/listAll</code></p>
    <p>Retorna uma lista de todos os usuários cadastrados.</p>

<h3>Criar novos usuários</h3>
    <p><code>POST /api/users/new</code></p>
    <p>Cria um ou mais usuários. Envie um corpo de requisição com o seguinte formato:</p>
    <pre><code>{
  "users": [
    {
      "name": "Nome do Usuário",
      "email": "email@dominio.com",
      "password": "senha123"
    }
  ]
}</code></pre>

<h3>Obter usuário por ID</h3>
    <p><code>GET /api/users/{id}</code></p>
    <p>Retorna os detalhes de um usuário específico.</p>

<h3>Atualizar usuário</h3>
    <p><code>PUT /api/users/{id}</code></p>
    <p>Atualiza as informações de um usuário específico. Envie um corpo de requisição com os dados a serem atualizados:</p>
    <pre><code>{
  "name": "Nome Atualizado",
  "email": "email@atualizado.com",
  "password": "novaSenha123"
}</code></pre>

<h3>Deletar usuário</h3>
    <p><code>DELETE /api/users/{id}</code></p>
    <p>Deleta um usuário específico pelo ID.</p>

<h2>Autenticação</h2>
    <p>A API usa um <strong>token de autenticação simples</strong> que deve ser enviado na URL para acessar os endpoints protegidos.</p>
    <p>Exemplo de URL com token:</p>
    <pre><code>http://localhost:8000/api/users/listAll?token=20250120</code></pre>
    <p>O token para autenticação é: <strong>20250120</strong>.</p>

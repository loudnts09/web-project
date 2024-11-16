# Pizzaria do Cuca

Este é um projeto pessoal de estudo criado para praticar e aprimorar conhecimentos em **PHP**, **MySQL**, **Bootstrap** e lógica de negócios. O objetivo é construir um site responsivo e funcional para simular o sistema da "Pizzaria do Cuca".

## Estudo e Propósito

O projeto explora o desenvolvimento completo de um sistema web, integrando frontend e backend, incluindo:
- Criação de layouts responsivos com **Bootstrap**.
- Implementação de lógica de negócios em **PHP**.
- Uso de **MySQL** para armazenamento de dados.

## Funcionalidades

- **Sistema de Pedidos**:
  - Usuários podem realizar pedidos e visualizar seu histórico.
  - Administradores podem gerenciar todos os pedidos.

- **Perfis de Usuário**:
  - Cadastro, edição e exclusão de perfis.
  - Diferenciação entre usuários e administradores.

- **Banco de Dados Relacional**:
  - Armazenamento estruturado de informações usando MySQL.

- **Interface Responsiva**:
  - Navbar, formulários e rodapé adaptáveis a diferentes dispositivos.

## Banco de Dados

O projeto utiliza um banco de dados relacional MySQL com as seguintes tabelas principais:

### Tabelas

1. **`pessoas`**
   - Armazena informações de usuários e administradores.
   - Campos principais: `id`, `nome`, `email`, `senha`, `tipo_perfil` (1 para usuário e 2 para administrador), entre outros.
   - Permite gerenciar perfis e autenticação.

2. **`pedidos`**
   - Registra os pedidos realizados no sistema.
   - Campos principais: `id`, `pessoa_id` (chave estrangeira para `pessoas`), `nome_da_pizza`, `tamanho`, `ingredientes`, `perfil_id` (chave estrangeira para `perfis`), `data_hora`.

3. **`perfis`**
   - Define os tipos de perfil disponíveis no sistema.
   - Valores: `1` para usuário e `2` para administrador.

### Relacionamentos

- **`pessoas`** e **`pedidos`**: Um usuário ou administrador pode estar associado a vários pedidos.
- **`pedidos`** e **`perfis`**: Cada pedido está associado a um tipo de perfil (usuário ou administrador).

### Esquema SQL

O banco de dados pode ser configurado importando o arquivo `pizzaria_do_cuca.sql` incluído no projeto. Ele cria as tabelas, define os relacionamentos e insere valores iniciais.

## Tecnologias Utilizadas

- **Frontend**:
  - HTML5, CSS3, Bootstrap 5.3
- **Backend**:
  - PHP
  - MySQL
- **Outros**:
  - Estrutura MVC para organização do código.

## Estrutura de Arquivos

```bash
/
├── config/                # Configurações do banco de dados e constantes
├── controller/            # Lógica de controle (ex.: manipulação de pedidos e usuários)
├── css/                   # Arquivos de estilo
├── imagens/               # Imagens utilizadas no projeto
├── js/                    # Scripts JavaScript
├── model/                 # Classes de modelos para interação com o banco de dados
├── services/              # Serviços auxiliares (ex.: upload de arquivos)
├── style.css              # Estilos customizados
├── views/                 # Páginas PHP para exibição de conteúdo
├── index.php              # Página inicial do site
├── pizzaria_do_cuca.sql   # Esquema do banco de dados
└── README.md              # Documentação do projeto

## Como Configurar

1. **Clonar o Repositório**:
   ```bash
   git clone <URL_DO_REPOSITORIO>
   cd pizzaria_do_cuca

## Configurar o Banco de Dados

1. **Importar o Arquivo SQL**:
   - Importe o arquivo `pizzaria_do_cuca.sql` para seu banco MySQL usando o phpMyAdmin ou outro cliente SQL.
   - No phpMyAdmin:
     - Selecione o banco de dados desejado ou crie um novo.
     - Use a opção **"Importar"** e selecione o arquivo `pizzaria_do_cuca.sql`.

2. **Configurar as Credenciais**:
   - No arquivo `config/database.php`, configure as credenciais de acesso ao banco de dados:
     ```php
     define('DB_HOST', 'localhost');
     define('DB_USER', 'seu_usuario');
     define('DB_PASS', 'sua_senha');
     define('DB_NAME', 'pizzaria_do_cuca');
     ```

## Executar o Servidor

1. **Inicie o Servidor Local**:
   - Utilize um servidor local como **XAMPP** ou **WAMP**.
   - Certifique-se de que o Apache e o MySQL estão em execução.

2. **Configurar o Projeto**:
   - Coloque o projeto na pasta `htdocs` (para XAMPP) ou equivalente no seu servidor.

3. **Acessar no Navegador**:
   - Abra o navegador e acesse o endereço:
     ```
     http://localhost/pizzaria_do_cuca
     ```

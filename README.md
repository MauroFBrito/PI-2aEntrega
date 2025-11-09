# PI-2aEntrega
Projeto PI 2025 2a entrega

## Objetivo do Projeto
O app foi criado para facilitar o acesso à informação sobre a disponibilidade de vacinação, permitindo que os usuários controlem seu histórico.

## Pré-requisitos
Certifique-se de ter as seguintes ferramentas instaladas:

Git (para clonar o repositório)

## Tecnologias Utilizadas

PHP, HTML, SQL e CSS

Acesso: http://localhost:8081

Vídeo do Trabalho: https://youtu.be/TvNBlra09dE


### ✅ Endpoints da API  
- **POST** `/cadastrar.php` → Cadastra vacinação  
- **GET** `/listar.php?id_usuario={id}` → Lista vacinações do usuário  

### ✅ Testando com Postman  
**Cadastrar vacinação:**  
- Método: `POST`  
- URL: `http://localhost/cadastrar.php`  
- Body → `x-www-form-urlencoded`:  

id_usuario: 1
id_vacina: 101
data_aplicacao: 2025-11-09
local_aplicacao: Posto Central
lote: L12345
responsavel_aplicacao: Dr. Silva

**Consultar vacinações:**  
- Método: `GET`  
- URL: `http://localhost/listar.php?id_usuario=1`  

### ✅ Simulação com Swagger  
- Arquivo: `swagger.yaml` incluído no repositório  
- Como usar:  
1. Abra https://editor.swagger.io  
2. Cole o conteúdo do arquivo `swagger.yaml`  
3. Clique em **Try it out** para simular as requisições

## Colaboradores do Projeto

BRUNO RAFAEL DE MENDONCA SIMAS

ELIS DOS SANTOS NUNES 

EMILY DEL PORTO LOBO

MAURO DA FONSECA BRITO

TARCISO DA SILVA SANTOS

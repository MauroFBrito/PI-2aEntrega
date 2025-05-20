# PI-2aEntrega
Projeto PI 2025 2a entrega
# Análise de Sistemas

## 4.1 Processo de Elicitação de Requisitos

O processo de elicitação de requisitos foi conduzido visando identificar e compreender as necessidades dos usuários finais e da sociedade em geral, para nortear o desenvolvimento de um sistema alinhado com suas expectativas e demandas reais.

Para isso, foram utilizados dois métodos principais:

### Pesquisa por meio do Google Forms

Foi elaborada e disponibilizada uma pesquisa online utilizando a ferramenta Google Forms. Esta pesquisa teve como finalidade coletar dados diretamente de potenciais usuários, permitindo compreender suas dificuldades, expectativas e sugestões em relação ao sistema a ser desenvolvido. As perguntas foram formuladas de maneira clara e objetiva, abrangendo aspectos funcionais e não funcionais do sistema.

### Análise das necessidades da sociedade/indivíduo

Além da coleta de dados via formulário, foi realizada uma análise qualitativa baseada na observação de demandas recorrentes da sociedade e de indivíduos em contextos semelhantes ao que o sistema se propõe a atender. Esse levantamento contribuiu para identificar problemas reais enfrentados pelos usuários e permitiu a priorização de funcionalidades que realmente agreguem valor.

### Como resultado desse processo de elicitação, foram extraídas informações relevantes como:

- As funcionalidades desejadas pelos usuários;
- Dificuldades enfrentadas no uso de soluções similares já existentes;
- Expectativas em relação à usabilidade, acessibilidade e desempenho do sistema;
- Sugestões de melhorias e recursos adicionais que poderiam tornar o sistema mais eficiente e atrativo.

Essas informações serviram como base para a definição dos requisitos do sistema, garantindo que o desenvolvimento esteja alinhado com as reais necessidades do público-alvo.

## 4.2 Requisitos Extraídos

### Requisitos funcionais

- O sistema deve possibilitar o login com autenticação segura.
- O sistema deve permitir o registro, edição, exclusão e consulta de histórico de vacinação.
- O sistema deve enviar notificações por e-mail para qualquer tipo de solicitação transacional.
- O sistema deve gerar histórico para download em formato PDF.

### Requisitos não funcionais

- **Alta disponibilidade**: O sistema deve estar disponível 99% do tempo.
- A interface do sistema deve ser responsiva e acessível via dispositivos móveis.
- O tempo de resposta para qualquer ação do usuário não deve exceder 2 segundos.
- Os dados dos usuários devem ser armazenados de forma segura, com criptografia em repouso e em trânsito.
- O sistema deve ser compatível com os navegadores mais utilizados.

### Regras de negócio

- Cada CPF está limitado a uma única conta no sistema.
- Um endereço de e-mail pode estar associado a mais de uma conta, visto que crianças e alguns idosos não possuem contas próprias.
- Um usuário só pode realizar consultas do seu próprio histórico de vacinação, não permitindo ter acesso a informações de terceiros, mesmo que seja da família.

### Fluxos alternativos

#### Cadastro de usuário

- **Fluxo principal**: Usuário preenche dados corretamente e sistema salva cadastro.
- **Fluxo alternativo 1**: Dados obrigatórios não preenchidos → sistema impede que o usuário finalize o cadastro.
- **Fluxo alternativo 2**: E-mail já cadastrado → sistema exibe mensagem de conta já existente e opção de “esqueci minha senha”.

#### Login

- **Fluxo principal**: Usuário insere login e senha válidos → sistema concede acesso.
- **Fluxo alternativo 1**: Senha incorreta → sistema exibe aviso de senha incorreta e permite até 3 novas tentativas de login.
- **Fluxo alternativo 2**: Conta bloqueada por tentativas inválidas → sistema bloqueia acesso e envia e-mail com link para reativação da conta.

# Análise de Sistemas

## 5.1 Elicitação das Entidades

Foram identificadas as seguintes entidades principais para o sistema de controle e histórico de vacinação. Cada uma representa um conceito crucial para o funcionamento do sistema:

### Entidade: Usuário

**Atributos:**

- `id_usuario` (chave primária): Identificador único do usuário no sistema.
- `nome`: Nome completo do usuário.
- `cpf`: Número do CPF do usuário, sem pontuação, apenas números.
- `email`: E-mail do usuário utilizado para notificações.
- `senha`: Senha criptografada para autenticação do usuário.
- `data_nascimento`: Data de nascimento do usuário, utilizada para elegibilidade vacinal do usuário.
- `telefone`: Canal de contato opcional, apenas números.
- `data_cadastro`: Data de cadastro do usuário no sistema.

### Entidade: Vacinação

**Atributos:**

- `id_vacinacao` (chave primária): Identificador único de vacinação.
- `id_usuario` (chave estrangeira): Usuário vacinado.
- `id_vacina` (chave estrangeira): Tipo de vacina aplicada.
- `data_aplicacao`: Data em que a dose foi aplicada.
- `local_aplicacao`: Local onde a vacina foi aplicada.
- `lote`: Lote da vacina aplicada.
- `responsavel_aplicacao`: Nome do profissional de saúde ou instituição.

### Entidade: Vacina

**Atributos:**

- `id_vacina` (chave primária): Identificador único da vacina.
- `nome`: Nome da vacina (comercial ou técnico).
- `fabricante`: Fabricante da vacina.
- `doses_recomendadas`: Número de doses necessárias segundo o PNI.
- `intervalo_doses`: Período sugerido entre as doses (em dias).
- `grupo_alvo`: Faixa etária e/ou grupo-alvo.

### Entidade: Notificação

**Atributos:**

- `id_notificacao` (chave primária): Identificador único da notificação.
- `id_usuario` (chave estrangeira): Usuário que recebeu a notificação.
- `tipo`: Tipo da notificação (ex: lembrete de dose, confirmação de cadastro, etc).
- `mensagem`: Texto da notificação.
- `data_envio`: Data e hora do envio da notificação.
- `status`: Status da entrega (enviado, falha, lido, entre outros).

Vídeo do Trabalho: https://youtu.be/TvNBlra09dE

# 📚 Desafio: Sistema de Gerenciamento de Biblioteca

## 🎯 Objetivo
Desenvolver um sistema de gerenciamento de biblioteca que atenda às necessidades de bibliotecários, leitores e do sistema de pagamentos externo. O sistema deve permitir controle de acervos, empréstimos, devoluções, multas, reservas e geração de relatórios.

---

## 👤 Atores Envolvidos

- **Bibliotecários**
  - Responsáveis por cadastrar e gerenciar o acervo de livros.
  - Visualizam relatórios de uso e multas.
  
- **Leitores (Usuários)**
  - Solicitam, renovam e devolvem empréstimos.
  - Podem reservar livros.
  - Precisam autenticar-se no sistema.

- **Gateway de Pagamento**
  - Utilizado para calcular e efetuar pagamento de multas.

---

## 📘 Casos de Uso

### Para Bibliotecários:
- Cadastrar novos livros
- Gerenciar estoque de livros
- Visualizar relatórios de uso e multas

### Para Leitores (Usuários):
- Autenticar
- Solicitar empréstimos
- Renovar prazo de empréstimo
- Devolver livros
- Reservar livros

### Para o Sistema:
- Gerenciar empréstimos (caso de uso incluído em várias funcionalidades)
- Calcular multa (pode ser usado ao devolver livros ou consultar status)

---

## 🔗 Relacionamentos

- `Cadastrar novos livros` **inclui** `Gerenciar estoque`
- `Solicitar empréstimos`, `Renovar prazo de empréstimo`, `Devolver livros` **incluem** `Gerenciar empréstimos`
- `Devolver livros` **extende** `Calcular multa`
- `Calcular multa` **inclui** interação com o **Gateway de Pagamento**
- Todo usuário deve **autenticar** antes de usar o sistema

---

## 📌 Regras e Observações

- Apenas bibliotecários podem cadastrar livros ou gerar relatórios.
- O sistema calcula multas com base no atraso na devolução.
- O leitor não pode reservar livros já reservados por outro.
- Empréstimos e devoluções são registrados e controlados pelo sistema.
- O pagamento da multa deve ser feito por meio de um gateway externo.

---

## ✅ Entregáveis

- Diagrama de casos de uso UML
- Implementação ou protótipo do sistema (opcional)
- Documentação dos casos de uso (opcional)

---
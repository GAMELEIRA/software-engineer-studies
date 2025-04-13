# Diagrama de Casos de Uso

O **diagrama de casos de uso** é uma representação visual que descreve o conjunto de funcionalidades de um sistema (*casos de uso*), os **atores envolvidos** e os **relacionamentos entre eles**.

Os **atores** são representados graficamente por um boneco e podem ser tanto **pessoas quanto entidades externas**, como sistemas, dispositivos ou serviços que interagem com o sistema em questão.  
Por exemplo: um *gateway* de pagamento, um serviço de autenticação ou um hardware específico.  
> Importante: o ator **não precisa ser humano**, basta que ele se comunique com o sistema de alguma forma.

Os **casos de uso** são ilustrados por **elipses** e descrevem as **ações ou funcionalidades** que o sistema oferece aos atores. Essas ações devem ser **agrupadas conforme seus cenários ou similaridade funcional**, facilitando a compreensão da estrutura e do propósito de cada conjunto de ações.  
Essa organização ajuda a manter o modelo **claro e intuitivo**.

## Benefícios do Diagrama de Casos de Uso

Os casos de uso ajudam a:

- **Elicitar e documentar requisitos funcionais** de forma mais compreensível para todos os envolvidos no projeto;
- **Comunicar com clareza o escopo** do sistema entre desenvolvedores, analistas, *stakeholders* e usuários finais;
- **Identificar relações de dependência e extensão** entre funcionalidades;
- **Ajudar no planejamento de testes e validação** de funcionalidades.

---

Portanto, o **diagrama de casos de uso** é uma ferramenta fundamental na engenharia de software, especialmente nas **fases iniciais do projeto**, pois proporciona uma **visão macro do sistema**, facilitando o **entendimento dos requisitos** e apoiando a **modelagem do comportamento esperado**.


# Tipos de Relacionamentos em Casos de Uso

Em diagramas de casos de uso, podem existir **três tipos principais de relacionamentos**: **Include**, **Extend** e **Generalization**. Cada um representa uma forma diferente de interação entre os casos de uso.

---

## Include

O relacionamento **Include** (incluir) é utilizado quando uma **ação sempre executa outra ação como parte de seu processo**. Ou seja, quando o **caso de uso X inclui obrigatoriamente o caso de uso Y**, porque Y representa um comportamento comum e reutilizável.

- Representação: seta tracejada com a keyword `<<include>>`.
- Direção da seta: **do caso de uso X (principal) para o Y (incluído)**.

> Exemplo: Um caso de uso "Finalizar Compra" pode incluir "Calcular Frete", já que essa ação sempre será necessária no processo.

---

## Extend

O relacionamento **Extend** (estender) é usado quando uma **ação opcionalmente estende o comportamento de outra**. Ou seja, **o caso de uso X pode ser estendido por Y**, dependendo de uma condição ou cenário específico.

- Representação: seta tracejada com a keyword `<<extend>>`.
- Direção da seta: **do caso de uso Y (estendido) para o X (base)**.

> Exemplo: Um caso de uso "Realizar Login" pode ser estendido por "Autenticação em Duas Etapas", se essa funcionalidade estiver habilitada.

---

## Generalization

O relacionamento **Generalization** (generalização) é utilizado quando **um caso de uso representa um comportamento genérico**, e **outros casos de uso mais específicos herdam esse comportamento**, podendo especializá-lo.

- Representação: **seta contínua (linha cheia)** sem keyword.
- Direção da seta: **do caso de uso específico (filho) para o genérico (pai)**.

> Exemplo: "Efetuar Pagamento" pode ser generalizado em "Pagar com Cartão" e "Pagar com Boleto", que representam variações especializadas da ação principal.

---

Esses relacionamentos ajudam a tornar o diagrama mais organizado, reutilizável e compreensível, principalmente em sistemas com muitos casos de uso e interações complexas.

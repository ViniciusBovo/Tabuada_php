# 🔢 Tabuada Interativa em PHP

<p align="center">
  <img src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP" />
  <img src="https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white" alt="HTML5" />
  <img src="https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white" alt="CSS3" />
  <img src="https://img.shields.io/badge/XAMPP-FB7A24?style=for-the-badge&logo=xampp&logoColor=white" alt="XAMPP" />
</p>

Uma aplicação web intuitiva e moderna para geração dinâmica de tabuadas, construída com backend em **PHP** e uma interface elegante utilizando **HTML5** e **CSS3** contemporâneo com efeitos de *glassmorphism* e tema dark.

---

## 🌟 Funcionalidades

- **Cálculo Dinâmico:** Gere instantaneamente a tabuada de 1 a 10 de qualquer número inteiro informado.
- **Design Moderno:** Interface escura (*Dark Mode*) sofisticada com estética *glassmorphism*, bordas com gradiente, sombras neon e tipografia *Plus Jakarta Sans*.
- **Responsividade Total:** Adaptado perfeitamente para uso em smartphones, tablets e desktops.
- **Experiência Interativa:** Efeitos de foco, microinterações, transições suaves e botões de ação intuitivos (`Calcular`, `Limpar` e `Voltar ao Menu`).
- **Validação de Entrada:** Formulário com campo numérico obrigatório e foco automático para maior usabilidade.

---

## 🚀 Tecnologias Utilizadas

- **[PHP](https://www.php.net/):** Processamento das requisições via método `POST`, manipulação de variáveis e renderização dinâmica dos resultados com laço de repetição.
- **[HTML5](https://developer.mozilla.org/pt-BR/docs/Web/HTML):** Estruturação semântica da página de formulário e da tabela de resultados.
- **[CSS3](https://developer.mozilla.org/pt-BR/docs/Web/CSS):** Estilização avançada com variáveis CSS (Custom Properties), Flexbox, efeitos de transparência (*backdrop-filter*) e animações.

---

## 📂 Estrutura do Projeto

```plaintext
Tabuada/
│
├── index.html        # Página principal com o formulário de entrada
├── tabuada.php       # Script PHP de processamento e exibição da tabuada
├── style.css         # Folha de estilos completa com tema dark glassmorphism
└── README.md         # Documentação do projeto
```

---

## 🛠️ Como Executar o Projeto

Você pode executar o projeto de duas maneiras: utilizando o **XAMPP** ou o **Servidor Embutido do PHP**.

### Opção 1: Usando o XAMPP (Recomendado)

1. Certifique-se de que o [XAMPP](https://www.apachefriends.org/pt_br/index.html) está instalado no seu computador.
2. Clone ou copie a pasta do projeto para o diretório `htdocs` do XAMPP:
   ```bash
   # Exemplo no Windows:
   C:\xampp\htdocs\Tabuada
   ```
3. Abra o **XAMPP Control Panel** e inicialize o módulo **Apache** clicando em **Start**.
4. Abra seu navegador web e acesse:
   ```
   http://localhost/Tabuada/
   ```

---

### Opção 2: Usando o Servidor Embutido do PHP (CLI)

Caso já tenha o PHP instalado no seu terminal:

1. Abra o terminal na raiz do projeto:
   ```bash
   cd c:\xampp\htdocs\Tabuada
   ```
2. Inicie o servidor embutido do PHP:
   ```bash
   php -S localhost:8000
   ```
3. Acesse no navegador:
   ```
   http://localhost:8000
   ```

---

## 📖 Como Usar

1. Na página inicial (`index.html`), digite o número que deseja consultar no campo indicado.
2. Clique no botão **Calcular** (ou pressione `Enter`).
3. O script (`tabuada.php`) processará o valor e apresentará a tabela com a multiplicação de 1 a 10.
4. Para fazer um novo cálculo, clique em **Voltar ao Menu**.

---

## 👨‍💻 Autor

Desenvolvido por **[Vinicius Liberatti Bovo](https://github.com/ViniciusBovo)**.

---

## 📄 Licença

Este projeto é de uso livre para fins educacionais e de estudo.

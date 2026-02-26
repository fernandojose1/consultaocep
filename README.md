# Consulta CEP

Aplicação PHP simples para consultar endereços a partir de um CEP usando a API pública [ViaCEP](https://viacep.com.br/).

## Funcionalidades

- Consulta de CEP com integração à API ViaCEP.
- Validação de CEP (somente números e exatamente 8 dígitos).
- Tratamento de erros de rede/API e mensagens amigáveis ao usuário.
- Saída com escaping (`htmlspecialchars`) para reduzir risco de XSS.
- Interface responsiva básica para uso em desktop e mobile.

## Estrutura do projeto

- `index.php`: página principal e formulário.
- `consultaocep.php`: lógica de consulta, validação e tratamento de erro.
- `style.css`: estilos da interface.

## Requisitos

- PHP 7.4+ (recomendado PHP 8+).
- Acesso à internet para consultar o ViaCEP.

## Como executar localmente

No diretório do projeto:

```bash
php -S 0.0.0.0:8000
```

Abra no navegador:

- `http://localhost:8000`

## Como usar

1. Digite um CEP com 8 números (ex.: `01001000`).
2. Clique em **Buscar**.
3. Os campos de endereço serão preenchidos automaticamente quando o CEP for válido.

## Validações e comportamento de erro

- CEP inválido (não numérico ou tamanho diferente de 8): exibe mensagem de validação.
- Falha de consulta (rede/API): exibe mensagem de indisponibilidade.
- CEP inexistente: exibe mensagem de "CEP não encontrado".

## Licença

Este projeto não possui licença definida no repositório até o momento.

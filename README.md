# Teste para Vaga de Desenvolvedor PHP

Este repositório foi criado com o objetivo de descrever a tarefa a ser realizada pelo candidato da vaga para desenvolvedor PHP

## Sobre a vaga

A vaga foi publicada em diversas comunidades e sua descrição está disponível no link https://github.com/phpdevbr/vagas/issues/32

## Sobre o teste

Seu desafio será a criação de uma aplicação Laravel que permita o usuário visualizar uma lista de cursos. Deve permitir também que o usuário consiga pesquisar por palavra-chave e selecionar determinado item da lista para visualizar informações mais detalhadas.

Algumas observações:

* Utilizar a versão mais recente do Laravel Framework
* A interface deve ser responsiva
* Você pode utilizar **QUALQUER** ferramenta de frontend para auxiliar no desenvolvimento.
* Adotar o Material Design como guia de estilo.

Segue abaixo estrtutura de dados de um `Curso` para orientar na criação da(s) tabela(s) e campo(s) no banco de dados:

```json
{
	"title": "Consultoria Presencial de Marketing",
	"category": "Mercado e vendas",
	"description": "Se você possui um pequeno negócio e deseja melhorar o desempenho da sua gestão, planejar estratégias para vencer a atual crise econômica e está em busca de um trabalho personalizado, conheça a Consultoria Empresarial do Sebrae.",
	"price": 150,
	"start": "2017-10-12T18:00:00-03:00",
	"finish": "2017-10-12T19:30:00-03:00",
	"consultant":{
		"avatar": "https://randomuser.me/api/portraits/women/86.jpg",
		"name": "Melinda Perez"
	},
	"address": {
		"street": "Av. Barão Homem de Melo",
		"number": 329,
		"neighborhood": "Nova Granada",
		"city": "Belo Horizonte"
	}
}
```

Abaixo segue os protótipos da interface

### Mobile

![Mobile](/prototypes/mobile.png)

### Desktop

![Desktop](/prototypes/web.png)


## Execução do teste

Para realizar o teste, efetue um fork desse repositório e inicie o desenvolvimento do diretório `project`. Ao finalizar, envie um pull-request para nossa avaliação.

Se ocorrer alguma dúvida, abra uma issue nesse repositório.

Boa sorte!

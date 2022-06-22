# theme-remui_infnet
Tema filho para o Moodle do Remui 3.9

## Instruções:
Esse reposotorio do tema deve estar preferecialmente atualizado, pois caso seja necessario instalar novamente o tema filho, todas as modificações no tema estarão documentadas. 

### Fluxo para manter o tema atualizado:

Ambiente de desenvolvimento do tema devesse commitar qualquer mudança do tema para o Github:

* Dev -> github

Instalar tema filho no Moodle em ambiente de desenvolvimento é ideal clonar ou dar pull no projeto, em ambiente de produção basta baixar o projeto zipado:

* Github -> Moodle

Leves mudanças do tema em produção:

* Copiar mudanças e editar diretamente no github.

## Remui
Para verificar novas versões do tema Remui, pode ser consulatado pelo [site da Edwiser](https://edwiser.org/documentation/edwiser-remui/change-log/)

Alem das alterações do tema filho para estender e customizar o Remui, é necessario fazer leves ajustes no tema pai quando instalar instalar do zero ou uma nova versão. As mudanças são as sequintes:

* O Tema Remui esconde a foto do usuário em suas classes, para evitar esse comportamento deve-se apagar a classe css d-none, que fica em remui\classes\output\core_renderer.php.

* Na mesma classe do item anterior, modificar o display de um item _justify-content-between_ para _justify-content-start_, evitando assim adicionar mais css ao tema filho.

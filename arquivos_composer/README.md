composer é um aplicativo desenvolvido para linguagem PHP para empacotar projetos

projetos empacotados podem ser importados e exportados no site packed

no PHP, em vez de criar alguma funcionalidade do zero, pode importar funções e classes de projetos empacotados pelo composer

inicializar composer
- composer init
    - informar o nome do pacote: não é obrigatório
    - description: informar a descrição dos projetos cadastrados
    - author: quem criou o pacote (nome <e-mail>)(não é obrigatório)
    - minimum stability: (não é obrigatório, porém se informar vazio estará selecionando stable)
    - packeg tipe: 
        - library(padrão): será consumida por outros projetos
        - project: framework, será criada um projeto em cima dele
        - metapackege: pacote que não tem código fonte, serve somente para reunir uma lista de dependentes
    - license: MIT(disponível para todo mundo)
    - dependencia: no
    - dependencia de desenvolvimento: no

    - será gerado:
        - pasta "vendor"
            - será informado dentro da pasta cada arquivo configurado em "composer.json"
            - ela precisa estar inclusa no arquivo .gitignore
        - pasta "src"
            - será inclusa os buscadores de settings, cria um API
        - arquivo "composer.json"
            - em "require", será informado os programas necessários que precisam estar instaladas para rodar o pacote
            - em "autoload", será informado o caminho das pastas para o arquivo desejado, podendo configurar o caminho como bem entender
                - "psr-0" informa a classe que será importado do arquivo salva em uma determinada pasta, geralmente "src"
                - "psr-4" informa o namespace, ou seja, o caminhp para o acesso da pasta

Criando API
- dentro do arquivo .php, que será uma API, salvo na pasta "src" informar "namespace" e o nome informado no "composer.json"
    * cria ligação do arquivo .php da pasta "src" com o arquivo "composer.json"

Utilização do API
- informar 'require_once "vendor/autoload.php"'
- 'use "caminho para o arquivo php onde o API está salvo"'



site Packagist
- permite ter acesso a APIs disponilizadas publicamente

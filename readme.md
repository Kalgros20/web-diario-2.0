Web_Diario_2.0

Este é o repositório do projeto de lds, o projeto consiste em um sistema para facilitar o registro de presença, carga horária e ocorrências de sala de aula feito pela coordenadoria de apoio ao ensino do  Instituto Federal de Educação, Ciência e Tecnologia de São Paulo (IFSP) campus guarulhos

Para executar o projeto é necessário:

<ul>
    <li>Clonar o repositório</li>
    <li>Ter o PHP, composer e mysql instalados</li>
    <li>Criar um arquivo .env com base no exemplo (.env.example) e conectar com o banco</li>
    <li>Executar os seguintes comando da raiz do projeto:</li>
        <ul>
            <li>composer install</li>
            <li>composer dump-autoload</li>
            <li>php artisan key:generate</li>
            <li>php artisan migrate:fresh --seed</li>
            <li>php artisan passport:install</li>
        </ul>
<ul>


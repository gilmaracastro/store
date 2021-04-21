<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Sobre

Este projeto nasce com a ideia de ser a parte 1 de um sistema incremental que agrega tecnologia e conhecimentos
adquiridos de forma gradual.

Vamos começar utilizando o [laravel 7.x](https://laravel.com/docs/7.x) que ainda não utiliza em sua documentação a ideia
de docker e containner que é um assunto que merece uma atenção particular.



Para brincar com ele, basta instalar o laravel com suas dependências conforme descrito na sua [documentação](https://laravel.com/docs/7.x) e configurar o .env para utilizar o sqlite.


### Como faz isso???

- Vá para o .env e altere a variável `DB_CONNECTION` para receber o sqlite:

```
DB_CONNECTION=sqlite
```

- Comente as seguintes variáveis:

```
# DB_HOST=127.0.0.1
# DB_PORT=3306
# DB_DATABASE=laravel
# DB_USERNAME=root
# DB_PASSWORD=
```

- Crie o seguinte arquivo na pasta database: `database.sqlite`

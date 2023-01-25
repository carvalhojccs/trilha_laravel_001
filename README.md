#TRILA LARAVEL
## FIRST PROJECT
- Documentação
https://laravel.com/docs/9.x

git@github.com:carvalhojccs/trilha_laravel_001.git
git init
git add .
git commit -m "wip"
git branch -M main
git remote add origin git@github.com:carvalhojccs/trilha_laravel_001.git
git push -u origin main


1) Clonar o projeto
git clone git@github.com:carvalhojccs/trilha_laravel_001.git
cd trilha_laravel_001
composer install
cp .env.example .env
php artisan key:generate
obs.: Para quem vai utlizar o servidor all in one no VirtualBox, clonar o projeto dentro da pasta /home/desenvolvedor/portifolio

2) Para quem vai realizar a trilha com Docker, asistir os vídeos 01 ao 04
3) Para quem vai realizar a trilha com servidor all in one no VirtualBox, seguir os passos abaixo como usuário root
3.1) Criar o arquivo de log
touch /home/desenvolvedor/portifolio/trilha_laravel_001/storage/logs/laravel.log
3.2) Criar o arquivo de configuração do virtual host com o seguinte conteúdo
vim /etc/apache2/sites-available/trilha_laravel_001.conf

<VirtualHost *:80>
ServerName app.project001.local.br
ServerAlias app.project001.local.br
ServerAdmin desenvolvedor@localhost

DocumentRoot /var/www/trilha_laravel_001/public
	<Directory /var/www/trilha_laravel_001/public>
		Options -Indexes +FollowSymLinks
		AllowOverride All
	</Directory>
	<FilesMatch \.php$>
		SetHandler "proxy:unix:/var/run/php/php8.2-fpm.sock|fcgi://localhost"
	</FilesMatch>
	
	ErrorLog ${APACHE_LOG_DIR}/project001_error.log
	CustomLog ${APACHE_LOG_DIR}/project001_access.log combined
</VirtualHost>

3.3) Publicar a configuração e reiniciar o apache2
a2ensite trilha_laravel_001.conf
systemctl restart apache2

3.4) Criar d link simbólico no diretório do apache para acesso a a plicação
ln -s /home/desenvolvedor/portifolio/trilha_laravel_001 /var/www/

3.5) Ajustar as permissões necessárias
chown desenvolvedor:www-data -Rf /home/desenvolvedor/portifolio/trilha_laravel_001
chmod g+rw -Rf /home/desenvolvedor/portifolio/trilha_laravel_001

3.6) Configurar as entradas no DNS
vim /etc/bind/db.local.br
	...
	app.project001 A 192.168.2.210

vim /etc/bind/db.1.168.192
	...
	210 PTR app.project001.local.br.

3.7) Reniciar o DNS
systemctl restart bind9

4) Acessar a aplicação no navegador http://app.project001.local.br

## Trabalhando com o seguinte GitFlow
1) A branch main deverá ser a de produção
2) Cada um que for seguir a trilha, deverá criar uma branch com seu nome de usuário no GitHub
Ex.: git checkout -b carvalhojccs
3) Dentro da sua branch, seguir os commits da trilha

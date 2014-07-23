#Pagina simples em php
	
##Modelo de implantação:	
	
### Página simples em php:
	 sites_simples
###Modelo de implantação:
	a) clonar a aplicação na maquina:
		git clone https://github.com/luvett/site_simples_php.git site_simples
	b) Configurando o servidor:
		i) utilizando Built-in web server:
			cd ~/public_html
			php -S localhost:8000
		ii) utilizando virtual host:

			<VirtualHost *:80>
			    ServerName site_simples.localhost
			    DocumentRoot /var/www/html/site_simples
			    SetEnv APPLICATION_ENV "development"
			    <Directory "/var/www/html/site_simples">
			        DirectoryIndex index.php
			        AllowOverride All
			        Order allow,deny
			        Allow from all
			    </Directory>
			</VirtualHost>

			127.0.0.1 site_simples.localhost

	c) Criar o banco de dados: site_simples		

	d) 	Executar a fixture sql via terminal
		 i) cd raiz_do_projeto/fixtures
		ii) php fixtureSql.php
###Dados de acesso:
	CPF: 21267811862
	Senha: 123456


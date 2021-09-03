
Verifique se o diretorio que voce esta é /Teste-Intergalaxy/

Inicie o seu servidor Apache e o Mysql.

Use os comandos:
    composer install

Obs: para seguir voce devera ter o nodejs instalado na sua maquina.
    npm install
    npm run dev

Renomeio o arquivo .env.example para .env
Atualize as informações do banco de dados dentro dele (se necessario).

Crie um banco de dados com o nome "test" (sem as aspas) ou um de sua preferencia, mas lembre-se de configurar no arquivo .env o mesmo.

(Opcional) Entre na CoinmarketCap e crie uma conta de developer, copie sua API Key e substitua a do diretorio .env situada em "CMC_API_KEY="
Obs: vou deixar a minha caso queira consultar por ela, pois não vejo problema em deixar para o teste.

Rode o servidor:
    php artisan serve

Entre no localhost ou 127.0.0.1

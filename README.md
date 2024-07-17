# IESA - Isto é um servidor de arquivos.
Esta é uma aplicação em construção.

## Requerimentos
- Git
- Docker
- Servidor Active Directory.

## Como executar?
1. Clone o repositório.
```
git clone https://github.com/auguzsto/iesa.git
```
2. Copie e cole .env.exemplo, renomeio para .env e configure a variáveis de ambiente.
3. Após a configuração das variáveis de ambiente, execute o comando abaixo.
```
docker-compose up --build -d
```
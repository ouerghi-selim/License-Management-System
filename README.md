# License Management System

A modern license management system built with Symfony 6, designed to handle software license distribution and management.

## Features

- Multi-tenant architecture
- License generation and validation
- User and role management
- Quote generation system
- RESTful API

## Technology Stack

- Symfony 6.4
- PHP 8.2
- PostgreSQL
- Docker
- Nginx

## Prerequisites

- Docker and Docker Compose
- Git
- WSL2 (if using Windows)

## Installation

1. Clone the repository:
```bash
git clone https://github.com/ouerghi-selim/License-Management-System.git
cd License-Management-System
```

2. Start the Docker containers:
```bash
docker compose up -d
```

3. Install dependencies:
```bash
docker compose exec php composer install
```

4. Create the database:
```bash
docker compose exec php bin/console doctrine:database:create
docker compose exec php bin/console doctrine:migrations:migrate
```

## Development

- The application will be available at: http://localhost:8080
- PostgreSQL will be accessible at: localhost:5432

## Project Structure

```
├── docker/
│   ├── nginx/
│   │   └── default.conf
│   └── php/
│       └── Dockerfile
├── src/
│   ├── Controller/
│   ├── Entity/
│   ├── Repository/
│   └── Service/
├── templates/
├── .env
├── .gitignore
├── composer.json
└── docker-compose.yml
```

## Contributing

1. Fork the repository
2. Create your feature branch
3. Commit your changes
4. Push to the branch
5. Create a new Pull Request
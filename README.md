# Prestashop Project

Copy of the existing website made using PrestaShop [toys4boys.pl](https://www.toys4boys.pl/)

# Authors

- [Bartosz Kolberg ](https://github.com/RuvikRubik)
- [Marcin Araśniewicz](https://github.com/arasniewiczMarcin)
- [Mateusz Fydrych](https://github.com/HubGitPL)
- [Jan Krupiniewicz](https://github.com/JanKrupiniewicz)

# Technologies Used

- PrestaShop: Version 1.7.8 for the e-commerce platform.
- Docker: For containerized development.
- MySQL: For database management.
- PHP: Backend scripting.
- Python: Utilities and scripts for data manipulation.

# Prerequisites
Ensure the following tools are installed on your system:

- [Docker Desktop](https://www.docker.com/)
- [Git](https://git-scm.com/)
- VS Code or any preferred IDE.
- Python 3.8+

# How to Run the Project

Follow these steps to set up and run the project on your local environment:

## 1. Clone the Repository

```bash
git clone https://github.com/JanKrupiniewicz/project-prestashop.git
cd project-prestashop
```

---

## 2. Configure Environment Variables

1. Copy the `.env.example` file to `.env`:

   ```bash
   cp .env.example .env
   ```

2. Edit the `.env` file to match your configuration. Below is an example:

   ```env
   DB_NAME=prestashop
   DB_USER=root
   DB_PASSWORD=yourpassword
   DB_HOST=db
   PS_DEV_MODE=true
   ```

---

## 3. Build and Start Docker Containers

Use Docker Compose to build and start the required services:

```bash
docker-compose up --build
```

This will start the following services:

- **PrestaShop Application**: Available at `http://localhost:8080`
- **MySQL Database**: Available internally at `db:3306`
- **Adminer**: Database management UI at `http://localhost:8081`

---

## 4. Install PrestaShop

1. Navigate to `http://localhost:8080` in your browser.
2. Follow the PrestaShop installation wizard:
   - Select the language and agree to the terms.
   - Fill in the store details.
   - Use the database credentials defined in the `.env` file.

---

## 5. Access Admin Panel

1. After completing the setup, the admin panel will be available at:

   ```text
   http://localhost:8080/admin-dev
   ```

2. Use the admin credentials set during the installation.

---

# Managing the Project

## Stop the Containers

To stop all running containers:

```bash
docker-compose down
```

---

## Rebuild Containers

If you make changes to the `Dockerfile` or `docker-compose.yml`, rebuild the containers:

```bash
docker-compose up --build
```

---

## Database Management

1. Access the database through Adminer:
   - URL: `http://localhost:8081`
   - System: MySQL
   - Server: `db`
   - Username: `root`
   - Password: As set in `.env`
   - Database: `prestashop`

---

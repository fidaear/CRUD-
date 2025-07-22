
## 📋 CRUD Web Application – Spring Boot

This is a simple **CRUD (Create, Read, Update, Delete)** web application built using **Spring Boot**, **Spring MVC**, **Spring Data JPA**, **MySQL**, and **Thymeleaf**.

It allows users to manage a list of people with basic information: **Name**, **Email**, and **Phone Number**.

---

### 🚀 Features

* 🔍 View list of people
* ➕ Add new person
* 📝 Edit existing person
* ❌ Delete person
* 🌐 Web UI built with **Thymeleaf**
* 🛢️ Data persistence using **MySQL & Spring Data JPA**

---

### 🛠️ Tech Stack

| Technology      | Description                   |
| --------------- | ----------------------------- |
| Java            | Programming language          |
| Spring Boot     | Backend framework             |
| Spring Data JPA | ORM layer for database access |
| Thymeleaf       | Server-side HTML templating   |
| MySQL           | Relational database           |
| Maven           | Build & dependency management |

---

### 📁 Project Structure

```
src/
 └── main/
     ├── java/com/example/crud/
     │    ├── controller/       → Web controller
     │    ├── entity/           → JPA entity (Person)
     │    ├── repository/       → JPA repository interface
     │    └── CrudApplication.java → Main class
     └── resources/
          ├── templates/        → Thymeleaf HTML pages
          ├── static/           → CSS/JS (if needed)
          └── application.properties → DB config
```

---

### ⚙️ Getting Started

#### 1. Clone the repository

```bash
git clone https://github.com/fidaear/CRUD-.git
cd CRUD-
```

#### 2. Set up the database

* Make sure **MySQL** is running.
* Create a database (e.g., `crud_db`).
* Update your `application.properties` with your own DB credentials:

```properties
spring.datasource.url=jdbc:mysql://localhost:3306/crud_db
spring.datasource.username=yourUsername
spring.datasource.password=yourPassword
spring.jpa.hibernate.ddl-auto=update
```

#### 3. Build and run the application

```bash
mvn clean install
mvn spring-boot:run
```

Visit: [http://localhost:8080](http://localhost:8080)

---

### 📷 Screenshots *(Optional)*

*(You can add images of the UI: list page, add/edit forms, etc.)*

---

### 🙌 Author

* **Fidaa Ariyan**
  GitHub: [@fidaear](https://github.com/fidaear)

---

### 📄 License

This project is licensed under the MIT License.



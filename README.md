# Gym Franchise Management Platform

This repository contains the source code for a **Gym Franchise Management Platform**, a web application built with **Laravel**. This project was developed as the final requirement for the training program at **GSD Software & Technology** in Sibiu, Romania.

The platform serves as a central hub for a gym franchise, allowing users to interact with different gym locations, manage their memberships, and engage with training classes.

---

## ✨ Key Features

* **Multi-Location Browsing:** Users can view a directory of all gym locations within the franchise.
* **Detailed Gym Info:** Each location has a dedicated page with essential information (e.g., address, contact details, opening hours, amenities).
* **Membership Management:** Users can purchase new memberships, which can be specific to a single location or grant access to multiple locations.
* **Class Scheduling:** A comprehensive schedule shows all available training classes across the franchise.
* **Class Registration:** Authenticated users with active memberships can register for (and unregister from) upcoming classes.
* **User Reviews:** Members can leave reviews and ratings for both gym locations and specific training classes they have attended.

---

## 💻 Technology Stack

* **Backend:** Laravel 10.x
* **Frontend:** Blade Templates, HTML5, CSS3 (Bootstrap), JavaScript
* **Database:** MySQL
* **Package Management:** Composer (PHP), npm (JS)

---

## 🚀 Getting Started

To get a local copy up and running, follow these steps.

### Prerequisites

* PHP $>= 8.1$
* Composer
* Node.js & npm
* A local database server (e.g., MySQL)

### Installation

1.  **Clone the repository:**
    ```bash
    git clone [https://github.com/your-username/your-repo-name.git](https://github.com/your-username/your-repo-name.git)
    cd your-repo-name
    ```

2.  **Install PHP dependencies:**
    ```bash
    composer install
    ```

3.  **Install JavaScript dependencies:**
    ```bash
    npm install
    ```

4.  **Set up the environment file:**
    ```bash
    cp .env.example .env
    ```

5.  **Generate an application key:**
    ```bash
    php artisan key:generate
    ```

6.  **Configure your `.env` file:**
    Update the `DB_*` variables with your local database credentials:
    ```ini
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=gym_platform
    DB_USERNAME=root
    DB_PASSWORD=your_password
    ```

7.  **Run database migrations (and seeders if available):**
    ```bash
    php artisan migrate --seed
    ```

8.  **Compile frontend assets:**
    ```bash
    npm run dev
    ```

9.  **Run the local server:**
    ```bash
    php artisan serve
    ```

The application should now be accessible at `http://127.0.0.1:8000`.

---

## 🙏 Acknowledgements

This project was made possible by the guidance and mentorship provided during the training program at **GSD Software & Technology**. Thank you to the entire GSD team in Sibiu for the invaluable learning experience.

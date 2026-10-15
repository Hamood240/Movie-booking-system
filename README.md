# Movie Booking System 🎬

A full-featured Online Movie Ticket Booking and Cinema Management Web Application built with PHP and MySQL.

---

## 🚀 Features

### Customer Portal (Front-End)
- **Movie Catalog**: Browse currently screening and upcoming movies with posters, trailers, descriptions, and genres.
- **Showtimes & Theaters**: Filter and select available cinema branches and schedule timings.
- **Ticket Booking**: Interactive seat category selection and ticket reservation.
- **User Authentication**: Secure user registration, sign-in, and session management.

### Admin Dashboard (Back-End)
- **Movie Management**: Add, update, and manage movies with poster uploads and trailer links.
- **Theater & Schedule Management**: Link movies to cinemas, configure showtimes, and set seat prices.
- **Ticket Monitoring**: View and track customer bookings.
- **Safe Relational Deletions**: Protects database integrity by preventing accidental deletion of movies with active booked customer tickets while allowing clean removal of unbooked items.

---

## 🛠️ Tech Stack
- **Backend**: PHP (Native / Procedural)
- **Database**: MySQL / MariaDB
- **Frontend**: HTML5, CSS3, JavaScript, Bootstrap
- **Server Environment**: Apache (XAMPP / WAMP)

---

## 📦 Setup & Installation

1. **Clone the Repository**:
   ```bash
   git clone https://github.com/Hamood240/Movie-booking-system.git
   ```
2. **Move to Web Root**:
   Place the project folder inside your XAMPP `htdocs` directory:
   ```
   C:\xampp\htdocs\Eproject of Movie Booking System
   ```
3. **Start Apache & MySQL** in the XAMPP Control Panel.
4. **Database Import**:
   - Open phpMyAdmin (`http://localhost/phpmyadmin`).
   - Create a new database named `movie_booking_system`.
   - Import the `movie_booking_system.sql` file located in `project/eProject(3rdSem)/`.
5. **Launch the Application**:
   - **Customer Portal**: `http://localhost/Eproject%20of%20Movie%20Booking%20System/project/eProject(3rdSem)/FrontEnd/`
   - **Admin Portal**: `http://localhost/Eproject%20of%20Movie%20Booking%20System/project/eProject(3rdSem)/Admin-Movie_Ticket_Booking_System/coderthemes.com/`

---

## 🔑 Default Credentials

- **Admin Dashboard**:
  - Username: `admin123`
  - Password: `admin123`
- **Customer Account**:
  - Email: `Junaid@gmail.com`
  - Password: `junaid123`

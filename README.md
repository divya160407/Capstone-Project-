# 🎓 Capstone Project – University Event Registration System

A simple full-stack web application for university event registration, built using core web technologies and deployed on a local server environment.

---

## 📌 Overview

This project was developed as part of an academic capstone requirement. It is a full-stack web application that allows students and faculty to register for university events through a clean and simple interface.

Users can view available events, fill out a registration form, submit their details, and receive a confirmation upon successful registration. The project demonstrates how frontend and backend components work together in a real-world web application.

---

## 🛠️ Tech Stack

- Frontend: HTML, CSS  
- Backend: PHP  
- Database: MySQL  
- Server Environment: XAMPP (Apache + MySQL)

---

## 🧩 Features

- Simple and user-friendly registration form  
- Data storage using MySQL database  
- Form submission handled via PHP  
- Confirmation page after successful registration  
- Basic client-side validation  
- Runs completely on localhost (no deployment required)

---

## 🏗️ Architecture

The application follows a basic client-server architecture:

User → HTML Form → PHP Backend → MySQL Database → Success Page

- The frontend collects user input  
- The backend (PHP) processes the request  
- The database (MySQL) stores the data  
- A confirmation page is displayed after submission  

---

## 🚀 How to Run the Project

1. Install XAMPP  
2. Start Apache and MySQL  
3. Place the project folder inside: C:\xampp\htdocs\  
4. Open browser and go to: http://localhost/your-folder-name/index.html  
5. Fill the form and submit  

---

## 🗄️ Database Setup

1. Open http://localhost/phpmyadmin  
2. Create a database (e.g., registration)  
3. Run the following SQL query:

CREATE TABLE registrations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100),
    event VARCHAR(100)
);

---

## 📚 Key Learnings

- Understanding full-stack web development basics  
- Connecting frontend forms to backend logic  
- Working with MySQL databases  
- Handling form data using PHP  
- Debugging real-world development issues  

---

## ⚠️ Limitations

- No user authentication system  
- Limited scalability  
- Runs only on local server  
- Basic UI without advanced features  

---

## 🔮 Future Improvements

- Add login/signup system  
- Improve UI/UX design  
- Deploy on cloud platforms  
- Add event management dashboard  
- Implement better security practices  

---

## 📖 Conclusion

This project serves as a strong foundation for understanding how web applications are built and function. It demonstrates the integration of frontend, backend, and database systems in a simple yet effective way.

---

## 👨‍💻 Author

Developed as part of a Capstone Project.

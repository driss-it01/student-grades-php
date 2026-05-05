# 🎓 Student Grades — PHP OOP

A simple PHP project demonstrating **Object-Oriented Programming** concepts including classes, encapsulation, getters/setters, and validation.

![Student Grades Preview](preview.png)

---

## 📌 Features

- Student class with private properties
- Getters & Setters with input validation
- Automatic grade calculation based on score
- Automatic admission status based on score
- Clean HTML table display with color-coded status

---

## 🧮 Grading System

| Score | Grade | Status |
|-------|-------|--------|
| >= 90 | A | Admis |
| >= 80 | B | Admis |
| >= 70 | C | Admis |
| >= 60 | D | Admis |
| < 60  | F | Non Admis |

---

## 📁 Project Structure

```
mon-projet/
├── classes/
│   └── Student.php     # Student class (OOP)
├── index.php           # Display logic + HTML
├── preview.png         # Project screenshot
└── README.md
```

---

## ⚙️ Requirements

- PHP >= 8.0
- XAMPP (or any local PHP server)

---

## 🚀 Getting Started

1. Clone the repository:
```bash
git clone https://github.com/your-username/student-grades-php.git
```

2. Move the project to your XAMPP htdocs folder:
```bash
C:/xampp/htdocs/student-grades-php
```

3. Start **Apache** in XAMPP

4. Open your browser and go to:
```
http://localhost/student-grades-php/index.php
```

---

## 💡 OOP Concepts Used

- **Encapsulation** — private properties
- **Getters** — read property values
- **Setters** — write with validation
- **Constructor** — initialize object via setters
- **Methods** — calculateGrade(), calculateStatus()

---

## 👨‍💻 Author

Made with ❤️ while learning PHP OOP

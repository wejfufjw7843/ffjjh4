<?php
// Создание многомерного массива с информацией о студентах в университете
let students = [
    { name: "Иван Иванов", subjects: ["Математика", "Физика", "История"] },
    { name: "Мария Петрова", subjects: ["Литература", "Биология"] },
    { name: "Алексей Сидоров", subjects: ["Химия", "География", "Информатика"] }
];

// Нахождение студента с наибольшим числом предметов
let studentWithMostSubjects = students.reduce((prev, current) => (prev.subjects.length > current.subjects.length) ? prev : current);

// Вывод информации о студенте с наибольшим числом предметов
console.log("Студент с наибольшим числом предметов:");
console.log("Имя: " + studentWithMostSubjects.name);
console.log("Предметы: " + studentWithMostSubjects.subjects.join(", "));
?>
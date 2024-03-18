<?php
// Многомерный массив с информацией о студентах (имя, фамилия, предметы)
$students = array(
    array("Иван", "Иванов", array("Математика", "Физика", "История")),
    array("Петр", "Петров", array("Биология", "Химия", "Английский")),
    array("Анна", "Сидорова", array("Литература", "География", "Французский")),
    array("Елена", "Козлова", array("Информатика", "Экономика"))
);

// Инициализируем переменные для хранения информации о студенте с наибольшим числом предметов
$maxSubjectsStudent = array();
$maxSubjectsCount = 0;

// Проходим по массиву и находим студента с наибольшим числом предметов
foreach ($students as $student) {
    $subjectsCount = count($student[2]);
    if ($subjectsCount > $maxSubjectsCount) {
        $maxSubjectsCount = $subjectsCount;
        $maxSubjectsStudent = $student;
    }
}

// Выводим информацию о студенте с наибольшим числом предметов
echo "Студент с наибольшим числом предметов:\n";
echo "Имя: $maxSubjectsStudent[0], Фамилия: $maxSubjectsStudent[1], Предметы: ";
echo implode(", ", $maxSubjectsStudent[2]);
?>
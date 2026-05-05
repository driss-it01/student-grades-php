<?php
class Student {
    private string $fullName;
    private int $age;
    private float $score;
    private string $grade;
    private string $status;

    public function __construct(string $fullName, int $age, float $score) {
        $this->setfullName($fullName);
        $this->setAge($age);
        $this->setScore($score);
        $this->grade = $this->calculateGrade();
        $this->status = $this->calculateStatus();
    }

    public function getfullName(): string {
        return $this->fullName;
    }

    public function getAge(): int {
        return $this->age;
    }

    public function getScore(): float {
        return $this->score;
    }

    public function getGrade(): string {
        return $this->grade;
    }

    public function getStatus(): string {
        return $this->status;
    }

    public function setFullName(string $fullName): void {
        if(empty(trim($fullName))) {
            throw new InvalidArgumentException("Full name cannot be empty.");
        }
        $this->fullName = $fullName;
    }

    public function setAge(int $age): void {
        if($age < 18 || $age > 30) {
            throw new InvalidArgumentException("Age must be between 18 and 30.");
        }
        $this->age = $age;
    }

    public function setScore(float $score): void {
        if($score < 0 || $score > 100) {
            throw new InvalidArgumentException("Score must be between 0 and 100.");
        }
        $this->score = $score; 
        $this->grade  = $this->calculateGrade();  
        $this->status = $this->calculateStatus(); 
    }

    private function calculateGrade(): string {
        if ($this->score >= 90) {
            return 'A';
        } elseif ($this->score >= 80) {
            return 'B';
        } elseif ($this->score >= 70) {
            return 'C';
        } elseif ($this->score >= 60) {
            return 'D';
        } else {
            return 'F';
        }
    }

    private function calculateStatus(): string {
        return $this->score >= 60 ? 'Admis' : 'Non Admis';
    }
}
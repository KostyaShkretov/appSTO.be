<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Master;

class MasterSeeder extends Seeder
{
    public function run(): void
    {
        Master::create([
            'name' => 'Николай Владимирович',
            'specialization' => 'Автослесарь',
            'experience' => 15,
            'photo' => 'masters/kolya.jpeg',
            'about' => 'Отличный автослесарь с 15-летним стажем. Разберет и соберет быстрее, чем выпьете кофе. Любит сложные задачи, особенно любит их делать с первого раза'
        ]);
        Master::create([
            'name' => 'Максим Петрович',
            'specialization' => 'Ходовик',
            'experience' => 16,
            'photo' => 'masters/maksim.jpeg',
            'about' => 'Специалист по ходовой части. По звуку определит проблему точнее, чем сканнер.'
        ]);
        Master::create([
            'name' => 'Павел Васильевич',
            'specialization' => 'Кузовщик',
            'experience' => 20,
            'photo' => 'masters/pavel.jpeg',
            'about' => 'отличный мастер по кузовным работам. Специализируется на сложных работах с кузовом, Всегда отвественно подходит к работе и находит решение задач даже в самых сложных случаях. В прошлом ремонтировал летающие тарелки'
        ]);
        Master::create([
            'name' => 'Петр Константинович',
            'specialization' => 'Автоэлектрик',
            'experience' => 2,
            'photo' => 'masters/petr.jpeg',
            'about' => 'Отличный автоэлектрик с нестандартным подходом. Разбирается во всем так как будто играет в квест. По словам клиентов, после одной из диагностики автомобиль  заговорил через магнитолу'
        ]);
        Master::create([
            'name' => 'Василий Никитович',
            'specialization' => 'Моторист',
            'experience' => 10,
            'photo' => 'masters/vasya.jpeg',
            'about' => 'Моторист, оживляющие даже самые уставшие двигателя, если мотор еще можно спасти он непременно это сделает. Если нельзя - все равно сделает'
        ]);
    }
}

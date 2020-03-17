<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentPageController extends Controller
{
    public function Index()
    {
        $students = [
            [
                'img' => 'https://www.boolean.careers/images/students/biagini.png',
                'name' => 'Alessandro Biagini',
                'age' => 25,
                'where' => 'DISC SPA',
                'role' => 'web developer',
                'description' => 'Da giocatore professionista di basket a sviluppatore web. 6 mesi di impegno da MVP e un memorabile tap-in targato Boolean hanno garantito ad Alessandro un solido futuro come web developer.',
                'genre' => 'm'
            ],
            [
                'img' => 'https://www.boolean.careers/images/students/poggini.png',
                'name' => 'Paola Poggini',
                'age' => 24,
                'where' => 'Prima Assicurazioni',
                'role' => 'junior software engineer',
                'description' => 'A 24 anni, dopo aver conseguito il diploma linguistico ha deciso di intraprendere fin da subito un percorso nel mondo Tech. Ad oggi ricopre il ruolo di Junior Software Engineer.',
                'genre' => 'f'
            ],
            [
                'img' => 'https://www.boolean.careers/images/students/masetti.png',
                'name' => 'Loana Masetti ',
                'age' => 36,
                'where' => 'The Zen Agency',
                'role' => 'web developer',
                'description' => 'Ha scoperto la passione per l\'informatica creando un blog di psicologia, ambito in cui si era specializzata durante gli studi. Il suo cuore però non vuol sentir ragione e Loana cambia carriera e diventa una ricercatissima sviluppatrice web.',
                'genre' => 'f'
            ],
            [
                'img' => 'https://www.boolean.careers/images/students/patruno.png',
                'name' => 'Davide Patruno',
                'age' => 29,
                'where' => 'ArmadioVerde',
                'role' => 'web developer',
                'description' => 'Dopo la laurea magistrale in scienze umanistiche e sociali, si concentra sullo sviluppo di strategie marketing. Decide di cambiare vita, questa volta puntando sullo sviluppo Front-End.',
                'genre' => 'm'
            ],
            [
                'img' => 'https://www.boolean.careers/images/students/castellani.png',
                'name' => 'Tommaso Castellani',
                'age' => 30,
                'where' => 'Pearch Digital',
                'role' => 'data scientist',
                'description' => 'Un passato da giocatore professionista di poker e una laurea in ingegneria gestionale alle spalle. Tommaso ha tramutato la sua passione per i numeri in un lavoro diventando data scientist a Dublino.',
                'genre' => 'm'
            ],
            [
                'img' => 'https://www.boolean.careers/images/students/antidormi.png',
                'name' => 'Nicholas Antidormi',
                'age' => 20,
                'where' => 'Atoms Studio',
                'role' => 'web developer',
                'description' => 'Intraprende gli studi universitari in matematica per le sue doti analitiche, ma abbandona il percorso per concentrarsi su uno più pratico e orientato alla richiesta del mercato del lavoro: la programmazione.',
                'genre' => 'm'
            ],
            [
                'img' => 'https://www.boolean.careers/images/students/ortenzi.png',
                'name' => 'Daniela Ortenzi',
                'age' => 27,
                'where' => 'RDS',
                'role' => 'web developer',
                'description' => 'Laureata in psicologia alla Sapienza di Roma con una nascente carriere nella SEO, Daniela si iscrive al corso Boolean. Ora lavora come web developer presso RDS Radio Dimensione Suono.',
                'genre' => 'f'
            ],
            [
                'img' => 'https://www.boolean.careers/images/students/quarticelli.png',
                'name' => 'Simone Quarticelli',
                'age' => 32,
                'where' => 'VLC 2',
                'role' => 'web developer',
                'description' => 'Per supportare la famiglia, Simone inizia a lavorare come operaio da giovanissimo. Fortemente motivato a cambiare vita, per 6 mesi non stacca mai lo sguardo dal traguardo, distinguendosi per tenacia e resilienza.',
                'genre' => 'm'
            ]
        ];

        return view('students', compact('students'));
    }
}

<?php
/**
 * Created by PhpStorm.
 * User: gerard
 * Date: 11/10/18
 * Time: 15:32
 */
namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;

class Task
{
    public $task;
    public $dueDate;
    public $personaFisica; //PersonaFisica, PersonaJuridica
    public $nom;
    public $primerCognom;
    public $segonCognom;
    public $Dni; //DNI, NIE, Passaport
    public $Nie;
    public $Passaport;
    public $Id;
    public $mail;
    public $representant;
    public $titular;
    public $contacte;
}
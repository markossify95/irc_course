<?php
/**
 * Created by PhpStorm.
 * User: vagrant
 * Date: 3/22/2017
 * Time: 9:53 AM
 */

//namespace projects\model;


class Prijava
{

    private $brPrijave;
    private $datum;
    private $ocena;
    private $student;
    private $predmet;

    /**
     * Prijava constructor.
     * @param int $brPrijave
     * @param \DateTime$datum
     * @param int $ocena
     * @param Student $student
     * @param Predmet $predmet
     */
    public function __construct($brPrijave, $datum, $ocena, $student, $predmet)
    {
        $this->brPrijave = $brPrijave;
        $this->datum = $datum;
        $this->ocena = $ocena;
        $this->student = $student;
        $this->predmet = $predmet;
    }


    /**
     * @return int
     */
    public function getBrPrijave()
    {
        return $this->brPrijave;
    }

    /**
     * @param int $brPrijave
     */
    public function setBrPrijave($brPrijave)
    {
        $this->brPrijave = $brPrijave;
    }

    /**
     * @return \DateTime
     */
    public function getDatum()
    {
        return $this->datum;
    }

    /**
     * @param \DateTime $datum
     */
    public function setDatum($datum)
    {
        $this->datum = $datum;
    }

    /**
     * @return int
     */
    public function getOcena()
    {
        return $this->ocena;
    }

    /**
     * @param int $ocena
     */
    public function setOcena($ocena)
    {
        $this->ocena = $ocena;
    }

    /**
     * @return Student
     */
    public function getStudent()
    {
        return $this->student;
    }

    /**
     * @param Student $student
     */
    public function setStudent(Student $student)
    {
        $this->student = $student;
    }

    /**
     * @return Predmet
     */
    public function getPredmet()
    {
        return $this->predmet;
    }

    /**
     * @param Predmet $predmet
     */
    public function setPredmet(Predmet $predmet)
    {
        $this->predmet = $predmet;
    }

    static function vratiSvePrijave(){
        $prijave = array();
        $resultSet = select('prijava');
        foreach ($resultSet as $row) {
            $prijave[] = new Prijava($row['br_prijave'], $row['datum'], $row['ocena'], $row['br_indeksa'], $row['id_predmeta']);
        }

        return $prijave;
    }
}
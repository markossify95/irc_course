<?php
/**
 * Created by PhpStorm.
 * User: vagrant
 * Date: 3/22/2017
 * Time: 9:44 AM
 */

// namespace projects\model;


class Student
{

    private $brIndeksa;
    private $ime;
    private $prezime;

    /**
     * Student constructor.
     * @param string $brIndeksa
     * @param string $ime
     * @param string $prezime
     */
    public function __construct($brIndeksa, $ime, $prezime)
    {
        $this->brIndeksa = $brIndeksa;
        $this->ime = $ime;
        $this->prezime = $prezime;
    }

    /**
     * @return string
     */
    public function getBrIndeksa()
    {
        return $this->brIndeksa;
    }

    /**
     * @param string $brIndeksa
     */
    public function setBrIndeksa($brIndeksa)
    {
        $this->brIndeksa = $brIndeksa;
    }

    /**
     * @return string
     */
    public function getIme()
    {
        return $this->ime;
    }

    /**
     * @param string $ime
     */
    public function setIme($ime)
    {
        $this->ime = $ime;
    }

    /**
     * @return string
     */
    public function getPrezime()
    {
        return $this->prezime;
    }

    /**
     * @param string $prezime
     */
    public function setPrezime($prezime)
    {
        $this->prezime = $prezime;
    }

    public function getAllAttributes(){
        return array($this->brIndeksa, $this->ime, $this->prezime);
    }

    static function vratiSveStudente(){
        $studenti = array();
        $resultSet = select('student');
        foreach ($resultSet as $row) {
            $studenti[] = new Student($row['br_indeksa'], $row['ime'], $row['prezime']);
        }

        return $studenti;
    }

    static function vratiStudenta($brIndeksa){
        $condition = 'br_indeksa =' . '\'' . $brIndeksa . '\'';
        $studenti = array();
        $rs = select('student', '*', $condition);
        //OVO MORA BOLJE
        foreach ($rs as $row) {
            $studenti[] = new Student($row['br_indeksa'], $row['ime'], $row['prezime']);
        }
        return $studenti[0];
    }

    static function unesiNovogStudenta(Student $student){
        $columns = array('br_indeksa', 'ime', 'prezime');
        $attrs = array($student->brIndeksa, $student->ime, $student->prezime);
        insert('student', $columns, $attrs);
    }

    static function izmeniStudenta(Student $student){
        //$columns mozda prebaciti u atribut
        $columns = array('ime', 'prezime');

        //2 sata zezanja zbog prokletih navodnika :)
        //lekcija: raditi sa prepared upitima
        $attrs = array('\''. $student->ime . '\'', '\'' . $student->prezime . '\'');

        //moze jos fleksibilnije da bude (da se bira deo za where klauzulu)
        update('student', $columns, $attrs, 'br_indeksa', '\'' . $student->brIndeksa . '\'');
    }


//    static function obrisiStudenta(Student $student){
//        delete('student', 'br_indeksa', '\'' . $student->brIndeksa . '\'');
//    }

    //omoguciti da se brise i po drugim parametrima u zavisnosti od duzine niza, za sada - good enough
    static function obrisiStudenta($brIndeksa){
        delete('student', 'br_indeksa', '\'' . $brIndeksa . '\'');
    }

}
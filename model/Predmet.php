<?php
/**
 * Created by PhpStorm.
 * User: vagrant
 * Date: 3/22/2017
 * Time: 9:50 AM
 */

namespace projects\model;


class Predmet
{
    private $id;
    private $naziv;

    /**
     * Predmet constructor.
     * @param int $id
     * @param string $naziv
     */
    public function __construct($id, $naziv)
    {
        $this->id = $id;
        $this->naziv = $naziv;
    }


    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getNaziv()
    {
        return $this->naziv;
    }

    /**
     * @param string $naziv
     */
    public function setNaziv($naziv)
    {
        $this->naziv = $naziv;
    }


}
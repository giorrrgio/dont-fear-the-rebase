<?php

namespace giorrrgio\PugRoma;

/**
 * Class Pugger
 */
class Pugger
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $company;

    /**
     * @var string
     */
    private $nick;

    /**
     * Pugger constructor.
     * @param string $name
     * @param string $company
     * @param string $nick
     */
    public function __construct($name, $company, $nick)
    {
        $this->name = $name;
        $this->company = $company;
        $this->nick = $nick;
    }

    public function render()
    {
        return [
            'name' => $this->name,
            'company' => $this->company,
            'nick' => $this->nick
        ];
    }
}
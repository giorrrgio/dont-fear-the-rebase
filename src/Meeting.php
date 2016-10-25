<?php

namespace giorrrgio\PugRoma;

/**
 * Class Meeting
 */
class Meeting
{
    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var string
     */
    private $topic;

    /**
     * @var string
     */
    private $venue;

    /**
     * @var Pugger[]
     */
    private $puggers;

    /**
     * Meeting constructor.
     * @param \DateTime $date
     * @param string $topic
     * @param string $venue
     * @param Pugger[] $puggers
     */
    public function __construct(\DateTime $date, $topic, $venue, array $puggers)
    {
        $this->date = $date;
        $this->topic = $topic;
        $this->venue = $venue;
        $this->puggers = $puggers;
    }

    /**
     * @param Pugger $pugger
     * @return Meeting
     */
    public function addPugger(Pugger $pugger)
    {
        $this->puggers[] = $pugger;

        return $this;
    }

    public function kickBanPugger(Pugger $pugger)
    {
        foreach ($this->puggers as $i => $puggerToBan) {
            if ($puggerToBan->getName() == $pugger->getName()) {
                unset($this->puggers[$i]);
                break;
            }
        }
    }

    public function render()
    {
        return [
            'date' => clone $this->date,
            'venue' => $this->venue,
            'topic' => $this->topic,
            'puggers' => array_map(function($pugger) {
                return $pugger->render();
            }, $this->puggers)
        ];
    }
}
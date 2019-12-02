<?
namespace PhpTasks\Cars;

class Car extends EngineTransport implements WheelsTransport {
    /**
     * @var float
     */
    private $capacity;
    /**
     * @var int
     */
    private $maxSpeed;
    /**
     * @var string
     */
    private $wheelsType;
    /**
     * @var float
     */
    private $weight;

    /**
     * Car constructor.
     * @param Engine $engine
     * @param string $gasolineType
     * @param float $weight
     * @param float $capacity
     * @param int $maxSpeed
     * @param string $wheelsType
     */
    public function __construct($engine, $gasolineType, $weight, $capacity, $maxSpeed, $wheelsType)
    {
        parent::__construct($engine, $gasolineType);

        $this->setWheelsType($wheelsType);
        $this->setCapacity($capacity);
        $this->setMaxSpeed($maxSpeed);
        $this->setWeight($weight);
    }

    /**
     * @return mixed
     */
    public function getCapacity()
    {
        return $this->capacity;
    }

    /**
     * @param float $capacity
     */
    public function setCapacity($capacity)
    {
       $this->capacity = $capacity;
    }

    /**
     * @param int $maxSpeed
     */
    public function setMaxSpeed($maxSpeed)
    {
        $this->maxSpeed = $maxSpeed;
    }

    /**
     * @return mixed
     */
    public function getMaxSpeed()
    {
        return $this->maxSpeed;
    }

    /**
     * @return mixed
     */
    public function getGasolineType()
    {
        return parent::getGasolineType();
    }

    /**
     * @return mixed
     */
    public function  getWheelsType()
    {
        return $this->wheelsType;
    }

    /**
     * @param string $wheelsType
     */
    public function setWheelsType($wheelsType)
    {
        $this->wheelsType = $wheelsType;
    }

    /**
     * @return mixed
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param float $weight
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

}
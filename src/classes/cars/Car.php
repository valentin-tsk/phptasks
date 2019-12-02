<?
namespace PhpTasks\Cars;

class Car extends AEngineTransport implements IWheelsITransport {
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

        $this->maxSpeed = $maxSpeed;
        $this->setWheelsType($wheelsType);
        $this->setCapacity($capacity);
        $this->setWeight($weight);
    }

    /**
     * @return float
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
     * @return int
     */
    public function getMaxSpeed()
    {
        return $this->maxSpeed;
    }

    /**
     * @return string
     */
    public function getGasolineType()
    {
        return parent::getGasolineType();
    }

    /**
     * @return string
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
     * @return float
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
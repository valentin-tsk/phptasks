<?

namespace PhpTasks\Cars;

/**
 * Interface ITransport
 * @package PhpTasks\Cars
 */
interface ITransport{
    /**
     * @return int
     */
    public function getMaxSpeed();

    /**
     * @return float
     */
    public function getCapacity();

    /**
     * @param float $capacity
     */
    public function setCapacity($capacity);

    /**
     * @return float
     */
    public function getWeight();

    /**
     * @param float $weight
     */
    public function setWeight($weight);
}
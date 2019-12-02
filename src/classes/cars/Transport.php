<?

namespace PhpTasks\Cars;

/**
 * Interface Transport
 * @package PhpTasks\Cars
 */
interface Transport{
    /**
     * @return mixed
     */
    public function getMaxSpeed();

    /**
     * @param int $maxSpeed
     * @return mixed
     */
    public function setMaxSpeed($maxSpeed);

    /**
     * @return mixed
     */
    public function getCapacity();

    /**
     * @param float $capacity
     * @return mixed
     */
    public function setCapacity($capacity);

    /**
     * @return mixed
     */
    public function getWeight();

    /**
     * @param float $weight
     * @return mixed
     */
    public function setWeight($weight);
}